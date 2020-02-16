$(document).ready(function() {

    // .....................Slick.....................
    let carousel = $('.carousel-block');
    carousel.each(function() {
        if($(this).is('.main-carousel-block')) {
            $(this).slick({
                autoplay: false,
                dots: true,
                appendDots: $('.main-carousel-block')
            });
        }else if($(this).is('.products-carousel-block')) {
            $(this).slick({
                autoplay: false,
                dots: true,
                appendDots: $('.products-carousel-block')
            });
        }else if ('.product-img-slider') {
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 2,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 2,
                asNavFor: '.slider-for',
                vertical: true,
                arrows: false,
                // dots: true,
                centerMode: true,
                focusOnSelect: true
            });
        }

    });// the end of each function

    function changeInput() {
        let inputVal;
        let clickedBtn = false;
        let enter = false;

        // Check if Enter was pressed.
        $('._search-single_').keypress(function (e) {
            if (inputVal && e.keyCode == 13) {
                enter = true;
            }
        });

        // Set 'true' if search button is clicked.
        $('#submit_search').click(function () {
            if (inputVal) {
                clickedBtn = true;
            }
        });

        $('._search-single_').mouseover(function () {

            // Check if input is focused and has value. If 'yes' - get input's value.
            $('#_search').focus(function () {
                $(this).on('input', function () {
                    inputVal = $(this).val();
                });
            });

            $(this).addClass('visible-search').stop().animate({width: '465px'}, 300);
            if($(this).width() > 0) {
                $('#header_brand_name').animate({'font-size': '0'}, 200);
            }
            $('#_search').css('display', 'inline-block');

            if (inputVal && (clickedBtn || enter)) {
                $(this).removeClass('visible-search').stop().animate({width: '95px'}, 300);
                $('#_search').css('display', 'none');
                // Clear all values
                inputVal = $(document).find('#_search:text').val('');
                inputVal = '';
                enter = false;
                clickedBtn = false;
            }

        });

        $('._search-single_').mouseout(function () {
            if (!inputVal) {
                $(this).removeClass('visible-search').stop().animate({width: '95px'}, 300, 0,function() {
                    $('#header_brand_name').animate({'font-size': '22px'}, 200);
                });
                $('#_search').css('display', 'none');
            }
        });
    }


    function changeItemCountInACard() {
        let priceCount, price, priceArr, totalPrice;

        // Change price by clicking on "+" or "-" buttons.
        $('._counter-sign_').click(function() {

            priceCount = $(this).parent('.price-counter-block').find('._price-counter_').val();
            priceCount = Number(priceCount);

            if ($(this).is('#_sub')) {
                priceCount -= 1;
                $(this).parent('.price-counter-block').find('._price-counter_').val(priceCount);
            } else if ($(this).is('#_add')) {
                priceCount += 1;
                $(this).parent('.price-counter-block').find('._price-counter_').val(priceCount);
            }

            if(Math.sign(priceCount) != 1) {
                $(this).parent('.price-counter-block').find('._price-counter_').val( 1) ;
                priceCount = $(this).parent('.price-counter-block').find('._price-counter_').val();
            }

            price = $(this).parents('.card-item-price-block').children('._card-item-price_').html();
            priceArr = price.split(' ');
            price = priceArr[0];

            totalPrice = price * priceCount;
            $(this).parents('.card-item-price-block').children('._card-item-total-price_').html(totalPrice + ' USD');
        });

        // Change price by clicking "Enter" key.
        $('.card-item-price-main-block').keypress(function (e) {
            if (e.keyCode == 13) {
                priceCount = $(this).find('._price-counter_').val();
                priceCount = Number(priceCount);

                if(Math.sign(priceCount) != 1) {
                    $(this).find('._price-counter_').val( 1) ;
                    priceCount = $(this).find('._price-counter_').val();
                }

                price = $(this).find('._card-item-price_').html();
                priceArr = price.split(' ');
                price = priceArr[0];

                totalPrice = price * priceCount;
                $(this).find('._card-item-total-price_').html(totalPrice + ' USD');
            }
        });
    }

    $('._close_').click(function() {
        $(this).parent().remove();
    });

    $('._product-tab_').click(function() {
        let tabsInfo = $('.product-details-main-block').find('.product-tabs');
        let data = $(this).attr('tab-data');
        let tabs = $.find('._product-tab_');
        let thisTab;
        let thisTabInfo;

        for(let i=0; i< tabsInfo.length; i++) {
            if(data == i) {
                thisTab = tabs[i];
                thisTabInfo = tabsInfo[i];
                $(tabsInfo).addClass('_closed-tab_');
                $(tabs).addClass('dark-violet').removeClass('dark-violet-bold');
                $(thisTab).removeClass('dark-violet').addClass('dark-violet-bold');
                $(thisTabInfo).removeClass('_closed-tab_');
            }
       }
    });

    /*..............................Filter Range..............................*/
    $( function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 300000,
            values: [ 0, 30000 ],
            slide: function( event, ui ) {
                $(document).find( "#min" ).val( ui.values[ 0 ]);
                $(document).find( "#max" ).val(ui.values[ 1 ] );
            }
        });

    } );

    // Filter's toggle
    $('._toggle-filter_, ._filter-title_').click(function() {
        $(this).parent().find('.filter-category-items').slideToggle(300);

        let height = $(this).parent().children('.filter-category-items').height();

        if(parseInt(height) == 0) {
           $(this).parents('.filter-category').children('._toggle-filter_').html('<i class="fa fa-minus"></i>');
        }else {
            $(this).parents('.filter-category').children('._toggle-filter_').html('<i class="fa fa-plus"></i>');
        }
    });

    // Select Toggle
    function toggleSelect() {
        $(document).click(function(e) {
            let clicked = $(e.target);
            let select;
            if(clicked.is('._select_')) {

                $(clicked).find('._select-options_').slideToggle(300);
                select = $(this).find('._select-options_').height();

                if(parseInt(select) == 0) {
                    $(this).find('._select_').find('.chevron').css('transform', 'rotate(-180deg)');
                }else {
                    $(this).find('._select_').find('.chevron').css('transform', 'rotate(-360deg)');
                }

                $('._select-option_').click(function() {
                    let optionHTML = $(this).html();
                    $(this).parents('._select_').children('span').html(optionHTML);
                    $(clicked).find('._select-options_').slideUp(300);
                    $('._select_').find('.chevron').css('transform', 'rotate(-360deg)');
                });
            }else {
                $(clicked).find('._select-options_').slideUp(300);
            }
        });

    }

    changeInput();
    changeItemCountInACard();
    toggleSelect();
});
