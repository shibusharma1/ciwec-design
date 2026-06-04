const mobileBar = document.getElementById("mobileStickyBar");

let lastScrollMobile = window.scrollY;

function showMobileBar() {
  mobileBar.classList.remove(
    "translate-y-full",
    "opacity-0",
    "pointer-events-none",
  );
  mobileBar.classList.add("translate-y-0", "opacity-100");
}

function hideMobileBar() {
  mobileBar.classList.add(
    "translate-y-full",
    "opacity-0",
    "pointer-events-none",
  );
  mobileBar.classList.remove("translate-y-0", "opacity-100");
}

// initial show
showMobileBar();

window.addEventListener("scroll", () => {
  const currentScroll = window.scrollY;

  const isAtBottom =
    window.innerHeight + currentScroll >=
    document.documentElement.scrollHeight - 5;

  // scroll down → hide
  if (currentScroll > lastScrollMobile) {
    hideMobileBar();
  }

  // scroll up → show
  if (currentScroll < lastScrollMobile) {
    showMobileBar();
  }

  // always show at bottom
  if (isAtBottom) {
    showMobileBar();
  }

  lastScrollMobile = currentScroll;
});
