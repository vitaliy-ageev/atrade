// Modal Footer Scroll V2
var $window = $(window);
var $markerFixed = $('.article_page_footer');

//отслеживаем событие прокрутки страницы
$window.scroll(function() {

    if($window.scrollTop() + $window.height() > $markerFixed.offset().top) {
        $('.article_page_footer_fixed_mobile').removeClass('active');
        $('.article_page_footer_fixed_mobile').addClass('hide');
    }else{
        $('.article_page_footer_fixed_mobile').removeClass('hide');
        $('.article_page_footer_fixed_mobile').addClass('active');
    }
});