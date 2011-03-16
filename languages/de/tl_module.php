<?php
/**
 * Extended 404 german languagefile for Module fields
 *
 * PHP version 5
 *
 * @category  Contao
 * @package   Ext404
 * @author    Benjamin Meier <b2m@gmx.de>
 * @copyright 2009-2011 Benjamin Meier
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link      https://github.com/b2m/ext404
 */

if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Description for module title email settings
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_email_title'] 
 * @name $TL_LANG['tl_module']['ext404_email_title']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_email_title'] = 'E-Mail Einstellungen';
/**
 * Description for module field email_from
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_email_from_label'] 
 * @name $TL_LANG['tl_module']['ext404_email_from_label']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_email_from_label'] = array('Absender Mailadresse','Von dieser Mailadresse wird ein Bericht gesendet. Um den Mailreport zu deaktivieren dieses Feld einfach leer lassen.');
/**
 * Description for module field email_to
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_email_to_label'] 
 * @name $TL_LANG['tl_module']['ext404_email_to_label']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_email_to_label'] = array('Empfänger Mailadresse','An diese Mailadresse wird ein Bericht gesendet. Um den Mailreport zu deaktivieren dieses Feld einfach leer lassen.');
/**
 * Description for module title handling of file extensions
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_ext_title'] 
 * @name $TL_LANG['tl_module']['ext404_ext_title']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_ext_title'] = 'Behandlung von Dateierweiterungen';
/**
 * Description for module field ext
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_ext_label'] 
 * @name $TL_LANG['tl_module']['ext404_ext_label']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_ext_label'] = array('Dateierweiterungen, die behandelt werden sollen','Dies ist eine Whitelist von Dateierweiterungen, die vom Modul behandelt werden. Verwenden Sie "," um die einzelnen Dateierweiterungen zu trennen, z.B.: "html,htm,php". Lassen Sie das Feld leer um alle Anfragen zu behandeln. Verwenden Sie als erstes Stichwort "blacklist" um die Liste als Blacklist zu verwenden.');
/**
 * Description for module field ext_handle
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_ext_handle_label'] 
 * @name $TL_LANG['tl_module']['ext404_ext_handle_label']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_ext_handle_label'] = array('Behandlung anderer Anfragen','Wählen Sie eine Methode aus um Anfragen mit anderen Dateiendungen zu behandeln, die nicht in der Whitelist enthalten sind.');
/**
 * Description for module field ie8_ext
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_ie8_ext_label'] 
 * @name $TL_LANG['tl_module']['ext404_ie8_ext_label']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_ie8_ext_label'] = array('Erweiterungen, die für IE 8 behandelt werden sollen','Dies ist eine Whitelist von Dateierweiterungen, die vom Modul behanelt werden, wenn die Anfrage von einem IE 8 ausgeführt wird. Benutzen Sie "," um die einzelnen Dateierweiterungen zu trennen, z.B.: "html,htm,php". Lassen Sie das Feld leer um alle Anfragen zu behandeln. Verwenden Sie als erstes Stichwort "blacklist" um die Liste als Blacklist zu verwenden.');
/**
 * Description for module field ie8_ext_handle
 * @global array $GLOBALS['TL_LANG']['tl_module']['ext404_ie8_ext_handle_label'] 
 * @name $TL_LANG['tl_module']['ext404_ie8_ext_handle_label']
 */
$GLOBALS['TL_LANG']['tl_module']['ext404_ie8_ext_handle_label'] = array('Behandlung anderer Anfragen mit dem IE 8','Wählen Sie eine Methode aus um Anfragen mit anderen Dateiendungen zu behandeln, die nicht in der Whitelist enthalten sind.');
?>