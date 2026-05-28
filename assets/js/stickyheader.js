const header = document.getElementById("header");

window.addEventListener("scroll", () => {
  if (window.scrollY > 30) {
    header.classList.add("sticky-header");
  } else {
    header.classList.remove("sticky-header");
  }
});