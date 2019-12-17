jQuery(document).ready(function($) {
    $('.header .row1 .menu_toggle_butt').click(function () {
        var $butt = $(this).toggleClass('active'),
            $row = $butt.closest('.row1'),
            $menu = $row.find('.menu_wrap');
        if($butt.hasClass('active')) {
            $menu.stop().slideDown(300, function () {
                $(this).css({
                    display: '',
                });
            });
            $row.addClass('opened');
        } else {
            $menu.stop().slideUp(300, function () {
                $(this).css({
                    display: '',
                });
                $row.removeClass('opened');
            });
        }
    });
    /**/
    $('.header .row2 .menu_toggle_butt').click(function () {
        var $butt = $(this).toggleClass('active'),
            $row = $butt.closest('.header'),
            $menu = $row.find('.row2').find('.sub_row2');
        if($butt.hasClass('active')) {
            $menu.stop().slideDown(300, function () {
                $(this).css({
                    display: '',
                });
            });
            $row.addClass('opened');
        } else {
            $menu.stop().slideUp(300, function () {
                $(this).css({
                    display: '',
                });
                $row.removeClass('opened');
            });
        }
    });
    /**/
    function wind_scroll() {
        var $wind = $(window),
            $header = $('.header'),
            $body = $('body');
        if($body.hasClass('home_page')) {
            var $banner_sect = $('.banner_sect');
            if($wind.scrollTop() >= $banner_sect.offset().top + $banner_sect.outerHeight()) {
                $header.addClass('scrolled');
            } else {
                $header.removeClass('scrolled');
            }
        }
    }
    wind_scroll();
    $(window).scroll(wind_scroll);
});