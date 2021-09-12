// При обновлении - страница всегда вверху
$(window).on('beforeunload', setTimeout(function(){
    $(window).scrollTop(0);
},100));
