jQuery(document).ready(function ($) {
    $('.winners_sect .row2.slider').slick({
        slidesToShow: 3,
        autoplaySpeed: 3000,
        autoplay: true,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
            },
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            },
        }],
    });
});