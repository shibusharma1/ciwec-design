const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      document.querySelectorAll(".counter").forEach((counter) => {
        const target = +counter.dataset.target;
        let current = 0;
        const increment = target / 120;
        const updateCounter = () => {
          if (current < target) {
            current += increment;
            counter.innerText = Math.floor(current);
            requestAnimationFrame(updateCounter);
          } else {
            counter.innerText = target.toLocaleString() + "+";
          }
        };
        updateCounter();
      });
      observer.disconnect();
    }
  });
});
observer.observe(document.querySelector(".counter"));
