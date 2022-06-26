window.johnkegd = window.johnkegd || {};
window.johnkegd.com = window.johnkegd.com || {};
window.johnkegd.com.initializator = window.johnkegd.com.initializator || {};

(function (context) {
  var swiperSlider;

  document.addEventListener("DOMContentLoaded", function () {
    if (window.location.pathname === "/equipos/") {
      swiperSlider = new Swiper(".swiper-container", {
        // Optional parameters
        direction: "horizontal",
        slidesPerView: 3,
        spaceBetween: 14,
        loop: true,
        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        // Breakpoints
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          480: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 1,
          },
          1024: {
            slidesPerView: 2,
          },
          1200: {
            slidesPerView: 3,
          },
          1780: {
            slidesPerView: 4,
          },
        },
      });
    }
  });

  context.getSwiperInstance = function () {
    return swiperSlider;
  };
})(window.johnkegd.com.initializator);
