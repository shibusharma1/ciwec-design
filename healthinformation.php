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
                Health Information
            </h1>
            <div class="flex items-center justify-center gap-2 text-white/90">
                <a href="index.php" class="hover:text-secondary">
                    Home
                </a>
                <i class="fa-solid fa-angle-right text-xs"></i>
                <span class="text-secondary">
                    Health Information
                </span>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container-custom max-w-4xl text-center">

        <span
            class="text-secondary
            text-sm
            font-bold
            tracking-[3px]
            uppercase">

            Patient Education

        </span>

        <h1
            class="mt-4
            text-primary
            text-4xl md:text-5xl
            font-black
            leading-tight">

            Health Information Library

        </h1>

        <div
            class="w-20 h-[3px]
            bg-secondary
            mx-auto
            my-6">
        </div>

        <p
            class="text-slate-600
            text-lg
            leading-8">

            Explore trusted health resources, travel medicine guidance,
            disease prevention information and wellness articles prepared
            by CIWEC healthcare professionals.

        </p>

    </div>
</section>

<section class="pb-12">

    <div class="container-custom">

        <div
            class="bg-slate-50
            border
            border-slate-200
            p-6 md:p-8">

            <div class="relative">

                <input
                    id="healthSearch"
                    type="text"
                    placeholder="Search health information..."
                    class="w-full
                    h-14
                    pl-14
                    pr-4
                    bg-white
                    border
                    border-slate-300
                    focus:border-secondary
                    outline-none">

                <i class="fa-solid fa-magnifying-glass
                    absolute
                    left-5
                    top-1/2
                    -translate-y-1/2
                    text-slate-400">
                </i>
            </div>
        </div>
    </div>
</section>

<section class="pb-20">
    <div class="container-custom">
        <div id="healthLoader" class="hidden py-16">
            <div class="flex flex-col items-center">
                <div class="w-12 h-12
                            border-[3px]
                            border-slate-200
                            border-t-secondary
                            rounded-full
                            animate-spin">
                </div>
                <p class="mt-4 text-sm
                    text-slate-500">
                    Loading Health Information...
                </p>
            </div>
        </div>

        <div
            id="healthGrid"
            class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
        </div>
    </div>
</section>

<div
    id="pdfModal"
    class="fixed inset-0 bg-black/80 hidden items-center justify-center z-[9999]">
    <div
        class="bg-white w-[95%] max-w-7xl h-[90vh] shadow-[0_30px_80px_rgba(0,0,0,.3)] relative">
        <div
            class="h-16 border-b border-slate-200 flex items-center justify-between px-6">
            <h3
                class="font-black text-primary">
                Health Information Viewer
            </h3>
            
            <button
                id="closePdfModal"
                class="w-10 h-10 border border-slate-200 hover:border-secondary">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <iframe
            id="pdfViewer"
            class="w-full h-[calc(100%-64px)]">
        </iframe>
    </div>
</div>
<div
    id="researchPagination"
    class="flex justify-center mt-10 gap-2">
</div>

<script>
    const healthData = [

        {
            title: "Adult Immunizations",
            pdf: "./assets/pdf/news1.pdf"
        },
        {
            title: "All About Cyclospora",
            pdf: "./assets/pdf/news1.pdf"
        },
        {
            title: "Altitude Illness Advice For Trekkers",
            pdf: "./assets/pdf/news1.pdf"
        },
        {
            title: "Cholera In Nepal",
            pdf: "./assets/pdf/news1.pdf"
        },
        {
            title: "Dengue Fever",
            pdf: "./assets/pdf/news1.pdf"
        },
        {
            title: "Rabies Prevention",
            pdf: "./assets/pdf/news1.pdf"
        }
    ];
</script>
<script>
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
</script>

<script>
    const healthGrid =
        document.getElementById("healthGrid");

    const healthLoader =
        document.getElementById("healthLoader");

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

        data.forEach(item => {
            healthGrid.innerHTML += `
        <article
            class="group
            bg-white
            border
            border-slate-200
            hover:border-secondary
            hover:shadow-[0_20px_60px_rgba(0,0,0,.08)]
            transition-all
            duration-300">

            <div class="p-8">

                <div
                    class="w-14 h-14
                    bg-primary/5
                    text-primary
                    flex items-center justify-center
                    mb-6">

                    <i
                        class="fa-solid
                        fa-file-medical
                        text-xl">
                    </i>

                </div>

                <h3
                    class="text-primary
                    text-xl
                    font-black
                    leading-snug
                    mb-4
                    group-hover:text-secondary
                    transition">

                    ${item.title}

                </h3>

                <p
                    class="text-slate-600
                    text-sm
                    leading-7
                    mb-8">

                    Read detailed information and guidance regarding
                    ${item.title.toLowerCase()}.

                </p>

                <div
                    class="flex
                    items-center
                    justify-between
                    pt-5
                    border-t
                    border-slate-200">

                    <span
                        class="text-slate-500
                        text-sm">

                        Health Information

                    </span>

                    <button onclick="openPDF('${item.pdf}')" class="inline-flex items-center gap-2 text-primary hover:text-secondary font-semibold">
                        Read Article
                        <i
                            class="fa-solid
                            fa-arrow-right">
                        </i>
                    </button>
                </div>
            </div>
        </article>
        `;

        });
    }
</script>

<script>
    const searchInput =
        document.getElementById("healthSearch");
    searchInput.addEventListener("keyup", function() {
        const keyword =
            this.value.toLowerCase();
        const filtered =
            healthData.filter(item =>
                item.title
                .toLowerCase()
                .includes(keyword)
            );
        showLoader();
        setTimeout(() => {
            renderCards(filtered);
            hideLoader();
        }, 600);
    });
</script>
<script>
    const pdfModal =
        document.getElementById("pdfModal");
    const pdfViewer =
        document.getElementById("pdfViewer");
    const closePdfModal =
        document.getElementById("closePdfModal");

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
</script>

<?php
include './include/footer.php';
?>