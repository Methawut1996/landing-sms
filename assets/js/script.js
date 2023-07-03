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

  var swiper = new Swiper(".swiper-promotion", {
    pagination: {
      el: ".swiper-pagination",
    },
    slidesPerView: 0,
    spaceBetween: 50,
    loop: true,
    centeredSlides: true,
    slidesPerView: "auto",
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

  
  
});