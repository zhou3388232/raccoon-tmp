(function($) {
    $(function() {

        $(window).scroll(function (){
            if($(window).scrollTop() > 0){
                $('header').addClass('fix');
            }else{
                $('header').removeClass('fix');
            }
        });

    });
})(jQuery);

