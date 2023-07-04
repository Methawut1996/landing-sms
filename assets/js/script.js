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
  var menu = $(".menu-content")
  console.log("menu", menu)
  var swiper = new Swiper(".swiper-container", {
    pagination: {
      el: ".swiper-pagination.pagination-bottom, .swiper-pagination.pagination-top",
      clickable: true,
      renderBullet: function (index, className) {
        console.log("index", menu[index])
        return '<span class="' + className + '">' + $(menu[index]).text() + "</span>";
      }
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    effect: "coverflow",
    slidesPerView: 1,
    loop: true,
    centeredSlides: true,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true
    },
    breakpoints: {
      0: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 3
      },
      1024: {
        slidesPerView: 3
      },
      1560: {
        slidesPerView: 3
      }
    }
  });


});