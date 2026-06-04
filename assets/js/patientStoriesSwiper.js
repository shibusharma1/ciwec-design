const patientStoriesSwiper = new Swiper(".patientStoriesSwiper", {
  loop: true,
  speed: 1000,
  spaceBetween: 20,

  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },

  pagination: {
    el: ".patient-story-pagination",
    clickable: true,
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },

    768: {
      slidesPerView: 2,
    },
  },
});

// =====================================================
// VIDEO MODAL
// =====================================================

const videoModal = document.getElementById("videoModal");
const storyVideo = document.getElementById("storyVideo");
const closeVideoModal = document.getElementById("closeVideoModal");

document.querySelectorAll(".story-card").forEach((card) => {
  card.addEventListener("click", () => {
    const video = card.getAttribute("data-video");

    storyVideo.src = video;

    videoModal.classList.remove("hidden");
    videoModal.classList.add("flex");

    storyVideo.play();

    document.body.style.overflow = "hidden";
  });
});

// CLOSE
function closeModal() {
  videoModal.classList.add("hidden");
  videoModal.classList.remove("flex");

  storyVideo.pause();
  storyVideo.currentTime = 0;

  document.body.style.overflow = "auto";
}

closeVideoModal.addEventListener("click", closeModal);

// CLICK OUTSIDE
videoModal.addEventListener("click", (e) => {
  if (e.target === videoModal) {
    closeModal();
  }
});

// ESC CLOSE
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    closeModal();
  }
});
