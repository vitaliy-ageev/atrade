// History Signals Accordion
$(function() {
    var Accordion = function(el, multiple) {
        this.el = el || {};
        // more then one submenu open?
        this.multiple = multiple || false;

        var dropdownlink = this.el.find('.signals_history_table_item_inner');
        dropdownlink.on('click',
            { el: this.el, multiple: this.multiple },
            this.dropdown);
    };

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el,
            $this = $(this),
            //this is the ul.submenuItems
            $next = $this.next();


        $next.slideToggle();
        $this.parent().toggleClass('active');


        if(!e.data.multiple) {
            //show only one menu at the same time
            $el.find('.signals_history_table_item_desc').not($next).slideUp().parent().removeClass('active');

        }
    };

    var accordion = new Accordion($('.signals_history_table_item'), false);
});

// History Item Gallery Ajax
$('body').on('click', '.history_table', function (e) {
    e.preventDefault();
    var id = $(this).data('id');

    $.ajax({
        url: '/ideasgallery/view',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            showIdeasGallery(res);

        },
        error: function () {
            alert('Ошибка, попробуйте позже');
        }
    });
});


// загружаем скриншоты и описание
function showIdeasGallery(screen) {
    $('#history_table .desc_screen_wrap').html(screen);
};



// добавляем последнему мобильному айтему класс last
$('.signals_history_table_item:last').addClass('last');

// добавляем класс мобильной пагинации если есть кнопка назад
if($('div').is('.articles_page_mobile_pagination_next')) {
    $('.articles_page_mobile_pagination_prev').addClass('active_btn');
}


//  запрет перехода по ссылке, если текущий элемент имеет класс активный
$('.history_page_links_item.active').click(function () {
    return false;
});



$('.modal_msw').click(function () {
    $('.signal_modal_window').addClass('open');
    $('#preloader_modal').addClass('open');
    $('.header').addClass('modal_window');
    $('.subheader').addClass('modal_window');
    $('body').addClass('modal_window');
    $('html').addClass('modal_window');
});

// удаляем иконку "новый" при клике
$('.signals_history_item').each(function () {
    var $this = $(this);
    $(this).click(function () {
        setTimeout(function () {
            $this.find('.signals_history_item_viewed_card').css('display', 'block').setTimeout(300);
        }, 300);
    })
});





