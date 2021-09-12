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


//  запрет перехода по ссылке, если текущий элемент имеет класс активный
$('.header_navigation_link.active').click(function () {
    return false;
});

$('.subheader_mobile_navigation_link.active').click(function () {
    return false;
});






