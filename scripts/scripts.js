/**
 * @file
 * Attahcing some behaviour to navmenu.
 */

(function ($) {
  // Attaches to drupal the behaviour to detect a left slide ot drag on the content body and shows the site menu.
    Drupal.behaviors.detectPans = {
      attach: function (context, settings) {
        // Create a simple instance by default, it only adds horizontal recognizers.
        var main_content = document.getElementById('block-system-main');
        var mc = new Hammer(main_content);
        var main_menu = document.getElementById('main-menu-offcanvas');
        var mmmc = new Hammer(main_menu);
        // Listen to events... set threshold to 90px, to avoid triggering by scrolling.
        mc.get('pan').set({ threshold: 50 });
        mmmc.get('pan').set({ threshold: 50 });
        mc.on("panleft", function (ev) {
          $("#main-menu-offcanvas").offcanvas('show');
        });
        mmmc.on("panright", function (ev) {
          $("#main-menu-offcanvas").offcanvas('hide');
        });
      }
  };
  Drupal.behaviors.scrollIframeToTop = {
    attach: function (context, settings) {
      if ($('body iframe').length) {
        $('body iframe').load(function (){
          $('body').removeClass("loading");
          $('#loading-overlay').hide();
          $(window).scrollTop(0);
        });
      }
      else {
        $(window).load(function () {
          $('body').removeClass("loading");
          $('#loading-overlay').hide();
        });
      }
    }
  };

  Drupal.behaviors.activateToolbarButton = {
    attach: function (context, settings) {
      var url = window.location;
      $('#footer-button-group a[href="' + url + '"]').addClass('active');
      $('#footer-button-group a').filter(function () {
        return this.href == url;
      }).addClass('active');
    }
  };
})(jQuery);
