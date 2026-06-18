const publications = publicationData[currentType] ?? [];

const table = document.getElementById("publicationTable");
const pagination = document.getElementById("publicationPagination");
const loader = document.getElementById("publicationLoader");
const content = document.getElementById("publicationContent");

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

function getActionButtons(item) {
  if (actionType === "download") {
    return `
            <a
                href="${item.file}"
                download
                class="inline-flex items-center gap-2 text-primary font-semibold hover:text-secondary transition">

                <i class="fa-solid fa-file-pdf text-secondary"></i>
                Download

            </a>
        `;
  }

  return `
        <div class="flex justify-center gap-4">

            <a
                href="${item.file}"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2 text-secondary font-semibold">
                <i class="fa-solid fa-file-pdf"></i>
                Read More
            </a>

           


        </div>
    `;
}



// if the download as well as read both button are needed then add the below code just before </div>
//  <a
//                 href="${item.file}"
//                 download
//                 class="inline-flex items-center gap-2 text-primary font-semibold">

//                 <i class="fa-solid fa-file-pdf"></i>
//                 Download

//             </a>

function renderTable(data) {
  table.innerHTML = "";

  if (!data.length) {
    table.innerHTML = `
            <tr>
                <td colspan="3"
                    class="px-5 py-8 text-center text-slate-500">

                    No records found

                </td>
            </tr>
        `;

    return;
  }

  data.forEach((item, index) => {
    table.innerHTML += `
            <tr class="border-b border-slate-200 hover:bg-slate-100 transition">

                <td class="px-5 py-4 font-semibold text-primary">
                    ${(currentPage - 1) * perPage + index + 1}
                </td>

                <td class="px-5 py-4 text-slate-700">

                    ${item.title}

                </td>

                <td class="px-5 py-4 text-center">

                    ${getActionButtons(item)}

                </td>

            </tr>
        `;
  });
}

function fetchPublications() {
  showLoader();

  setTimeout(() => {
    const filtered = publications.filter((item) =>
      item.title.toLowerCase().includes(search.toLowerCase()),
    );

    const totalPages = Math.ceil(filtered.length / perPage);

    const start = (currentPage - 1) * perPage;
    const end = start + perPage;

    const paginated = filtered.slice(start, end);

    renderTable(paginated);
    renderPagination(totalPages);

    hideLoader();
  }, 500);
}
function renderPagination(totalPages) {
  pagination.innerHTML = "";

  if (totalPages <= 1) return;

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

function changePage(page) {
  currentPage = page;

  fetchPublications();
}

perPageSelect.addEventListener("change", (e) => {
  perPage = parseInt(e.target.value);

  currentPage = 1;

  fetchPublications();
});

let typingTimer;

if (searchInput) {
  searchInput.addEventListener("keyup", (e) => {
    clearTimeout(typingTimer);

    typingTimer = setTimeout(() => {
      search = e.target.value;
      currentPage = 1;
      fetchPublications();
    }, 500);
  });
}

if (perPageSelect) {
  perPageSelect.addEventListener("change", (e) => {
    perPage = parseInt(e.target.value);
    currentPage = 1;
    fetchPublications();
  });
}

fetchPublications();
