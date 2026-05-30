const backToTop = document.getElementById("backToTop");
const hoverZone = document.getElementById("hoverZone");

let isScrolled = false;
let hideTimeout;

// Detect scroll
window.addEventListener("scroll", () => {
  isScrolled = window.scrollY > 250;

  if (!isScrolled) {
    hideButton();
  }
});

// Show button slowly
hoverZone.addEventListener("mouseenter", () => {
  if (!isScrolled) return;
  clearTimeout(hideTimeout);
  showButton();
});

// Delay hiding
hoverZone.addEventListener("mouseleave", () => {
  delayedHide();
});

backToTop.addEventListener("mouseenter", () => {
  clearTimeout(hideTimeout);
});

backToTop.addEventListener("mouseleave", () => {
  delayedHide();
});

// Smooth scroll
backToTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

function showButton() {
  backToTop.classList.remove(
    "opacity-0",
    "pointer-events-none",
    "translate-x-8",
  );

  backToTop.classList.add(
    "opacity-100",
    "flex",
    "items-center",
    "justify-center",
    "translate-x-0",
  );
}

function hideButton() {
  backToTop.classList.add("opacity-0", "pointer-events-none", "translate-x-8");

  backToTop.classList.remove("opacity-100", "translate-x-0");
}

// Hide slowly after delay
function delayedHide() {
  hideTimeout = setTimeout(() => {
    hideButton();
  }, 700); // increase for slower disappearance
}
