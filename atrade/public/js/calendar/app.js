// Economic Events Calendar Row Description
$(function() {
    var Accordion = function(el, multiple) {
        this.el = el || {};
        // more then one submenu open?
        this.multiple = multiple || false;

        var dropdownlink = this.el.find('.economic_events_calendar_row_wrapper');
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
        $this.parent().toggleClass('open');

        if(!e.data.multiple) {
            //show only one menu at the same time
            $el.find('.economic_events_calendar_row_desc').not($next).slideUp().parent().removeClass('open');
        }
    }

    var accordion = new Accordion($('.economic_events_calendar_row'), false);
});

//  запрет перехода по ссылке, если текущий элемент имеет класс активный
$('.calendar_day_item.active').click(function () {
    return false;
});


//  запрет перехода по ссылке, если текущий элемент имеет класс активный
$('.header_navigation_link.active').click(function () {
    return false;
});

$('.subheader_mobile_navigation_link.active').click(function () {
    return false;
});

