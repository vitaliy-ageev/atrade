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
        let receiving_signals = document.getElementById('receiving_signals');
        let rs_mobile = document.getElementById('rs_mobile');
        let rs_n = document.getElementById('rs_n');
        receiving_signals.style.opacity = '1';
        rs_mobile.style.opacity = '1';
        rs_n.style.opacity = '1';

    }, 100);

    setTimeout(function () {
        let signal_history = document.getElementById('signal_history');
        let latest_news_main = document.getElementById('latest_news_main');
        let latest_news_mobile_main = document.getElementById('latest_news_mobile_main');
        signal_history.style.opacity = '1';
        latest_news_main.style.opacity = '1';
        latest_news_mobile_main.style.opacity = '1';

    }, 100);

  
};



