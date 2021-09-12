// Модальный скролл наверх
$('.modal_up_button').click(function() {
    $('html, body').animate({scrollTop : 0}, 300);
});

//// Модальный скролл наверх
var modal_header = $('.modal_up_button');
var scrollModal= 0;

checkSkrollModal(scrollModal);

$(window).on('scroll', function() {
    scrollModal = $(this).scrollTop();
    checkSkrollModal(scrollModal);
});

function checkSkrollModal(scrollModal) {

    if (scrollModal >= 5) {
        $('.modal_up_button').addClass('active');

    } else {
        $('.modal_up_button').removeClass('active');
    };

};


// Modal Footer Scroll V2
var $win = $(window);
var $marker = $('.modal_articles_footer');

//отслеживаем событие прокрутки страницы
$win.scroll(function() {

    if($win.scrollTop() + $win.height() >= $marker.offset().top) {
        $('.modal_articles_footer_scroll').removeClass('active');
    }else{
        $('.modal_articles_footer_scroll').addClass('active');
    }
});


// Hover Window
// Open
$('.hover_button').each(function(){
    // Open
    $(this).mouseenter(function(){
        $(this).parent().find('.hover_window').addClass('active');
        $(this).parent().find('.hover_button').addClass('active');
        setTimeout(function(){
            $('.hover_window').addClass('position');
        }, 5);
    });

    // Close
    $(this).parent().mouseleave(function(){
        $('.hover_window').removeClass('position')

        setTimeout(function(){
            $('.hover_window').removeClass('active');
            $('.hover_button').removeClass('active');
        }, 50);
    });

});


// Modal Articles Image Active
$('.modal_articles_block_screenshot').each(function(){
    // Открываем изображение
    $(this).click(function(){
        $(this).addClass('active');
        $(this).find('.modal_articles_image_active').toggleClass('active');
    });

    // Если произошел скролл
    $(window).scroll(function(){
        $('.modal_articles_image_active').removeClass('active');
        $('.explanation').removeClass('position');

        setTimeout(function(){
            $('.explanation').removeClass('active');
        }, 50);
    });

});


// Explanation Click
$('.explanation').click(function(){
    $(this).addClass('active');
    setTimeout(function(){
        $('.explanation').addClass('position');
    }, 5);

    $('.explanation').not(this).removeClass('active');
    $('.explanation').not(this).removeClass('position');
});


// Modal Header Burger Menu
$(document).ready(function(){
    $('.modal_articles_header_mobile_burger_menu').click(function(){
        if($('.modal_articles_header_mobile_burger_menu').hasClass('open')) {
            $('.modal_articles_header_mobile_burger_menu_window_wrapper').removeClass('open');
            $('.modal_articles_footer_scroll_mobile').removeClass('notScroll');
            $('.modal_articles_footer_mobile').removeClass('notScroll');
            setTimeout(function(){
                $('.modal_articles_header_mobile_burger_menu').removeClass('open');
                $('body').removeClass('mobile_window');
                $('.modal_articles_header_mobile_burger_menu_window').removeClass('open');
            }, 100);

        } else {
            $('.modal_articles_header_mobile_burger_menu').addClass('open');
            $('body').addClass('mobile_window');
            $('.modal_articles_header_mobile_burger_menu_window_wrapper').addClass('open');
            $('.modal_articles_header_mobile_burger_menu_window').addClass('open');
            $('.modal_articles_footer_scroll_mobile').addClass('notScroll');
            $('.modal_articles_footer_mobile').addClass('notScroll');
        };

    });
});

$('.modal_articles_header_mobile_burger_menu_window_close').click(function(){
    $('.modal_articles_header_mobile_burger_menu_window_wrapper').removeClass('open');
    $('.modal_articles_footer_scroll_mobile').removeClass('notScroll');
    $('.modal_articles_footer_mobile').removeClass('notScroll');
    setTimeout(function(){
        $('.modal_articles_header_mobile_burger_menu').removeClass('open');
        $('body').removeClass('mobile_window');
        $('.modal_articles_header_mobile_burger_menu_window').removeClass('open');
    }, 100);
})

function notScroll () {
    $(document).on('touchmove',function(e){
        e.preventDefault();
    });
};

function BurgerClosed () {
    $('.modal_articles_header_mobile_burger_menu_window_wrapper').removeClass('open');
    $('.modal_articles_footer_scroll_mobile').removeClass('notScroll');
    $('.modal_articles_footer_mobile').removeClass('notScroll');
    setTimeout(function(){
        $('.modal_articles_header_mobile_burger_menu').removeClass('open');
        $('body').removeClass('mobile_window');
        $('.modal_articles_header_mobile_burger_menu_window').removeClass('open');
    }, 100);
};


// Modal Footer Scroll More Window
$('.modal_articles_footer_scroll_mobile_more_button').click(function(){
    $('.modal_articles_footer_scroll_mobile_more_window').toggleClass('active');
    $('.modal_articles_footer_scroll_mobile_more_button').toggleClass('active');
    setTimeout(function(){
        $('.modal_articles_footer_scroll_mobile_more_window').toggleClass('position');
    },5);
});

//закрыть - если клик вне блока
jQuery(function($){
    $(document).mouseup(function (e){
        var div = $(".modal_articles_footer_scroll_mobile_more");

        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass('position');
            $('.modal_articles_footer_scroll_mobile_more_window').removeClass('position');

            setTimeout(function(){
                $('.modal_articles_footer_scroll_mobile_more_window').removeClass('active'); $('.modal_articles_footer_scroll_mobile_more_button').removeClass('active');
            },5);
        }
    });
});

// Modal Footer Scroll Share Window
$('.modal_articles_footer_scroll_mobile_share_button').click(function(){
    $('.modal_articles_footer_scroll_mobile_share_window').toggleClass('active');
    $('.modal_articles_footer_scroll_mobile_share_button').toggleClass('active');
    setTimeout(function(){
        $('.modal_articles_footer_scroll_mobile_share_window').toggleClass('position');
    },5);
});

//закрыть - если клик вне блока
jQuery(function($){
    $(document).mouseup(function (e){
        var div = $(".modal_articles_footer_scroll_mobile_share");

        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass('position');
            $('.modal_articles_footer_scroll_mobile_share_window').removeClass('position');

            setTimeout(function(){
                $('.modal_articles_footer_scroll_mobile_share_window').removeClass('active'); $('.modal_articles_footer_scroll_mobile_share_button').removeClass('active');
            },5);
        }
    });
});

// Modal Footer Scroll Mobile V1
var $winScroll = $(window);
var $markerScroll = $('.modal_articles_footer_mobile');
$(window).bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0 && !($winScroll.scrollTop() + $winScroll.height() >= $markerScroll.offset().top)) {
        $('.modal_articles_footer_scroll_mobile').addClass('active');
    }
    else {
        $('.modal_articles_footer_scroll_mobile').removeClass('active');


        $('.modal_articles_footer_scroll_mobile_share_window').removeClass('position');

        setTimeout(function(){
            $('.modal_articles_footer_scroll_mobile_share_window').removeClass('active'); $('.modal_articles_footer_scroll_mobile_share_button').removeClass('active');
        },5);


        $('.modal_articles_footer_scroll_mobile_more_window').removeClass('position');

        setTimeout(function(){
            $('.modal_articles_footer_scroll_mobile_more_window').removeClass('active'); $('.modal_articles_footer_scroll_mobile_more_button').removeClass('active');
        },5);


    }
});

// Modal Footer  More Window
$('.modal_articles_footer_mobile_more_button').click(function(){
    $('.modal_articles_footer_mobile_more_window').toggleClass('active');
    $('.modal_articles_footer_mobile_more_button').toggleClass('active');
    setTimeout(function(){
        $('.modal_articles_footer_mobile_more_window').toggleClass('position');
    },5);
});

//закрыть - если клик вне блока
jQuery(function($){
    $(document).mouseup(function (e){
        var div = $(".modal_articles_footer_mobile_more");

        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass('position');
            $('.modal_articles_footer_mobile_more_window').removeClass('position');

            setTimeout(function(){
                $('.modal_articles_footer_mobile_more_window').removeClass('active'); $('.modal_articles_footer_mobile_more_button').removeClass('active');
            },5);
        }
    });
});

// Modal Footer Share Window
$('.modal_articles_footer_mobile_share_button').click(function(){
    $('.modal_articles_footer_mobile_share_window').toggleClass('active');
    $('.modal_articles_footer_mobile_share_button').toggleClass('active');
    setTimeout(function(){
        $('.modal_articles_footer_mobile_share_window').toggleClass('position');
    },5);
});

//закрыть - если клик вне блока
jQuery(function($){
    $(document).mouseup(function (e){
        var div = $(".modal_articles_footer_mobile_share");

        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass('position');
            $('.modal_articles_footer_mobile_share_window').removeClass('position');

            setTimeout(function(){
                $('.modal_articles_footer_mobile_share_window').removeClass('active'); $('.modal_articles_footer_mobile_share_button').removeClass('active');
            },5);
        }
    });
});


// Dark Theme
$('.modal_articles_theme').click(function(){
    $(this).addClass('dark-theme');
    $('.modal_articles_dark_theme').addClass('dark-theme');
    $('.theme_off').addClass('dark-theme');
    $('.theme_on').addClass('dark-theme');
    $('.modal_articles').addClass('dark-theme');
    $('.modal_articles_inner').addClass('dark-theme');
    $('.modal_articles_icons').addClass('dark-theme');
    $('.modal_up_button').addClass('dark-theme');
    $('.modal_back_btn').addClass('dark-theme');
});

$('.modal_articles_dark_theme').click(function(){
    $(this).removeClass('dark-theme');
    $('.modal_articles_theme').removeClass('dark-theme');
    $('.theme_on').removeClass('dark-theme');
    $('.theme_off').removeClass('dark-theme');
    $('.modal_articles').removeClass('dark-theme');
    $('.modal_articles_inner').removeClass('dark-theme');
    $('.modal_articles_icons').removeClass('dark-theme');
    $('.modal_up_button').removeClass('dark-theme');
    $('.modal_back_btn').removeClass('dark-theme');
});

// Dark Theme Mobile
$('.theme_on').click(function(){
    $(this).addClass('dark-theme');
    $('.theme_off').addClass('dark-theme');
    $('.modal_articles_theme').addClass('dark-theme');
    $('.modal_articles_dark_theme').addClass('dark-theme');
    $('.modal_articles').addClass('dark-theme');
    $('.modal_articles_inner').addClass('dark-theme');
    $('.modal_articles_icons').addClass('dark-theme');
    $('.modal_up_button').addClass('dark-theme');
    $('.modal_back_btn').addClass('dark-theme');
});

$('.theme_off').click(function(){
    $(this).removeClass('dark-theme');
    $('.theme_on').removeClass('dark-theme');
    $('.modal_articles_theme').removeClass('dark-theme');
    $('.modal_articles_dark_theme').removeClass('dark-theme');
    $('.modal_articles').removeClass('dark-theme');
    $('.modal_articles_inner').removeClass('dark-theme');
    $('.modal_articles_icons').removeClass('dark-theme');
    $('.modal_up_button').removeClass('dark-theme');
    $('.modal_back_btn').removeClass('dark-theme');
});











