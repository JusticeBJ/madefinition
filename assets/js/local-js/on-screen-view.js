//https://stackoverflow.com/questions/41144113/javascript-jquery-add-class-when-element-comes-into-viewport
// $(window).on('scroll', function() {
//     $(".graph").each(function() {
//       if (isScrolledIntoView($(this))) {
//         $(this).find(".graph-line").addClass("graph-75");
//         $(this).find(".graph-line-2").addClass("opacity");
//       }
//     });
//   });
  
//   function isScrolledIntoView(elem) {
//     var docViewTop = $(window).scrollTop();
//     var docViewBottom = docViewTop + $(window).height();
  
//     var elemTop = $(elem).offset().top;
//     var elemBottom = elemTop + $(elem).height();
  
//     return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
// }

$(window).on('scroll', function() {
    $(".on-screen").each(function() {
        var docViewTop = $(window).scrollTop() + $(window).height();
        var elemTop = $(this).offset().top;
        if (docViewTop >= elemTop) {
            $(this).addClass("is-screened");
        }
        else{
            $(this).removeClass('is-screened');
        }
    });
});
