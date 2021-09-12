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
let  fullScreenAll = document.querySelectorAll('.full-screen'),
    screenActive = document.querySelector('.screenshots-active'),
    screenActiveBlock = document.querySelector('.screenshots-active-image-block'),
    screenActiveClose = document.querySelector('.screenshots-active-close'),
    screenActiveBg = document.querySelector('.screenshots-active-background');

for(let fullScreen of fullScreenAll) {
    fullScreen.addEventListener('click', function(){
        noZoomOneImage = true;
        document.body.classList.add('overflaw-screen');
        screenActive.classList.add('active');
        screenActiveBlock.classList.add('active');
    });
};

// Если произошел клик по крестику то закрыть изображение
screenActiveClose.addEventListener('click', function(){
    document.body.classList.remove('overflaw-screen');
    screenActive.classList.remove('active');
    screenActiveBlock.classList.remove('active');
    noZoomOneImage = false;
});

// Если произошел клик вне блока то закрыть изображение
screenActiveBg.addEventListener('click', function(){
    document.body.classList.remove('overflaw-screen');
    screenActive.classList.remove('active');
    screenActiveBlock.classList.remove('active');
    noZoomOneImage = false;
});

// Zoom изображения с телефона
screenActiveBlock.addEventListener('click', function(){
    if(screenActive.classList.contains('zoom')) {
        screenActive.classList.remove('zoom');
    } else {
        screenActive.classList.add('zoom');
    }
});

// Проверка смены ориентации
$(window).on("orientationchange",function(){
    screenActive.classList.remove('zoom');
});
