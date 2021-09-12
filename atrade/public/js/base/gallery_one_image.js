// Отключение zoom через скролл (в том числе трекападами в macOS)
var noZoomOneImage = false;

document.addEventListener('mousewheel', function(e){
    if(!e.ctrlKey && !e.metaKey) return;

    if (noZoomOneImage) e.preventDefault();
    if (noZoomOneImage) e.stopImmediatePropagation();
}, {passive:false});

// отключение zoom прикосновениями (в том числе трекападами и т.п.) в Safari и iOS
document.addEventListener('gesturestart', function(e){
    if (noZoomOneImage) e.preventDefault();
    if (noZoomOneImage) e.stopImmediatePropagation();
}, {passive:false});

// отключение zoom через клавиатуру (ctrl + "+", ctrl + "-")
// кнопки браузера для управления zoom отключены не будут
document.addEventListener('keydown', function(e){
    if(!e.ctrlKey && !e.metaKey) return;
    if(e.keyCode != 189 && e.keyCode != 187) return;

    if (noZoomOneImage) e.preventDefault();
    if (noZoomOneImage) e.stopImmediatePropagation();
}, {passive:false});

// One Image Full Screen Active
$(".full_screen").click(function() {
    $('.preloader_signals').addClass('open');
    noZoomOneImage = true;
    setTimeout(function () {
        $('.preloader_signals').removeClass('open');
        $('.signal_modal_window').addClass('img_open_RS');
        $('.one_image_active').addClass('active');
        $(".one_image_active").find('.one_image_active_open_block:eq(0)').addClass('active');
    },300);

});

// Если произошел клик по крестику то закрыть изображение
$('.one_image_active_close').click(function() {
    $('.preloader_signals').removeClass('open');
    $('.signal_modal_window').removeClass('img_open_RS');
    $('.one_image_active').removeClass('active');
    $('.one_image_active').removeClass('zoom');
    noZoomOneImage = false;
});

// Если произошел клик вне блока то закрыть изображение
$('.one_image_active_open_background').click(function() {
    $('.preloader_signals').removeClass('open');
    $('.signal_modal_window').removeClass('img_open_RS');
    $('.one_image_active').removeClass('active');
    $('.one_image_active').removeClass('zoom');
    noZoomOneImage = false;
});

// Zoom изображения с телефона
$('.one_image_active_open_block').click(function(){
    $('.one_image_active').toggleClass('zoom');
});

// Проверка смены ориентации
$(window).on("orientationchange",function(){
    $('.one_image_active').removeClass('zoom');
});