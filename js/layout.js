$(function(ev) {
  var toggle = $('#ss_toggle');
  var menu = $('#ss_menu');
  var rot;
  
  $('#ss_toggle').on('click', function(ev) {
    rot = parseInt($(this).data('rot')) - 180;
    menu.css('transform', 'rotate(' + rot + 'deg)');
    menu.css('webkitTransform', 'rotate(' + rot + 'deg)');
    if ((rot / 180) % 2 == 0) {
      //Moving in
      toggle.parent().addClass('ss_active');
      toggle.addClass('close');
    } else {
      //Moving Out
      toggle.parent().removeClass('ss_active');
      toggle.removeClass('close');
    }
    $(this).data('rot', rot);
  });

  menu.on('transitionend webkitTransitionEnd oTransitionEnd', function() {
    if ((rot / 180) % 2 == 0) {
      $('#ss_menu div i').addClass('ss_animate');
    } else {
      $('#ss_menu div i').removeClass('ss_animate');
    }
  });
  
});

function delay (URL) {
    setTimeout( function() { window.location = URL }, 1000 );
}
$(function() {
   
   $("#btnFadeOut").click(function(){
      $('.fo').addClass('animated fadeOutDown')
      $('.fo-all').addClass('animated fadeOut')
    
    });
   
    $("#ihomeFadeOut").click(function(){
      $('.fo').addClass('animated fadeOut')

    });
   
 });

 // Params
let mainSliderSelector = '.main-slider',
navSliderSelector = '.nav-slider',
interleaveOffset = 0.5;

// Main Slider
let mainSliderOptions = {
  loop: true,
  speed:1000,
  autoplay:{
    delay:3000
  },
  loopAdditionalSlides: 10,
  grabCursor: true,
  watchSlidesProgress: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  on: {
    init: function(){
      this.autoplay.stop();
    },
    imagesReady: function(){
      this.el.classList.remove('loading');
      this.autoplay.start();
    },
    slideChangeTransitionEnd: function(){
      let swiper = this,
          captions = swiper.el.querySelectorAll('.caption');
      for (let i = 0; i < captions.length; ++i) {
        captions[i].classList.remove('show');
      }
      swiper.slides[swiper.activeIndex].querySelector('.caption').classList.add('show');
    },
    progress: function(){
      let swiper = this;
      for (let i = 0; i < swiper.slides.length; i++) {
        let slideProgress = swiper.slides[i].progress,
            innerOffset = swiper.width * interleaveOffset,
            innerTranslate = slideProgress * innerOffset;
        swiper.slides[i].querySelector(".slide-bgimg").style.transform =
          "translate3d(" + innerTranslate + "px, 0, 0)";
      }
    },
    touchStart: function() {
      let swiper = this;
      for (let i = 0; i < swiper.slides.length; i++) {
        swiper.slides[i].style.transition = "";
      }
    },
    setTransition: function(speed) {
      let swiper = this;
      for (let i = 0; i < swiper.slides.length; i++) {
        swiper.slides[i].style.transition = speed + "ms";
        swiper.slides[i].querySelector(".slide-bgimg").style.transition =
          speed + "ms";
      }
    }
  }
};
let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

// Navigation Slider
let navSliderOptions = {
  loop: true,
  loopAdditionalSlides: 10,
  speed:1000,
  spaceBetween: 5,
  slidesPerView: 5,
  centeredSlides : true,
  touchRatio: 0.2,
  slideToClickedSlide: true,
  direction: 'vertical',
  on: {
    imagesReady: function(){
      this.el.classList.remove('loading');
    },
    click: function(){
      mainSlider.autoplay.stop();
    }
  }
};
let navSlider = new Swiper(navSliderSelector, navSliderOptions);

// Matching sliders
mainSlider.controller.control = navSlider;
navSlider.controller.control = mainSlider;