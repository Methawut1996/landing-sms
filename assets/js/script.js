jQuery(document).ready(function ($) {
  var swiper1 = new Swiper(".my-Swiper", {
    spaceBetween: 400,
    loop: true,
    slidesPerView: 1,
    // centeredSlides: true,
    // slidesPerView: "auto",
  });
  var swiper2 = new Swiper(".swiper-package", {
    pagination: {
      el: ".swiper-pagination",
    },
    spaceBetween: 7,
    loop: true,
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
    $("html, body").animate(
      {
        scrollTop: $($(this).attr("href")).offset().top,
      },
      500
    );
    return false;
  });
  // Get the button
  var btn = $("#button");
  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      btn.addClass("show");
    } else {
      btn.removeClass("show");
    }
  });
  btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "300");
  });
  $(".menu-mobile").click(function (e) {
    e.stopPropagation();
    $(".nav-mobile-box").toggleClass("active");
  });
});
