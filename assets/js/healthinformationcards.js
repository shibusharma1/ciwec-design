const categoryCards = document.querySelectorAll(".health-category");

const categorySelect = document.getElementById("healthCategory");

categoryCards.forEach((card) => {
  card.addEventListener("click", () => {
    const category = card.dataset.category;

    if (categorySelect) {
      categorySelect.value = category;

      categorySelect.dispatchEvent(new Event("change"));
    }

    document.getElementById("health-library")?.scrollIntoView({
      behavior: "smooth",
    });
  });
});
