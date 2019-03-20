function setCookie(cname, exdays,callback) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname+";" + expires + ";path=/";
    callback();
}
function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
function deleteCookie(name) {
    document.cookie = name + "=" + "; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
}

function requestPost(url,body,callback){
    var oAjaxReq = new XMLHttpRequest();
    oAjaxReq.open("post", url, true);
    oAjaxReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    oAjaxReq.send(body);
    oAjaxReq.onreadystatechange = callback;
}
function ValidateEmail(mail)
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
    {
        return (true)
    }else{
        return (false)
    }
}
function ValidatePhoneNumber(phone)
{
    var phoneno = /^\d{10}$/;
    if(phone.match(phoneno)){
        return true;
    }
    else
    {
        return false;
    }
}
function closeError(errorText){
    $('.send_loading').css({'display':'none'});
    $('.send_error_vse').css({
        'top':'50px'
    });
    $('.send_error_vse').text(errorText);
    setTimeout(function () {
        $('.send_error_vse').css({
            'top':'-10000px'
        });
    },2000);

}