window.addEventListener("scroll", () => {
  const header = document.getElementById("header");
  if (window.scrollY > 20) {
    header.classList.add("shadow-md");
  } else {
    header.classList.remove("shadow-md");
  }
});
