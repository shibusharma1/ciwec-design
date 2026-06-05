const backToTop = document.getElementById("backToTop");
const whatsappBtn = document.getElementById("whatsappBtn");

document.getElementById("backToTop").onclick = () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};

window.addEventListener("scroll", () => {
  if (window.scrollY > 250) {
    backToTop.classList.remove(
      "opacity-0",
      "pointer-events-none",
      "translate-y-8",
    );

    backToTop.classList.add("opacity-100", "translate-y-0");

    // Move WhatsApp up smoothly
    whatsappBtn.classList.add("-translate-y-20");
  } else {
    backToTop.classList.add(
      "opacity-0",
      "pointer-events-none",
      "translate-y-8",
    );

    backToTop.classList.remove("opacity-100", "translate-y-0");

    // Move WhatsApp back down
    whatsappBtn.classList.remove("-translate-y-20");
  }
});

const progressCircle = document.getElementById("scrollProgress");
window.addEventListener("scroll", () => {
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const progress = scrollTop / docHeight;
  const circumference = 289;
  progressCircle.style.strokeDashoffset =
    circumference - progress * circumference;
});

