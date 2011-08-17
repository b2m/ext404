<?php
/**
 * Extended 404 Main Module file
 *
 * PHP version 5
 *
 * @category  Contao
 * @package   Ext404
 * @author    Benjamin Meier <gpl@code-meier.de>
 * @copyright 2009-2011 Benjamin Meier
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link      https://github.com/b2m/ext404
 */

if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Class Ext404
 *
 * @category  Contao
 * @package   Ext404
 * @author    Benjamin Meier <gpl@code-meier.de>
 * @copyright 2009-2011 Benjamin Meier
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link      https://github.com/b2m/ext404
 */
class Ext404 extends Module
{
    /** @var string name of Template */
    protected $strTemplate = 'ce_ext404';
    /** @var string name of referer */
    protected $referer = '';
    /** @var string name of request */
    protected $request = '';
    /** @var boolean send mails */
    protected $mail = true;
    /** @var boolean log 404 */
    protected $log = true;

    /**
     * Display a wildcard in the back end
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $objTemplate = new BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### Extended 404 ###';
            $objTemplate->title = $this->headline;

            return $objTemplate->parse();
        }

        return parent::generate();
    }


    /**
     * Generate module
     *
     * @return nothing
     */
    protected function compile()
    {
        // get file extension
        $ext = pathinfo($this->Environment->requestUri, PATHINFO_EXTENSION);
        // handling whitelist for file extensions
        if (strlen($this->ext404_ext)>0) {
            $this->handleExt($ext, $this->ext404_ext, $this->ext404_ext_handle);
        }
        // handling whitelist for file extensions for ie8
        if (stripos($this->Environment->httpUserAgent, "msie 8.")!==false
            && strlen($this->ext404_ie8_ext)>0
        ) {
            $this->handleExt(
                $ext,
                $this->ext404_ie8_ext,
                $this->ext404_ie8_ext_handle
            );
        }


        $this->referer = $this->Environment->http_referer;
        $refhost = parse_url($this->referer, PHP_URL_HOST);
        /* reverse IP-Lookup
         * - check for -1 and false because of strange behaviour of ip2long
         */
        if (ip2long($refhost)!=-1 && ip2long($refhost)!=false) {
            $realhost = gethostbyaddr($refhost);
            $this->referer = str_replace($refhost, $realhost, $this->referer);
            $refhost = $realhost;
        }

        $this->request = $this->Environment->url.$this->Environment->requestUri;
        if ($this->referer=="" || $this->referer==$this->request) {
            /* Case 1: Direct Call or wrong referer */
            $this->Template->text = sprintf(
                $GLOBALS['TL_LANG']['MSC']['ext404_text_case1'],
                $this->request
            );
        } else {
            $search = "#^www([0-9]{0,1})\.#";
            $referer_search = preg_replace($search, '', $refhost);
            // remove leading www. in host since Contao 2.10
            $referer_compare = preg_replace($search, '', $this->Environment->host);
            if (strpos($referer_search, $referer_compare)===0) {
                /* Case 2: Wrong Link on our website */
                $this->Template->text = sprintf(
                    $GLOBALS['TL_LANG']['MSC']['ext404_text_case2'],
                    $this->request
                );
                if ($this->checkinform(
                    $GLOBALS['TL_LANG']['MSC']['ext404_email_own_error_subject'],
                    $GLOBALS['TL_LANG']['MSC']['ext404_email_own_error_text']
                )
                ) {
                    $this->Template->addtext = $GLOBALS['TL_LANG']['MSC']['ext404_text_case2_informed'];
                }
                $this->entry();
            } else {
                /* Wrong Link with referer from somewhere else */
                $searchengine = false;
                $array = file(
                    $this->tl_root."system/modules/ext404/files/searchengines.txt"
                );
                $array = array_map("trim", $array);
                foreach ($array as $search) {
                    $reg = "#^([a-z0-9\-\_\.]){0,}"
                        .preg_quote($search)."(\.([a-z]){2,3}){0,}$#";
                    if (preg_match($reg, $referer_search)) {
                        $searchengine = true;
                        break;
                    }
                }
                if ($searchengine) {
                    /* Case 3: Wrong Link from searchengine */
                    $this->Template->text = sprintf(
                        $GLOBALS['TL_LANG']['MSC']['ext404_text_case3'],
                        $this->request
                    );
                } else {
                    /* Case 4: Wrong Link from other website */
                    $this->Template->text = sprintf(
                        $GLOBALS['TL_LANG']['MSC']['ext404_text_case4'],
                        $this->request
                    );
                    if ($this->checkinform(
                        $GLOBALS['TL_LANG']['MSC']['ext404_email_other_error_subject'],
                        $GLOBALS['TL_LANG']['MSC']['ext404_email_other_error_text']
                    )
                    ) {
                        $this->Template->addtext = $GLOBALS['TL_LANG']['MSC']['ext404_text_case4_informed'];
                    }
                    $this->entry();
                }
            }
        }
    }

    /**
     * Sends an information mail
     *
     * @param string $subject Subject of email
     * @param string $text    Content of email
     *
     * @return boolean true if sending email was successfull
     */
    protected function inform($subject, $text)
    {
        $this->import('Email');
        $mail = new Email();
        $mail->from = $this->ext404_email_from;
        $mail->subject = sprintf($subject, $this->Environment->host);
        $mail->text = sprintf($text, $this->request, $this->referer) . "\n";
        return $mail->sendTo($this->ext404_email_to);
    }

    /**
     * Checks the configuration if information via email is allowed
     *
     * @param string $subject Subject of email
     * @param string $text    Content of email
     *
     * @return boolean true if the informed message should be shown
     */
    protected function checkinform($subject, $text)
    {
        if ($this->checktable()) {
            if ($this->ext404_email_from=="" || $this->ext404_email_to=="") {
                return false;
            } else {
                return true;
            }
        } else if ($this->ext404_email_from!="" && $this->ext404_email_to!="") {
            return $this->inform($subject, $text);
        }
    }

    /**
     * Checks the database for already existing entries
     *
     * @return boolean true if there already was a request in the last 31 days
     */
    protected function checktable()
    {
        // only inform once per month on double entries
        $stamp = time()-31*7*24*60*60;
        $query = "SELECT id FROM tl_ext404_log WHERE page=? ";
        $query.= "AND referer=? AND tstamp >?";

        $check = $this->Database->prepare($query)
            ->limit(1)
            ->execute($this->request, $this->referer, $stamp);
        if ($check->numRows>0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Creates the database entry
     *
     * @return nothing
     */
    protected function entry()
    {
        if ($this->log) {
            $db_entry = array(
                'page'    => $this->request,
                'referer' => $this->referer,
                'tstamp'  => time()
            );
            $this->Database->prepare("INSERT INTO tl_ext404_log %s")
                ->set($db_entry)
                ->execute();
        }
    }

    /**
     * Handles special cases
     *
     * @param string $ext        Extension of current request
     * @param string $extensions Comma separated whitelist of file extensions
     * @param string $handle     Handle for handling file extensions not in whitelist
     *
     * @return nothing
     */
    protected function handleExt($ext, $extensions, $handle)
    {
        $extensions = array_map('trim', explode(',', $extensions));
        // if first keyword is 'blacklist', list is used as blacklist
        if ($extensions[0]=='blacklist'    && in_array($ext, $extensions)
            || $extensions[0]!='blacklist' && !in_array($ext, $extensions)
        ) {
            switch ($handle) {
            case "nomail":
                $this->mail = false;
                break;
            case "nolog":
                $this->log = false;
                break;
            case "nomailnolog":
                $this->mail = false;
                $this->log = false;
                break;
            default:
                header('HTTP/1.1 404 Page not found');
                die('Page not found');
                exit;
                break;
            }
        }
    }
}

?>