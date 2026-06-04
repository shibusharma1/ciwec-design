const specialitySwiper = new Swiper(".specialitySwiper", {
  loop: false,
  speed: 900,
  slidesPerView: 1.15,
  spaceBetween: 1,
  autoplay: true,
  pagination: {
    el: ".speciality-pagination",
    clickable: true,
    dynamicBullets: false,
  },

  breakpoints: {
    640: {
      slidesPerView: 2.1,
    },
    1024: {
      slidesPerView: 3.2,
    },
    1280: {
      slidesPerView: 4.5,
    },
  },
});
