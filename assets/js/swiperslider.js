const reviewSwiper = new Swiper(".reviewSwiper", {
  loop: true,
  speed: 1000,
  spaceBetween: 24,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
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
