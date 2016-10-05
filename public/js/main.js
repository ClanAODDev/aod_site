var ClanAOD = ClanAOD || {};

(function ($) {
    ClanAOD = {
        setup: function () {

            /**
             * need to define scroll-location based on URI
             * if not on the home-page, navbar will be at the top
             */
            var scrollLocation = 700; //px

            $(window).bind('scroll', function () {
                if ($(window).scrollTop() > scrollLocation) {
                    $('.home').addClass('show-logo').closest('.primary-nav').addClass('fixed');
                } else {
                    $('.home').removeClass('show-logo').closest('.primary-nav').removeClass('fixed');
                }
            });
        }
    }
})(jQuery);

ClanAOD.setup();