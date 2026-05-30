<?php
include './include/header.php';
?>
<section class="relative h-[220px] md:h-[280px] overflow-hidden">

    <img src="./assets/img/researchandpublication.png"
        class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-primary/80"></div>

    <div class="relative z-10 h-full flex items-center">

        <div class="container-custom">

            <h1 class="text-white text-center text-3xl md:text-5xl font-black mb-3">
                Research & Publications
            </h1>

            <div class="flex items-center justify-center gap-2 text-white/90">

                <a href="index.php" class="hover:text-secondary">
                    Home
                </a>

                <i class="fa-solid fa-angle-right text-xs"></i>

                <span class="text-secondary">
                    Research & Publications
                </span>

            </div>

        </div>

    </div>

</section>
<section class="section-padding bg-white">

    <div class="container-custom">

        <div class="max-w-4xl mx-auto text-center">

            <h2 class="section-title mb-6">
                Advancing Medical Knowledge Through Research
            </h2>

            <p class="section-description">
                CIWEC Hospital has contributed significantly to international
                research in travel medicine, infectious diseases, tropical
                medicine, gastroenterology, public health, and high-altitude
                medicine for more than four decades.
            </p>

        </div>

    </div>

</section>
<section class="pb-10">

    <div class="container-custom">

        <div class="bg-white rounded-xl shadow-md p-5">

            <div class="grid md:grid-cols-3 gap-4">

                <!-- Search -->

                <div class="md:col-span-2">

                    <div class="relative">

                        <input
                            type="text"
                            id="researchSearch"
                            placeholder="Search publications..."
                            class="w-full h-12 pl-12 pr-4 border border-gray-200 rounded-lg focus:border-secondary outline-none">

                        <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-primary"></i>

                    </div>

                </div>

                <!-- Category -->

                <div>

                    <select
                        id="researchCategory"
                        class="w-full h-12 border border-gray-200 rounded-lg px-4 outline-none">

                        <option value="">
                            All Categories
                        </option>

                        <option value="letters">
                            Letters
                        </option>

                        <option value="abstracts">
                            Abstracts
                        </option>

                        <option value="publications">
                            Publications
                        </option>

                    </select>

                </div>

            </div>

        </div>

    </div>

</section>
<section class="pb-[80px]">

    <div class="container-custom">

        <div class="bg-white rounded-xl shadow-md overflow-hidden">

            <div id="researchLoader"
                class="hidden p-10 text-center">

                <div
                    class="w-10 h-10 border-4 border-primary border-t-transparent rounded-full animate-spin mx-auto">
                </div>

                <p class="mt-4 text-primary font-semibold">
                    Loading Publications...
                </p>

            </div>

            <div id="researchTableWrapper">

                <table class="w-full">

                    <thead>

                        <tr class="bg-primary text-white">

                            <th class="px-5 py-4 text-left">
                                Year
                            </th>

                            <th class="px-5 py-4 text-left">
                                Publication
                            </th>

                            <th class="px-5 py-4 text-left">
                                Category
                            </th>

                            <th class="px-5 py-4 text-center">
                                Action
                            </th>

                        </tr>

                    </thead>

                    <tbody id="researchTableBody">

                        <!-- AJAX DATA -->

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</section>
<div
    id="pdfModal"
    class="fixed inset-0 bg-black/80 hidden items-center justify-center z-[9999]">

    <div class="bg-white w-[95%] h-[90vh] relative">

        <button
            id="closePdfModal"
            class="absolute top-4 right-4 w-10 h-10 bg-secondary text-white">

            <i class="fa-solid fa-xmark"></i>

        </button>

        <iframe
            id="pdfViewer"
            class="w-full h-full">
        </iframe>

    </div>

</div>
<div
    id="researchPagination"
    class="flex justify-center mt-10 gap-2">
</div>


<script>
    const publications = [

        {
            id: 1,
            year: 1985,
            category: "Letters",
            title: "Dexamethasone in the treatment of acute mountain sickness",
            pdf: "./assets/pdf/news1.pdf"
        },

        {
            id: 2,
            year: 1985,
            category: "Letters",
            title: "Blastocystis Hominis in Kathmandu, Nepal",
            pdf: "#"
        },

        {
            id: 3,
            year: 1988,
            category: "Letters",
            title: "Tickbite appendicitis",
            pdf: "#"
        },

        {
            id: 4,
            year: 1989,
            category: "Letters",
            title: "Guillain-Barre syndrome presenting as high altitude cerebral edema",
            pdf: "#"
        },

        {
            id: 5,
            year: 1992,
            category: "Abstracts",
            title: "Abnormal d-xylose absorption in patients with cyanobacteria-like body diarrhea",
            pdf: "#"
        },

        {
            id: 6,
            year: 1992,
            category: "Abstracts",
            title: "Duodenal aspirates in nine patients with diarrhea associated with CLB",
            pdf: "#"
        },

        {
            id: 7,
            year: 1994,
            category: "Abstracts",
            title: "Azithromycin treatment of Cyclospora infections",
            pdf: "#"
        },

        {
            id: 8,
            year: 2024,
            category: "Publications",
            title: "Travel Medicine Research in Nepal",
            pdf: "#"
        }

    ];
</script>

<script>
    const tableBody = document.getElementById("researchTableBody");

    function renderTable(data) {
        tableBody.innerHTML = "";

        if (data.length === 0) {
            tableBody.innerHTML = `
            <tr>
                <td colspan="4"
                    class="text-center py-10 text-gray-500">
                    No publications found.
                </td>
            </tr>
        `;

            return;
        }

        data.forEach(item => {
            tableBody.innerHTML += `
            <tr class="border-b hover:bg-gray-50 transition">

                <td class="px-5 py-4 text-sm md:text-base">
                    ${item.year}
                </td>

                <td class="px-5 py-4 text-sm md:text-base">
                    ${item.title}
                </td>

                <td class="px-5 py-4">
                    <span class="
                        px-3 py-1
                        rounded-full
                        bg-primary/10
                        text-primary
                        text-xs
                        font-semibold
                    ">
                        ${item.category}
                    </span>
                </td>

                <td class="px-5 py-4 text-center">

                    <a href="${item.pdf}"
                        class="
                            inline-flex
                            items-center
                            justify-center
                            w-10 h-10
                            bg-secondary
                            text-white
                            rounded-lg
                            hover:bg-primary
                            transition
                        ">

                        <i class="fa-solid fa-file-pdf"></i>

                    </a>

                </td>

            </tr>
        `;
        });
    }

    renderTable(publications);
</script>

<script>
    const searchInput = document.getElementById("researchSearch");

    searchInput.addEventListener("keyup", function() {
        const keyword = this.value.toLowerCase();

        const filtered = publications.filter(item => {
            return (
                item.title.toLowerCase().includes(keyword) ||
                item.category.toLowerCase().includes(keyword) ||
                item.year.toString().includes(keyword)
            );
        });

        renderTable(filtered);
    });
</script>

<script>
    const categoryFilter = document.getElementById("researchCategory");

    categoryFilter.addEventListener("change", function() {
        const category = this.value;

        if (category === "") {
            renderTable(publications);
            return;
        }

        const filtered = publications.filter(item =>
            item.category.toLowerCase() === category.toLowerCase()
        );

        renderTable(filtered);
    });
</script>
<?php
include './include/stickyfooterbar.php';
include './include/footer.php';
?>