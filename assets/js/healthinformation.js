const healthData = [
  {
    title: "Adult Immunizations",
    pdf: "./assets/pdf/news1.pdf",
  },
  {
    title: "All About Cyclospora",
    pdf: "./assets/pdf/news1.pdf",
  },
  {
    title: "Altitude Illness Advice For Trekkers",
    pdf: "./assets/pdf/news1.pdf",
  },
  {
    title: "Cholera In Nepal",
    pdf: "./assets/pdf/news1.pdf",
  },
  {
    title: "Dengue Fever",
    pdf: "./assets/pdf/news1.pdf",
  },
  {
    title: "Rabies Prevention",
    pdf: "./assets/pdf/news1.pdf",
  },
];

document.addEventListener("DOMContentLoaded", () => {
  showLoader();
  setTimeout(() => {
    try {
      renderCards(healthData);
    } catch (error) {
      console.error(error);
    } finally {
      hideLoader();
    }
  }, 800);
});

const healthGrid = document.getElementById("healthGrid");

const healthLoader = document.getElementById("healthLoader");

function showLoader() {
  healthLoader.classList.remove("hidden");
  healthGrid.classList.add("opacity-40");
  healthGrid.classList.add("pointer-events-none");
}

function hideLoader() {
  healthLoader.classList.add("hidden");
  healthGrid.classList.remove("opacity-40");
  healthGrid.classList.remove("pointer-events-none");
}

function renderCards(data) {
  healthGrid.innerHTML = "";
  if (data.length === 0) {
    healthGrid.innerHTML = `
       <div
           class="col-span-full
           text-center
           py-20
           border
           border-slate-200
           bg-white">
   
           <i
               class="fa-solid fa-file-circle-xmark
               text-5xl
               text-slate-300
               mb-4">
           </i>
   
           <h3
               class="text-primary
               text-xl
               font-bold
               mb-2">
   
               No Health Information Found
   
           </h3>
   
           <p
               class="text-slate-500">
   
               Please try another keyword.
   
           </p>
   
       </div>
   
       `;
    return;
  }

  data.forEach((item) => {
    healthGrid.innerHTML += `
   
   <article
   class="group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
   
   <div class="p-8">
   
       <div
           class="flex items-center justify-between mb-5">
   
           <span
               class="text-secondary font-black">
   
               ${item.category}
   
           </span>
   
           <div
               class="w-12 h-12 bg-primary/10 flex items-center justify-center">
   
               <i
                   class="fa-solid fa-file-medical text-primary">
               </i>
   
           </div>
   
       </div>
   
       <h3
           class="text-primary text-2xl font-black leading-snug mb-4 group-hover:text-secondary transition">
   
           ${item.title}
   
       </h3>
   
       <p
           class="text-slate-600 leading-7 line-clamp-3">
   
           ${item.description}
   
       </p>
   
       <div
           class="flex items-center justify-between mt-8 pt-6 border-t border-slate-200">
   
           <span
               class="text-slate-500 text-sm">
   
               Health Information
   
           </span>
   
           <button
               onclick="openPDFModal('${item.pdf}')"
               class="text-primary hover:text-secondary font-semibold">
   
               Read Guide
   
           </button>
   
       </div>
   
   </div>
   
   </article>
   
   `;
  });
}

const searchInput = document.getElementById("healthSearch");
searchInput.addEventListener("keyup", function () {
  const keyword = this.value.toLowerCase();
  const filtered = healthData.filter((item) =>
    item.title.toLowerCase().includes(keyword),
  );
  showLoader();
  setTimeout(() => {
    renderCards(filtered);
    hideLoader();
  }, 600);
});

const pdfModal = document.getElementById("pdfModal");
const pdfViewer = document.getElementById("pdfViewer");
const closePdfModal = document.getElementById("closePdfModal");

function openPDF(pdfUrl) {
  pdfViewer.src = pdfUrl;
  pdfModal.classList.remove("hidden");
  pdfModal.classList.add("flex");
  document.body.style.overflow = "hidden";
}

function closePDF() {
  pdfModal.classList.add("hidden");
  pdfModal.classList.remove("flex");
  pdfViewer.src = "";
  document.body.style.overflow = "";
}
closePdfModal.addEventListener("click", closePDF);
pdfModal.addEventListener("click", (e) => {
  if (e.target === pdfModal) {
    closePDF();
  }
});
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    closePDF();
  }
});
