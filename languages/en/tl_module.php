<?php
/**
 * Extended 404 english languagefile for Module fields
 *
 * PHP version 5
 *
 * @category  Contao
 * @package   Ext404
 * @author    Benjamin Meier <gpl@code-meier.de>
 * @copyright 2009-2012 Benjamin Meier
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link      https://github.com/b2m/ext404
 */

if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Description for module title email settings
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_email_title']
 * @name $TL_LANG['tl_module']['ext404_email_title']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_email_title'] = 'E-Mail settings';
/**
 * Description for module field email_from
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_email_from_label']
 * @name $TL_LANG['tl_module']['ext404_email_from_label']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_email_from_label'] = array('Emailadress of sender','From this emailadress the report will be sent. Leave empty to stop emailreporting!');
/**
 * Description for module field email_to
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_email_to_label']
 * @name $TL_LANG['tl_module']['ext404_email_to_label']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_email_to_label'] = array('Emailadress of recipient','To this emailadress the report will be sent. Leave empty to stop emailreporting!');
/**
 * Description for module title handling of file extensions
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_ext_title']
 * @name $TL_LANG['tl_module']['ext404_ext_title']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_ext_title'] = 'Handling of file extensions';
/**
 * Description for module field ext
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_ext_label']
 * @name $TL_LANG['tl_module']['ext404_ext_label']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_ext_label'] = array('Extensions to handle','This is a whitelist of file extensions that are handled by the module. Use "," to separate the file extensions e.g. "html,htm,php". Leave empty to handle all requests. Use the keyword "blacklist" as first element to use this list as blacklist: "blacklist,js,css".');
/**
 * Description for module field ext_handle
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_ext_handle_label']
 * @name $TL_LANG['tl_module']['ext404_ext_handle_label']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_ext_handle_label'] = array('Handle other requests','Choose a method for handling requests with file extensions not in the whitelist.');
/**
 * Description for module field ie8_ext
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_ie8_ext_label']
 * @name $TL_LANG['tl_module']['ext404_ie8_ext_label']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_ie8_ext_label'] = array('Extensions to handle for IE 8','This is a whitelist of file extensions that are handled by the module for requests of IE 8. Use "," to separate the file extensions e.g. "html,htm,php". Leave empty to handle all requests. Use the keyword "blacklist" as first element to use this list as blacklist: "blacklist,js,css".');
/**
 * Description for module field ie8_ext_handle
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_ie8_ext_handle_label'] 
 * @name $TL_LANG['tl_module']['ext404_ie8_ext_handle_label']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_ie8_ext_handle_label'] = array('Handle other requests by IE 8','Choose a method for handling requests with file extensions not in the whitelist.');
?>