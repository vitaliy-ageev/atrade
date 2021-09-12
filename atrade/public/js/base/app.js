// Up Button
var baseUpButton = $('.up_button');
var baseScrollTop = 0;

baseCheckScroll(baseScrollTop);

$(window).on('scroll', function() {
    baseScrollTop = $(this).scrollTop();
    baseCheckScroll(baseScrollTop);
});

function baseCheckScroll(baseScrollTop) {

    if (baseScrollTop >= 100) {
        $('.up_button').addClass('active');
        $('.go_back_btn').addClass('active');

    } else {
        $('.up_button').removeClass('active');
        $('.go_back_btn').removeClass('active');
    };

};


// lang section
$(".header_lang_selection_button").click(function() {
    $('.header_lang_selection_list_block').addClass('active');
});

jQuery(function($){
    $(document).mouseup(function (e){
        var div = $(".header_lang_selection_list_block");

        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass('active');
        }
    });
});

// Если произошел скролл
$(window).scroll(function(){
    $('.header_lang_selection_list_block').removeClass('active');
});





// Subheader Mobile Scroll
var scrollPos = 0;
var $subheaderMobile = $('.subheader_mobile');
$(window).scroll(function(){
    var st = $(this).scrollTop();
    if (st > scrollPos && st > 54) {
        $('.subheader_mobile').removeClass('active');
        $('.subheader_mobile').addClass('hide');
    } else if (st < scrollPos && st != 0){
        $('.subheader_mobile').removeClass('hide');
        $('.subheader_mobile').addClass('active');
    } else {
        $('.subheader_mobile').removeClass('active');
        $('.subheader_mobile').removeClass('hide');
    };
    scrollPos = st;
});


// Скролл наверх
function slowScroll(id) {
    var offset = 74;
    $('html, body').animate({
        scrollTop: $(id).offset().top - offset
    }, 300);
    return false;
};


// Cookie Notification
$('.cookie_notification_text_button').click(function(){
    // если произошел клик, то создаем куки и скрываем уведомление
    $.cookie('cookie_notification', 'okey', { expires: 90, path: '/' });
    $('.cookie_notification').removeClass('active');
    $('.cookie_notification').addClass('hide');
});

// получаем состояние о куке
$.cookie('cookie_notification');

// если кука есть, то скрываем уведомление
if ( $.cookie('cookie_notification')) {
    $('.cookie_notification').addClass('hide');
} else {
    // иначе показываем
    $('.cookie_notification').addClass('active');
}



// Search
$(".header_search").click(function() {
    $('.header_search_form').addClass('active');
    $('.header_search').addClass('active');
//  $('.search_form_close').addClass('active');
    $('.search_form_input').focus();

});

//Если клик полизошел вне блока - то скрыть его
jQuery(function($){
    $(document).mouseup(function (e){
        var div = $(".header_search");

        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass('active');
            $('.header_search_form').removeClass('active');
        }
    });
});

//Если не пуст инпут - то показать крестик
$('.header_search_input').on('keyup',function(){
    var $this = $(this),
        val = $this.val();

    if(val.length >= 1){
        $('.header_search_icon').addClass('active');
    }else {
        $('.header_search_icon').removeClass('active');
    }
});

// Если произошел клик по крестику то очистить поле и удалить крестик
$('.search_form_close').click(function() {
    $('.search_form').removeClass('active');
    $('.search').removeClass('active');
    $('.search_form_input').val('');
    $('.search_form_close').removeClass('active');
});


// Bloodhound
var path = '<?=PATH;?>';
var questions = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        wildcard: '%QUERY',
        url: path + '/search/typeahead?query=%QUERY'
    }
});

questions.initialize();

// Typeahead
$("#page_search").typeahead({
    hint: true,
    hightlight: true,

},{
    name: 'questions',
    display: 'title',
    limit: 9,
    source: questions,

});

$("#page_search").bind('typeahead:select', function (ev, suggestion) {
    window.location = path + '/search/?s=' + encodeURIComponent(suggestion.title);

});

$("#page_search_mobile").bind('typeahead:select', function (ev, suggestion) {
    window.location = path + '/search/?s=' + encodeURIComponent(suggestion.title);

});


// Search Mobile Window
$(document).ready(function(){
    $('.header_search_mobile').click(function(){
        var $bodyScroll = $(document).scrollTop();
        var cleanScroll = $bodyScroll;

        var $bodyStyles = {
            position: "fixed",
            top: -($bodyScroll),
            left: "0",
            right: "0"
        };

        var $bodyStylesClean = {
            position: "",
            top: "",
            left: "",
            right: "",
        };

        if($('.header_search_mobile').hasClass('open')) {
            $('.wrapper_search_mobile_window').removeClass('open');
            setTimeout(function(){
                $('.header_search_mobile').removeClass('open');
                $('body').removeClass('mobile_window');
                $('body').css($bodyStylesClean);
                $(window).scrollTop(cleanScroll);
                $('.search_mobile_window').removeClass('open');
            }, 100);
        } else if ($('.header_burger_menu').hasClass('open')) {
            $('.wrapper_burger_window').removeClass('open');
            setTimeout(function(){
                $('.header_burger_menu').removeClass('open');
                $('.header_burder_menu_window').removeClass('open');
            }, 100);
            $('.header_search_mobile').addClass('open');
            $('body').addClass('mobile_window');
            $('body').css($bodyStyles);
            $('.search_mobile_window').addClass('open');
            $('.wrapper_search_mobile_window').addClass('open');
            $('.search_mobile_window_input').focus();
        } else {
            $('.header_search_mobile').addClass('open');
            $('body').addClass('mobile_window');
            $('body').css($bodyStyles);
            $('.search_mobile_window').addClass('open');
            $('.wrapper_search_mobile_window').addClass('open');
            $('.search_mobile_window_input').focus();
        };

    });
});

$('.search_mobile_window_close').click(function(){
    var $bodyScroll = $(document).scrollTop();
    var cleanScroll = $bodyScroll;

    var $bodyStyles = {
        position: "fixed",
        top: -($bodyScroll),
        left: "0",
        right: "0"
    };

    var $bodyStylesClean = {
        position: "",
        top: "",
        left: "",
        right: "",
    };

    $('.wrapper_search_mobile_window').removeClass('open');
    setTimeout(function(){
        $('.header_search_mobile').removeClass('open');
        $('body').removeClass('mobile_window');
        $('body').css($bodyStylesClean);
        $(window).scrollTop(cleanScroll);
        $('.search_mobile_window').removeClass('open');
        $('.search_mobile_window_input').val('');
    }, 100);
})

$('.search_mobile_window_close_icon').click(function(){
    var $bodyScroll = $(document).scrollTop();
    var cleanScroll = $bodyScroll;

    var $bodyStyles = {
        position: "fixed",
        top: -($bodyScroll),
        left: "0",
        right: "0"
    };

    var $bodyStylesClean = {
        position: "",
        top: "",
        left: "",
        right: "",
    };

    $('.wrapper_search_mobile_window').removeClass('open');
    setTimeout(function(){
        $('.header_search_mobile').removeClass('open');
        $('body').removeClass('mobile_window');
        $('body').css($bodyStylesClean);
        $(window).scrollTop(cleanScroll);
        $('.search_mobile_window').removeClass('open');
        $('.search_mobile_window_input').val('');
    }, 100);
})

$(document).ready(function(){
    $('.search_mobile_window_input').bind('focus',function() {
        $(window).scrollTop(10);
        var keyboard_shown = $(window).scrollTop() > 0;
        $(window).scrollTop(0);

        $('#test').append(keyboard_shown?'keyboard ':'nokeyboard ');
    });
});

function blurInput (){
    $('.search_mobile_window_input').blur();
};

// Header Burger Menu
$(document).ready(function(){
    $('.header_burger_menu').click(function(){
        if($('.header_burger_menu').hasClass('open')) {
            $('.wrapper_burger_window').removeClass('open');
            setTimeout(function(){
                $('.header_burger_menu').removeClass('open');
                $('body').removeClass('mobile_window');
                $('.header_burder_menu_window').removeClass('open');
            }, 100);

        } else {
            $('.header_burger_menu').addClass('open');
            $('body').addClass('mobile_window');
            $('.header_burder_menu_window').addClass('open');
            $('.wrapper_burger_window').addClass('open');
        };

    });
});

$('.header_burger_menu_window_close').click(function(){
    $('.wrapper_burger_window').removeClass('open');
    setTimeout(function(){
        $('.header_burger_menu').removeClass('open');
        $('body').removeClass('mobile_window');
        $('.header_burder_menu_window').removeClass('open');
    }, 100);
})

function noScroll () {
    $(document).on('touchmove',function(e){
        e.preventDefault();
    });
};

function BurgerClose () {
    $('.wrapper_burger_window').removeClass('open');
    setTimeout(function(){
        $('.header_burger_menu').removeClass('open');
        $('body').removeClass('mobile_window');
        $('.header_burder_menu_window').removeClass('open');
    }, 100);
};

// При обновлении - страница всегда вверху
$(window).on('beforeunload', setTimeout(function(){
        $(window).scrollTop(0);
    },100));





















