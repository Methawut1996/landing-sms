jQuery(document).ready(function ($) {
  console.log(window.location.pathname);
  var swiper = new Swiper(".my-Swiper", {
    pagination: {
      el: ".swiper-pagination",
    },
    slidesPerView: 1,
    spaceBetween: 400,
    loop: true,
    centeredSlides: true,
    slidesPerView: "auto",
  });

  var swiper = new Swiper(".swiper-package", {
    pagination: {
      el: ".swiper-pagination",
    },
    spaceBetween: 20,
    loop: true,
    breakpoints: {
      0: {
        slidesPerView: 2
      },
      768: {
        slidesPerView: 3
      },
      1024: {
        slidesPerView: 4
      },
      1560: {
        slidesPerView: 4
      }
    }
  });

  var swiper = new Swiper(".swiper-promotion", {
    pagination: {
      el: ".swiper-pagination",
    },
    // slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    // centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 3
      },
      1024: {
        slidesPerView: 4
      },
      1560: {
        slidesPerView: 4
      }
    }
  });



  // var menu = ["Slide 1", "Slide 2", "Slide 3", "Slide 4", "Slide 5"];
  // var menu = $(".menu-content")
  // console.log("menu", menu)
  // var swiper = new Swiper(".swiper-container", {
  //   pagination: {
  //     el: ".swiper-pagination.pagination-bottom, .swiper-pagination.pagination-top",
  //     clickable: true,
  //     renderBullet: function (index, className) {
  //       console.log("index", menu[index])
  //       return '<span class="' + className + '">' + $(menu[index]).text() + "</span>";
  //     }
  //   },
  //   navigation: {
  //     nextEl: ".swiper-button-next",
  //     prevEl: ".swiper-button-prev"
  //   },
  //   effect: "coverflow",
  //   slidesPerView: 1,
  //   loop: true,
  //   centeredSlides: true,
  //   coverflowEffect: {
  //     rotate: 0,
  //     stretch: 0,
  //     depth: 100,
  //     modifier: 1,
  //     slideShadows: true
  //   },
  //   breakpoints: {
  //     0: {
  //       slidesPerView: 1
  //     },
  //     768: {
  //       slidesPerView: 3
  //     },
  //     1024: {
  //       slidesPerView: 3
  //     },
  //     1560: {
  //       slidesPerView: 3
  //     }
  //   }
  // });

  $('.slider-single').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    
    arrows: true,
    adaptiveHeight: true,
    focusOnSelect: true,
    prevArrow: '<button> prev</button>',
  nextArrow: '<button> next</button>',
  
   centerMode: true,
   centerPadding: '0',
   dots: true,
    infinite: true,
   touchThreshold : 100,
    speed: 400,
    
    
    
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
    nextArrow: '<div class="slick-custom-arrow slick-custom-arrow-right"><i class="fa fa-angle-right"></i></div>',
     prevArrow: '<div class="slick-custom-arrow slick-custom-arrow-left"><i class="fa fa-angle-left"></i></div>',
   });

  $('.slider-nav')
    .on('init', function(event, slick) {
      $('.slider-nav .slick-slide.slick-current').addClass('is-active');
    })
    .slick({
      slidesToShow: 7,
      slidesToScroll: 7,
      dots: false,
      focusOnSelect: false,
      infinite: true,
      nextArrow: '<div class="slick-tabs-arrow slick-tabs-arrow-right"><i class="fa fa-angle-right"></i></div>',
      prevArrow: '<div class="slick-tabs-arrow slick-tabs-arrow-left"><i class="fa fa-angle-left"></i></div>',
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,
        }
      }, {
        breakpoint: 640,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
       }
      }, {
        breakpoint: 420,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
     }
      }]
    });
  $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
    $('.slider-nav').slick('slickGoTo', currentSlide);
    var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
    $('.slider-nav .slick-slide.is-active').removeClass('is-active');
    $(currrentNavSlideElem).addClass('is-active');
  });
  $('.slider-nav').on('click', '.slick-slide', function(event) {
    event.preventDefault();
    var goToSingleSlide = $(this).data('slick-index');
 
    $('.slider-single').slick('slickGoTo', goToSingleSlide);
  });
  $('.slider-pager > div').click(function() {
   $('.slider').slick('slickGoTo',$(this).index());
 });
 
   //UPDATED
 $('.slider-single').on('afterChange', function(event, slick, currentSlide){ 
   $('.content').hide();
   $('.content[data-id=' + (currentSlide + 1) + ']').show();
 });
 
 var $slider = $('.slider-single');
 
 if ($slider.length) {
   var currentSlide;
   var slidesCount;
   var sliderCounter = document.createElement('div');
   sliderCounter.classList.add('slider__counter');
   
   var updateSliderCounter = function(slick, currentIndex) {
     currentSlide = slick.slickCurrentSlide() + 1;
     slidesCount = slick.slideCount;
     $(sliderCounter).text(currentSlide + ' of ' +slidesCount)
   };
 
   $slider.on('init', function(event, slick) {
     $slider.append(sliderCounter);
     updateSliderCounter(slick);
   });
 
   $slider.on('afterChange', function(event, slick, currentSlide) {
     updateSliderCounter(slick, currentSlide);
   });
 
   $slider.slick();
 }
 
 var rev = $('.rev_slider');
 rev.on('init', function(event, slick, currentSlide) {
   var
     cur = $(slick.$slides[slick.currentSlide]),
     next = cur.next(),
     prev = cur.prev();
   prev.addClass('slick-sprev');
   next.addClass('slick-snext');
   cur.removeClass('slick-snext').removeClass('slick-sprev');
   slick.$prev = prev;
   slick.$next = next;
 }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
   console.log('beforeChange');
   var
     cur = $(slick.$slides[nextSlide]);
   console.log(slick.$prev, slick.$next);
   slick.$prev.removeClass('slick-sprev');
   slick.$next.removeClass('slick-snext');
   next = cur.next(),
     prev = cur.prev();
   prev.prev();
   prev.next();
   prev.addClass('slick-sprev');
   next.addClass('slick-snext');
   slick.$prev = prev;
   slick.$next = next;
   cur.removeClass('slick-next').removeClass('slick-sprev');
 });
 rev.slick({
  speed: 1000,
  arrows: true,
  dots: false,
  focusOnSelect: true,
  prevArrow: '<button> prev</button>',
  nextArrow: '<button> next</button>',
  infinite: true,
  centerMode: true,
  slidesPerRow: 1,
  slidesToShow: 3,
  slidesToScroll: 1,
  centerPadding: '0',
  swipe: true,
  customPaging: function(slider, i) {
    return '';
  },
  /*infinite: false,*/
});


});


