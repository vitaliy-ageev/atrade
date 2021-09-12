function getBrowserInfo() {
    var t,v = undefined;
    if (window.chrome) t = 'Chrome';
    else if (window.opera) t = 'Opera';
    else if (document.all) {
        t = 'IE';
        var nv = navigator.appVersion;
        var s = nv.indexOf('MSIE')+5;
        v = nv.substring(s,s+1);
    }
    else if (navigator.appName) t = 'Netscape';
    return {type:t,version:v};
}
function bookmark(a){
    var url = window.document.location;
    var title = window.document.title;
    var b = getBrowserInfo();
    if (b.type == 'IE' && 8 >= b.version && b.version >= 4) window.external.AddFavorite(url,title);
    else if (b.type == 'Opera') {
        a.href = url;
        a.rel = "sidebar";
        a.title = url+','+title;
        return true;
    }
    else if (b.type == "Netscape") window.sidebar.addPanel(title,url,"");
    else alert("Нажмите CTRL-D, чтобы добавить страницу в закладки.");
    return false;
}

// Preloader
window.onload = function () {
    setTimeout(function () {

        let preloader = document.getElementById('preloader');
        let html = document.getElementById('html');
        preloader.style.display = 'none';
        document.body.classList.remove('page_load');
        html.classList.remove('page_load');


    }, 200);

    setTimeout(function () {

        let main_page = document.getElementById('main_page_inner');
        main_page.style.opacity = '1';

    }, 100);
};

/////////////////////////////////////////////////
// Проверка видимости модального футера        //
// Если виден - то скрыть фиксированный футер  //
// Получаем нужный элемент                     //
/////////////////////////////////////////////////
var element = document.querySelector('.modal_articles_footer');

var Visible = function (target) {
    // Все позиции элемента
    var targetPosition = {
            top: window.pageYOffset + target.getBoundingClientRect().top,
            left: window.pageXOffset + target.getBoundingClientRect().left,
            right: window.pageXOffset + target.getBoundingClientRect().right,
            bottom: window.pageYOffset + target.getBoundingClientRect().bottom
        },
        // Получаем позиции окна
        windowPosition = {
            top: window.pageYOffset,
            left: window.pageXOffset,
            right: window.pageXOffset + document.documentElement.clientWidth,
            bottom: window.pageYOffset + document.documentElement.clientHeight
        };

    if (targetPosition.bottom > windowPosition.top && // Если позиция нижней части элемента больше позиции верхней чайти окна, то элемент виден сверху
        targetPosition.top < windowPosition.bottom && // Если позиция верхней части элемента меньше позиции нижней чайти окна, то элемент виден снизу
        targetPosition.right > windowPosition.left && // Если позиция правой стороны элемента больше позиции левой части окна, то элемент виден слева
        targetPosition.left < windowPosition.right) { // Если позиция левой стороны элемента меньше позиции правой чайти окна, то элемент виден справа
        // Если элемент полностью видно, то запускаем следующий код
        $('.modal_articles_footer_scroll').removeClass('active');
        $('.modal_articles_footer_scroll').addClass('hidden');
    } else {
        // Если элемент не видно, то запускаем этот код
        console.clear();
        $('.modal_articles_footer_scroll').addClass('active');
        $('.modal_articles_footer_scroll').removeClass('hidden');
    };
};

// Запускаем функцию при прокрутке страницы
window.addEventListener('scroll', function() {
    Visible (element);
});

// А также запустим функцию сразу. А то вдруг, элемент изначально видно
Visible (element);
/////////////////////////////////////////
// Проверка видимости мобильного модального футера
// Если виден - то скрыть мобильный фиксированный футер
// Получаем нужный элемент
var elementMobile = document.querySelector('.modal_articles_footer_mobile');

var VisibleMobile = function (targetMobile) {
    // Все позиции элемента
    var targetPositionMobile = {
            top: window.pageYOffset + targetMobile.getBoundingClientRect().top,
            left: window.pageXOffset + targetMobile.getBoundingClientRect().left,
            right: window.pageXOffset + targetMobile.getBoundingClientRect().right,
            bottom: window.pageYOffset + targetMobile.getBoundingClientRect().bottom
        },
        // Получаем позиции окна
        windowPositionMobile = {
            top: window.pageYOffset,
            left: window.pageXOffset,
            right: window.pageXOffset + document.documentElement.clientWidth,
            bottom: window.pageYOffset + document.documentElement.clientHeight
        };

    if (targetPositionMobile.bottom > windowPositionMobile.top && // Если позиция нижней части элемента больше позиции верхней чайти окна, то элемент виден сверху
        targetPositionMobile.top < windowPositionMobile.bottom && // Если позиция верхней части элемента меньше позиции нижней чайти окна, то элемент виден снизу
        targetPositionMobile.right > windowPositionMobile.left && // Если позиция правой стороны элемента больше позиции левой части окна, то элемент виден слева
        targetPositionMobile.left < windowPositionMobile.right) { // Если позиция левой стороны элемента меньше позиции правой чайти окна, то элемент виден справа
        // Если элемент полностью видно, то запускаем следующий код
        $('.modal_articles_footer_scroll_mobile').removeClass('active');
        $('.modal_articles_footer_scroll_mobile').addClass('hidden');
    } else {
        // Если элемент не видно, то запускаем этот код
        console.clear();
        $('.modal_articles_footer_scroll_mobile').addClass('active');
        $('.modal_articles_footer_scroll_mobile').removeClass('hidden');
    };
};

// Запускаем функцию при прокрутке страницы
window.addEventListener('scroll', function() {
    VisibleMobile (elementMobile);
});

// А также запустим функцию сразу. А то вдруг, элемент изначально видно
VisibleMobile (elementMobile);
