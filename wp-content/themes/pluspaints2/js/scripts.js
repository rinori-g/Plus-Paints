mfpOptions = {
    init : function () {
        $('.portfolio-menu ul li').click(function(){
            $('.portfolio-menu ul li').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $('.portfolio-item').isotope({
                filter:selector
            });
            return  false;
        });

        var popup_btn = $('.popup-btn');
        popup_btn.magnificPopup({
            type : 'image',
            gallery : {
                enabled : true
            }
        });
    }
}

jQuery(document).ready(function ($) {
    mfpOptions.init();


    // Window Resize Event
    $(window).resize(function () {


    });

    // Window Scroll Event
    $(window).scroll(function () {
    });

});







