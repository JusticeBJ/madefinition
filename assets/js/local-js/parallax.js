//---===>>> parallax-img
$(window).on('load scroll resize', function() {
    $(".parallax-img").each(function() {
        var docViewTop = $(window).scrollTop() + $(window).height();
        var elemTop = $(this).offset().top;
        if (docViewTop >= elemTop) {
            $gap= 160 - (docViewTop - elemTop)/3;
            $(this).css('background-position', 'center top '+ (-$gap)/14 +'rem');
            $(this).addClass("is-screened");
        }
        else{
            $(this).css({'background-position': 'center top -8rem'});
            $(this).removeClass('is-screened');
        }
    });
});



