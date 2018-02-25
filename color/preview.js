/**
 * @file
 * Handle the color changes and update the preview window.
 */

(function ($, Drupal, drupalSettings) {
  "use strict";
  Drupal.color = {
    logoChanged: false,
    callback: function(context, settings, form, farb, height, width) {
      // console.log($('.js-color-palette input[name="palette[bg]"]').val());
      // Background.
      $('#preview', form).css('backgroundColor', $('.js-color-palette input[name="palette[bg]"]', form).val());
      // Text.
      $('#preview #preview-main h2, #preview .preview-content', form).css('color', $('.js-color-palette input[name="palette[text]"]', form).val());
      // Navbar header background.
      $('#preview-header-navbar', form).css('backgroundColor', $('.js-color-palette input[name="palette[navbar_header_bg]"]', form).val());
      // Navbar header border.
      $('#preview-header-navbar', form).css('border-color', $('.js-color-palette input[name="palette[navbar_header_border]"]', form).val());
      // Navbar header brand.
      $('.navbar-brand', form).css('color', $('.js-color-palette input[name="palette[navbar_header_brand]"]', form).val());
      // Navbar header buttons background.
      $('.header-button .navbar-btn', form).css('backgroundColor', $('.js-color-palette input[name="palette[navbar_header_btn_bg]"]', form).val());
      // Navbar header buttons border.
      $('.header-button .navbar-btn', form).css('border-color', $('.js-color-palette input[name="palette[navbar_header_btn_border]"]', form).val());
      // Navbar header buttons text.
      $('.header-button .navbar-btn', form).css('color', $('.js-color-palette input[name="palette[navbar_header_btn_text]"]', form).val());
      // Navbar footer background.
      $('#preview-footer-navbar', form).css('backgroundColor', $('.js-color-palette input[name="palette[navbar_footer_bg]"]', form).val());
      // Navbar footer border.
      $('#preview-footer-navbar', form).css('border-color', $('.js-color-palette input[name="palette[navbar_footer_border]"]', form).val());
      $('.btn-group .navbar-btn', form).css('backgroundColor', $('.js-color-palette input[name="palette[navbar_footer_btn_bg]"]', form).val());
      // Navbar header buttons border.
      $('.btn-group .navbar-btn', form).css('border-color', $('.js-color-palette input[name="palette[navbar_footer_btn_border]"]', form).val());
      // Navbar header buttons text.
      $('.btn-group .navbar-btn', form).css('color', $('.js-color-palette input[name="palette[navbar_footer_btn_text]"]', form).val());
      // Active footer button background.
      $('.btn-group .active-btn', form).css('backgroundColor', $('.js-color-palette input[name="palette[navbar_footer_active_btn_bg]"]', form).val());
      // Active footer buttons border.
      $('.btn-group .active-btn', form).css('border-color', $('.js-color-palette input[name="palette[navbar_footer_active_btn_border]"]', form).val());
      // Active footer buttons text.
      $('.btn-group .active-btn', form).css('color', $('.js-color-palette input[name="palette[navbar_footer_active_btn_text]"]', form).val());
      // Navmenu background color.
      $('#preview-menu', form).css('backgroundColor', $('.js-color-palette input[name="palette[navmenu_bg]"]', form).val());
      // Navmenu text.
      $('#preview-menu a', form).css('color', $('.js-color-palette input[name="palette[navmenu_text]"]', form).val());
    }
  };
})(jQuery, Drupal, drupalSettings);
