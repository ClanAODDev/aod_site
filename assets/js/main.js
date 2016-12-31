/**
 * Set up front-end functionality
 *
 * @object AOD
 */
var ClanAOD = ClanAOD || {};

(function ($) {

    ClanAOD = {

        setup: function () {
            this.addDynamicLinks();
            this.stickyNav();
            this.handleModals();
            this.initAutoMenu();
            this.handleApplicationLinks();
        },
        /**
         * Add dynamic links to navigation
         */
        addDynamicLinks: function () {
            /**
             * Apply buttons (generic)
             * @type {string}
             */
            var path = AOD.path + "/public/images/",
                homeLink = '<li class="home">' +
                    '<a href="/" class="text-link">Home</a>' +
                    '<img src="' + path + 'aod_new.png" onclick="window.location.replace(\'/\')"/>' +
                    '</li>',
                applyLink = '<li><a data-apply-button href="#">Apply</a>';
            $('.primary-nav ul').prepend(homeLink).append(applyLink);

            /**
             * Handle social media links
             */
            $(".social-media-sites li").click(function () {
                var link = $(this).attr('data-link');
                if (link) {
                    window.open(link);
                }
            });

        },

        /**
         * Allow our anchor links to scroll smoothly
         */
        smoothScroll: function () {
            $('.smooth-scroll').click(function (e) {
                e.preventDefault();
                var targetId = $(this).attr("href");
                var top = $(targetId).offset().top - 90;
                $('html, body').stop().animate({scrollTop: top}, 1500);
            });
        },

        /**
         * Logic for clan application links
         */
        handleApplicationLinks: function () {
            $('*[data-application-link]').click(function (e) {
                e.preventDefault();
                console.log('Application link clicked.');

                var application_id = ( $(this).data('application-id') )
                        ? $(this).data('application-id') : $('.division').data('application-id'),
                    application_link = "http://www.clanaod.net/forums/forms.php?do=form&fid=";

                if (undefined != application_id) {
                    window.location = application_link + application_id
                }
            })
        },

        /**
         * Init auto menu if we have a subnav
         */
        initAutoMenu: function () {
            if ($('#sub-nav').length) {
                ClanAOD.handleAutoMenu("sub-nav", "h2");
            }
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

        handleModals: function () {
            $('.intro-video').easyModal({
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

            $('.close-video').click(function () {
                $('.intro-video').trigger('closeModal');
            });

            $('.apply-form').easyModal({
                overlayOpacity: 0.75
            });

            $('*[data-apply-button]').click(function (e) {
                $('.apply-form').trigger('openModal');
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
        },

        handleAutoMenu: function (targetId, headingTag) {

            var target = document.getElementById(targetId);
            var headings = $('.automenu h2' || headingTag);

            if (headings.length >= 1) {
                // construct an ordered list of links
                var menuList = document.createElement("UL");
                for (var i = 0; i < headings.length; i++) {
                    var anchorName = "";
                    if (headings[i].id) {
                        anchorName = headings[i].id;
                    } else {
                        anchorName = "section_" + i;
                        headings[i].setAttribute("id", anchorName);
                    }

                    var headingText = headings[i].firstChild.nodeValue

                    headings[i].firstChild.nodeValue = headingText;

                    var menuLink = document.createElement("A");
                    menuLink.setAttribute("href", "#" + anchorName);
                    menuLink.setAttribute("class", "smooth-scroll");
                    menuLink.appendChild(document.createTextNode(headingText));

                    var listItem = document.createElement("LI");
                    listItem.appendChild(menuLink);

                    menuList.appendChild(listItem);
                }

                // remove all nodes from inside target element
                while (target.hasChildNodes()) target.removeChild(target.firstChild);

                // insert our generated menu into the target element
                target.appendChild(menuList);
            }

        }
    }
})(jQuery);

ClanAOD.setup();

// last to init
ClanAOD.smoothScroll();
