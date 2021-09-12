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
        let help_page = document.getElementById('help_page');
        help_page.style.opacity = '1';
    }, 200);

};






