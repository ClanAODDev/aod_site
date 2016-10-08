/**
 * Set up front-end functionality
 *
 * @object AOD
 */
'use strict';

var ClanAOD = ClanAOD || {};

(function ($) {
    ClanAOD = {

        setup: function setup() {
            this.addHomeLink();
            this.smoothScroll();
            this.stickyNav();
        },

        /**
         * Add the home link dynamically so we can provide
         * interactive functionality
         */
        addHomeLink: function addHomeLink() {
            var path = AOD.path + "/public/images/",
                homeLink = '<li class="home">' + '<a href="#" class="text-link">Home</a>' + '<img src="' + path + 'logo-mini.png"/>' + '</li>';
            $('.primary-nav ul').prepend(homeLink);
        },

        /**
         * Allow our anchor links to scroll smoothly
         */
        smoothScroll: function smoothScroll() {
            $('.smooth-scroll').click(function (e) {
                e.preventDefault();
                var targetId = $(this).attr("href");
                var top = $(targetId).offset().top;
                $('html, body').stop().animate({ scrollTop: top }, 1500);
            });
        },

        /**
         * Prompt sticky nav to stick
         */
        stickyNav: function stickyNav() {
            var scrollLocation = 700; //px

            $(window).bind('scroll', function () {
                if ($(window).scrollTop() > scrollLocation) {
                    $('.primary-nav').addClass('fixed').find('.home').addClass('show-logo');
                } else {
                    $('.primary-nav').removeClass('fixed').find('.home').removeClass('show-logo');
                }
            });
        }
    };
})(jQuery);

ClanAOD.setup();