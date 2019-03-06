

$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) {       
      $('#return-to-top').fadeIn(200);    
  } else {
      $('#return-to-top').fadeOut(200);   
  }
});
$('#return-to-top').click(function() {      
  $('body,html').animate({
      scrollTop : 0                      
  }, 500);
});
$(function() {
  $("#anchor").on("click", function(event) {
    var hash = $(this).attr("data-target"),
      target = $("#" + hash);

    event.preventDefault();
    $("html, body").animate({
        scrollTop: $(target).offset().top
      },
      800,
      function() {
        window.location.hash = hash;
      }
    );
  });
});

$(function(){
  var screen992       = 992
      ,wtopnav         = $(".wrapper-topnav");
  function responsive(){
      if ($(window).width() < screen992) {
          $('.js-nav-mobile').html($('.js-nav-desktop').html());
      }else{
          UIkit.offcanvas('#menu-of-canvas').hide();            
      }
  }
  
  $(window).resize(responsive).ready(responsive);
});

  

// if ($(this).scrollTop() > 1000) { 
//     $('.branding').addClass('swaplogo');
// }
