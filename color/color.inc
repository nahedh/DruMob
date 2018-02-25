<?php

/**
 * @file
 * PART 1. Basic Color module settings.
 */

$info = array();
// Define the possible replaceable items and their labels.
$info['fields'] = array(
  'bg' => t('Main background'),
  'text' => t('Text color'),

  'navbar_header_bg' => t('Navbar header background'),
  'navbar_header_border' => t('Navbar header border'),
  'navbar_header_brand' => t('Header brand'),
  'navbar_header_btn_bg' => t('Header button background'),
  'navbar_header_btn_text' => t('Header button icon and text'),
  'navbar_header_btn_border' => t('Header button border'),

  'navmenu_bg' => t('Navmenu background'),
  'navmenu_text' => t('Navmenu text'),

  'navbar_footer_bg' => t('Navbar footer background'),
  'navbar_footer_border' => t('Navbar footer border'),
  'navbar_footer_brand' => t('Footer brand'),
  'navbar_footer_btn_bg' => t('Footer button background'),
  'navbar_footer_btn_text' => t('Footer button icon and text'),
  'navbar_footer_btn_border' => t('Footer button border'),
  'navbar_footer_active_btn_bg' => t('Active button background'),
  'navbar_footer_active_btn_text' => t('Active button text'),
  'navbar_footer_active_btn_border' => t('Active button border'),
);

// Color schemes for the site.
$info['schemes'] = array(
  // Define the default scheme.
  'default' => array(
  // Scheme title.
    'title' => t('Bootstrap default colors'),
  // Scheme colors (Keys are coming from $info['fields']).
    'colors' => array(
      'bg' => '#fff',
      'text' => '#333333',
      'navbar_header_bg' => '#f8f8f8',
      'navbar_header_border' => '#e7e7e7',
      'navbar_header_brand' => '#777',
      'navbar_header_btn_bg' => '#f4f4f4',
      'navbar_header_btn_text' => '#343434',
      'navbar_header_btn_border' => '#ccc',
      'navmenu_bg' => '#f5f5f5',
      'navmenu_text' => '#363636',
      'navbar_footer_bg' => '#f9f9f9',
      'navbar_footer_border' => '#e8e8e8',
      'navbar_footer_btn_bg' => '#f2f2f2',
      'navbar_footer_btn_text' => '#353535',
      'navbar_footer_btn_border' => '#c2c2c2',
      'navbar_footer_active_btn_bg' => '#f3f3f3',
      'navbar_footer_active_btn_text' => '#373737',
      'navbar_footer_active_btn_border' => '#c3c3c3',
    ),
  ),
);
// Define the CSS file(s) that we want the Color module to use as a base.
$info['css'] = array('color/color.css');


/***** Advanced Color settings - Defaults. *****/

/**
 * Default settings for the advanced stuff.
 *
 * No need to edit these if you just want to play around with the colors.
 *
 * Color wants these, otherwise it's not going to play.
 *
 * We dive deeper into these in the Part 2 Advanced Color settings.
 */

// Files we want to copy along with the CSS files, let's define these later.
$info['copy'] = array('logo.png');

// Files used in the scheme preview.
$info['preview_library'] = 'drumob/color';
$info['preview_html'] = 'color/preview.html';

// Gradients.
$info['gradients'] = array();

// Color areas to fill (x, y, width, height).
$info['fill'] = array();

// Coordinates of all the theme slices (x, y, width, height)
// with their filename as used in the stylesheet.
$info['slices'] = array();

// Base file for image generation.
$info['base_image'] = 'color/base.png';
