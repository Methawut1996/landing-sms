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
  
  
  
  });