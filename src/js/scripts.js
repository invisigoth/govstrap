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
        var animationDuration = 220;
        // Reset the navigation menu item to its original state when cursor
        // leaves the navitation region
        var navContainer = $('#navigation .container');
        navContainer.on({
          mouseleave: function() {
            navContainer.find('li.hover-active').removeClass('hover-active');
            navContainer.find('li.expanded ul.menu').hide();
            navContainer.find('li.active-trail > ul', 'li.active > ul', 'li.active-trail > ul > li.active-trail > ul', 'li.active > ul > li.active > ul').show();
          }
        });
        navContainer.on('touchstart',function(){
          $(this).off('mouseleave');
        });
        // Primary navigation menu behivours
        $('#nav-toggle').click(function (event) {
          event.preventDefault();
          $('#navigation').slideToggle(animationDuration);
          $(this).find('i').toggleClass('icon-menu','icon-cancel');
          $(this).find('i').toggleClass('icon-cancel');
          // Reset mobile nav menu
          navContainer.find('li.expanded ul.menu').hide();
          navContainer.find('.mobile-menu-level-up').remove();
        });
        // Append the opener link for mobile navigation
        $('#navigation .menu-block-wrapper > ul li.expanded').append('<span class="icon-rarrow"></span>');
        // Bind click event
        $('#navigation .menu-block-wrapper > ul li.expanded .icon-rarrow').click(function (event) {
          $(this).siblings('.menu').show('slide', {direction: 'right'}, animationDuration);
          var linkText = $(this).siblings('.menu').siblings('a').text();
          $(this).siblings('.menu').prepend('<li class="mobile-menu-level-up"><span class="icon-larrow"></span> ' + linkText + '</li>');
          // Level up click event
          $('.mobile-menu-level-up').click(function (event) {
            $(this).closest('.menu').hide('slide', {direction: 'left'}, animationDuration);
            $(this).closest('.mobile-menu-level-up').remove();
          });
        });

        // First level navigation menu hover behaviour
        var navItemExpandable = $('#navigation .menu-block-wrapper > ul > li');
        navItemExpandable.on({
          mouseenter: function() {
            navItemExpandable.removeClass('hover-active');
            $(this).addClass('hover-active');
            $(this).siblings('li').find('> ul.menu').hide();
            $(this).find('> ul.menu').show(animationDuration);
          }
        });
        navItemExpandable.on('touchstart', function(){
          $(this).off('mouseenter');
        });
        // Second level navigation menu hover behaviour
        var navSubItemExpandable = $('#navigation .menu-block-wrapper > ul > li > ul > li');
        navSubItemExpandable.on({
          mouseenter: function() {
            navSubItemExpandable.removeClass('hover-active');
            $(this).addClass('hover-active');
            $(this).siblings('li').find('> ul.menu').hide();
            $(this).find('> ul.menu').show(animationDuration);
          }
        });
        navSubItemExpandable.on('touchstart',function(){
          $(this).off('mouseenter');
        });
      });
    },

  };

})(jQuery, Drupal, this, this.document);
