<?php
/**
 * Extended 404 english languagefile
 *
 * PHP version 5
 *
 * @category  Contao
 * @package   Ext404
 * @author    Benjamin Meier <b2m@gmx.de>
 * @copyright 2009-2010 Benjamin Meier
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link      http://dev.typolight-forge.org/projects/show/ext404
 */

if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Error message for direct calls
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_text_case1'] 
 * @name $TL_LANG['MSC']['ext404_text_case1']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_text_case1'] = '<p>Sorry, but the page you were trying to access, %s, does not exist.</p>
<p>The reason may was a mistyped address or an out-of-date bookmark in your web browser.</p>
<p>Please use the search form on our website to find what you were looking for.</p>';
/**
 * Error message for wrong links from same website
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_text_case2'] 
 * @name $TL_LANG['MSC']['ext404_text_case2']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_text_case2'] = '<p>Sorry, but the page you were trying to get to, %s, does not exist.</p>
<p>Apparently, we have a broken link on our page.</p>
<p>Please use the search form on our website to find what you were looking for.</p>';
/**
 * Additional information that personal was informed
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_text_case2_informed'] 
 * @name $TL_LANG['MSC']['ext404_text_case2_informed']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_text_case2_informed'] = '<p>Our technicians have already been notified about this problem and it should be corrected shortly. No further action is required on your part.</p>';
/**
 * Error message for wrong links from searchengine
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_text_case3'] 
 * @name $TL_LANG['MSC']['ext404_text_case4']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_text_case3'] = '<p>Sorry, but the page you were trying to get to, %s, does not exist.</p>
<p>It looks like the search engine has returned an outdated link to our page. These outdated links should eventually be removed from their indexes but since these are automatically generated we have only little influence on this problem.</p>
<p>You may want to try searching this site to find what you were looking for.</p>';
/**
 * Error message for wrong links from other websites
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_text_case4'] 
 * @name $TL_LANG['MSC']['ext404_text_case4']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_text_case4'] = '<p>Sorry, but the page you were trying to get to, %s, does not exist.</p>
<p>Apparently, there is a broken link on the page you just came from.</p>
<p>You may want to try searching this site to find what you were looking for.</p>';
/**
 * Additional information that personal was informed
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_text_case4_informed'] 
 * @name $TL_LANG['MSC']['ext404_text_case4_informed']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_text_case4_informed'] = '<p>Our technicians have already been notified about this problem and will try to reach the owner of the page containing the wrong link. No further action is required on your part.</p>';
/**
 * Email subject for wrong link on same website
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_email_own_error_subject'] 
 * @name $TL_LANG['MSC']['ext404_email_own_error_subject']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_email_own_error_subject'] = 'Wrong link on %s';
/**
 * Email text for wrong link on same website 
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_email_own_error_text'] 
 * @name $TL_LANG['MSC']['ext404_email_own_error_text']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_email_own_error_text'] = 'There was an 404 error when calling page %s from page %s.';
/**
 * Email subject for link on other website
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_email_other_error_subject'] 
 * @name $TL_LANG['MSC']['ext404_email_other_error_subject']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_email_other_error_subject'] = 'Wrong external linking on %s';
/**
 * Email text for link on other website
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_email_other_error_text'] 
 * @name $TL_LANG['MSC']['ext404_email_other_error_text']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_email_other_error_text'] = 'The page %s is linked wrong from %s.';
?>