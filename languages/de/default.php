<?php
/**
 * Extended 404 german languagefile
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
 * Error message for direct calls
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_text_case1']
 * @name $TL_LANG['MSC']['ext404_text_case1']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_text_case1'] = '<p>Es tut uns leid, aber die Seite mit der Adresse %s existiert nicht.</p>
<p>Die Ursache dafür könnte ein Tippfehler in der Adresse oder ein veraltetes Lesezeichen in ihrem Browser sein.</p>
<p>Bitte benutzen Sie die Suche, um innerhalb unserer Website nach Ihren gewünschten Informationen zu suchen.</p>';
/**
 * Error message for wrong links from same website
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_text_case2']
 * @name $TL_LANG['MSC']['ext404_text_case2']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_text_case2'] = '<p>Es tut uns leid, aber die Seite mit der Adresse %s existiert nicht.</p>
<p>Offensichtlich ist eine Verlinkung innerhalb unserer Website falsch.</p>
<p>Bitte benutzen Sie die Suche, um innerhalb unserer Website nach Ihren gewünschten Informationen zu suchen.</p>';
/**
 * Additional information that personal was informed
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_text_case2_informed']
 * @name $TL_LANG['MSC']['ext404_text_case2_informed']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_text_case2_informed'] = '<p>Es wurde bereits automatisch eine Benachrichtigung an unsere Techniker verschickt, welche den Fehler baldmöglichst korrigieren werden. Sie müssen daher keine weiteren Schritte unternehmen.</p>';

/**
 * Error message for wrong links from searchengine
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_text_case3']
 * @name $TL_LANG['MSC']['ext404_text_case4']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_text_case3'] = '<p>Es tut uns leid, aber die Seite mit der Adresse %s existiert nicht.</p>
<p>Offensichtlich war der Link der von Ihnen genutzten Suchmaschine veraltet. Wir haben auf die Aktualität der automatisch erstellten Suchergebnisse leider nur begrenzt Einfluss, weswegen veraltete Links nicht immer vermieden werden können.</p>
<p>Bitte benutzen Sie die Suche, um innerhalb unserer Website nach Ihren gewünschten Informationen zu suchen.</p>';
/**
 * Error message for wrong links from other websites
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_text_case4']
 * @name $TL_LANG['MSC']['ext404_text_case4']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_text_case4'] = '<p>Es tut uns leid, aber die Seite mit der Adresse %s existiert nicht.</p>
<p>Offensichtlich war der Link auf der Website, von der Sie zu uns gelangten, veraltet.</p>
<p>Bitte benutzen Sie die Suche, um innerhalb unserer Website nach Ihren gewünschten Informationen zu suchen.</p>';
/**
 * Error message for wrong links from other websites
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_text_case4_informed']
 * @name $TL_LANG['MSC']['ext404_text_case4_informed']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_text_case4_informed'] = '<p>Es wurde bereits automatisch eine Benachrichtigung an unsere Techniker verschickt, welche den Betreiber der anderen Website kontaktieren und ihn um eine Korrektur bitten werden.</p>';

/**
 * Email subject for wrong link on same website
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_email_own_error_subject']
 * @name $TL_LANG['MSC']['ext404_email_own_error_subject']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_email_own_error_subject'] = 'Falsche Verlinkung auf %s';
/**
 * Email text for wrong link on same website
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_email_own_error_text']
 * @name $TL_LANG['MSC']['ext404_email_own_error_text']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_email_own_error_text'] = 'Es gab einen 404-Fehler beim Aufruf der Seite %s von der Seite %s.';
/**
 * Email subject for link on other website
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_email_other_error_subject']
 * @name $TL_LANG['MSC']['ext404_email_other_error_subject']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_email_other_error_subject'] = 'Externe falsche Verlinkung auf %s';
/**
 * Email text for link on other website
 * @global array $GLOBALS['TL_LANG']['MSC']['ext404_email_other_error_text']
 * @name $TL_LANG['MSC']['ext404_email_other_error_text']
 */
$GLOBALS['TL_LANG']['MSC']['ext404_email_other_error_text'] = 'Die Seite %s wird von %s falsch verlinkt.';
?>