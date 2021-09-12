// Modal Signal Window Right Sidebar Details Copy Text
var clipboard = new ClipboardJS('.signal_mw_details_desc_value_block');

clipboard.on('success', function(e) {
    $('.signal_mw_details_desc_value_block').removeClass('is-active');
    $(e.trigger).addClass('is-active');

    setTimeout(function() {
        $(".signal_mw_details_desc_value_block.is-active").removeClass('is-active'); }, 700);
});

clipboard.on('error', function(e) {
    console.log('No');
});



