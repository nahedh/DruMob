<?php

/**
 * @file
 * theme-settings.php
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function drumob_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {
  $form['#attached']['library'][] = 'drumob/fontawesome';
  // Here we remove the default bootstrap theme settings
  // As we don't use the classical bootstrap navbar.
  $form['components']['navbar'] = NULL;

  $form['theme_settings']['show_node_heading'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show node heading'),
    '#default_value' => theme_get_setting('show_node_heading'),
  );

  // Here the toolbar settings form.
  $form['toolbar_settings'] = array(
    '#type' => 'details',
    '#title' => t('Toolbar Settings'),
    '#group' => 'bootstrap',
  );

  $form['toolbar_settings']['footer']['show_footer_on_mobile_only'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show footer toolbar on mobile only'),
    '#default_value' => theme_get_setting('show_footer_on_mobile_only'),
  );

  $form['toolbar_settings']['header_links'] = array(
    '#type' => 'details',
    '#title' => t('Header links'),
    '#open' => TRUE,
  );

  $form['toolbar_settings']['header_links']['back_link_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Back link header title'),
    '#default_value' => (theme_get_setting('back_link_title') == '') ? 'Back' : theme_get_setting('back_link_title'),
    '#description' => t('Input title for the back header link'),
  );

  $form['toolbar_settings']['header_links']['back_link_icon'] = array(
    '#type' => 'textfield',
    '#title' => t('Back link header icon'),
    '#default_value' => (theme_get_setting('back_link_icon') == '') ? 'fa-arrow-left fa-lg' : theme_get_setting('back_link_icon'),
    '#description' => t('Input icon class name for the back header link, for usage with fontawesome, for example fa-home'),
  );

  $form['toolbar_settings']['footer_links'] = array(
    '#type' => 'details',
    '#title' => t('Footer links'),
    '#open' => TRUE,
  );

  $form['toolbar_settings']['footer_links']['link_title_1'] = array(
    '#type' => 'textfield',
    '#title' => t('Link title 1'),
    '#default_value' => theme_get_setting('link_title_1'),
    '#description' => t('Input title for the link 1'),
  );

  $form['toolbar_settings']['footer_links']['link_href_1'] = array(
    '#type' => 'textfield',
    '#title' => t('Address link 1'),
    '#default_value' => theme_get_setting('link_href_1'),
    '#description' => t('Input address for the link 1'),
  );

  $form['toolbar_settings']['footer_links']['link_icon_1'] = array(
    '#type' => 'textfield',
    '#title' => t('Icon link 1'),
    '#default_value' => theme_get_setting('link_icon_1'),
    '#description' => t('Input icon class name for the link 1, for usage with fontawesome, for example fa-home'),
  );

  $form['toolbar_settings']['footer_links']['link_title_2'] = array(
    '#type' => 'textfield',
    '#title' => t('Link title 2'),
    '#default_value' => theme_get_setting('link_title_2'),
    '#description' => t('Input title for the link 2'),
  );

  $form['toolbar_settings']['footer_links']['link_href_2'] = array(
    '#type' => 'textfield',
    '#title' => t('Address link 2'),
    '#default_value' => theme_get_setting('link_href_2'),
    '#description' => t('Input address for the link 2'),
  );

  $form['toolbar_settings']['footer_links']['link_icon_2'] = array(
    '#type' => 'textfield',
    '#title' => t('Icon link 2'),
    '#default_value' => theme_get_setting('link_icon_2'),
    '#description' => t('Input icon class name for the link 2, for usage with fontawesome, for example fa-home'),
  );

  $form['toolbar_settings']['footer_links']['link_title_3'] = array(
    '#type' => 'textfield',
    '#title' => t('Link title 3'),
    '#default_value' => theme_get_setting('link_title_3'),
    '#description' => t('Input title for the link 3'),
  );

  $form['toolbar_settings']['footer_links']['link_href_3'] = array(
    '#type' => 'textfield',
    '#title' => t('Address link 3'),
    '#default_value' => theme_get_setting('link_href_3'),
    '#description' => t('Input address for the link 3'),
  );

  $form['toolbar_settings']['footer_links']['link_icon_3'] = array(
    '#type' => 'textfield',
    '#title' => t('Icon link 3'),
    '#default_value' => theme_get_setting('link_icon_3'),
    '#description' => t('Input icon class name for the link 3, for usage with fontawesome, for example fa-home'),
  );

  $form['toolbar_settings']['footer_links']['link_title_4'] = array(
    '#type' => 'textfield',
    '#title' => t('Link title 4'),
    '#default_value' => theme_get_setting('link_title_4'),
    '#description' => t('Input title for the link 4'),
  );

  $form['toolbar_settings']['footer_links']['link_href_4'] = array(
    '#type' => 'textfield',
    '#title' => t('Address link 4'),
    '#default_value' => theme_get_setting('link_href_4'),
    '#description' => t('Input address for the link 4'),
  );

  $form['toolbar_settings']['footer_links']['link_icon_4'] = array(
    '#type' => 'textfield',
    '#title' => t('Icon link 4'),
    '#default_value' => theme_get_setting('link_icon_4'),
    '#description' => t('Input icon class name for the link 4, for usage with fontawesome, for example fa-home'),
  );

  $form['toolbar_settings']['footer_links']['link_title_5'] = array(
    '#type' => 'textfield',
    '#title' => t('Link title 5'),
    '#default_value' => theme_get_setting('link_title_5'),
    '#description' => t('Input title for the link 5'),
  );

  $form['toolbar_settings']['footer_links']['link_href_5'] = array(
    '#type' => 'textfield',
    '#title' => t('Address link 5'),
    '#default_value' => theme_get_setting('link_href_5'),
    '#description' => t('Input address for the link 5'),
  );

  $form['toolbar_settings']['footer_links']['link_icon_5'] = array(
    '#type' => 'textfield',
    '#title' => t('Icon link 5'),
    '#default_value' => theme_get_setting('link_icon_5'),
    '#description' => t('Input icon class name for the link 5, for usage with fontawesome, for example fa-home'),
  );

  // Here begin the navmenu settings.
  $form['navmenu_settings'] = array(
    '#type' => 'details',
    '#title' => t('Navmenu Settings'),
    '#group' => 'bootstrap',
  );

  $form['navmenu_settings']['navmenu_font_size'] = array(
    '#type' => 'textfield',
    '#title' => t('Navmenu font size'),
    '#default_value' => theme_get_setting('navmenu_font_size'),
    '#description' => t('Input the font size for the navmenu links. For example 1.2em, 8px'),
  );

  // Here begin the form elements for the custom loading animation.
  $form['loading_animation_settings'] = array(
    '#type' => 'details',
    '#title' => t('Loading animation settings'),
    '#group' => 'bootstrap',
  );

  $form['theme_settings']['show_loading_animation'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show loading animation icon'),
    '#default_value' => theme_get_setting('show_loading_animation'),
  );

  $animated_icons = array(
    'loading1' => 'loading1',
    'loading2' => 'loading2',
    'loading3' => 'loading3',
    'loading4' => 'loading4',
    'loading5' => 'loading5',
  );

  $form['loading_animation_settings']['animation_icon'] = array(
    '#type' => 'select',
    '#title' => t('Select GIF animated icon'),
    '#options' => $animated_icons,
    '#default_value' => theme_get_setting('animation_icon'),
    '#description' => t('You can upload your custom GIf icon into DruMob assets folder'),
  );
}
