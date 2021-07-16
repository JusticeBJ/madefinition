//----------=======>>> Slide Menu <<<=======----------
$(function() {
  $("#hamburger-menu").click(function(event) {
    event.stopPropagation();
    $("#hamburger-menu").toggleClass("open"); 
    $(".navbar-menu").toggleClass("active");
    $("body").toggleClass("overflow-hidden");   
  });
}); // jQuery load
