<?php
/**
 * Extended 404 DCA for tl_module
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
 * Add palettes to tl_module
 * @global array $GLOBALS['TL_DCA']['tl_module']['palettes']['ext404']
 * @name $palettes['ext404']
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['ext404'] = 'name,headline,type;{ext404_email_title},ext404_email_to,ext404_email_from;{ext404_ext_title},ext404_ext,ext404_ext_handle,ext404_ie8_ext,ext404_ie8_ext_handle;align,space,cssID';
/**
 * Add Field to tl_module
 * @global array $GLOBALS['TL_DCA']['tl_module']['fields']['ext404_email']
 * @name $fields['ext404_email_to']
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['ext404_email_to'] = array
    (
     'label'=> &$GLOBALS['TL_LANG']['tl_module']['ext404_email_to_label'],
     'default' => &$GLOBALS['TL_CONFIG']['adminEmail'],
     'inputType' => 'text',
     'eval' => array(
                     'tl_class'=>'w50',
                     'rgxp'=>'email',
                     'decodeEntities'=>true
                     )
     );
/**
 * Add Field to tl_module
 * @global array $GLOBALS['TL_DCA']['tl_module']['fields']['ext404_email_from']
 * @name $fields['ext404_email_from']
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['ext404_email_from'] = array
    (
     'label'=> &$GLOBALS['TL_LANG']['tl_module']['ext404_email_from_label'],
     'default' => &$GLOBALS['TL_CONFIG']['adminEmail'],
     'inputType' => 'text',
     'eval' => array(
                     'tl_class'=>'w50',
                     'rgxp'=>'email',
                     'decodeEntities'=>true
                     )
     );
/**
 * Add Field to tl_module
 * @global array $GLOBALS['TL_DCA']['tl_module']['fields']['ext404_ext']
 * @name $fields['ext404_ext']
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['ext404_ext'] = array
    (
     'label'=> &$GLOBALS['TL_LANG']['tl_module']['ext404_ext_label'],
     'inputType' => 'text',
     'eval'=> array('tl_class'=>'w50')
     );
/**
 * Add Field to tl_module
 * @global array $GLOBALS['TL_DCA']['tl_module']['fields']['ext404_ext_handle']
 * @name $fields['ext404_ext_handle']
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['ext404_ext_handle'] = array
    (
     'tl_class'=>'w50',
     'label'=> &$GLOBALS['TL_LANG']['tl_module']['ext404_ext_handle_label'],
     'inputType' => 'select',
     'options' => array('die','nomail','nolog','nolognomail'),
     'eval' => array('tl_class'=>'w50')
     );
/**
 * Add Field to tl_module
 * @global array $GLOBALS['TL_DCA']['tl_module']['fields']['ext404_ie8_ext']
 * @name $fields['ext404_ie8_ext']
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['ext404_ie8_ext'] = array
    (
     'label'=> &$GLOBALS['TL_LANG']['tl_module']['ext404_ie8_ext_label'],
     'inputType' => 'text',
     'eval'=> array('tl_class'=>'w50')
     );
/**
 * Add Field to tl_module
 * @global array $GLOBALS['TL_DCA']['tl_module']['fields']['ext404_ie8_ext_handle'] 
 * @name $fields['ext404_ie8_ext_handle']
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['ext404_ie8_ext_handle'] = array
    (
     'tl_class'=>'w50',
     'label'=> &$GLOBALS['TL_LANG']['tl_module']['ext404_ie8_ext_handle_label'],
     'inputType' => 'select',
     'options' => array('die','nomail','nolog','nolognomail'),
     'eval' => array('tl_class'=>'w50')
     );

?>
