var ClanAOD = ClanAOD || {};

(function ($) {
    ClanAOD = {

        setup: function () {
            this.smoothScroll();
            this.stickyNav();
        },

        smoothScroll: function () {
            $('.smooth-scroll').click(function (e) {
                e.preventDefault();
                var targetId = $(this).attr("href");
                var top = $(targetId).offset().top;
                $('html, body').stop().animate({scrollTop: top}, 1500);
            });
        },

        stickyNav: function () {
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