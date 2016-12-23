/**
 * Set up front-end functionality
 *
 * @object AOD
 */
var ClanAOD = ClanAOD || {};

(function ($) {

    ClanAOD = {

        setup: function () {

            this.addHomeLink();
            this.smoothScroll();
            this.stickyNav();
            this.videoModal();

        },
        /**
         * Add the home link dynamically so we can provide
         * interactive functionality
         */
        addHomeLink: function () {
            var path = AOD.path + "/public/images/",
                homeLink = '<li class="home">' +
                    '<a href="/" class="text-link">Home</a>' +
                    '<img src="' + path + 'logo-mini.png" onclick="window.location.replace(\'/\')"/>' +
                    '</li>';
            $('.primary-nav ul').prepend(homeLink);
        },


        /**
         * Allow our anchor links to scroll smoothly
         */
        smoothScroll: function () {
            $('.smooth-scroll').click(function (e) {
                e.preventDefault();
                var targetId = $(this).attr("href");
                var top = $(targetId).offset().top;
                $('html, body').stop().animate({scrollTop: top}, 1500);
            });
        },
        /**
         * Prompt sticky nav to stick
         */
        stickyNav: function () {
            var scrollLocation = 700; //px

            $(window).bind('scroll', function () {
                    if ($('.stay-fixed').length > 0) {
                        $('.stay-fixed').find('.home').addClass('show-logo');
                    } else if ($(window).scrollTop() > scrollLocation) {
                        $('.primary-nav').addClass('fixed')
                            .find('.home').addClass('show-logo');
                    } else {
                        $('.primary-nav').removeClass('fixed')
                            .find('.home').removeClass('show-logo')
                    }
                }
            );
        },

        videoModal: function () {
            $(".intro-video").easyModal({
                overlayOpacity: 0.75,
                overlayColor: "#000",
                autoOpen: false,
                onClose: function () {
                    document.getElementById('video-iframe')
                        .contentWindow
                        .postMessage(ClanAOD.postYTMessage('stop'), '*');
                },
                onOpen: function () {
                    document.getElementById('video-iframe')
                        .contentWindow
                        .postMessage(ClanAOD.postYTMessage('start'), '*');
                }
            });

            $('.play-button').click(function (e) {
                $('.intro-video').trigger('openModal');
                e.preventDefault();
            });
        },

        /**
         * Handle API calls to iframe youtube content
         *
         * @param action
         * @returns {*}
         */
        postYTMessage: function (action) {
            switch (action) {
                case "start":
                    return '{"event":"command","func":"playVideo","args":""}';
                case "stop":
                    return '{"event":"command","func":"stopVideo","args":""}';
            }
        }
    }
})(jQuery);

ClanAOD.setup();