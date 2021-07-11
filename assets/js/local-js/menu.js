//----------=======>>> Slide Menu <<<=======----------
$(function() {
  $("#hamburger-menu").click(function(event) {
    event.stopPropagation();
    $("#hamburger-menu").toggleClass("open"); 
    $("#menu-container .menu-list").toggleClass("active");
    $("#menu-container #menu-wrapper-text").toggleClass("the-menu");
    //---==>>>  body overflow hidden;
    $("body").toggleClass("overflow-hidden");
    if( $("body").hasClass("menu-open")){ 
      $("body").removeClass("menu-open"); 
    } 
    else{ 
      $("body").addClass("menu-open");     
    }    
  });
}); // jQuery load
