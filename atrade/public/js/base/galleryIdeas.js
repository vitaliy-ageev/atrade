// Отключение zoom через скролл (в том числе трекападами в macOS)
var noZoomSignals = false;

document.addEventListener('mousewheel', function(e){
    if(!e.ctrlKey && !e.metaKey) return;

    if (noZoomSignals) e.preventDefault();
    if (noZoomSignals) e.stopImmediatePropagation();
}, {passive:false});

// отключение zoom прикосновениями (в том числе трекападами и т.п.) в Safari и iOS
document.addEventListener('gesturestart', function(e){
    if (noZoomSignals) e.preventDefault();
    if (noZoomSignals) e.stopImmediatePropagation();
}, {passive:false});

// отключение zoom через клавиатуру (ctrl + "+", ctrl + "-")
// кнопки браузера для управления zoom отключены не будут
document.addEventListener('keydown', function(e){
    if(!e.ctrlKey && !e.metaKey) return;
    if(e.keyCode != 189 && e.keyCode != 187) return;

    if (noZoomSignals) e.preventDefault();
    if (noZoomSignals) e.stopImmediatePropagation();
}, {passive:false});


// Галереия в таблице истории
var gallerySignals = $('.image_signal_description_block');


// Image Full Screen History Active
gallerySignals.each(function(){
    //Первый скриншот
    $(this).find('.full_screen_signal:eq(0)').click(function() {
        openImageSignals();

        setTimeout(function () {
            gallerySignals.find('.image_active_signals_open_block:eq(0)').addClass('active');
            gallerySignals.find('.image_active_signals_switch_image_block:eq(0)').addClass('active');
        },300);
    });
    // Второй скриншот
    $(this).find('.full_screen_signal:eq(1)').click(function() {
        openImageSignals();

        setTimeout(function () {
            gallerySignals.find('.image_active_signals_open_block:eq(1)').addClass('active');
            gallerySignals.find('.image_active_signals_switch_image_block:eq(1)').addClass('active');
        },300);

    });

});

// Если произошел клик по крестику то закрыть изображение
$('.image_active_signals_close').click(function() {
    closeImageSignals();

    $('div .image_active_signals_open_block').removeClass('active');
    $('div .image_active_signals_switch_image_block').removeClass('active');
});

// Если произошел клик вне блока то закрыть изображение
$('.image_active_signals_background').click(function() {
    closeImageSignals();

    $('div .image_active_signals_open_block').removeClass('active');
    $('div .image_active_signals_switch_image_block').removeClass('active');
});


// Переключатель на следующий элемент
$('.image_active_signals_open_next').click(function() {
    if(gallerySignals.find('.image_active_signals_open_block:eq(0)').hasClass('active') && gallerySignals.find('.image_active_signals_switch_image_block:eq(0)').hasClass('active') ) {
        gallerySignals.find('.image_active_signals_open_block:eq(0)').removeClass('active');
        gallerySignals.find('.image_active_signals_switch_image_block:eq(0)').removeClass('active');
        gallerySignals.find('.image_active_signals_open_block:eq(1)').addClass('active');
        gallerySignals.find('.image_active_signals_switch_image_block:eq(1)').addClass('active');
    } else if (gallerySignals.find('.image_active_signals_open_block:eq(1)').hasClass('active') && gallerySignals.find('.image_active_signals_switch_image_block:eq(1)').hasClass('active') ) {
        gallerySignals.find('.image_active_signals_open_block:eq(1)').removeClass('active');
        gallerySignals.find('.image_active_signals_switch_image_block:eq(1)').removeClass('active');
        gallerySignals.find('.image_active_signals_open_block:eq(0)').addClass('active');
        gallerySignals.find('.image_active_signals_switch_image_block:eq(0)').addClass('active');
    }
});

// Переключатель на предыдущий элемент
$('.image_active_signals_open_prev').click(function() {
    if(gallerySignals.find('.image_active_signals_open_block:eq(0)').hasClass('active') && gallerySignals.find('.image_active_signals_switch_image_block:eq(0)').hasClass('active') ) {
        gallerySignals.find('.image_active_signals_open_block:eq(0)').removeClass('active');
        gallerySignals.find('.image_active_signals_switch_image_block:eq(0)').removeClass('active');
        gallerySignals.find('.image_active_signals_open_block:eq(1)').addClass('active');
        gallerySignals.find('.image_active_signals_switch_image_block:eq(1)').addClass('active');
    } else if (gallerySignals.find('.image_active_signals_open_block:eq(1)').hasClass('active') && gallerySignals.find('.image_active_signals_switch_image_block:eq(1)').hasClass('active') ) {
        gallerySignals.find('.image_active_signals_open_block:eq(1)').removeClass('active');
        gallerySignals.find('.image_active_signals_switch_image_block:eq(1)').removeClass('active');
        gallerySignals.find('.image_active_signals_open_block:eq(0)').addClass('active');
        gallerySignals.find('.image_active_signals_switch_image_block:eq(0)').addClass('active');
    }
});

// Обработка клика по маленьким изображениям
gallerySignals.find('.image_active_signals_switch_image_block:eq(0)').click(function() {
    gallerySignals.find('.image_active_signals_open_block:eq(1)').removeClass('active');
    gallerySignals.find('.image_active_signals_switch_image_block:eq(1)').removeClass('active');
    gallerySignals.find('.image_active_signals_open_block:eq(0)').addClass('active');
    gallerySignals.find('.image_active_signals_switch_image_block:eq(0)').addClass('active');
});

gallerySignals.find('.image_active_signals_switch_image_block:eq(1)').click(function() {
    gallerySignals.find('.image_active_signals_open_block:eq(0)').removeClass('active');
    gallerySignals.find('.image_active_signals_switch_image_block:eq(0)').removeClass('active');
    gallerySignals.find('.image_active_signals_open_block:eq(1)').addClass('active');
    gallerySignals.find('.image_active_signals_switch_image_block:eq(1)').addClass('active');
});

// Zoom изображения с телефона
$('.image_active_signals_open_block').click(function(){
    $('.image_active_signals').toggleClass('zoom');
});

// Проверка смены ориентации
$(window).on("orientationchange",function(){
    $('.image_active_signals').removeClass('zoom');
});

// Функция, которая объединяет правила, которые нужно выполнить при открытии изображения
function openImageSignals () {
    $('.preloader_signals').addClass('open');
    noZoomSignals = true;

    setTimeout(function () {
        $('.preloader_signals').removeClass('open');
        $('.signal_modal_window').addClass('img_open_RS');
        $('.image_active_signals').addClass('active');
    },300);
};

// Функция, которая объединяет правила, которые нужно выполнить при закрытии изображения
function closeImageSignals () {
    $('.image_active_signals').removeClass('active');
    $('.preloader_signals').removeClass('open');
    $('.signal_modal_window').removeClass('img_open_RS');
    $('.image_active_signals').removeClass('zoom');
    noZoomSignals = false;
};