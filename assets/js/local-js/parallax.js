//---===>>> parallax-img
$(window).on('load scroll resize', function() {
    $(".parallax-img").each(function() {
        var docViewTop = $(window).scrollTop() + $(window).height();
        var elemTop = $(this).offset().top;
        if (docViewTop >= elemTop) {
            $gap= 120 - (docViewTop - elemTop)/3;
            $(this).css('background-position', 'center top '+ $gap +'px');
            $(this).addClass("is-screened");
        }
        else{
            $(this).css({'background-position': 'center top 110px'});
            $(this).removeClass('is-screened');
        }
    });
});



