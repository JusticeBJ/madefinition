// on load script copied from https://codepen.io/tateishi-e/pen/xaEJxw

function Utils() { }
Utils.prototype = {
    constructor: Utils,  
    isElementInView: function (element, fullyInView) {
        var windowHeight = $(window).height();

        if( $(window).scrollTop() < windowHeight ) {
            var offsetTop = 100;
        } else {  
            var offsetTop = 300;
        }
        var pageTop = $(window).scrollTop();
        var pageBottom = pageTop + $(window).height();
        var elementTop = $(element).offset().top + offsetTop;
        var elementBottom = elementTop + $(element).height();

        if (fullyInView === true) {
            return ((pageTop < elementTop ) && (pageBottom > elementBottom));
        } else {
            return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
        }
    }
};

var Utils = new Utils();
$(window).on('load', addFadeIn(
));


$(window).scroll(function () {
    addFadeIn(true);
});

function addFadeIn(repeat) {
    var classToFadeIn = ".animate";

    $(classToFadeIn).each(function (index) {
        var isElementInView = Utils.isElementInView($(this), false);
        if (isElementInView) {
            console.log('view');

        //     if( $(this).hasClass('right') ){
        //         console.log('right');
        //         setTimeout(function(){ 
        //             $(this).addClass('fadeInRight'); 
        //         }, 100); 
        //     } else {
        //         $(this).addClass('fadeInLeft')
        //     }
        // }

            if (!($(this).hasClass('fadeInRight')) && !($(this).hasClass('fadeInLeft')) && $(this).hasClass('scrollRight') ) {
                
                // if (index % 2 == 0) $(this).addClass('fadeInRight');
                // else $(this).addClass('fadeInRight');
                // setTimeout(function(){ 
                //     $(this).addClass('fadeInRight');
                //     // alert('now');
                // }, 100);

                
                
                if($('.animate.fadeInRight').length == 0 ) {
                    $(this).addClass('fadeInRight');
                } else if($('.animate.fadeInRight').length == 1 ) {
                    $(this).addClass('fadeInRight1');
                } else {
                    $(this).addClass('fadeInRight2');
                }


            }
        } else if (repeat) {
            $(this).removeClass('fadeInRight');
            $(this).removeClass('fadeInRight1');
            $(this).removeClass('fadeInRight2');
            $(this).removeClass('fadeInLeft');
        }
    });
}