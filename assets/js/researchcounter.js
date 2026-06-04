const counters = document.querySelectorAll(".counter");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const counter = entry.target;

        const target = +counter.dataset.count;

        let count = 0;

        const update = () => {
          const increment = target / 80;

          count += increment;

          if (count < target) {
            counter.innerText = Math.ceil(count);

            requestAnimationFrame(update);
          } else {
            counter.innerText = target + "+";
          }
        };

        update();

        observer.unobserve(counter);
      }
    });
  },
  {
    threshold: 0.4,
  },
);

counters.forEach((counter) => {
  observer.observe(counter);
});
