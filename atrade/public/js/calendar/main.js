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

        let calendar_loader = document.getElementById('calendar_loader');
        calendar_loader.style.opacity = '1';

    }, 200);

    setTimeout(function () {
        let calendarEventsHidden = document.getElementById('hidden-calendar-events');
        calendarEventsHidden.style.opacity = '1';

    }, 200);


    setTimeout(function () {
        let calendarHidden = document.getElementById('hidden-calendar');
        calendarHidden.style.opacity = '1';

    }, 200);
};