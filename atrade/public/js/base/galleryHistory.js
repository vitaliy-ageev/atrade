// Отключение zoom через скролл (в том числе трекападами в macOS)
var noZoomHistory = false;

document.addEventListener('mousewheel', function(e){
    if(!e.ctrlKey && !e.metaKey) return;

    if (noZoomHistory) e.preventDefault();
    if (noZoomHistory) e.stopImmediatePropagation();
}, {passive:false});

// отключение zoom прикосновениями (в том числе трекападами и т.п.) в Safari и iOS
document.addEventListener('gesturestart', function(e){
    if (noZoomHistory) e.preventDefault();
    if (noZoomHistory) e.stopImmediatePropagation();
}, {passive:false});

// отключение zoom через клавиатуру (ctrl + "+", ctrl + "-")
// кнопки браузера для управления zoom отключены не будут
document.addEventListener('keydown', function(e){
    if(!e.ctrlKey && !e.metaKey) return;
    if(e.keyCode != 189 && e.keyCode != 187) return;

    if (noZoomHistory) e.preventDefault();
    if (noZoomHistory) e.stopImmediatePropagation();
}, {passive:false});


// Галереия в таблице истории
var galleryHistory = $('.image_history_description_block');


// Image Full Screen History Active
galleryHistory.each(function(){
    //Первый скриншот
    $(this).find('.full_screen_history:eq(0)').click(function() {
        openImageHistory();

        setTimeout(function () {
            galleryHistory.find('.image_active_history_open_block:eq(0)').addClass('active');
            galleryHistory.find('.image_active_history_switch_image_block:eq(0)').addClass('active');
        },300);
    });
    // Второй скриншот
    $(this).find('.full_screen_history:eq(1)').click(function() {
        openImageHistory();

        setTimeout(function () {
            galleryHistory.find('.image_active_history_open_block:eq(1)').addClass('active');
            galleryHistory.find('.image_active_history_switch_image_block:eq(1)').addClass('active');
        },300);

    });

});

// Если произошел клик по крестику то закрыть изображение
$('.image_active_history_close').click(function() {
    closeImageHistory();

    $('div .image_active_history_open_block').removeClass('active');
    $('div .image_active_history_switch_image_block').removeClass('active');
});

// Если произошел клик вне блока то закрыть изображение
$('.image_active_history_background').click(function() {
    closeImageHistory();

    $('div .image_active_history_open_block').removeClass('active');
    $('div .image_active_history_switch_image_block').removeClass('active');
});


// Переключатель на следующий элемент
$('.image_active_history_open_next').click(function() {
    if(galleryHistory.find('.image_active_history_open_block:eq(0)').hasClass('active') && galleryHistory.find('.image_active_history_switch_image_block:eq(0)').hasClass('active') ) {
        galleryHistory.find('.image_active_history_open_block:eq(0)').removeClass('active');
        galleryHistory.find('.image_active_history_switch_image_block:eq(0)').removeClass('active');
        galleryHistory.find('.image_active_history_open_block:eq(1)').addClass('active');
        galleryHistory.find('.image_active_history_switch_image_block:eq(1)').addClass('active');
    } else if (galleryHistory.find('.image_active_history_open_block:eq(1)').hasClass('active') && galleryHistory.find('.image_active_history_switch_image_block:eq(1)').hasClass('active') ) {
        galleryHistory.find('.image_active_history_open_block:eq(1)').removeClass('active');
        galleryHistory.find('.image_active_history_switch_image_block:eq(1)').removeClass('active');
        galleryHistory.find('.image_active_history_open_block:eq(0)').addClass('active');
        galleryHistory.find('.image_active_history_switch_image_block:eq(0)').addClass('active');
    }
});

// Переключатель на предыдущий элемент
$('.image_active_history_open_prev').click(function() {
    if(galleryHistory.find('.image_active_history_open_block:eq(0)').hasClass('active') && galleryHistory.find('.image_active_history_switch_image_block:eq(0)').hasClass('active') ) {
        galleryHistory.find('.image_active_history_open_block:eq(0)').removeClass('active');
        galleryHistory.find('.image_active_history_switch_image_block:eq(0)').removeClass('active');
        galleryHistory.find('.image_active_history_open_block:eq(1)').addClass('active');
        galleryHistory.find('.image_active_history_switch_image_block:eq(1)').addClass('active');
    } else if (galleryHistory.find('.image_active_history_open_block:eq(1)').hasClass('active') && galleryHistory.find('.image_active_history_switch_image_block:eq(1)').hasClass('active') ) {
        galleryHistory.find('.image_active_history_open_block:eq(1)').removeClass('active');
        galleryHistory.find('.image_active_history_switch_image_block:eq(1)').removeClass('active');
        galleryHistory.find('.image_active_history_open_block:eq(0)').addClass('active');
        galleryHistory.find('.image_active_history_switch_image_block:eq(0)').addClass('active');
    }
});

// Обработка клика по маленьким изображениям
galleryHistory.find('.image_active_history_switch_image_block:eq(0)').click(function() {
    galleryHistory.find('.image_active_history_open_block:eq(1)').removeClass('active');
    galleryHistory.find('.image_active_history_switch_image_block:eq(1)').removeClass('active');
    galleryHistory.find('.image_active_history_open_block:eq(0)').addClass('active');
    galleryHistory.find('.image_active_history_switch_image_block:eq(0)').addClass('active');
});

galleryHistory.find('.image_active_history_switch_image_block:eq(1)').click(function() {
    galleryHistory.find('.image_active_history_open_block:eq(0)').removeClass('active');
    galleryHistory.find('.image_active_history_switch_image_block:eq(0)').removeClass('active');
    galleryHistory.find('.image_active_history_open_block:eq(1)').addClass('active');
    galleryHistory.find('.image_active_history_switch_image_block:eq(1)').addClass('active');
});

// Zoom изображения с телефона
$('.image_active_history_open_block').click(function(){
    $('.image_active_history').toggleClass('zoom');
});

// Проверка смены ориентации
$(window).on("orientationchange",function(){
    $('.image_active_history').removeClass('zoom');
});

// Функция, которая объединяет правила, которые нужно выполнить при открытии изображения
function openImageHistory () {
    $('.preloader_gallery').addClass('open');
    $('.fixation').addClass('img_open_TA');
    $('.go_back_btn').addClass('img_open_TA');
    $('.header').addClass('img_open_TA');
    $('.subheader').addClass('img_open_TA');
    $('body').addClass('img_open_TA');
    $('html').addClass('img_open_TA');
    noZoomHistory = true;

    setTimeout(function () {
        $('.preloader_gallery').removeClass('open');
        $('.image_active_history').addClass('active');
    },300);
};

// Функция, которая объединяет правила, которые нужно выполнить при закрытии изображения
function closeImageHistory () {
    $('.image_active_history').removeClass('active');
    $('.preloader_gallery').removeClass('open');
    $('.fixation').removeClass('img_open_TA');
    $('.go_back_btn').removeClass('img_open_TA');
    $('.header').removeClass('img_open_TA');
    $('.subheader').removeClass('img_open_TA');
    $('body').removeClass('img_open_TA');
    $('html').removeClass('img_open_TA');
    $('.image_active_history').removeClass('zoom');
    noZoomHistory = false;
};