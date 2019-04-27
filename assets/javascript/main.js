//.......get selected value and math. symbol and count the remainder.......
function changeValue(val, sign) {
    let result = eval(parseInt(val) + sign + parseInt(1));
    if(Math.sign(result) == -1){
        result = 0;
    }
    return result;
}

$(document).ready(function() {

    var windowHeigth = $(window).height();
    var bodyHeight = $("body").height();

    if(bodyHeight < windowHeigth) {
        $("body").css({
            'height': windowHeigth
        })
        $('footer').addClass('footer-absolute');
    }else {
        $('footer').removeClass('footer-absolute');
    }


    $(".add-value").click(function() {
        let val = $(this).parent().find(".selected-value").html();
        let cangedVal = changeValue(val, "+");
        $(this).parent().find(".selected-value").html(cangedVal);
    });

    $(".subtract-value").click(function() {
        let val = $(this).parent().find(".selected-value").html();
        let cangedVal = changeValue(val, "-");
        $(this).parent().find(".selected-value").html(cangedVal);
    });

    $(".tour-date").click(function() {
        $(this).parent().children('.tour-date').removeClass('selected-date');
        $(this).addClass('selected-date');
    });

    $('.tour-full-programm-day-title-block').click(function() {
        $(this).children('.see-more-btn-block').toggleClass('opened-desc');

        if($(this).children().hasClass('opened-desc')) {
            $(this).parents('.tour-full-programm-day-blcok').find('.tour-full-programm-more-desc').slideDown();
        }else {
            $(this).parents('.tour-full-programm-day-blcok').find('.tour-full-programm-more-desc').slideUp();
        }

    });

    $('.account-settings-menu-list-item').click(function() {
        var accountSettingsContent = $('.account-settings-section');
        var data = $(this).attr('data');

        $(this).parent().children('.account-settings-menu-list-item').removeClass('active-list-item');
        $(this).addClass('active-list-item');

        $(this).parent().children('.account-settings-menu-list-item').children().removeClass('active-list-item-link');
        $(this).children().addClass('active-list-item-link');

        for(var i=0; i<accountSettingsContent.length; i++) {
            if(data == i) {
                $(accountSettingsContent[i]).addClass('open');
            }else {
                $(accountSettingsContent[i]).removeClass('open');
            }
        }
    });

    $('.single-service-menu-list-item').click(function() {
        $(this).parent().find('.sidebar-menu-list-item-link').removeClass('changeColor');
        $(this).children('.sidebar-menu-list-item-link').toggleClass('changeColor');
    });
});
