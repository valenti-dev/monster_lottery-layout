jQuery(document).ready(function ($) {
    $('body').addClass('loaded');
    /**/
    $.widget( "custom.iconselectmenu", $.ui.selectmenu, {
        _renderItem: function( ul, item ) {
            var $li = $('<li class="ui-menu-item"><div class="ui-menu-item-wrapper">'+item.label+'</div></li>');
            if(item.element.data('icon')) {
                $li.find('.ui-menu-item-wrapper').prepend('<span class="icon-wrap"><img class="icon" src="'+item.element.data('icon')+'"></span>');
            }
            if ( item.disabled ) {
                li.addClass( "ui-state-disabled" );
            }
            return $li.appendTo( ul );
        },
        _renderButtonItem: function( item ) {
            var buttonItem = $( "<span>", {
                "class": "ui-selectmenu-text"
            });
            this._setText( buttonItem, item.label );

            if(item.element.data('icon')) {
                buttonItem.prepend('<span class="icon-wrap"><img class="icon" src="'+item.element.data('icon')+'"></span>');
            }

            return buttonItem;
        }
    });

    $('.lang_select_wrap .lang_select').iconselectmenu();

    $('[data-src]').Lazy({
        afterLoad: function(element) {
            $(element).css('display', '');
        },
    });
    /**/
    $(document).on('input', '.text_input_wrap .text_input', function () {
        var $this = $(this);
        if($this.val()) $this.addClass('not_empty');
        else $this.removeClass('not_empty');
    });
    $('.text_input_wrap .text_input').trigger('input');
    /**/
    $(document).on('change', 'input[type="number"]', function (e) {
        e.preventDefault();
        var $input = $(this),
            new_val = +$input.val();
        if($input.prop('min') && new_val < +$input.prop('min')) {
            new_val = +$input.prop('min');
        } else if($input.prop('max') && new_val > +$input.prop('max')) {
            new_val = +$input.prop('max');
        }
        $input.val(new_val);
    });

    $(document).on('click', '.num_input_wrap .num_input_butt', function (e) {
        e.preventDefault();
        var $butt = $(this),
            $input = $butt.closest('.num_input_wrap').find('.num_input'),
            new_val = +$input.val();
        console.log(new_val);
        if($butt.hasClass('p_butt')) new_val += 1;
        else new_val -= 1;
        if($input.prop('min') && new_val < +$input.prop('min')) {
            new_val = +$input.prop('min');
        } else if($input.prop('max') && new_val > +$input.prop('max')) {
            new_val = +$input.prop('max');
        }
        console.log(new_val);

        $input.val(new_val);
        $input.change();
        $input.trigger('input');
    });
    /**/
    $(document).on('click', '.pass_view_toggle', function (e) {
        e.preventDefault();
        var $butt = $(this).toggleClass('active'),
            $input = $butt.siblings('.text_input_wrap').find('.text_input');
        if($butt.hasClass('active')) {
            $input.attr('type', 'text');
        } else {
            $input.attr('type', 'password');
        }
    });
});