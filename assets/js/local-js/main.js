// add AOS animation
// Documentation: https://michalsnik.github.io/aos/
// if(jQuery(window).innerWidth() < 768 ) {
//   AOS.init({
//     disable: true
//   })
// }
// if(jQuery(window).innerWidth() >= 768 ) {
//   AOS.init({
//     easing: 'linear',    
//     duration: 2000,
//   })
// }




//----------=======>>> Document Ready <<<=======----------
$(document).ready(function(){

    //---==>>> Hide empty paragraphs   
    $('p:empty').remove();
 
    //---==>>> Remove special characters van tel: href link
    $('a[href^="tel:"]').attr('href', function(_,v){ 
        return v.replace(/\(0\)|\s+/g,'')
    });

    //---==>>> Run Swiper on load
    var swiper = new Swiper('.swiper-container', {
      speed: 2000,
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: true,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        // renderBullet: function (index, className) {
        //   return '<span class="' + className + '">' + '' + '</span>';
        // },
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    
    var screenSize= $(window).innerWidth();
    if(screenSize > 768) {
      
      //set all banner-global__p to the same height
      
        $(window).on('load resize',function(){
          if(screenSize > 768) {
            $generalHeight= 0;
            $allElement= document.querySelectorAll('.footer__col');
            for(var i=0; i< $allElement.length; i++){
              $thisHeight= $($allElement[i]).height();
              if($thisHeight > $generalHeight){
                $generalHeight= $thisHeight;
              }
            }
            $('.footer__col').css('height', $generalHeight+ 70+'px');
          }
          
        });
    }









    //---==>>> Hamburger-menu on click toggle
    $("#hamburger-menu").click(function(){
      $(".navbar-nav").slideToggle("slow");
    });  

    //---==>>> Add Dropdown classes to Service Title
    $('.dropdown a').first().addClass( "dropdown-toggle" );
    $('.dropdown ul').first().addClass( "dropdown-menu" );

    //---==>>> If any dropdown item active make service title red
    if($('.dropdown-item').hasClass('current-menu-item')){
      $('#menu-item-56').addClass('current-menu-item');
    }

    //---==>>> Change Sub-menu background colors
    if($('.header').hasClass('green')){
      $('.sub-menu').addClass('green');
    }
    if($('.header').hasClass('pink')){
      $('.sub-menu').addClass('pink');   
    }
    if($('.header').hasClass('blue')){
      $('.sub-menu').addClass('blue');
    }
    // if($('#menu-item-54').hasClass('current-menu-item')){
    //   $('.sub-menu').addClass('green');
    // }

    

    //---==>>> Contact Form: Send Email 
    // $('.form_error').hide();
    // $(".form__btn").click(function(){
    //   var the_name = $("#form__name").val();
    //   var the_phone = $("#form__phone").val();
    //   var the_email = $("#form__email").val();
    //   var the_message = $("#form__message").val();
    //   var lineBreak = '<br>';

    //   //name error
    //   if(the_name== ''){
    //     if($('#form__name').next().hasClass('form_error')){
    //       $('#form__name').next().show();
    //       return false;
    //     }
    //     else{
    //       $('#form__name').after('<span class="form_error">Please enter your name</span>');
    //       return false;
    //     }
    //   }
    //   $('.form_error').css('display','none'); 

      //phone error
      // if(the_phone== ''){
      //   if($('#form__phone').next().hasClass('form_error')){
      //     $('#form__phone').next().show();
      //     return false;
      //   }
      //   else{
      //     $('#form__phone').after('<span class="form_error">Please enter your phone number</span>');
      //     return false;
      //   }
      // }
      // $('.form_error').css('display','none');

      //email error
      // if(the_email== ''){
      //   if($('#form__email').next().hasClass('form_error')){
      //     $('#form__email').next().show();
      //     return false;
      //   }
      //   else{
      //     $('#form__email').after('<span class="form_error">Please enter your email address</span>');
      //     return false;
      //   }
      // }
      // $('.form_error').css('display','none'); 
      
      // //email not valid
      // if(IsEmail(the_email)==false){
      //   if($('#form__email').next().hasClass('invalid_email')){
      //     $('#form__email').next().show();
      //     return false;
      //   }
      //   else{
      //     $('#form__email').after('<span class="form_error invalid_email" >This email is not valid</span>');
      //     return false;
      //   }
      // }
      // $('.form_error').css('display','none'); 

      //message error
    //   if(the_message== ''){
    //     if($('#form__message').next().hasClass('form_error')){
    //       $('#form__message').next().show();
    //       return false;
    //     }
    //     else{
    //       $('#form__message').after('<span class="form_error">Please enter your message</span>');
    //       return false;
    //     }
    //   }
    //   $('.form_error').css('display','none'); 


    //   function IsEmail(email) {
    //     var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    //     if(!regex.test(email)) {
    //         return false;
    //     }else{
    //         return true;
    //     }
    //   }

    //   //send mail
    //   var the_body= 'Name: '+ the_name + lineBreak +'Phone Number: '+ the_phone+ lineBreak +'Email: '+ the_email + lineBreak + lineBreak + the_message;
    //   window.location.href = "mailto:justice@madefinition.com?subject=Madefinition contact form&body=" +the_body;
    //   $(".subfield-input").val("");
    //   $('.form__btn').after('<span class="form_sent">Sending...</span>');
    // });


    //---==>>> load team images in respctive columns
    var images= document.querySelectorAll('.team__picture');
    var variable;
    for(variable=1; variable <= images.length; variable++){
      console.log(images);
      $('.column--' + variable).appendTo('.column-' + variable);
    }

    

});//----------=======>>> End Document Ready <<<=======----------






// ----------=======>>> Button onClick effect <<<=======----------
$(".btn-general a").click(function(){
  $(this).css('transform', 'scale(0.9)');
});

// ----------=======>>> Display Dropdown Box on hover <<<=======----------
$('#menu-item-56').hover(function(){
  $(this).addClass('show');
  $('a').first().attr('aria-expanded','true');
  $('.sub-menu').addClass('show').css('display','block');
}, function(){
  $(this).removeClass('show');
  $('a').first().attr('aria-expanded','false');
  $('.sub-menu').css('display','none').removeClass('show');
});



