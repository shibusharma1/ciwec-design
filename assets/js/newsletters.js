const newsletters = [
  {
    id: 1,
    title: "Newsletter July 2025",
    file: "./assets/pdf/news1.pdf",
  },

  {
    id: 2,
    title: "March – April Newsletter",
    file: "./assets/pdf/news2.pdf",
  },

  {
    id: 3,
    title: "Newsletter Jan-Feb 2024",
    file: "./assets/pdf/news3.pdf",
  },

  {
    id: 4,
    title: "Newsletter September – October 2023",
    file: "./assets/pdf/news4.pdf",
  },

  {
    id: 5,
    title: "Newsletter July – August 2023",
    file: "./assets/pdf/news5.pdf",
  },

  {
    id: 6,
    title: "Newsletter May 2023",
    file: "./assets/pdf/news6.pdf",
  },

  {
    id: 7,
    title: "Newsletter January 2023",
    file: "./assets/pdf/news7.pdf",
  },

  {
    id: 8,
    title: "Newsletter December 2022",
    file: "./assets/pdf/news8.pdf",
  },
];

const table = document.getElementById("newsletterTable");
const pagination = document.getElementById("newsletterPagination");
const loader = document.getElementById("newsletterLoader");
const content = document.getElementById("newsletterContent");
const searchInput = document.getElementById("searchInput");
const perPageSelect = document.getElementById("perPage");
let currentPage = 1;
let perPage = 5;
let search = "";

function showLoader() {
  loader.classList.remove("hidden");
  content.style.opacity = ".3";
  content.style.pointerEvents = "none";
}

function hideLoader() {
  loader.classList.add("hidden");
  content.style.opacity = "1";
  content.style.pointerEvents = "auto";
}

function renderTable(data) {
  table.innerHTML = "";
  if (data.length === 0) {
    table.innerHTML = `
                <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
                    <td class="px-5 py-4 font-semibold text-primary">
                        1
                    </td>
                    <td class="px-5 py-4 text-slate-700">
                        CIWEC Healthcare Newsletter 2025
                    </td>
                    <td class="px-5 py-4 text-center">
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold hover:text-secondary transition">
                        <i class="fa-solid fa-file-pdf text-secondary"></i>
                        Download
                        </a>
                    </td>
                </tr>
            `;
    return;
  }

  data.forEach((item, index) => {
    table.innerHTML += `
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
                <td class="px-5 py-4 font-semibold text-primary">
                   ${index + 1}
                </td>
                <td class="px-5 py-4 text-slate-700">
                     ${item.title}
                </td>
                <td class="px-5 py-4 text-center">
                    <a href="${item.file}"
                        class="inline-flex items-center gap-2 text-primary font-semibold hover:text-secondary transition">
                    <i class="fa-solid fa-file-pdf text-secondary"></i>
                    Download
                    </a>
                </td>
            </tr>
            `;
  });
}

function renderPagination(totalPages) {
  pagination.innerHTML = "";
  for (let i = 1; i <= totalPages; i++) {
    pagination.innerHTML += `
                <button
                class="
                    min-w-[42px]
                    h-[42px]
                    px-4
                    text-sm
                    font-semibold
                    transition-all
                    duration-300
                    ${
                      currentPage === i
                        ? `
                            bg-primary
                            text-white
                            border
                            border-primary
                        `
                        : `
                            bg-white
                            text-primary
                            border
                            border-slate-300
                            hover:border-secondary
                            hover:text-secondary
                        `
                    }
                "
                onclick="changePage(${i})">
    
                ${i}
    
            </button>
        
            `;
  }
}

function fetchNewsletters() {
  showLoader();
  setTimeout(() => {
    let filtered = newsletters.filter((item) =>
      item.title.toLowerCase().includes(search.toLowerCase()),
    );

    const totalPages = Math.ceil(filtered.length / perPage);
    const start = (currentPage - 1) * perPage;
    const end = start + perPage;
    const paginated = filtered.slice(start, end);
    renderTable(paginated);
    renderPagination(totalPages);
    hideLoader();
  }, 2000);
}

function changePage(page) {
  currentPage = page;
  fetchNewsletters();
}

perPageSelect.addEventListener("change", (e) => {
  perPage = parseInt(e.target.value);
  currentPage = 1;
  fetchNewsletters();
});

let typingTimer;
searchInput.addEventListener("keyup", (e) => {
  clearTimeout(typingTimer);
  typingTimer = setTimeout(() => {
    search = e.target.value;
    currentPage = 1;
    fetchNewsletters();
  }, 1000);
});

fetchNewsletters();
