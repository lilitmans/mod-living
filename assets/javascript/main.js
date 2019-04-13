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
});
