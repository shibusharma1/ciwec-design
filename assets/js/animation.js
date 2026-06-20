document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".why-card");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add("animate-show");
          }, index * 150);
        }
      });
    },
    {
      threshold: 0.2,
    },
  );

  cards.forEach((card) => observer.observe(card));
});
