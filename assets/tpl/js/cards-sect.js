jQuery(document).ready(function() {
    $('.cards_sect .row2 .sub_row2.tabs').tabs();
    $('.cards_sect .row2 .sub_row6.tabs').tabs();

    function sect_resize() {
        var $faq_cat_cards = $('.faq_cat_card');
        if($faq_cat_cards.length) {
            var max_h = {
                _row2: 0,
                _row3: 0,
            }, $wind = $(window);
            $faq_cat_cards.each(function () {
                var $card = $(this),
                    _row2_h = $card.find('._row2').css({'min-height': ''}).outerHeight(),
                    _row3_h = $card.find('._row3').css({'min-height': ''}).outerHeight();
                if(max_h._row2 < _row2_h) max_h._row2 = _row2_h;
                if(max_h._row3 < _row3_h) max_h._row3 = _row3_h;
            });
            if($wind.width() >= 768) {
                $faq_cat_cards.find('._row2').css({
                    'min-height': max_h._row2,
                });
                $faq_cat_cards.find('._row3').css({
                    'min-height': max_h._row3,
                });
            }
        }
    }
    setTimeout(function () {
        sect_resize();
    }, 0);
    $(window).resize(sect_resize);
});