<?php
include "./include/header.php"; ?>
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
<section class="pb-16">
   <div class="container-custom">
      <div class="grid md:grid-cols-3 border border-slate-200 bg-white">
         <div class="text-center p-8 border-b md:border-b-0 md:border-r border-slate-200">
            <h3 class="text-primary text-5xl font-black">
               40+
            </h3>
            <p class="mt-3 text-slate-600">
               Years of Research
            </p>
         </div>
         <div class="text-center p-8 border-b md:border-b-0 md:border-r border-slate-200">
            <h3 class="text-primary text-5xl font-black">
               500+
            </h3>
            <p class="mt-3 text-slate-600">
               Publications
            </p>
         </div>
         <div class="text-center p-8">
            <h3 class="text-primary text-5xl font-black">
               170+
            </h3>
            <p class="mt-3 text-slate-600">
               Countries Served
            </p>
         </div>
      </div>
   </div>
</section>
<section class="pb-12">
   <div class="container-custom">
      <div class="bg-slate-50 border border-slate-200 p-6 md:p-8">
         <div class="grid lg:grid-cols-4 gap-4">
            <div class="lg:col-span-3 relative">
               <input
                  type="text"
                  id="researchSearch"
                  placeholder="Search publications..."
                  class="w-full h-14 pl-14 pr-4 bg-white border border-slate-300 focus:border-secondary outline-none">
               <i
                  class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-slate-400">
               </i>
            </div>
            <select
               id="researchCategory"
               class="h-14 bg-white border border-slate-300 px-4 outline-none">
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
</section>
<section class="pb-20">
   <div class="container-custom">
      <div
         id="researchLoader"
         class="hidden py-20">
         <div class="flex flex-col items-center">
            <div
               class="w-12 h-12
               border-[3px]
               border-slate-200
               border-t-secondary
               rounded-full
               animate-spin">
            </div>
            <p
               class="mt-4
               text-sm
               font-medium
               text-slate-500">
               Loading Publications...
            </p>
         </div>
      </div>
      <div
         id="researchGrid"
         class="grid lg:grid-cols-2 gap-6">
         <!-- JS DATA -->
      </div>
   </div>
</section>
<div id="pdfModal"
   class="fixed inset-0 bg-black/80 hidden items-center justify-center z-[9999]">
   <div
      class="bg-white w-[95%] max-w-7xl h-[90vh] shadow-[0_30px_80px_rgba(0,0,0,.3)] relative">
      <div
         class="h-16 border-b border-slate-200 flex items-center justify-between px-6">
         <h3
            class="font-black text-primary">
            Publication Viewer
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
<div id="researchPagination"
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
   document.addEventListener("DOMContentLoaded", () => {
       showLoader();
       setTimeout(() => {
           renderTable(publications);
           hideLoader();
       }, 1200);
   
   });
</script>
<script>
   const researchGrid =
       document.getElementById("researchGrid");
   const researchLoader =
       document.getElementById("researchLoader");

   function showLoader() {
       researchLoader.classList.remove("hidden");
       researchGrid.classList.add("opacity-40");
       researchGrid.classList.add("pointer-events-none");
   }
   
   function hideLoader() {
   
       researchLoader.classList.add("hidden");
       researchGrid.classList.remove("opacity-40");
       researchGrid.classList.remove("pointer-events-none");
   
   }
   
   function renderTable(data) {
       researchGrid.innerHTML = "";
       if (data.length === 0) {
           researchGrid.innerHTML = `
           <div class="col-span-full text-center py-20 border border-slate-200">
               <i class="fa-solid fa-file-circle-xmark text-4xl text-slate-300 mb-4"></i>
               <p class="text-slate-500">
                   No publications found.
               </p>
           </div>
       `;
           return;
       }
   
       data.forEach(item => {
           researchGrid.innerHTML += `
       <article
           class="group bg-white border border-slate-200 hover:border-secondary transition-all duration-300">
           <div class="p-8">
   
               <div
                   class="flex items-center justify-between mb-5">
   
                   <span
                       class="text-secondary font-black">
   
                       ${item.year}
   
                   </span>
   
                   <span
                       class="px-3 py-1 bg-primary/5 text-primary text-xs font-semibold uppercase">
   
                       ${item.category}
   
                   </span>
   
               </div>
   
               <h3
                   class="text-primary text-xl font-black leading-snug mb-4 group-hover:text-secondary transition">
   
                   ${item.title}
   
               </h3>
   
               <div
                   class="pt-5 mt-5 border-t border-slate-200 flex justify-between items-center">
   
                   <span
                       class="text-slate-500 text-sm">
   
                       Research Publication
   
                   </span>
   
                   <a
                       href="${item.pdf}"
                       class="inline-flex items-center gap-2 text-primary hover:text-secondary font-semibold">
   
                       View PDF
   
                       <i class="fa-solid fa-arrow-right"></i>
   
                   </a>
   
               </div>
   
           </div>
   
       </article>
   
       `;
   
       });
   
   }
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
   
       showLoader();
       setTimeout(() => {
           renderTable(filtered);
           hideLoader();
       }, 1000);
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
   
       // renderTable(filtered);
       showLoader();
       setTimeout(() => {
           renderTable(filtered);
           hideLoader();
       }, 1000);
   });
   
   function changePage(page) {
       currentPage = page;
       showLoader();
       setTimeout(() => {
           renderTable(filteredData);
           hideLoader();
       }, 1000);
   }
</script>
<?php include "./include/footer.php";
?>
