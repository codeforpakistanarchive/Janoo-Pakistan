<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function fabist_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL)  {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  $form['monti'] = array(
    '#type' => 'fieldset', 
    '#title' => t('Theme Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
    $form['monti']['color'] = array(
     '#type' => 'select',
     '#title' => t('Colors'),
     '#description' => t('Select the color for theme...'),
     '#options' => array(
      'color-1' => t('Color 1'),
      'color-2' => t('Color 2'),
	  'color-3' => t('Color 3'),		
	  'color-4' => t('Color 4'),				
      ),
     '#default_value' => theme_get_setting('color'),
	);
	$form['monti']['menu'] = array(
     '#type' => 'select',
     '#title' => t('Menu'),
     '#description' => t('Select the menu for theme...'),
     '#options' => array(
      'line-menu' => t('Line Menu'),
      'box-menu' => t('Box Menu'),
	  'round-menu' => t('Round Menu'),						
      ),
	  '#default_value' => theme_get_setting('menu'),
    );
	$form['monti']['header'] = array(
     '#type' => 'select',
     '#title' => t('Header'),
     '#description' => t('Select the header for theme...'),
     '#options' => array(
      'header-1' => t('Header 1'),
      'header-2' => t('Header 2'),
	  'header-3' => t('Header 3'),		
	  'header-4' => t('Header 4'),										
      ),
	  '#default_value' => theme_get_setting('header'),
    );

}