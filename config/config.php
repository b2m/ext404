<?php
/**
 * Extended 404
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
 * Add Frontend Module
 * @global array $GLOBALS['FE_MOD']['miscellaneous']['ext404']['ModuleExtended404']
 * @name $FE_MOD['miscellaneous']['ext404']['ModuleExtended404']
 */
array_insert(
    $GLOBALS['FE_MOD']['miscellaneous'],
    3,
    array('ext404' => 'Ext404')
);

/**
 * Add table to Maintenance-Modul
 * @global array $GLOBALS['TL_CACHE']['tl_ext404_log']
 * @name $TL_CACHE['tl_ext404_log']
 */
$GLOBALS['TL_CACHE'][] = 'tl_ext404_log';

?>
