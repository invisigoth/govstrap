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

                // Smooth scropping to top
                $(window).scroll(function() {
                    if($(this).scrollTop() != 0) {
                      $("#to-top").fadeIn();
                    } else {
                      $("#to-top").fadeOut();
                    }
                });

                $("#to-top").click(function() {
                    $("body,html").animate({scrollTop:0},800);
                });

                var animationDuration = 220;
                // Reset the navigation menu item to its original state when cursor
                // leaves the navitation region
                var navContainer = $('#navigation .container');
                navContainer.on({
                    mouseleave: function () {
                        navContainer.find('li.hover-active').removeClass('hover-active');
                        navContainer.find('li.expanded ul.menu').hide();
                        navContainer.find('li.active-trail > ul', 'li.active > ul', 'li.active-trail > ul > li.active-trail > ul', 'li.active > ul > li.active > ul').show();
                    }
                });
                navContainer.on('touchstart', function () {
                    $(this).off('mouseleave');
                });
                // Primary navigation menu behivours
                $('#nav-toggle').click(function (event) {
                    event.preventDefault();
                    $('#navigation').slideToggle(animationDuration);
                    $(this).find('i').toggleClass('icon-menu', 'icon-cancel');
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
                // Main navigation mouse hover handling. We want to delay firing the event to filter out
                // unintended mouse movements
                var hoverIntentDelay = 200;
                var hoverElement;
                var hoverIntent;
                // First level navigation menu hover behaviour
                var navItemExpandable = $('#navigation .menu-block-wrapper > ul > li');
                navItemExpandable.on({
                    mouseenter: function () {
                        hoverElement = $(this);
                        hoverIntent = setTimeout(function () {
                            hoverElement.siblings('li').find('> ul.menu').hide();
                            hoverElement.find('> ul.menu').show(animationDuration);
                        }, hoverIntentDelay);
                    },
                    mouseleave: function () {
                        clearTimeout(hoverIntent);
                    }
                });
                navItemExpandable.on('touchstart', function () {
                    $(this).off('mouseenter');
                });
                // Second level navigation menu hover behaviour
                var navSubItemExpandable = $('#navigation .menu-block-wrapper > ul > li > ul > li');
                navSubItemExpandable.on({
                    mouseenter: function () {
                        hoverElement = $(this);
                        hoverIntent = setTimeout(function () {
                            hoverElement.siblings('li').find('> ul.menu').hide();
                            hoverElement.find('> ul.menu').show(animationDuration);
                        }, hoverIntentDelay);
                    },
                    mouseleave: function () {
                        clearTimeout(hoverIntent);
                    }
                });
                navSubItemExpandable.on('touchstart', function () {
                    $(this).off('mouseenter');
                });
                // Twitter embed tweaks
                $('.nca-front-page-twitter-feed').on('DOMSubtreeModified propertychange', "#twitter-widget-0", function () {
                    // We don't want to embed any media content
                    $(".twitter-timeline").contents().find(".timeline-Tweet-media").css("display", "none");
                    // And we want to keep the font size consistent with the site
                    $(".twitter-timeline").contents().find(".timeline-Tweet-text").css("font-size", "16px");
                    $(".twitter-block").css("height", "100%");
                });
            });
        },

    };

})(jQuery, Drupal, this, this.document);
