// Preloader
window.onload = function () {
    setTimeout(function () {

        let preloader = document.getElementById('preloader');
        let html = document.getElementById('html');
        preloader.style.display = 'none';
        document.body.classList.remove('page_load');
        html.classList.remove('page_load');


    }, 400);

    setTimeout(function () {
        let signals_history_table = document.getElementById('signals_history_table');
        signals_history_table.style.opacity = '1';
    }, 400);

    setTimeout(function () {
        let signalsHistoryGrid = document.getElementById('signals-history-grid');
        signalsHistoryGrid.style.opacity = '1';
    }, 400);

    setTimeout(function () {
        let signalsHistoryGridMobile = document.getElementById('signals-history-grid-mobile');
        signalsHistoryGridMobile.style.opacity = '1';
    }, 400);


};






