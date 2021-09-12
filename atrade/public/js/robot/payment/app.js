// Preloader
let html = document.getElementById('html');
let preloader = document.getElementById('preloader');

window.onload = function () {
    setTimeout(() => {
        preloader.style.display = 'none';
    }, 200);

    setTimeout(function() {
        document.body.classList.remove('page_load');
        html.classList.remove('page_load');
    }, 200);
};

// Валидация формы
$(function(){
    $('#payment-form').validate({
        rules: {
            name: {
                required: true,

            },

            surname: {
                required: true,

            },

            email: {
                required: true,
                minlength: 5,
            },

        },

    });
});

// Animation
const animationItems = document.querySelectorAll('.animation-items');

// проверяем есть ли элементы в массиве
if(animationItems.length > 0) {
    window.addEventListener('scroll', animationOnScroll);
    function animationOnScroll (params) {
        // проходимя в цикле по каждому объекту
        for(let index = 0; index < animationItems.length; index++) {
            // объект
            const animationItem = animationItems[index];
            // высота объекта
            const animationItemHeight = animationItem.offsetHeight;
            // позиция объекта относительно верхней границы экрана
            const animationItemOffset = offset(animationItem).top;
            // коэффициент скролла объекта для старта
            const animationStart = 2;

            // рассчитываем старт анимации
            let animationItemPoint = window.innerHeight - animationItemHeight / animationStart;

            // если объект выше окна браузера
            if(animationItemHeight > window.innerHeight) {
                animationItemPoint = window.innerHeight - window.innerHeight / animationStart;
            }

            // добавляем анимацию если мы прокрутили до блока
            if((pageYOffset > animationItemOffset - animationItemPoint) && pageYOffset < (animationItemOffset + animationItemHeight)) {
                animationItem.classList.add('active');
            } else {
                if(!animationItem.classList.contains('animation-no-hide')) {
                    animationItem.classList.remove('active');
                }
            }
        }
    }

    // высчитываем позицию объекта относительно верхней и левой границы экрана
    function offset(el) {
        const rect = el.getBoundingClientRect(),
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
    }

    setTimeout(() => {
        animationOnScroll();
    },400);
};


// При обновлении - страница всегда вверху
$(window).on('beforeunload', setTimeout(function(){
    $(window).scrollTop(0);
},100));
