// Search For A Question
$(".sp_search").click(function() {
    $('.sp_search_form').addClass('active');
    $('.sp_search').addClass('active');
    $('.sp_search_block_input').focus();

});

//Если клик полизошел вне блока - то скрыть его
jQuery(function($){
    $(document).mouseup(function (e){
        var div = $(".sp_search");

        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass('active');
            $('.sp_search_form').removeClass('active');
        }
    });
});


// Typeahead
questions.initialize();

$("#search_input").bind('typeahead:select', function (ev, suggestion) {
    window.location = path + '/search/?s=' + encodeURIComponent(suggestion.question);

});


// Hover Star's
$('.sp_searching_result_item').each(function() {
    var id = $(this).data('id');

    // First Star Hover
    $(this).find('.sp_searching_result_raiting_star:eq(0)').hover(function(){
        if(!($(this).parent().hasClass('first-click')) && !($(this).parent().hasClass('second-click')) && !($(this).parent().hasClass('third-click')) && !($(this).parent().hasClass('fourth-click')) && !($(this).parent().hasClass('fifth-click'))) {
            $(this).parent().addClass('first');
        };
    });
    // Mouse leave
    $(this).find('.sp_searching_result_raiting_star:eq(0)').mouseleave(function(){
        $(this).parent().removeClass('first');
    });
    // Click
    $(this).find('.sp_searching_result_raiting_star:eq(0)').click(function(){
        if(!($(this).parent().hasClass('second-click')) && !($(this).parent().hasClass('third-click')) && !($(this).parent().hasClass('fourth-click')) && !($(this).parent().hasClass('fifth-click'))) {
            $.cookie(id + 'ratingOne', 'cookie_rating', { expires: 90, path: '/' });
            $(this).parent().addClass('first-click');
        };
    });

    // Second Star Hover
    $(this).find('.sp_searching_result_raiting_star:eq(1)').hover(function(){
        if(!($(this).parent().hasClass('first-click')) && !($(this).parent().hasClass('second-click')) && !($(this).parent().hasClass('third-click')) && !($(this).parent().hasClass('fourth-click')) && !($(this).parent().hasClass('fifth-click'))) {
            $(this).parent().addClass('second');
        };
    });
    // Mouse leave
    $(this).find('.sp_searching_result_raiting_star:eq(1)').mouseleave(function(){
        $(this).parent().removeClass('second');
    });
    // Click
    $(this).find('.sp_searching_result_raiting_star:eq(1)').click(function(){
        if(!($(this).parent().hasClass('first-click')) && !($(this).parent().hasClass('third-click')) && !($(this).parent().hasClass('fourth-click')) && !($(this).parent().hasClass('fifth-click'))) {
            $.cookie(id + 'ratingTwo', 'cookie_rating', { expires: 90, path: '/' });
            $(this).parent().addClass('second-click');
        };
    });

    // Third Star Hover
    $(this).find('.sp_searching_result_raiting_star:eq(2)').hover(function(){
        if(!($(this).parent().hasClass('first-click')) && !($(this).parent().hasClass('second-click')) && !($(this).parent().hasClass('third-click')) && !($(this).parent().hasClass('fourth-click')) && !($(this).parent().hasClass('fifth-click'))) {
            $(this).parent().addClass('third');
        };
    });
    // Mouse leave
    $(this).find('.sp_searching_result_raiting_star:eq(2)').mouseleave(function(){
        $(this).parent().removeClass('third');
    });
    // Click
    $(this).find('.sp_searching_result_raiting_star:eq(2)').click(function(){
        if(!($(this).parent().hasClass('first-click')) && !($(this).parent().hasClass('second-click')) && !($(this).parent().hasClass('fourth-click')) && !($(this).parent().hasClass('fifth-click'))) {
            $.cookie(id + 'ratingThree', 'cookie_rating', { expires: 90, path: '/' });
            $(this).parent().addClass('third-click');
        };
    });

    // Fourth Star Hover
    $(this).find('.sp_searching_result_raiting_star:eq(3)').hover(function(){
        if(!($(this).parent().hasClass('first-click')) && !($(this).parent().hasClass('second-click')) && !($(this).parent().hasClass('third-click')) && !($(this).parent().hasClass('fourth-click')) && !($(this).parent().hasClass('fifth-click'))) {
            $(this).parent().addClass('fourth');
        };
    });
    // Mouse leave
    $(this).find('.sp_searching_result_raiting_star:eq(3)').mouseleave(function(){
        $(this).parent().removeClass('fourth');
    });
    // Click
    $(this).find('.sp_searching_result_raiting_star:eq(3)').click(function(){
        if(!($(this).parent().hasClass('first-click')) && !($(this).parent().hasClass('second-click')) && !($(this).parent().hasClass('third-click')) && !($(this).parent().hasClass('fifth-click'))) {
            $.cookie(id + 'ratingFour', 'cookie_rating', { expires: 90, path: '/' });
            $(this).parent().addClass('fourth-click');
        };
    });

    // Fifth Star Hover
    $(this).find('.sp_searching_result_raiting_star:eq(4)').hover(function(){
        if(!($(this).parent().hasClass('first-click')) && !($(this).parent().hasClass('second-click')) && !($(this).parent().hasClass('third-click')) && !($(this).parent().hasClass('fourth-click')) && !($(this).parent().hasClass('fifth-click'))) {
            $(this).parent().addClass('fifth');
        };
    });
    // Mouse leave
    $(this).find('.sp_searching_result_raiting_star:eq(4)').mouseleave(function(){
        $(this).parent().removeClass('fifth');
    });
    // Click
    $(this).find('.sp_searching_result_raiting_star:eq(4)').click(function(){
        if(!($(this).parent().hasClass('first-click')) && !($(this).parent().hasClass('second-click')) && !($(this).parent().hasClass('third-click')) && !($(this).parent().hasClass('fourth-click'))) {
            $.cookie(id + 'ratingFive', 'cookie_rating', { expires: 90, path: '/' });
            $(this).parent().addClass('fifth-click');
        };
    });

});


// Last Item
$('.sp_searching_result_item').last().addClass('last');

// Переход по ссылке через 5 милисекунд для мобильных версий
if (screen.width <= '1000') {
    $('.sp_searching_result_item').each(function(){
        $(this).find('.sp_searching_result_item_inner').click(function(e){
            var value = $(this).data('href');
            e.preventDefault();

            setTimeout(function(){
                document.location.href = value;
            },500);
        });
    });
};



// добавляем класс мобильной пагинации если есть кнопка назад
if($('div').is('.articles_page_mobile_pagination_next')) {
    $('.articles_page_mobile_pagination_prev').addClass('active_btn');
}







