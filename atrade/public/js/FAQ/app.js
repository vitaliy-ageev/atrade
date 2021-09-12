// Раскрывает FAQ
$(function() {
    var Accordion = function(el, multiple) {
        this.el = el || {};
        // more then one submenu open?
        this.multiple = multiple || false;

        var dropdownlink = this.el.find('.main_content_help_item_question_block');
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
            $el.find('.main_content_help_item_answer_block').not($next).slideUp().parent().removeClass('active');
        }
    }

    var accordion = new Accordion($('.main_content_help_item'), false);
});

// Button Block
var buttonBlock = $('.main_content_help_item_answer_btn_block');

buttonBlock.each(function(){
    var id = $(this).data('id');
    // Decides
    $(this).find('.main_content_help_item_answer_btn_decides').click(function(){
        $(this).addClass('active');
        $.removeCookie(id + 'ndecides', { path: '/' });
        $.cookie(id + 'decides', 'cookie_help', { expires: 90, path: '/' });

        //
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_block').addClass('active');
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_feedback_thanks_vote').addClass('active');

        //
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_mobile_decides').addClass('active');
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_block_mobile').addClass('active');
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_mobile_feedback_thanks_vote').addClass('active');
    });

    // Doesn't Decide
    $(this).find('.main_content_help_item_answer_btn_dsnt_decides').click(function(){
        $(this).addClass('active');
        $.removeCookie(id + 'decides', { path: '/' });
        $.cookie(id + 'ndecides', 'cookie_help', { expires: 90, path: '/' });

        //
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_block').addClass('active');
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_feedback_didnt_help').addClass('active');

        //
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_mobile_dsnt_decides').addClass('active');
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_block_mobile').addClass('active');
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_mobile_feedback_thanks_vote').addClass('active');
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_mobile_feedback_didnt_help').addClass('active');
    });



});

// Cancel
$('.thanks_vote_cancel').click(function(){
    var id = $(this).data('id');
    $.removeCookie(id + 'decides', { path: '/' });
    $.removeCookie(id + 'ndecides', { path: '/' });

    if($('.main_content_help_item').hasClass('active')) {

        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_block').removeClass('active');

        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_feedback_thanks_vote').removeClass('active');

        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_feedback_didnt_help').removeClass('active');

        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_dsnt_decides').removeClass('active');

        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_decides').removeClass('active');

        //
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_mobile_decides').removeClass('active');

        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_mobile_dsnt_decides').removeClass('active');

        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_block_mobile').removeClass('active');

        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_mobile_feedback_thanks_vote').removeClass('active');

        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_mobile_feedback_didnt_help').removeClass('active');
    }
});



// Button Block Mobile
var buttonBlockMobile = $('.main_content_help_item_answer_btn_block_mobile');

buttonBlockMobile.each(function(){
    var id = $(this).data('id');
    // Decides
    $(this).find('.main_content_help_item_answer_btn_mobile_decides').click(function(){
        $(this).addClass('active');
        $.removeCookie(id + 'ndecides', { path: '/' });
        $.cookie(id + 'decides', 'cookie_help', { expires: 90, path: '/' });

        //
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_block').addClass('active');
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_feedback_thanks_vote').addClass('active');
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_decides').addClass('active');


        setTimeout(function(){
            $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_block_mobile').addClass('active');
            $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_mobile_feedback_thanks_vote').addClass('active');
        }, 300);

    });

// Doesn't Decide
    $(this).find('.main_content_help_item_answer_btn_mobile_dsnt_decides').click(function(){
        $(this).addClass('active');
        $.removeCookie(id + 'decides', { path: '/' });
        $.cookie(id + 'ndecides', 'cookie_help', { expires: 90, path: '/' });

        //
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_block').addClass('active');
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_feedback_didnt_help').addClass('active');
        $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_dsnt_decides').addClass('active');

        setTimeout(function(){
            $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_block_mobile').addClass('active');
            $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_mobile_feedback_thanks_vote').addClass('active');
            $('.main_content_help_item.active').find('.main_content_help_item_answer_btn_mobile_feedback_didnt_help').addClass('active');
        }, 300);

    });

});


//
$('.main_content_help_item').each(function () {
    let id = $(this).data('id');
    let strGET = window.location.search.replace( '?', '');

    if(strGET == "id=" + id) {
        $(this).addClass('active');
        $(this).find('.main_content_help_item_answer_block').css('display','block');
    };

});











