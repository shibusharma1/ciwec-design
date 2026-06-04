const historyData = {
  1982: {
    title: "Foundation Of CIWEC",
    image: "./assets/img/history/history1.webp",
    description:
      "CIWEC Hospital was established in 1982 with a vision to provide international-standard healthcare services in Nepal. Initially serving diplomats, expatriates, aid workers, and travelers, the institution quickly earned a reputation for delivering high-quality medical care through experienced professionals, advanced diagnostics, and a patient-centered approach.",
  },

  2000: {
    title: "Service Expansion",
    image: "./assets/img/history/history2.webp",
    description:
      "As healthcare needs continued to evolve, CIWEC expanded its range of medical services and specialties. New departments, enhanced outpatient care, and comprehensive preventive health programs were introduced, enabling the hospital to serve a broader community while maintaining its commitment to international healthcare standards.",
  },

  2005: {
    title: "Modern Medical Facilities",
    image: "./assets/img/history/history3.webp",
    description:
      "CIWEC invested significantly in modern medical technology and infrastructure, introducing advanced diagnostic equipment, improved laboratory services, and upgraded clinical facilities. These developments strengthened the hospital's ability to provide accurate diagnoses, efficient treatments, and a higher standard of patient care.",
  },

  2014: {
    title: "CIWEC Pokhara Opened",
    image: "./assets/img/history/history1.webp",
    description:
      "Expanding beyond Kathmandu, CIWEC established its Pokhara facility in 2014 to provide trusted healthcare services to residents, travelers, trekkers, and international visitors in western Nepal. The new center offered comprehensive medical care while maintaining the same quality and expertise that defined the CIWEC brand.",
  },

  2020: {
    title: "Enhanced Global Care",
    image: "./assets/img/history/history2.webp",
    description:
      "During a period of global healthcare challenges, CIWEC strengthened its international patient support services and emergency response capabilities. Enhanced telemedicine solutions, infection prevention measures, and coordinated care systems ensured patients continued to receive safe, reliable, and accessible healthcare.",
  },

  2025: {
    title: "Future Ready Healthcare",
    image: "./assets/img/history/history3.webp",
    description:
      "Building on decades of excellence, CIWEC continues to embrace innovation, digital transformation, and patient-focused healthcare solutions. With ongoing investments in technology, medical expertise, and service quality, the institution remains dedicated to shaping the future of healthcare in Nepal while delivering exceptional care to every patient.",
  },
};

document.querySelectorAll(".history-year").forEach((button) => {
  button.addEventListener("click", () => {
    document
      .querySelectorAll(".history-year")
      .forEach((btn) => btn.classList.remove("active"));

    button.classList.add("active");

    const year = button.dataset.year;

    document.getElementById("historyYear").textContent = year;
    document.getElementById("historyTitle").textContent =
      historyData[year].title;
    document.getElementById("historyDescription").textContent =
      historyData[year].description;
    document.getElementById("historyImage").src = historyData[year].image;
  });
});
