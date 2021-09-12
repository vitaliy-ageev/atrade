// добавляем последнему мобильному айтему класс last
$('.articles_page_mobile_item:last').addClass('last');

// добавляем класс мобильной пагинации если есть кнопка назад
if($('div').is('.articles_page_mobile_pagination_next')) {
    $('.articles_page_mobile_pagination_prev').addClass('active_btn');
}

//  запрет перехода по ссылке, если текущий элемент имеет класс активный
$('.header_navigation_link.active').click(function () {
    return false;
});

$('.subheader_mobile_navigation_link.active').click(function () {
    return false;
});