jQuery(document).ready(function ($) {
	
	

	
	
	
  var swiper1 = new Swiper(".my-Swiper", {
    spaceBetween: 400,
    loop: true,
    slidesPerView: 1,
    // centeredSlides: true,
    // slidesPerView: "auto",
  });
  var swiper2 = new Swiper(".swiper-package", {
	  slidesPerView: 1,
    pagination: {
      el: ".swiper-pagination",
    },
    spaceBetween: 7,
    loop: false,
    breakpoints: {
      0: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
      1560: {
        slidesPerView: 4,
      },
    },
  });
  var swiper3 = new Swiper(".swiper-promotion", {
    pagination: {
      el: ".swiper-pagination",
    },
    // slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    // centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 2,
      },
      360: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 4,
      },
      1560: {
        slidesPerView: 4,
      },
    },
  });
  $(".scrollTo").click(function () {
    $("html, body").animate({
        scrollTop: $($(this).attr("href")).offset().top,
      },
      500
    );
    return false;
  });
  $(".menu-mobile").click(function (e) {
    e.stopPropagation();
    $(".nav-mobile-box").toggleClass("active");
  });

// Get slide Example
  var swiperExam = new Swiper(".slide-exam-mobile .swiper-exam", {
    effect: "coverflow",
    loop: true,
    centeredSlides: true,
    slidesPerView: 2,
    initialSlide: 0,
    coverflowEffect: {
      rotate: 0,
      stretch: 1,
      depth: 580,
      modifier: 1,
      slideShadows: false,
    },
  });


  var pagiSlidesMobile = Array.from(
    document.querySelectorAll(".item-pagi-mobile")
  );

  pagiSlidesMobile[swiperExam.realIndex].classList.add("active");



  pagiSlidesMobile.forEach(function (titleSlide, index) {
    titleSlide.addEventListener("click", function () {
      pagiSlidesMobile.forEach(function (slide) {
        slide.classList.remove("active");
      });
      swiperExam.slideToLoop(index);
      titleSlide.classList.add("active");
    });
  });


  swiperExam.on("slideChange", function () {
    pagiSlidesMobile.forEach(function (slide) {
      slide.classList.remove("active");
    });
    var activeIndex = swiperExam.realIndex;
    if (activeIndex === pagiSlidesMobile.length) {
      activeIndex = 0;
    }
    if (activeIndex === pagiSlidesMobile.length) {
      activeIndex = 0;
    }
    pagiSlidesMobile[activeIndex].classList.add("active");
  });


});