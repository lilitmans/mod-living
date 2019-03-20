var x = false;
$(window).load(function () {
    $("body").removeClass("worck");
})
setTimeout(function () {
    $("body").removeClass("worck");
},15000)
$(document).ready(function () {

    $("form").submit(function () {
        $("body").addClass("worck");
    })

    var body = document.body,
        html = document.documentElement;

    var height = Math.max( body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight );
    console.log(height)
    $("div#menu").css('height',height+"px");

    /* for lang */
    $(document).on("change",".onoffswitch-checkbox",function() {
        if($(this).prop("checked")){
            $('.forrus').css('display','block');
            $('.foreng').css('display','none');
        }else{
            $('.forrus').css('display','none');
            $('.foreng').css('display','block');
        }

    });

    $(".lang_colums").click(function () {
        $(".lang_colums").removeClass('active');
        $(this).addClass('active');
    })

    $(document).on("click",".radio_lang",function() {
        console.log($(this).data('name'))
        if($(this).data('name') == 'rus'){
            $('.forrus').css('display','block');
            $('.foreng').css('display','none');
            $('.forarm').css('display','none');
        }else if($(this).data('name') == 'eng'){
            $('.forrus').css('display','none');
            $('.forarm').css('display','none');
            $('.foreng').css('display','block');
        }else if($(this).data('name') == 'arm'){
            $('.forarm').css('display','block');
            $('.forrus').css('display','none');
            $('.foreng').css('display','none');
        }

    });
    /* for lang end */

    /* cookie notification */
    var cok = getCookie('not');
    if(cok == 'up'){
        $('#update_not').css('display','block');
        $('#save_not').css('display','none');
        $('.save_done').css('top','0');
        deleteCookie('not');
        setTimeout(function(){
            $('.save_done').css('top','-120px');
        },2000)
    }
    
    if(cok == 'save'){
        $('#save_not').css('display','block');
        $('#update_not').css('display','none');
        $('.save_done').css('top','0');
        deleteCookie('not');
        setTimeout(function(){
            $('.save_done').css('top','-120px');
        },2000)
    }
    /* cookie notification */
    
    $('.dropdown').click(function (e) {
        $('.dropdown').removeClass('open');
        $(this).toggleClass('open');
        e.stopPropagation();
    });

    $(document).click(function () {
        $('.dropdown').removeClass('open');
        setAutoheightZero();
    });
    $('.open_sub_menu').click(function () {
        $(this).parent('li').next('ul.main_sub_menu').slideToggle();
        return false;
    });
    $('._click_next').click(function () {
        $('.open_sub_menu').trigger('click');
    })


    $('#table_div table').DataTable({
        "iDisplayLength": 25,
        "lengthMenu": [10, 25, 50, 75, 100, 200],
        language: {
            searchPlaceholder: "Search"
        },
        "ordering": false
    });

    $('.setsize').click(function () {
        elementChild = $(this).children('i');
        elementChild.toggleClass('fa-minus');
        elementChild.toggleClass('fa-plus');
        element = $(this).parent('div').parent('div').next('div.box_edit');
        element.slideToggle();
    })
    
    $( "._foto_block" ).click(function() {
      $(this).children(".img_file" )[0].click();
    });
    $( ".foto_block img" ).click(function() {
        $(this).next(".img_file" )[0].click();
    });

    $( "._chose_file" ).click(function() {
        $(this).next('.foto_block').children(".img_file" )[0].click();
    });


    function renderImage(file,x){
        var reader = new FileReader();
        reader.onload = function(event){
                the_url = event.target.result;
                $(x).prev('img').css('display','block');
                $(x).prev('img').attr('src',the_url);
        }
        reader.readAsDataURL(file);
    }

    $( ".img_file" ).change(function() {
        $(this).parent('div.foto_block').removeClass('forempty');
        $(this).parent('div.foto_block').addClass('forfull');
        renderImage(this.files[0],this)
    });

    /*********** Absolute img ************/
        // $( "._foto_block" ).click(function() {
        //     $(this).children(".img_file" )[0].click();
        // });


        function renderImageAb(file,x){
            var reader = new FileReader();
            reader.onload = function(event){
                the_url = event.target.result;
                $(x).prev('img').css('display','block');
                $(x).prev('img').attr('src',the_url);
            }
            reader.readAsDataURL(file);
        }

        $( ".ab_img_f" ).change(function() {
            $(this).parent('div.foto_block').removeClass('forempty');
            $(this).parent('div.foto_block').addClass('forfull');
            renderImageAb(this.files[0],this)
        });
    /***********************/

    /****************************************/
        // $( "._video_block" ).click(function() {
        //     $(this).children(".video_file" )[0].click();
        // });


        $( "._chose_video" ).click(function() {
            $(this).next('.video_block').children(".video_file" )[0].click();
            console.log('asd')
        });

        function renderVideo(file,x){
            var reader = new FileReader();
            reader.onload = function(event){
                the_url = event.target.result;
                $(x).next('video').css('display','block');
                $(x).next('video').attr('src',the_url);
                //$(x).prev('video').children('source').attr('src',the_url);
            }
            reader.readAsDataURL(file);
        }

        $( ".video_file" ).change(function() {
            $(this).parent('div.video_block').removeClass('forempty');
            $(this).parent('div.video_block').addClass('forfull');
            renderVideo(this.files[0],this)
        });
    /****************************************/

    //$(".action_delete").click(function(){
    $(document).on("click",".action_delete",function() {
        if(!confirm("Вы действительно хотите удалить?")){return false;}
        var self = $(this);

        var contr = $(this).data('get');
        var url = base+"/"+contr+"/delete/";

        var id = $(this).data('id');
        var body = "id="+id+"";
        requestPost(url,body,function(){
            if(this.readyState == 4){
                var result = JSON.parse(this.responseText);
                if(result.error){
                    self.parent('td').parent('tr').fadeOut();
                    if(contr === 'about'){
                        self.parent('div').parent('div').parent('form').parent('div').fadeOut();
                    }
                }else{

                }

            }
        })
    });

})
function autoHeightAnimate(element, time) {
    if (element.is(':animated')) {
        return false;
    }
    var curHeight = element.height(),
    autoHeight = element.css('height', 'auto').height();
    element.height(curHeight);
    element.stop().animate({height: autoHeight}, parseInt(time));
}
function setAutoheightZero() {
    time = 300;
    element = $('ul.select_options');
    if (element.is(':animated')) {
        return false;
    }
    element.stop().animate({height: 0}, parseInt(time));
}
function sendPostAjax(url,params,callback){
    $.ajax({
        type: "POST",
        url: url,
        data: {params: params},
        dataType: "json",
        success: function (result) {
           callback(result);
        },
    });
   
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

function setCook(name,value){
    document.cookie = name + "=" +value;
}

function requestPost(url,body,callback){
    var oAjaxReq = new XMLHttpRequest();
    oAjaxReq.open("post", url, true);
    oAjaxReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    oAjaxReq.send(body);
    oAjaxReq.onreadystatechange = callback;
}

function requestGet(url,callback){
    var oAjaxReq = new XMLHttpRequest();
    oAjaxReq.open("get", url, true);
    //oAjaxReq.withCredentials = true;
    oAjaxReq.send();
    oAjaxReq.onreadystatechange = callback;

}