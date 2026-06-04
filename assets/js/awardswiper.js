document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".awardSwiper", {
    loop: true,
    speed: 1000,
    spaceBetween: 24,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },

    pagination: {
      el: ".award-pagination",
      clickable: true,
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },

      768: {
        slidesPerView: 2,
      },

      1280: {
        slidesPerView: 3,
      },
    },
  });
});
