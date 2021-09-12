//Receiving Signals Item
var rsItem = $('div.receiving_signals_item').length;
var stubItem = $('div.receiving_signals_stub').length;

if(rsItem == 0 || stubItem == 4) {
    $('.receiving_signals_notification').addClass('active');
    $('.receiving_signals_stub').addClass('active');
}

if(rsItem == 1) {
    $('.receiving_signals_item.view_all').css('display', 'none');
    $('.receiving_signals_notification').addClass('active');
    $('.receiving_signals_stub').addClass('active');
}

if(rsItem == 2) {
    $('.receiving_signals_item.view_all').css('display', 'none');
    $('div .receiving_signals_stub:first').css('display', 'none');
    $('.receiving_signals_notification').removeClass('active');
    $('.receiving_signals_stub').removeClass('active');
    hoverReceivingSignals();
};

if(rsItem == 3) {
    $('.receiving_signals_item.view_all').css('display', 'none');
    $('div .receiving_signals_stub:first').css('display', 'none');
    $("div .receiving_signals_stub:eq(1)").css('display', 'none');
    $('.receiving_signals_notification').removeClass('active');
    $('.receiving_signals_stub').removeClass('active');
    hoverReceivingSignals();
};

if(rsItem == 4) {
    $('.receiving_signals_item.view_all').css('display', 'none');
    $('div .receiving_signals_stub:first').css('display', 'none');
    $("div .receiving_signals_stub:eq(1)").css('display', 'none');
    $("div .receiving_signals_stub:eq(2)").css('display', 'none');
    $('.receiving_signals_notification').removeClass('active');
    $('.receiving_signals_stub').removeClass('active');
    hoverReceivingSignals();
};

if(rsItem == 5) {
    $('.receiving_signals_item.view_all').css('display', 'none');
    $('div .receiving_signals_stub:first').css('display', 'none');
    $("div .receiving_signals_stub:eq(1)").css('display', 'none');
    $("div .receiving_signals_stub:eq(2)").css('display', 'none');
    $("div .receiving_signals_stub:eq(3)").css('display', 'none');
    $('.receiving_signals_notification').removeClass('active');
    $('.receiving_signals_stub').removeClass('active');
    hoverReceivingSignals();
};

// Карусель Receiving Signals Item
if(rsItem > 5) {
    $('.receiving_signals_item').addClass('carousel');
    $('.receiving_signals_arrows').addClass('active');
    $('.receiving_signals_container').addClass('active');
    $('.signal_history').addClass('active');

    $('div .receiving_signals_stub').remove();
    $('.receiving_signals_notification').removeClass('active');

    $('#receiving_signals').each(function () {
        // Создаем карусель
        var owl = $(this).find('.owl-carousel').owlCarousel({
            items: 4,
            margin: 15,
            slideBy: 1,
            onDrag: 1,
            onDragged: 10,
            mouseDrag: false,
            touchDrag: false,
        });


        owl.on('drag.owl.carousel', function(event) {
            stopPrevSignals();
            stopNextSignals();
        });

        owl.on('dragged.owl.carousel', function(event) {
            stopPrevSignals();
            stopNextSignals();
        });

        // При клике по кнопке Влево
        $(this).find('.receiving_signals_arrows_left').on('click', function () {
            // Перематываем карусель назад
            owl.trigger('prev.owl.carousel');
            stopPrevSignals();
            stopNextSignals();
        });

        // При клике по кнопке Вправо
        $(this).find('.receiving_signals_arrows_right').on('click', function () {
            // Перематываем карусель вперед
            owl.trigger('next.owl.carousel');
            stopPrevSignals();
            stopNextSignals();
        });

    });

};

$('div.receiving_signals_item').first().addClass('first');

function stopPrevSignals () {
    if($('.receiving_signals_item.first').parent().hasClass('active')) {
        $('.receiving_signals_arrows_left').removeClass('active');
    } else {
        $('.receiving_signals_arrows_left').addClass('active');
    };
};


if(rsItem > 4) {
    hoverReceivingSignalsMore();
    function stopNextSignals () {
        $('div.receiving_signals_item').last().addClass('last');

        if($('.receiving_signals_item.last').parent().hasClass('active')) {
            $('.receiving_signals_arrows_right').addClass('active');
        } else {
            $('.receiving_signals_arrows_right').removeClass('active');
        };
    };
};

function hoverReceivingSignals () {
    $('.receiving_signals_item').each(function(){
        $(this).hover(function(){
            $(this).addClass('hover');

            $(this).mouseleave(function(){
                $(this).removeClass('hover');
            });
        });
    });
}

function hoverReceivingSignalsMore () {
    $('.receiving_signals_item').each(function(){
        $(this).hover(function(){
            $(this).addClass('hover_more');

            $(this).mouseleave(function(){
                $(this).removeClass('hover_more');
            });
        });
    });
}

// Receiving Signals Mobile
var rsItemMobile = $('div.receiving_signals_mobile_item').length;
var StubItemMobile = $('div.receiving_signals_mobile_stub').length;

if(rsItemMobile == 0 || StubItemMobile == 4 ) {
    $('.receiving_signals_mobile_notification').addClass('active');
};

if(rsItemMobile == 1) {
    $('.receiving_signals_mobile_item.view_all').css('display', 'none');
    $('.receiving_signals_mobile_notification').addClass('active');
};

if(rsItemMobile == 2) {
    $('.receiving_signals_mobile_item.view_all').css('display', 'none');
    $('div .receiving_signals_mobile_stub:first').css('display', 'none');
    $('.receiving_signals_mobile_notification').removeClass('active');
};

if(rsItemMobile == 3) {
    $('.receiving_signals_mobile_item.view_all').css('display', 'none');
    $('div .receiving_signals_mobile_stub:first').css('display', 'none');
    $("div .receiving_signals_mobile_stub:eq(1)").css('display', 'none');
    $('.receiving_signals_mobile_notification').removeClass('active');
};

if(rsItemMobile >= 4) {
    $('.receiving_signals_mobile_item.view_all').css('display', 'none');
    $('div .receiving_signals_mobile_stub:first').css('display', 'none');
    $("div .receiving_signals_mobile_stub:eq(1)").css('display', 'none');
    $("div .receiving_signals_mobile_stub:eq(2)").css('display', 'none');
    $('.receiving_signals_mobile_notification').removeClass('active');
};

if(rsItemMobile >= 5) {
    $('div .receiving_signals_mobile_stub:first').css('display', 'none');
    $("div .receiving_signals_mobile_stub:eq(1)").css('display', 'none');
    $("div .receiving_signals_mobile_stub:eq(2)").css('display', 'none');
    $("div .receiving_signals_mobile_stub:eq(3)").css('display', 'none');
    $('.receiving_signals_mobile_notification').removeClass('active');
};


// History Signals Accordion
$(function() {
    var Accordion = function(el, multiple) {
        this.el = el || {};
        // more then one submenu open?
        this.multiple = multiple || false;

        var dropdownlink = this.el.find('.signal_history_item_inner');
        dropdownlink.on('click',
            { el: this.el, multiple: this.multiple },
            this.dropdown);
    };

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el,
            $this = $(this),
            //this is the ul.submenuItems
            $next = $this.next();


        $next.slideToggle();
        $this.parent().toggleClass('active');


        if(!e.data.multiple) {
            //show only one menu at the same time
            $el.find('.signals_history_desc').not($next).slideUp().parent().removeClass('active');

        }
    };

    var accordion = new Accordion($('.signal_history_item'), false);
});

// History Item Gallery Ajax
$('body').on('click', '.history_item', function (e) {
    e.preventDefault();
    var id = $(this).data('id');

    $.ajax({
        url: '/ideasgallery/view',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            showIdeasGallery(res);

        },
        error: function () {
            alert('Ошибка, попробуйте позже');
        }
    });
});


// загружаем скриншоты и описание
function showIdeasGallery(screen) {
    $('#history_item .desc_screen_wrap').html(screen);
};




// Добавление последнему Articles Mobile Item класс latest
$('.latest_news_mobile_item:last').addClass('last');


// Карусель Latest News
setTimeout(function() {
    $('.latest_news').addClass('active');
}, 200);
$('#latest_news').each(function () {

    // Создаем карусель
    var owl = $(this).find('.owl-carousel').owlCarousel({
        items: 2,
        margin: 40,
        slideBy: 2,
        onDrag: 1,
        onDragged: 10,
        mouseDrag: false,
        touchDrag: false,
    });


    owl.on('drag.owl.carousel', function(event) {
        stopNext();
        stopPrev();
    });

    owl.on('dragged.owl.carousel', function(event) {
        stopNext();
        stopPrev();
    });

    // При клике по кнопке Влево
    $(this).find('.latest_news_arrow_left').on('click', function () {
        // Перематываем карусель назад
        owl.trigger('prev.owl.carousel');
        stopNext();
        stopPrev();
    });

    // При клике по кнопке Вправо
    $(this).find('.latest_news_arrow_right').on('click', function () {
        // Перематываем карусель вперед
        owl.trigger('next.owl.carousel');
        stopNext();
        stopPrev();
    });

});

$('.latest_news_item').first().addClass('first');
$('.latest_news_item').last().addClass('last');

function stopNext () {
    if($('.latest_news_item.last').parent().hasClass('active')) {
        $('.latest_news_arrow_right').addClass('active');
    } else {
        $('.latest_news_arrow_right').removeClass('active');
    };
};

function stopPrev () {
    if($('.latest_news_item.first').parent().hasClass('active')) {
        $('.latest_news_arrow_left').removeClass('active');
    } else {
        $('.latest_news_arrow_left').addClass('active');
    };
};




// Modal Signal Window Ajax
$('body').on('click', '.modal_msw', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    history.pushState({}, '', 'ideas/view?id=' + id);

    $.ajax({
        url: '/ideas/view',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            showSignal(res);

        },
        error: function () {
            alert('Ошибка, попробуйте позже');
        }
    });
});


// при синхронном запросе
if($.cookie('ideas_ajax') != null) {
    var ctr = $.cookie('ideas_ajax');

    setTimeout(function () {
        history.pushState({}, '', 'ideas/view?id=' + ctr);

        $.ajax({
            url: '/ideas/view',
            data: {id: ctr},
            type: 'GET',
            success: function (res) {
                showSignal(res);

            },
            error: function () {
                alert('Ошибка, попробуйте позже');
            }
        });

        $('.signal_modal_window').addClass('open');
        $('#preloader_modal').addClass('open');
        $('.header').addClass('modal_window');
        $('.subheader').addClass('modal_window');
        $('body').addClass('modal_window');
        $('html').addClass('modal_window');
    },400);

}


// показываем модальное окно
function showSignal(signal) {
    $('#modal_signal .signal_modal_window_inner').html(signal);
    setTimeout(function () {
        $('#modal_signal').removeClass('open');
        $('#preloader_modal').removeClass('open');
        $('#modal_signal').addClass('active');
    }, 200);
};

$('.modal_msw').click(function () {
        $('.signal_modal_window').addClass('open');
        $('#preloader_modal').addClass('open');
        $('.header').addClass('modal_window');
        $('.subheader').addClass('modal_window');
        $('body').addClass('modal_window');
        $('html').addClass('modal_window');
});

// удаляем иконку "новый" при клике
$('.receiving_signals_item').each(function () {
    var $this = $(this);
    $(this).click(function () {
        setTimeout(function () {
            $this.find('.receiving_signals_item_viewed_card').css('display', 'block').setTimeout(300);
        }, 300);
    })
});

// для мобильных устройств
$('.receiving_signals_mobile_item').each(function () {
    var $this = $(this);
    $(this).click(function () {
        setTimeout(function () {
            $this.find('.receiving_signals_item_viewed_card').css('display', 'block').setTimeout(300);
        }, 300);
    })
});

//Close - если клик вне блока
jQuery(function($){
    $(document).mouseup(function (e){
        var div = $(".signal_modal_window_inner");
        var baseUrl = window.location.origin + '/ideas';
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass('active');
            $('#modal_signal').removeClass('open');
            $('#preloader_modal').removeClass('open');
            $('.signal_modal_window').removeClass('active');
            $('.header').removeClass('modal_window');
            $('.subheader').removeClass('modal_window');
            $('body').removeClass('modal_window');
            $('html').removeClass('modal_window');
            window.history.pushState({}, '', baseUrl);
            $.removeCookie('ideas_ajax', { path: '/' });
            $.removeCookie('history_ajax', { path: '/' });
        }
    });
});


//  запрет перехода по ссылке, если текущий элемент имеет класс активный
$('.header_navigation_link.active').click(function () {
    return false;
});

$('.subheader_mobile_navigation_link.active').click(function () {
    return false;
});


















