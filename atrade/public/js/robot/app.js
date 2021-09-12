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
    $('#try-for-free-form').validate({
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

// Валидация формы
$(function(){
    $('#feedback_form').validate({
        rules: {
            name: {
                required: true,
                minlength: 5,

            },

            email: {
                required: true,
            },

            text: {
                required: true,
            }

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
}

// Проверка ширины экрана
if (screen.width >= '1000') {
// Animation of intro numbers
    setTimeout(function(){
        $('#deposit-animation').spincrement({
            thousandSeparator: "",
            from: 0,
            to: 11593.3,
            decimalPlaces: 1,
            decimalPoint: '.',
            duration: 1200,
        });

        $('#profit-animation').spincrement({
            thousandSeparator: "",
            from: 0,
            to: 6593.3,
            decimalPlaces: 1,
            decimalPoint: '.',
            duration: 1200,
        });

        $('#yield-animation').spincrement({
            thousandSeparator: "",
            from: 0,
            to: 131.9,
            decimalPlaces: 1,
            decimalPoint: '.',
            duration: 1200,
        });
    },2500);

// Animation of chart numbers
    let profitChartWrapper = document.querySelector('.profit-chart-wrapper');

    window.addEventListener('scroll', function(){
        if(profitChartWrapper.classList.contains('active')){
            setTimeout(() => {
                profitChartWrapper.classList.add('active');
                $('#profit-chart').spincrement({
                    thousandSeparator: "",
                    from: 0,
                    to: $('#profit-chart').data('value'),
                    decimalPlaces: 1,
                    decimalPoint: ',',
                    duration: 1200
                });

                $('#yield-chart').spincrement({
                    thousandSeparator: "",
                    from: 0,
                    to: $('#yield-chart').data('value'),
                    duration: 1200
                });

                $('#day-chart').spincrement({
                    thousandSeparator: "",
                    from: 0,
                    to: $('#day-chart').data('value'),
                    duration: 1200
                });

                $('#deal-chart').spincrement({
                    thousandSeparator: "",
                    from: 0,
                    to: $('#deal-chart').data('value'),
                    duration: 1200
                });

                $('#drawdown-chart').spincrement({
                    thousandSeparator: "",
                    from: 0,
                    to: $('#drawdown-chart').data('value'),
                    duration: 1200
                });
            },1600);

            setTimeout(() => {
                document.getElementById('animate-grid').classList.add('start');
            },2200);

            setTimeout(() => {
                document.getElementById('animate-grid').style.display = 'none';
            },4000);

        };
    });

// Animation Buttons Hover
    let buyBtn = document.getElementsByClassName('animation-button'),
        forEach = Array.prototype.forEach;

    forEach.call(buyBtn, function(b){
        b.addEventListener('click', addElement);
    });

    function addElement(e) {
        let addDiv = document.createElement('div'),
            mValue = Math.max(this.clientWidth, this.clientHeight),
            rect = this.getBoundingClientRect(),
            sDiv = addDiv.style,
            px = 'px';

        sDiv.width = sDiv.height = mValue + px;
        sDiv.left = e.clientX - rect.left - (mValue/2) + px;
        sDiv.top = e.clientY - rect.top - (mValue/2) + px;


        addDiv.classList.add('pulse');
        this.appendChild(addDiv);
    };
};

// Calculator Block
// Indents and color for periods block
function period(val) {
    document.getElementById('period-range').style.background = '-webkit-linear-gradient(left ,#13a492 0%,#13a492 '+val/3.65+'%,#dcdcdc '+val/3.65+'%,' +
        ' #dcdcdc 100%)';

    let output = document.querySelector('#period-value');
    output.value =val + ' день';
    if(val == 1) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 5.5 + '%';
    }
    if(val > 1 && val < 5) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 4 + '%';
    }
    if(val > 4 && val < 10) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 5.5 + '%';
    }
    if(val > 9 && val < 21) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 6.5 + '%';
    }
    if(val == 21) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 6.5 + '%';
    }
    if(val >21 && val < 25) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 5.5 + '%';
    }
    if(val >24 && val < 31) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 6.5 + '%';
    }
    if(val == 31) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 6.5 + '%';
    }
    if(val >31 && val < 35) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 5.5 + '%';
    }
    if(val >34 && val < 41) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 6.5 + '%';
    }
    if(val == 41) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 6.5 + '%';
    }
    if(val >41 && val < 45) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 5.5 + '%';
    }
    if(val >44 && val < 51) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 7 + '%';
    }
    if(val == 51) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 7 + '%';
    }
    if(val >51 && val < 55) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 5.5 + '%';
    }
    if(val >54 && val < 61) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 7 + '%';
    }
    if(val == 61) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 7 + '%';
    }
    if(val >61 && val < 65) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 6 + '%';
    }
    if(val >64 && val < 71) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 7 + '%';
    }
    if(val == 71) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 7 + '%';
    }
    if(val >71 && val < 75) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 6 + '%';
    }
    if(val >74 && val < 81) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 7 + '%';
    }
    if(val == 81) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 7 + '%';
    }
    if(val >81 && val < 85) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 6.5 + '%';
    }
    if(val >84 && val < 91) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 7.5 + '%';
    }
    if(val == 91) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 7.5 + '%';
    }
    if(val >91 && val < 95) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 6 + '%';
    }
    if(val >94 && val < 100) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 7.5 + '%';
    }
    if(val == 100) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 9 + '%';
    }
    if(val == 101) {
        output.value =val + 'день';
        output.style.left = val/3.65 - 8.5 + '%';
    }
    if(val >101 && val < 105) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 8 + '%';
    }
    if(val >104 && val < 110) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 9 + '%';
    }
    if(val >109 && val < 121) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 9 + '%';
    }
    if(val == 121) {
        output.value =val + 'день';
        output.style.left = val/3.65 - 8.5 + '%';
    }
    if(val >121 && val < 125) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 8 + '%';
    }
    if(val >124 && val < 131) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 9 + '%';
    }
    if(val == 131) {
        output.value =val + 'день';
        output.style.left = val/3.65 - 9 + '%';
    }
    if(val >131 && val < 135) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 8 + '%';
    }
    if(val >134 && val < 141) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 9 + '%';
    }
    if(val == 141) {
        output.value =val + 'день';
        output.style.left = val/3.65 - 9 + '%';
    }
    if(val >141 && val < 145) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 8 + '%';
    }
    if(val >144 && val < 151) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 9.5 + '%';
    }
    if(val == 151) {
        output.value =val + 'день';
        output.style.left = val/3.65 - 8.5 + '%';
    }
    if(val >151 && val < 155) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 8 + '%';
    }
    if(val >154 && val < 161) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 9.5 + '%';
    }
    if(val == 161) {
        output.value =val + 'день';
        output.style.left = val/3.65 - 8.5 + '%';
    }
    if(val >161 && val < 165) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 8 + '%';
    }
    if(val >164 && val < 171) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 9.5 + '%';
    }
    if(val == 171) {
        output.value =val + 'день';
        output.style.left = val/3.65 - 8.5 + '%';
    }
    if(val >171 && val < 175) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 8.5 + '%';
    }
    if(val >174 && val < 181) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 10 + '%';
    }
    if(val == 181) {
        output.value =val + 'день';
        output.style.left = val/3.65 - 9 + '%';
    }
    if(val >181 && val < 185) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 8 + '%';
    }
    if(val >184 && val < 191) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 10 + '%';
    }
    if(val == 191) {
        output.value =val + 'день';
        output.style.left = val/3.65 - 8 + '%';
    }
    if(val >191 && val < 195) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 8 + '%';
    }
    if(val >194 && val < 199) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 9 + '%';
    }
    if(val == 200) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 9.5 + '%';
    }
    if(val == 201) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 9.5 + '%';
    }
    if(val >201 && val < 205) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 8.5 + '%';
    }
    if(val >204 && val < 210) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 10 + '%';
    }
    if(val >209 && val < 220) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 10 + '%';
    }
    if(val == 221) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 10 + '%';
    }
    if(val >221 && val < 225) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 9 + '%';
    }
    if(val >224 && val < 231) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 10 + '%';
    }
    if(val == 231) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 10 + '%';
    }
    if(val >231 && val < 235) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 9.5 + '%';
    }
    if(val >234 && val < 241) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 10.5 + '%';
    }
    if(val == 241) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 10.5 + '%';
    }
    if(val >241 && val < 245) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 9.5 + '%';
    }
    if(val >244 && val < 251) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 11 + '%';
    }
    if(val == 251) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 10 + '%';
    }
    if(val >251 && val < 255) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 9.5 + '%';
    }
    if(val >254 && val < 261) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 11 + '%';
    }
    if(val == 261) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 10 + '%';
    }
    if(val >261 && val < 265) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 9.5 + '%';
    }
    if(val >264 && val < 271) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 11 + '%';
    }
    if(val == 271) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 11 + '%';
    }
    if(val >271 && val < 275) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 9.5 + '%';
    }
    if(val >274 && val < 281) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 11 + '%';
    }
    if(val == 281) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 11 + '%';
    }
    if(val >281 && val < 285) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 10 + '%';
    }
    if(val >284 && val < 291) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 11 + '%';
    }
    if(val == 291) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 11 + '%';
    }
    if(val >291 && val < 295) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 10 + '%';
    }
    if(val >295 && val < 300) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 11 + '%';
    }

    if(val == 300) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 11 + '%';
    }
    if(val == 301) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 11 + '%';
    }
    if(val >301 && val < 305) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 10 + '%';
    }
    if(val >304 && val < 310) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 11 + '%';
    }
    if(val >309 && val < 320) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 11 + '%';
    }
    if(val == 321) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 11 + '%';
    }
    if(val >321 && val < 325) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 10 + '%';
    }
    if(val >324 && val < 331) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 11.5 + '%';
    }
    if(val == 331) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 11.5 + '%';
    }
    if(val >331 && val < 335) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 10.5 + '%';
    }
    if(val >334 && val < 341) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 11.5 + '%';
    }
    if(val == 341) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 11.5 + '%';
    }
    if(val >341 && val < 345) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 10.5 + '%';
    }
    if(val >344 && val < 351) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 12 + '%';
    }
    if(val == 351) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 11.5 + '%';
    }
    if(val >351 && val < 355) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 10.5 + '%';
    }
    if(val >354 && val < 361) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 11.5 + '%';
    }
    if(val == 361) {
        output.value =val + ' день';
        output.style.left = val/3.65 - 11.5 + '%';
    }
    if(val >361 && val < 365) {
        output.value =val + ' дня';
        output.style.left = val/3.65 - 10.5 + '%';
    }
    if(val >364) {
        output.value =val + ' дней';
        output.style.left = val/3.65 - 11.5 + '%';
    }

};

// Indents and color for deposit block
function deposit(val) {

    document.getElementById('deposit-range').style.background = '-webkit-linear-gradient(left ,#13a492 0%,#13a492 '+val/100+'%,#dcdcdc '+val/100+'%,' +
        ' #dcdcdc 100%)';

    let output = document.querySelector('#deposit-value');
    output.value = '$' + val;
    output.style.left = val/100 - 4.5 + '%';
    if(val > 900) {
        output.style.left = val/100 - 6 + '%';
    }

    if(val > 2000) {
        output.style.left = val/100 - 6.2 + '%';
    }
    if(val > 3000) {
        output.style.left = val/100 - 6.5 + '%';
    }
    if(val > 4000) {
        output.style.left = val/100 - 7 + '%';
    }
    if(val > 5000) {
        output.style.left = val/100 - 7.5 + '%';
    }

    if(val > 6000) {
        output.style.left = val/100 - 8 + '%';
    }

    if(val > 8000) {
        output.style.left = val/100 - 8.5 + '%';
    }

    if(val > 9000) {
        output.style.left = val/100 - 9 + '%';
    }

    if(val > 9900) {
        output.style.left = val/100 - 10.0 + '%';
    }
};

// Calculation
// Mounthly Precent Profit
let monthlyPrecentProfit = 21.5;
// Values from rage inputs
const periodRange  = document.getElementById('period-range'),
    depositRange = document.getElementById('deposit-range');

// Final Calculation
const depositResult  = document.getElementById('deposit'),
    profitResult = document.getElementById('profit'),
    yieldResult  = document.getElementById('yield');

// All ranges
const inputsRange = document.querySelectorAll('.input-range');

for(let input of inputsRange) {
    input.addEventListener('input', () => {
        calculation(periodRange.value, depositRange.value, monthlyPrecentProfit);
    });
}

const calculation = (period = 184, deposit = 5000, monthlyPrecentProfit = 21.5) => {
    /*
        Процент прибыли за месяц - ПРМ = 21.5;
        Процент прибыли за день - ПРД = 21.5/20 = 1.075;
        Депозит = Депозит/100*(Период*ПРД);
        Чистая прибыль - ЧП = (Депозит/100*(Период*ПРД)) - Депозит;
        Доходность = Период*ПРД;
    */

    let mounthlyPrecent = monthlyPrecentProfit;
    let dayPrecent = mounthlyPrecent/30;
    let depositTotal = Number(deposit) + Number(period*(deposit*(dayPrecent/100)));
    let profitTotal =  Number(period*(deposit*(dayPrecent/100)));
    let yeildPrecent = Number(period*dayPrecent);

    // Arounded
    let depositTotalArounded = depositTotal.toFixed(1);
    let profitTotalArounded = profitTotal.toFixed(1);
    let yeildPrecentArounded = yeildPrecent.toFixed(1);

    if(depositTotalArounded < 0  && profitTotalArounded < 0 && yeildPrecentArounded < 0) {
        return false;
    } else {
        depositResult.innerHTML = '$' + `${depositTotalArounded}`;
        profitResult.innerHTML = '$' + `${profitTotalArounded}`;
        yieldResult.innerHTML = `${yeildPrecentArounded}` + '%';
    }
}

// Calculator Mobile Block
// Indents and color for periods block
function periodMobile(val) {
    document.getElementById('mobile-period-range').style.background = '-webkit-linear-gradient(left ,#13a492 0%,#13a492 '+val/3.65+'%,#dcdcdc '+val/3.65+'%,' +
        ' #dcdcdc 100%)';

    let output = document.querySelector('#mobile-period-value');
    output.value =val + ' день';
    if(val == 1) {
        output.value =val + ' день';
    }
    if(val > 1 && val < 5) {
        output.value =val + ' дня';
    }
    if(val > 4 && val < 10) {
        output.value =val + ' дней';
    }
    if(val > 9 && val < 21) {
        output.value =val + ' дней';
    }
    if(val == 21) {
        output.value =val + ' день';
    }
    if(val >21 && val < 25) {
        output.value =val + ' дня';
    }
    if(val >24 && val < 31) {
        output.value =val + ' дней';

    }
    if(val == 31) {
        output.value =val + ' день';

    }
    if(val >31 && val < 35) {
        output.value =val + ' дня';

    }
    if(val >34 && val < 41) {
        output.value =val + ' дней';

    }
    if(val == 41) {
        output.value =val + ' день';

    }
    if(val >41 && val < 45) {
        output.value =val + ' дня';

    }
    if(val >44 && val < 51) {
        output.value =val + ' дней';

    }
    if(val == 51) {
        output.value =val + ' день';

    }
    if(val >51 && val < 55) {
        output.value =val + ' дня';

    }
    if(val >54 && val < 61) {
        output.value =val + ' дней';

    }
    if(val == 61) {
        output.value =val + ' день';

    }
    if(val >61 && val < 65) {
        output.value =val + ' дня';

    }
    if(val >64 && val < 71) {
        output.value =val + ' дней';

    }
    if(val == 71) {
        output.value =val + ' день';

    }
    if(val >71 && val < 75) {
        output.value =val + ' дня';

    }
    if(val >74 && val < 81) {
        output.value =val + ' дней';

    }
    if(val == 81) {
        output.value =val + ' день';

    }
    if(val >81 && val < 85) {
        output.value =val + ' дня';

    }
    if(val >84 && val < 91) {
        output.value =val + ' дней';

    }
    if(val == 91) {
        output.value =val + ' день';

    }
    if(val >91 && val < 95) {
        output.value =val + ' дня';

    }
    if(val >94 && val < 100) {
        output.value =val + ' дней';

    }
    if(val == 100) {
        output.value =val + ' дней';

    }
    if(val == 101) {
        output.value =val + 'день';

    }
    if(val >101 && val < 105) {
        output.value =val + ' дня';

    }
    if(val >104 && val < 110) {
        output.value =val + ' дней';

    }
    if(val >109 && val < 121) {
        output.value =val + ' дней';

    }
    if(val == 121) {
        output.value =val + 'день';

    }
    if(val >121 && val < 125) {
        output.value =val + ' дня';

    }
    if(val >124 && val < 131) {
        output.value =val + ' дней';

    }
    if(val == 131) {
        output.value =val + 'день';

    }
    if(val >131 && val < 135) {
        output.value =val + ' дня';

    }
    if(val >134 && val < 141) {
        output.value =val + ' дней';

    }
    if(val == 141) {
        output.value =val + 'день';

    }
    if(val >141 && val < 145) {
        output.value =val + ' дня';

    }
    if(val >144 && val < 151) {
        output.value =val + ' дней';

    }
    if(val == 151) {
        output.value =val + 'день';

    }
    if(val >151 && val < 155) {
        output.value =val + ' дня';

    }
    if(val >154 && val < 161) {
        output.value =val + ' дней';

    }
    if(val == 161) {
        output.value =val + 'день';

    }
    if(val >161 && val < 165) {
        output.value =val + ' дня';

    }
    if(val >164 && val < 171) {
        output.value =val + ' дней';

    }
    if(val == 171) {
        output.value =val + 'день';

    }
    if(val >171 && val < 175) {
        output.value =val + ' дня';

    }
    if(val >174 && val < 181) {
        output.value =val + ' дней';

    }
    if(val == 181) {
        output.value =val + 'день';

    }
    if(val >181 && val < 185) {
        output.value =val + ' дня';

    }
    if(val >184 && val < 191) {
        output.value =val + ' дней';

    }
    if(val == 191) {
        output.value =val + 'день';

    }
    if(val >191 && val < 195) {
        output.value =val + ' дня';

    }
    if(val >194 && val < 199) {
        output.value =val + ' дней';

    }
    if(val == 200) {
        output.value =val + ' дней';

    }
    if(val == 201) {
        output.value =val + ' день';

    }
    if(val >201 && val < 205) {
        output.value =val + ' дня';

    }
    if(val >204 && val < 210) {
        output.value =val + ' дней';

    }
    if(val >209 && val < 220) {
        output.value =val + ' дней';

    }
    if(val == 221) {
        output.value =val + ' день';

    }
    if(val >221 && val < 225) {
        output.value =val + ' дня';

    }
    if(val >224 && val < 231) {
        output.value =val + ' дней';

    }
    if(val == 231) {
        output.value =val + ' день';

    }
    if(val >231 && val < 235) {
        output.value =val + ' дня';

    }
    if(val >234 && val < 241) {
        output.value =val + ' дней';

    }
    if(val == 241) {
        output.value =val + ' день';

    }
    if(val >241 && val < 245) {
        output.value =val + ' дня';

    }
    if(val >244 && val < 251) {
        output.value =val + ' дней';

    }
    if(val == 251) {
        output.value =val + ' день';

    }
    if(val >251 && val < 255) {
        output.value =val + ' дня';

    }
    if(val >254 && val < 261) {
        output.value =val + ' дней';

    }
    if(val == 261) {
        output.value =val + ' день';

    }
    if(val >261 && val < 265) {
        output.value =val + ' дня';

    }
    if(val >264 && val < 271) {
        output.value =val + ' дней';

    }
    if(val == 271) {
        output.value =val + ' день';

    }
    if(val >271 && val < 275) {
        output.value =val + ' дня';

    }
    if(val >274 && val < 281) {
        output.value =val + ' дней';

    }
    if(val == 281) {
        output.value =val + ' день';

    }
    if(val >281 && val < 285) {
        output.value =val + ' дня';

    }
    if(val >284 && val < 291) {
        output.value =val + ' дней';

    }
    if(val == 291) {
        output.value =val + ' день';

    }
    if(val >291 && val < 295) {
        output.value =val + ' дня';

    }
    if(val >295 && val < 300) {
        output.value =val + ' дней';

    }

    if(val == 300) {
        output.value =val + ' дней';

    }
    if(val == 301) {
        output.value =val + ' день';

    }
    if(val >301 && val < 305) {
        output.value =val + ' дня';

    }
    if(val >304 && val < 310) {
        output.value =val + ' дней';

    }
    if(val >309 && val < 320) {
        output.value =val + ' дней';

    }
    if(val == 321) {
        output.value =val + ' день';

    }
    if(val >321 && val < 325) {
        output.value =val + ' дня';

    }
    if(val >324 && val < 331) {
        output.value =val + ' дней';

    }
    if(val == 331) {
        output.value =val + ' день';

    }
    if(val >331 && val < 335) {
        output.value =val + ' дня';

    }
    if(val >334 && val < 341) {
        output.value =val + ' дней';

    }
    if(val == 341) {
        output.value =val + ' день';

    }
    if(val >341 && val < 345) {
        output.value =val + ' дня';

    }
    if(val >344 && val < 351) {
        output.value =val + ' дней';

    }
    if(val == 351) {
        output.value =val + ' день';

    }
    if(val >351 && val < 355) {
        output.value =val + ' дня';

    }
    if(val >354 && val < 361) {
        output.value =val + ' дней';

    }
    if(val == 361) {
        output.value =val + ' день';

    }
    if(val >361 && val < 365) {
        output.value =val + ' дня';

    }
    if(val >364) {
        output.value =val + ' дней';

    }

};

// Indents and color for deposit block
function depositMobile(val) {

    document.getElementById('mobile-deposit-range').style.background = '-webkit-linear-gradient(left ,#13a492 0%,#13a492 '+val/100+'%,#dcdcdc '+val/100+'%,' +
        ' #dcdcdc 100%)';

    let output = document.querySelector('#mobile-deposit-value');
    output.value = '$' + val;

};

// Calculation Mobile
// Values from rage inputs
const periodRangeMobile  = document.getElementById('mobile-period-range'),
    depositRangeMobile = document.getElementById('mobile-deposit-range');

// Final Calculation
const depositResultMobile  = document.getElementById('mobile-deposit'),
    profitResultMobile = document.getElementById('mobile-profit'),
    yieldResultMobile  = document.getElementById('mobile-yield');

// All ranges
const inputsRangeMobile = document.querySelectorAll('.mobile-input-range');

for(let input of inputsRangeMobile) {
    input.addEventListener('input', () => {
        calculationMobile(periodRangeMobile.value, depositRangeMobile.value, monthlyPrecentProfit);
    });
}

const calculationMobile = (period = 184, deposit = 5000, monthlyPrecentProfit = 21.5) => {
    /*
        Процент прибыли за месяц - ПРМ = 21.5;
        Процент прибыли за день - ПРД = 21.5/20 = 1.075;
        Депозит = Депозит/100*(Период*ПРД);
        Чистая прибыль - ЧП = (Депозит/100*(Период*ПРД)) - Депозит;
        Доходность = Период*ПРД;
    */

    let mounthlyPrecent = monthlyPrecentProfit;
    let dayPrecent = mounthlyPrecent/30;
    let depositTotal = Number(deposit) + Number(period*(deposit*(dayPrecent/100)));
    let profitTotal =  Number(period*(deposit*(dayPrecent/100)));
    let yeildPrecent = Number(period*dayPrecent);

    // Arounded
    let depositTotalArounded = depositTotal.toFixed(1);
    let profitTotalArounded = profitTotal.toFixed(1);
    let yeildPrecentArounded = yeildPrecent.toFixed(1);

    if(depositTotalArounded < 0  && profitTotalArounded < 0 && yeildPrecentArounded < 0) {
        return false;
    } else {
        depositResultMobile.innerHTML = '$' + `${depositTotalArounded}`;
        profitResultMobile.innerHTML = '$' + `${profitTotalArounded}`;
        yieldResultMobile.innerHTML = `${yeildPrecentArounded}` + '%';
    }
}


// Hover Chart
$('.profit-chart-grid-hover-item').each(function () {
    $(this).hover(function () {
        $(this).addClass('active');
    });
    $(this).find('.profit-chart-grid-hover-item-info').hover(function () {
        $(this).parent().removeClass('active');
    });

    $(this).mouseleave(function () {
        $(this).removeClass('active');
    })
})

// Mobile Menu
let burgerMobile = document.querySelector('.burger-menu'),
    menuMobileWrapper = document.querySelector('.mobile-menu-wrapper'),
    menuMobile = document.querySelector('.mobile-menu'),
    menuMobileClose = document.querySelector('.mobile-menu-close');

burgerMobile.addEventListener('click', function() {
    if(!burgerMobile.classList.contains('open') && !menuMobileWrapper.classList.contains('open') && !menuMobile.classList.contains('open')) {
        burgerMobile.classList.add('open');
        menuMobile.classList.add('open');
        menuMobileWrapper.classList.add('open');
        document.body.classList.add('hidden');
    } else {
        menuMobileWrapper.classList.remove('open');
        setTimeout(() => {
            burgerMobile.classList.remove('open');
            menuMobile.classList.remove('open');
            document.body.classList.remove('hidden');
        },100);
    }
});

menuMobileClose.addEventListener('click', function(){
    menuMobileWrapper.classList.remove('open');
    setTimeout(() => {
        burgerMobile.classList.remove('open');
        menuMobile.classList.remove('open');
        document.body.classList.remove('hidden');
    },100);
});

function noScroll () {
    document.body.addEventListener('touchmove', function(e){
        e.preventDefault();
    });
};

function BurgerClose () {
    menuMobileWrapper.classList.remove('open');
    setTimeout(() => {
        burgerMobile.classList.remove('open');
        menuMobile.classList.remove('open');
        document.body.classList.remove('hidden');
    },100);
};

// если клик по кнопке "Попробовать бесплатно"
let menuMobileFreeBtn = document.getElementById('mobile-menu-free-button');

menuMobileFreeBtn.addEventListener('click', function(){
    menuMobileWrapper.classList.remove('open');
    setTimeout(() => {
        burgerMobile.classList.remove('open');
        menuMobile.classList.remove('open');
        document.body.classList.remove('hidden');
    },100);
});

// Up Button
let baseUpButton = document.querySelector('.up-button');
let baseScrollTop = 0;

baseCheckScroll(baseScrollTop);

$(window).on('scroll', function() {
    baseScrollTop = $(this).scrollTop();
    baseCheckScroll(baseScrollTop);
});

function baseCheckScroll(baseScrollTop) {

    if (baseScrollTop >= 500) {
        $('.up-button').addClass('active');
        setTimeout(function(){
            $('.up-button').css('bottom','20px');
        },50);

    } else {
        $('.up-button').css('bottom','-100px');
        setTimeout(function(){
            $('.up-button').removeClass('active');
        },50);
    };

};

// Скролл наверх
function slowScroll(id) {
    var offset = 0;
    $('html, body').animate({
        scrollTop: $(id).offset().top - offset
    }, 300);
    return false;
};


// Feedback
let feedbackBtn = document.querySelector('.feedback-button'),
    feedbackWindow = document.querySelector('.feedback-window'),
    feedbackClose = document.querySelector('.feedback-window-close-icon');

feedbackBtn.addEventListener('click', function(){
    if(feedbackWindow.classList.contains('active')) {
        feedbackWindow.classList.remove('active');
        document.body.classList.remove('overflaw-feedback');
    } else {
        feedbackWindow.classList.add('active');
        document.body.classList.add('overflaw-feedback');
    }
});

feedbackClose.addEventListener('click', function(){
    feedbackWindow.classList.remove('active');
    document.body.classList.remove('overflaw-feedback');
});


//Если клик полизошел вне блока - то скрыть его
jQuery(function($){
    $(document).mouseup(function (e){
        var div = $(".feedback");

        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass('active');
            $('.feedback-window').removeClass('active');
            document.body.classList.remove('overflaw-feedback');
        }
    });
});

// При обновлении - страница всегда вверху
$(window).on('beforeunload', setTimeout(function(){
    $(window).scrollTop(0);
},100));

















