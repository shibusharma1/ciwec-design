document.addEventListener("DOMContentLoaded", () => {
  const faqItems = document.querySelectorAll(".faq-item");

  // FIRST FAQ OPEN
  const firstFaq = faqItems[0];

  if (firstFaq) {
    firstFaq.classList.add("active");
  }

  faqItems.forEach((item) => {
    const button = item.querySelector(".faq-btn");

    button.addEventListener("click", () => {
      const isActive = item.classList.contains("active");

      // CLOSE ALL

      faqItems.forEach((faq) => {
        faq.classList.remove("active");
      });

      // OPEN ONLY CLICKED FAQ

      if (!isActive) {
        item.classList.add("active");
      }
    });
  });
});
