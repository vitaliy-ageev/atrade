// Search For A Question
$(".help_block_search").click(function() {
    $('.help_block_search_form').addClass('active');
    $('.help_block_search').addClass('active');
//  $('.search_form_close').addClass('active');
    $('.help_block_search_input').focus();

});

//Если клик полизошел вне блока - то скрыть его
jQuery(function($){
    $(document).mouseup(function (e){
        var div = $(".help_block_search");

        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass('active');
            $('.help_block_search_form').removeClass('active');
        }
    });
});

//Если не пуст инпут - то показать крестик
$('.help_block_search_input').on('keyup',function(){
    var $this = $(this),
        val = $this.val();

    if(val.length >= 1){
        $('.help_block_search_icon').addClass('active');
    }else {
        $('.help_block_search_icon').removeClass('active');
    }
});


// Search Button Mobile
var $helpStyles = {
    position: "fixed",
    top: "0",
    left: "0",
    right: "0"
};

$('.help_block_search_button_mobile').click(function(){
    $('body').addClass('mobile_window');
    $('body').css($helpStyles);
    $('.search_mobile_window').addClass('open');
    $('.wrapper_search_mobile_window').addClass('open');
    $('.search_mobile_window_input').focus();
});

// Typeahead
questions.initialize();

$("#search_input_help").bind('typeahead:select', function (ev, suggestion) {
    window.location = path + '/search/?s=' + encodeURIComponent(suggestion.question);

});

