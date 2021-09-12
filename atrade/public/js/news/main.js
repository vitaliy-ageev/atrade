// Плавающий фиксированный сайдбар, останавливающийся над футером
Array.prototype.slice.call(document.querySelectorAll('#aside1, #aside2')).forEach(function(a) {  // селекторы блоков, которые будут фиксироваться. Может быть как один блок, так два и более
    var b = null, P = 74;
    window.addEventListener('scroll', Ascroll, false);
    document.body.addEventListener('scroll', Ascroll, false);
    function Ascroll() {
        if (b == null) {
            var Sa = getComputedStyle(a, ''), s = '';
            for (var i = 0; i < Sa.length; i++) {
                if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
                    s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
                }
            }
            b = document.createElement('div');
            b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
            a.insertBefore(b, a.firstChild);
            var l = a.childNodes.length;
            for (var i = 1; i < l; i++) {
                b.appendChild(a.childNodes[1]);
            }
            a.style.height = b.getBoundingClientRect().height + 'px';
            a.style.padding = '0';
            a.style.border = '0';
        }
        var Ra = a.getBoundingClientRect(),
            R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('.footer').getBoundingClientRect().top + 40);
        if ((Ra.top - P) <= 0) {
            if ((Ra.top - P) <= R) {
                b.className = 'stop';
                b.style.top = - R +'px';
                b.style.left = 0;
            } else {
                b.className = 'sticky';
                b.style.top = P + 'px';
                b.style.left = Ra.left + 'px';
            }
        } else {
            b.className = '';
            b.style.top = '';
            b.style.left = '';
        }
        window.addEventListener('resize', function() {
            a.children[0].style.width = getComputedStyle(a, '').width;
            b.style.left = (b.className == 'sticky' ? (a.getBoundingClientRect().left + 'px') : '0');
        }, false);
    }
})



// Preloader
window.onload = function () {
    setTimeout(function () {

        let preloader = document.getElementById('preloader');
        let html = document.getElementById('html');
        preloader.style.display = 'none';
        document.body.classList.remove('page_load');
        html.classList.remove('page_load');

    }, 300);

    setTimeout(function () {

        let main_page = document.getElementById('articles_page');
        main_page.style.opacity = '1';

    }, 200);


    setTimeout(function () {
        let in_trend = document.getElementById('in_trend');
        in_trend.style.opacity = '1';

    }, 400);
};



