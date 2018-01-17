/**
 * @file
 * NCA GovStrap theme main JavaScript
 * Icon Agency Canberra - Jan 2018
 */

(function ($, Drupal, window, document, undefined) {

  'use strict';

  Drupal.behaviors.govstrap = {
    attach: function (context, settings) {
      $(document).ready(function () {

        // Primary navigation menu behivours
        $('#nav-toggle').click(function (event) {
          event.preventDefault();
          $('#navigation').slideToggle('0.2s');
          $(this).find('i').toggleClass('icon-menu','icon-cancel');
          $(this).find('i').toggleClass('icon-cancel');

        });
        // First level navigation menu hover behaviour
        var navItemExpandable = $('#navigation .menu-block-wrapper > ul > li');
        navItemExpandable.mouseenter(function () {
          navItemExpandable.removeClass('hover-active');
          $(this).addClass('hover-active');
          $(this).siblings('li').find('> ul.menu').hide();
          $(this).find('> ul.menu').show('0.2s');
        });
        // Second level navigation menu hover behaviour
        var navSubItemExpandable = $('#navigation .menu-block-wrapper > ul > li > ul > li');
        navSubItemExpandable.mouseenter(function () {
          navSubItemExpandable.removeClass('hover-active');
          $(this).addClass('hover-active');
          $(this).siblings('li').find('> ul.menu').hide();
          $(this).find('> ul.menu').show('0.2s');
        });
        // Reset the navigation menu item to its original state when cursor
        // leaves the navitation region
        var navContainer = $('#navigation .container');
        navContainer.mouseleave(function () {
          navContainer.find('li.hover-active').removeClass('hover-active');
          navContainer.find('li.expanded ul').hide();
          navContainer.find('li.active-trail > ul', 'li.active > ul', 'li.active-trail > ul > li.active-trail > ul', 'li.active > ul > li.active > ul').show();
        });

      });
    },

  };

})(jQuery, Drupal, this, this.document);

