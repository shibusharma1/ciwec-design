<?php
$hero_title = " Research & Publications";
include "./include/header.php";
include "./include/herobanner.php";
?>

<section class="section-padding bg-white">
   <div class="container-custom">
      <div class="grid lg:grid-cols-12 gap-16 items-center">
         <div class="lg:col-span-6">
            <span class="section-subtitle">
               Research Excellence
            </span>
            <h2 class="section-title">
               Advancing Travel & Tropical Medicine Through Research
            </h2>
            <p class="mt-8 text-slate-600 leading-8">
               For more than four decades, CIWEC Hospital has contributed
               significantly to international medical research, particularly
               in travel medicine, infectious diseases, altitude medicine,
               tropical health and preventive healthcare.
            </p>
            <p class="mt-6 text-slate-600 leading-8">
               Our publications have supported healthcare professionals,
               researchers, travelers and institutions worldwide.
            </p>
         </div>
         <div class="lg:col-span-6">
            <img
               src="./assets/img/research-intro.png"
               class="w-full h-[500px] object-cover">
         </div>
      </div>
   </div>
</section>

<section class="section-padding bg-slate-100 overflow-hidden">
   <div class="container-custom">
      <!-- HEADER -->
      <div class="text-center max-w-4xl mx-auto mb-16">
         <span class="section-subtitle">
            Global Impact
         </span>
         <h2 class="section-title">
            Research That Reaches Beyond Borders
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            CIWEC Hospital's research has contributed to the advancement
            of travel medicine, tropical diseases, altitude medicine,
            infectious diseases and preventive healthcare worldwide.
         </p>
      </div>
      <!-- STATS -->
      <div
         class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">
         <!-- ITEM -->
         <div
            class="group bg-white border border-slate-200 p-10 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-8">
               <i
                  class="fa-solid fa-flask text-primary text-3xl">
               </i>
            </div>
            <h3
               class="counter text-primary text-4xl font-black"
               data-count="500">
               0
            </h3>
            <p
               class="text-slate-600 mt-4 font-medium">
               Research Publications
            </p>
         </div>
         <!-- ITEM -->
         <div
            class="group bg-white border border-slate-200 p-10 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-secondary/10 flex items-center justify-center mb-8">
               <i
                  class="fa-solid fa-globe text-secondary text-3xl">
               </i>
            </div>
            <h3
               class="counter text-primary text-4xl font-black"
               data-count="170">
               0
            </h3>
            <p
               class="text-slate-600 mt-4 font-medium">
               Countries Referencing CIWEC Research
            </p>
         </div>
         <!-- ITEM -->
         <div
            class="group bg-white border border-slate-200 p-10 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-8">
               <i
                  class="fa-solid fa-users text-primary text-3xl">
               </i>
            </div>
            <h3
               class="counter text-primary text-4xl font-black"
               data-count="100">
               0
            </h3>
            <p
               class="text-slate-600 mt-4 font-medium">
               Collaborative Studies
            </p>
         </div>
         <!-- ITEM -->
         <div
            class="group bg-white border border-slate-200 p-10 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-secondary/10 flex items-center justify-center mb-8">
               <i
                  class="fa-solid fa-award text-secondary text-3xl">
               </i>
            </div>
            <h3
               class="counter text-primary text-4xl font-black"
               data-count="42">
               0
            </h3>
            <p
               class="text-slate-600 mt-4 font-medium">
               Years Of Research Excellence
            </p>
         </div>
      </div>
      <!-- FEATURED IMPACT -->
      <div
         class="mt-16 bg-primary overflow-hidden">
         <div
            class="grid lg:grid-cols-12 items-center">
            <!-- LEFT -->
            <div
               class="lg:col-span-7 p-10 lg:p-16">
               <span
                  class="text-secondary font-bold uppercase tracking-[3px]">
                  Research Legacy
               </span>
               <h3
                  class="text-white text-4xl font-black mt-5">
                  A Trusted Source Of Medical Knowledge
               </h3>
               <p
                  class="text-white/80 mt-6 leading-8">
                  CIWEC Hospital's contributions have helped shape
                  international guidelines, improve travel health
                  recommendations and expand understanding of
                  altitude-related illnesses, infectious diseases
                  and global health challenges.
               </p>
               <div
                  class="grid md:grid-cols-3 gap-6 mt-10">
                  <div>
                     <h4
                        class="text-secondary text-3xl font-black">
                        40+
                     </h4>
                     <p
                        class="text-white/70 mt-2">
                        Years Research
                     </p>
                  </div>
                  <div>
                     <h4
                        class="text-secondary text-3xl font-black">
                        500+
                     </h4>
                     <p
                        class="text-white/70 mt-2">
                        Publications
                     </p>
                  </div>
                  <div>
                     <h4
                        class="text-secondary text-3xl font-black">
                        Global
                     </h4>
                     <p
                        class="text-white/70 mt-2">
                        Recognition
                     </p>
                  </div>
               </div>
            </div>
            <!-- RIGHT -->
            <div
               class="lg:col-span-5">
               <img
                  src="./assets/img/research-impact.png"
                  alt=""
                  class="w-full h-full object-cover">
            </div>
         </div>
      </div>
   </div>
</section>
<script>
   const counters =
      document.querySelectorAll('.counter');

   const observer =
      new IntersectionObserver((entries) => {

         entries.forEach(entry => {

            if (entry.isIntersecting) {

               const counter =
                  entry.target;

               const target = +counter.dataset.count;

               let count = 0;

               const update = () => {

                  const increment =
                     target / 80;

                  count += increment;

                  if (count < target) {

                     counter.innerText =
                        Math.ceil(count);

                     requestAnimationFrame(update);

                  } else {

                     counter.innerText =
                        target + '+';

                  }

               };

               update();

               observer.unobserve(counter);

            }

         });

      }, {
         threshold: 0.4
      });

   counters.forEach(counter => {
      observer.observe(counter);
   });
</script>

<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <!-- HEADING -->
      <div class="text-center max-w-4xl mx-auto mb-16">
         <span class="section-subtitle">
            Areas Of Expertise
         </span>
         <h2 class="section-title">
            Research Focus Areas
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            CIWEC Hospital contributes to medical research across
            multiple specialties, helping healthcare professionals,
            researchers and institutions better understand global
            health challenges and emerging medical issues.
         </p>
      </div>
      <!-- FOCUS GRID -->
      <div
         class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
         <!-- TRAVEL MEDICINE -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-earth-americas text-primary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Travel Medicine
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Research focused on traveler health,
               disease prevention, vaccinations,
               international travel risks and global mobility.
            </p>
            <div
               class="mt-6 pt-6 border-t border-slate-200">
               <span
                  class="text-secondary font-semibold">
                  150+ Publications
               </span>
            </div>
         </div>
         <!-- ALTITUDE MEDICINE -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-mountain text-secondary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Altitude Medicine
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Studies on altitude sickness,
               acclimatization, frostbite,
               trekking health and mountain medicine.
            </p>
            <div
               class="mt-6 pt-6 border-t border-slate-200">
               <span
                  class="text-secondary font-semibold">
                  Global Recognition
               </span>
            </div>
         </div>
         <!-- INFECTIOUS DISEASES -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-virus text-primary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Infectious Diseases
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Investigation of infectious diseases,
               outbreak management and emerging
               health threats.
            </p>
            <div
               class="mt-6 pt-6 border-t border-slate-200">
               <span
                  class="text-secondary font-semibold">
                  Ongoing Studies
               </span>
            </div>
         </div>
         <!-- TROPICAL MEDICINE -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-leaf text-secondary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Tropical Medicine
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Research addressing tropical diseases,
               environmental health challenges
               and preventive healthcare.
            </p>
            <div
               class="mt-6 pt-6 border-t border-slate-200">
               <span
                  class="text-secondary font-semibold">
                  International Collaboration
               </span>
            </div>
         </div>
         <!-- PUBLIC HEALTH -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-users text-primary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Public Health
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Population health studies,
               disease prevention strategies
               and healthcare accessibility research.
            </p>
            <div
               class="mt-6 pt-6 border-t border-slate-200">
               <span
                  class="text-secondary font-semibold">
                  Community Impact
               </span>
            </div>
         </div>
         <!-- PREVENTIVE HEALTH -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-heart-pulse text-secondary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Preventive Healthcare
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Health screening, wellness programs
               and evidence-based prevention strategies
               for long-term health outcomes.
            </p>
            <div
               class="mt-6 pt-6 border-t border-slate-200">
               <span
                  class="text-secondary font-semibold">
                  Evidence-Based Care
               </span>
            </div>
         </div>
      </div>
      <!-- BOTTOM HIGHLIGHT -->
      <div
         class="mt-20 bg-primary overflow-hidden">
         <div
            class="grid lg:grid-cols-12 items-center">
            <div
               class="lg:col-span-8 p-10 lg:p-14">
               <span
                  class="text-secondary font-bold uppercase tracking-[3px]">
                  Research Philosophy
               </span>
               <h3
                  class="text-white text-4xl font-black mt-5">
                  Transforming Research Into Better Patient Care
               </h3>
               <p
                  class="text-white/80 mt-6 leading-8">
                  Every study, publication and collaboration contributes
                  to improved healthcare outcomes, safer travel experiences
                  and stronger medical knowledge for patients and healthcare
                  professionals around the world.
               </p>
            </div>
            <div
               class="lg:col-span-4 flex items-center justify-center p-10">
               <div
                  class="w-40 h-40 border-4 border-secondary rounded-full flex items-center justify-center">
                  <div class="text-center">
                     <h4
                        class="text-white text-5xl font-black">
                        40+
                     </h4>
                     <p
                        class="text-white/70 mt-2">
                        Years Research
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- RESEARCH LIBRARY hidden since no use for now -->
<!-- ========================================= -->
<section
   id="research-library"
   class="section-padding hidden bg-slate-100 overflow-hidden">
   <div class="container-custom">
      <!-- HEADER -->
      <div class="text-center max-w-4xl mx-auto mb-16">
         <span class="section-subtitle">
            Knowledge Center
         </span>
         <h2 class="section-title">
            Research Publication Library
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            Browse CIWEC's collection of medical research,
            scientific publications and healthcare studies
            covering travel medicine, infectious diseases,
            altitude medicine and preventive healthcare.
         </p>
      </div>
      <!-- SEARCH PANEL -->
      <div
         class="bg-white border border-slate-200 p-6 lg:p-8 mb-12">
         <div
            class="grid lg:grid-cols-12 gap-5">
            <!-- SEARCH -->
            <div
               class="lg:col-span-6">
               <label
                  class="block text-primary font-semibold mb-3">
                  Search Publications
               </label>
               <div class="relative">
                  <input
                     type="text"
                     id="researchSearch"
                     placeholder="Search title, keyword or year..."
                     class="w-full h-14 border border-slate-300 pl-14 pr-5 outline-none focus:border-secondary">
                  <i
                     class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-slate-400">
                  </i>
               </div>
            </div>
            <!-- CATEGORY -->
            <div
               class="lg:col-span-3">
               <label
                  class="block text-primary font-semibold mb-3">
                  Category
               </label>
               <select
                  id="researchCategory"
                  class="w-full h-14 border border-slate-300 px-5">
                  <option value="">
                     All Categories
                  </option>
                  <option>
                     Travel Medicine
                  </option>
                  <option>
                     Altitude Medicine
                  </option>
                  <option>
                     Infectious Diseases
                  </option>
                  <option>
                     Tropical Medicine
                  </option>
               </select>
            </div>
            <!-- YEAR -->
            <div
               class="lg:col-span-3">
               <label
                  class="block text-primary font-semibold mb-3">
                  Publication Year
               </label>
               <select
                  id="researchYear"
                  class="w-full h-14 border border-slate-300 px-5">
                  <option value="">
                     All Years
                  </option>
                  <option>
                     2025
                  </option>
                  <option>
                     2024
                  </option>
                  <option>
                     2023
                  </option>
                  <option>
                     2022
                  </option>
               </select>
            </div>
         </div>
      </div>
      <!-- RESULT INFO -->
      <div
         class="flex flex-wrap justify-between items-center mb-8">
         <h3
            class="text-primary text-2xl font-black">
            Available Publications
         </h3>
         <span
            id="publicationCount"
            class="text-slate-500">
            Showing 0 Publications
         </span>
      </div>
      <!-- LOADER -->
      <div
         id="researchLoader"
         class="hidden py-24">
         <div
            class="flex justify-center">
            <div
               class="w-16 h-16 border-4 border-primary border-t-transparent rounded-full animate-spin">
            </div>
         </div>
      </div>
      <!-- GRID -->
      <div
         id="researchGrid"
         class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
         <!-- JS RENDER -->
      </div>
      <!-- VIEW ALL -->
      <div
         class="text-center mt-16">
         <button
            id="viewAllPublications"
            class="btn-primary">
            View All Publications
         </button>
      </div>
   </div>
</section>

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
         researchGrid.innerHTML += `
   <article
    class="group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
   
    <div class="p-8">
   
        <div
            class="flex items-center justify-between mb-6">
   
            <span
                class="text-secondary font-black">
   
                ${item.year}
   
            </span>
   
            <span
                class="bg-primary/5 text-primary px-3 py-1 text-xs font-semibold">
   
                ${item.category}
   
            </span>
   
        </div>
   
        <h3
            class="text-primary text-2xl font-black leading-snug mb-5 group-hover:text-secondary transition">
   
            ${item.title}
   
        </h3>
   
        <p
            class="text-slate-600 leading-7 line-clamp-3">
   
            ${item.description}
   
        </p>
   
        <div
            class="mt-8 pt-6 border-t border-slate-200 flex justify-between items-center">
   
            <span
                class="text-slate-500 text-sm">
   
                Research Publication
   
            </span>
   
            <button
                onclick="openPDFModal('${item.pdf}')"
                class="text-primary hover:text-secondary font-semibold">
   
                View Research
   
            </button>
   
        </div>
   
    </div>
   
   </article>
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


<!-- ========================================= -->
<!-- FEATURED RESEARCH -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <!-- HEADING -->
      <div class="text-center max-w-4xl mx-auto mb-16">
         <span class="section-subtitle">
            Featured Publication
         </span>
         <h2 class="section-title">
            Highlighted Research Study
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            Explore one of CIWEC Hospital's notable contributions
            to global medical knowledge and healthcare advancement.
         </p>
      </div>
      <!-- FEATURED PAPER -->
      <div
         class="bg-slate-100 border border-slate-200 overflow-hidden">
         <div
            class="grid lg:grid-cols-12 items-center">
            <!-- IMAGE -->
            <div
               class="lg:col-span-5 relative">
               <img
                  src="./assets/img/featured-research.png"
                  alt=""
                  class="w-full h-full object-cover min-h-[500px]">
               <div
                  class="absolute top-6 left-6">
                  <span
                     class="bg-secondary text-white px-4 py-2 text-sm font-bold uppercase">
                     Featured Research
                  </span>
               </div>
            </div>
            <!-- CONTENT -->
            <div
               class="lg:col-span-7 p-10 lg:p-14">
               <span
                  class="text-primary font-bold uppercase tracking-[3px]">
                  Travel Medicine Research
               </span>
               <h3
                  class="text-primary text-4xl font-black mt-5 leading-tight">
                  Health Risks, Disease Patterns
                  And Medical Challenges Among
                  International Travelers Visiting Nepal
               </h3>
               <p
                  class="text-slate-600 mt-8 leading-8">
                  This landmark study examined health risks,
                  travel-related illnesses and preventive
                  healthcare strategies among international
                  travelers visiting Nepal.
               </p>
               <p
                  class="text-slate-600 mt-6 leading-8">
                  Findings from this research have contributed
                  to improved travel medicine guidelines,
                  healthcare recommendations and disease
                  prevention strategies used globally.
               </p>
               <!-- META -->
               <div
                  class="grid md:grid-cols-3 gap-6 mt-8">
                  <div>
                     <p
                        class="text-slate-500 text-sm">
                        Published
                     </p>
                     <h4
                        class="text-primary font-bold mt-2">
                        2024
                     </h4>
                  </div>
                  <div>
                     <p
                        class="text-slate-500 text-sm">
                        Category
                     </p>
                     <h4
                        class="text-primary font-bold mt-2">
                        Travel Medicine
                     </h4>
                  </div>
                  <div>
                     <p
                        class="text-slate-500 text-sm">
                        Citations
                     </p>
                     <h4
                        class="text-primary font-bold mt-2">
                        250+
                     </h4>
                  </div>
               </div>
               <!-- AUTHORS -->
               <div
                  class="border-t border-slate-200 mt-8 pt-8">
                  <p
                     class="text-slate-500 text-sm">
                     Lead Researchers
                  </p>
                  <h4
                     class="text-primary font-bold mt-2">
                     Dr. David R. Shlim & Research Team
                  </h4>
               </div>
               <!-- BUTTONS -->
               <div
                  class="flex flex-wrap gap-4 mt-10">
                  <button
                     class="btn-primary">
                     Read Full Publication
                  </button>
                  <button
                     class="btn-light border-1 border-primary">
                     Download PDF
                  </button>
               </div>
            </div>
         </div>
      </div>
      <!-- RESEARCH HIGHLIGHTS -->
      <div
         class="grid md:grid-cols-3 gap-8 mt-16">
         <!-- CARD -->
         <div
            class="border border-slate-200 p-8 text-center">
            <div
               class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-microscope text-primary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Evidence-Based
            </h3>
            <p
               class="text-slate-600 mt-4">
               Research grounded in clinical
               observations and scientific analysis.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="border border-slate-200 p-8 text-center">
            <div
               class="w-16 h-16 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-globe text-secondary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Global Relevance
            </h3>
            <p
               class="text-slate-600 mt-4">
               Findings referenced by healthcare
               professionals around the world.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="border border-slate-200 p-8 text-center">
            <div
               class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-book-medical text-primary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Medical Knowledge
            </h3>
            <p
               class="text-slate-600 mt-4">
               Supporting education, policy development
               and improved patient outcomes.
            </p>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- RESEARCH TIMELINE -->
<!-- ========================================= -->
<section class="section-padding bg-slate-100 overflow-hidden">
   <div class="container-custom">
      <!-- HEADER -->
      <div class="text-center max-w-4xl mx-auto mb-20">
         <span class="section-subtitle">
            Research Journey
         </span>
         <h2 class="section-title">
            Four Decades Of Medical Discovery
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            From pioneering travel medicine studies to internationally
            recognized healthcare research, CIWEC's journey reflects
            decades of scientific contribution and innovation.
         </p>
      </div>
      <!-- TIMELINE -->
      <div class="relative">
         <!-- CENTER LINE -->
         <div
            class="hidden lg:block absolute left-1/2 top-0 bottom-0 w-[2px] bg-slate-200 -translate-x-1/2">
         </div>
         <!-- 1983 -->
         <div
            class="grid lg:grid-cols-2 gap-10 items-center mb-20">
            <div
               class="lg:text-right">
               <span
                  class="inline-block bg-primary text-white px-5 py-2 font-bold">
                  1983
               </span>
               <h3
                  class="text-primary text-3xl font-black mt-5">
                  CIWEC Foundation
               </h3>
               <p
                  class="text-slate-600 mt-5 leading-8">
                  Establishment of CIWEC with a mission to provide
                  healthcare services for international travelers,
                  expatriates and local communities.
               </p>
            </div>
            <div class="relative">
               <div
                  class="hidden lg:block absolute left-0 top-10 -translate-x-[46px] w-8 h-8 bg-secondary border-4 border-white rounded-full">
               </div>
               <div
                  class="bg-white border border-slate-200 p-8">
                  <i
                     class="fa-solid fa-hospital text-secondary text-4xl">
                  </i>
               </div>
            </div>
         </div>
         <!-- 1995 -->
         <div
            class="grid lg:grid-cols-2 gap-10 items-center mb-20">
            <div
               class="order-2 lg:order-1">
               <div
                  class="bg-white border border-slate-200 p-8">
                  <i
                     class="fa-solid fa-mountain text-primary text-4xl">
                  </i>
               </div>
            </div>
            <div
               class="order-1 lg:order-2">
               <span
                  class="inline-block bg-secondary text-white px-5 py-2 font-bold">
                  1995
               </span>
               <h3
                  class="text-primary text-3xl font-black mt-5">
                  Altitude Medicine Leadership
               </h3>
               <p
                  class="text-slate-600 mt-5 leading-8">
                  Research initiatives focused on altitude sickness,
                  acclimatization and mountain medicine gained
                  international recognition.
               </p>
            </div>
         </div>
         <!-- 2005 -->
         <div
            class="grid lg:grid-cols-2 gap-10 items-center mb-20">
            <div
               class="lg:text-right">
               <span
                  class="inline-block bg-primary text-white px-5 py-2 font-bold">
                  2005
               </span>
               <h3
                  class="text-primary text-3xl font-black mt-5">
                  Global Research Collaborations
               </h3>
               <p
                  class="text-slate-600 mt-5 leading-8">
                  Expansion of collaborative research projects
                  with universities, hospitals and healthcare
                  organizations worldwide.
               </p>
            </div>
            <div>
               <div
                  class="bg-white border border-slate-200 p-8">
                  <i
                     class="fa-solid fa-globe text-secondary text-4xl">
                  </i>
               </div>
            </div>
         </div>
         <!-- 2015 -->
         <div
            class="grid lg:grid-cols-2 gap-10 items-center mb-20">
            <div
               class="order-2 lg:order-1">
               <div
                  class="bg-white border border-slate-200 p-8">
                  <i
                     class="fa-solid fa-book-medical text-primary text-4xl">
                  </i>
               </div>
            </div>
            <div
               class="order-1 lg:order-2">
               <span
                  class="inline-block bg-secondary text-white px-5 py-2 font-bold">
                  2015
               </span>
               <h3
                  class="text-primary text-3xl font-black mt-5">
                  500+ Publications Milestone
               </h3>
               <p
                  class="text-slate-600 mt-5 leading-8">
                  CIWEC research contributions reached major
                  publication milestones, strengthening its
                  reputation in travel and tropical medicine.
               </p>
            </div>
         </div>
         <!-- TODAY -->
         <div
            class="grid lg:grid-cols-2 gap-10 items-center">
            <div
               class="lg:text-right">
               <span
                  class="inline-block bg-primary text-white px-5 py-2 font-bold">
                  Today
               </span>
               <h3
                  class="text-primary text-3xl font-black mt-5">
                  Advancing Global Healthcare Knowledge
               </h3>
               <p
                  class="text-slate-600 mt-5 leading-8">
                  Continuing to contribute high-quality research,
                  innovative studies and evidence-based healthcare
                  knowledge for patients and professionals worldwide.
               </p>
            </div>
            <div>
               <div
                  class="bg-primary p-10 text-center">
                  <h3
                     class="text-white text-5xl font-black">
                     40+
                  </h3>
                  <p
                     class="text-white/80 mt-3">
                     Years Of Research Excellence
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- BOTTOM SUMMARY -->
      <div
         class="grid md:grid-cols-4 gap-6 mt-20">
         <div
            class="bg-white border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               1983
            </h3>
            <p
               class="text-slate-600 mt-2">
               Research Journey Started
            </p>
         </div>
         <div
            class="bg-white border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               500+
            </h3>
            <p
               class="text-slate-600 mt-2">
               Publications
            </p>
         </div>
         <div
            class="bg-white border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               100+
            </h3>
            <p
               class="text-slate-600 mt-2">
               Collaborations
            </p>
         </div>
         <div
            class="bg-white border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               Global
            </h3>
            <p
               class="text-slate-600 mt-2">
               Research Influence
            </p>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- RESEARCH COLLABORATIONS -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <!-- HEADING -->
      <div class="text-center max-w-4xl mx-auto mb-16">
         <span class="section-subtitle">
            Global Partnerships
         </span>
         <h2 class="section-title">
            Research Collaborations & Academic Partnerships
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            CIWEC collaborates with leading universities,
            healthcare institutions, international organizations
            and research networks to advance medical knowledge
            and improve healthcare outcomes worldwide.
         </p>
      </div>
      <!-- MAIN SHOWCASE -->
      <div
         class="grid xl:grid-cols-12 gap-10 items-center mb-20">
         <!-- LEFT -->
         <div
            class="xl:col-span-6">
            <img
               src="./assets/img/history/history1.webp"
               alt=""
               class="w-full h-[550px] object-cover">
         </div>
         <!-- RIGHT -->
         <div
            class="xl:col-span-6">
            <span
               class="text-secondary font-bold uppercase tracking-[3px]">
               International Research Network
            </span>
            <h3
               class="text-primary text-4xl font-black mt-5">
               Building Strong Global Research Connections
            </h3>
            <p
               class="text-slate-600 mt-6 leading-8">
               Through strategic partnerships and collaborative
               research projects, CIWEC contributes to global
               healthcare advancements in travel medicine,
               infectious diseases, altitude medicine and
               preventive healthcare.
            </p>
            <p
               class="text-slate-600 mt-6 leading-8">
               These collaborations help strengthen scientific
               evidence, improve healthcare practices and
               create meaningful contributions to international
               medical research.
            </p>
            <div
               class="grid md:grid-cols-2 gap-6 mt-10">
               <div
                  class="flex gap-4">
                  <i
                     class="fa-solid fa-building-columns text-secondary text-2xl mt-1">
                  </i>
                  <div>
                     <h4
                        class="text-primary font-bold">
                        Universities
                     </h4>
                     <p
                        class="text-slate-600 text-sm mt-2">
                        Academic research partnerships
                        and scientific studies.
                     </p>
                  </div>
               </div>
               <div
                  class="flex gap-4">
                  <i
                     class="fa-solid fa-hospital text-primary text-2xl mt-1">
                  </i>
                  <div>
                     <h4
                        class="text-primary font-bold">
                        Hospitals
                     </h4>
                     <p
                        class="text-slate-600 text-sm mt-2">
                        Clinical collaboration and
                        patient-centered research.
                     </p>
                  </div>
               </div>
               <div
                  class="flex gap-4">
                  <i
                     class="fa-solid fa-globe text-secondary text-2xl mt-1">
                  </i>
                  <div>
                     <h4
                        class="text-primary font-bold">
                        Global Networks
                     </h4>
                     <p
                        class="text-slate-600 text-sm mt-2">
                        International healthcare
                        research initiatives.
                     </p>
                  </div>
               </div>
               <div
                  class="flex gap-4">
                  <i
                     class="fa-solid fa-flask text-primary text-2xl mt-1">
                  </i>
                  <div>
                     <h4
                        class="text-primary font-bold">
                        Research Institutes
                     </h4>
                     <p
                        class="text-slate-600 text-sm mt-2">
                        Joint studies and scientific
                        innovation projects.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- PARTNER TYPES -->
      <div
         class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-graduation-cap text-primary text-3xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Universities
            </h3>
            <p
               class="text-slate-600 mt-4">
               Academic institutions supporting
               scientific research and education.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-hospital text-secondary text-3xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Hospitals
            </h3>
            <p
               class="text-slate-600 mt-4">
               Clinical research partnerships
               and healthcare studies.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-earth-americas text-primary text-3xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Global Networks
            </h3>
            <p
               class="text-slate-600 mt-4">
               International organizations
               advancing global health.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-microscope text-secondary text-3xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Research Centers
            </h3>
            <p
               class="text-slate-600 mt-4">
               Specialized institutes supporting
               innovation and discovery.
            </p>
         </div>
      </div>
      <!-- LOGO WALL -->
      <div
         class="mt-20">
         <div
            class="text-center mb-10">
            <h3
               class="text-primary text-3xl font-black">
               Trusted Research Partners
            </h3>
         </div>
         <div
            class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-6">
            <div class="border border-slate-200 p-8 flex items-center justify-center">
               <img src="./assets/img/ismt_certified.webp" class="h-12 object-contain">
            </div>
            <div class="border border-slate-200 p-8 flex items-center justify-center">
               <img src="./assets/img/ismt_certified.webp" class="h-12 object-contain">
            </div>
            <div class="border border-slate-200 p-8 flex items-center justify-center">
               <img src="./assets/img/ismt_certified.webp" class="h-12 object-contain">
            </div>
            <div class="border border-slate-200 p-8 flex items-center justify-center">
               <img src="./assets/img/ismt_certified.webp" class="h-12 object-contain">
            </div>
            <div class="border border-slate-200 p-8 flex items-center justify-center">
               <img src="./assets/img/ismt_certified.webp" class="h-12 object-contain">
            </div>
            <div class="border border-slate-200 p-8 flex items-center justify-center">
               <img src="./assets/img/ismt_certified.webp" class="h-12 object-contain">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- RESEARCH PARTNERSHIP & INQUIRY CTA -->
<!-- ========================================= -->
<section class="section-padding relative overflow-hidden bg-primary">
   <!-- DECORATION -->
   <div
      class="absolute
      top-0
      left-0
      w-[500px]
      h-[500px]
      rounded-full
      bg-white/[0.03]
      -translate-x-1/2
      -translate-y-1/2">
   </div>
   <div
      class="absolute
      bottom-0
      right-0
      w-[600px]
      h-[600px]
      rounded-full
      bg-secondary/[0.08]
      translate-x-1/3
      translate-y-1/3">
   </div>
   <div
      class="container-custom
      relative
      z-10">
      <div>
         <!-- HEADING -->
         <div
            class="max-w-5xl mx-auto text-center">
            <span
               class="inline-block
               text-secondary
               uppercase
               tracking-[4px]
               font-bold
               mb-5">
               Research Opportunities
            </span>
            <h2
               class="text-white
               text-3xl
               md:text-4xl
               xl:text-5xl
               font-black
               leading-tight">
               Collaborate With CIWEC's
               Research Community
            </h2>
            <p
               class="text-white/80
               text-lg
               leading-8
               mt-8
               max-w-3xl
               mx-auto">
               We welcome partnerships with universities,
               healthcare organizations, hospitals,
               public health institutions and researchers
               interested in collaborative studies,
               publications and scientific advancement.
            </p>
         </div>
         <!-- FEATURES -->
         <div
            class="grid
            md:grid-cols-2
            xl:grid-cols-4
            gap-8
            mt-16">
            <!-- ITEM -->
            <div
               class="bg-white/5
               border
               border-white/10
               p-8
               backdrop-blur-sm">
               <div
                  class="w-16
                  h-16
                  bg-white/10
                  flex
                  items-center
                  justify-center
                  mb-6">
                  <i
                     class="fa-solid fa-microscope
                     text-secondary
                     text-2xl">
                  </i>
               </div>
               <h3
                  class="text-white
                  text-xl
                  font-black">
                  Joint Research
               </h3>
               <p
                  class="text-white/70
                  mt-4
                  leading-7">
                  Conduct collaborative studies
                  across travel medicine,
                  infectious diseases and public health.
               </p>
            </div>
            <!-- ITEM -->
            <div
               class="bg-white/5
               border
               border-white/10
               p-8
               backdrop-blur-sm">
               <div
                  class="w-16
                  h-16
                  bg-white/10
                  flex
                  items-center
                  justify-center
                  mb-6">
                  <i
                     class="fa-solid fa-book-medical
                     text-secondary
                     text-2xl">
                  </i>
               </div>
               <h3
                  class="text-white
                  text-xl
                  font-black">
                  Publications
               </h3>
               <p
                  class="text-white/70
                  mt-4
                  leading-7">
                  Share knowledge through
                  peer-reviewed journals,
                  conferences and publications.
               </p>
            </div>
            <!-- ITEM -->
            <div
               class="bg-white/5
               border
               border-white/10
               p-8
               backdrop-blur-sm">
               <div
                  class="w-16
                  h-16
                  bg-white/10
                  flex
                  items-center
                  justify-center
                  mb-6">
                  <i
                     class="fa-solid fa-users
                     text-secondary
                     text-2xl">
                  </i>
               </div>
               <h3
                  class="text-white
                  text-xl
                  font-black">
                  Academic Exchange
               </h3>
               <p
                  class="text-white/70
                  mt-4
                  leading-7">
                  Connect researchers,
                  healthcare professionals
                  and academic institutions.
               </p>
            </div>
            <!-- ITEM -->
            <div
               class="bg-white/5
               border
               border-white/10
               p-8
               backdrop-blur-sm">
               <div
                  class="w-16
                  h-16
                  bg-white/10
                  flex
                  items-center
                  justify-center
                  mb-6">
                  <i
                     class="fa-solid fa-globe
                     text-secondary
                     text-2xl">
                  </i>
               </div>
               <h3
                  class="text-white
                  text-xl
                  font-black">
                  Global Impact
               </h3>
               <p
                  class="text-white/70
                  mt-4
                  leading-7">
                  Contribute to research
                  that influences healthcare
                  around the world.
               </p>
            </div>
         </div>
         <!-- CTA BOX -->
         <div
            class="bg-white
            mt-20
            p-10
            lg:p-14">
            <div
               class="grid
               lg:grid-cols-12
               gap-10
               items-center">
               <!-- LEFT -->
               <div
                  class="lg:col-span-8">
                  <span
                     class="text-secondary
                     font-bold
                     uppercase
                     tracking-[3px]">
                     Start A Conversation
                  </span>
                  <h3
                     class="text-primary
                     text-3xl
                     lg:text-4xl
                     font-black
                     mt-4">
                     Interested In Research Collaboration?
                  </h3>
                  <p
                     class="text-slate-600
                     mt-6
                     leading-8">
                     Whether you are a researcher,
                     university representative,
                     healthcare organization or
                     scientific institution, we would
                     be pleased to discuss opportunities
                     for collaboration and knowledge sharing.
                  </p>
               </div>
               <!-- RIGHT -->
               <div
                  class="lg:col-span-4">
                  <div
                     class="space-y-4">
                     <a href="#"
                        class="btn-primary w-full text-center">
                        Research Inquiry
                     </a>
                     <a href="#"
                        class="w-full
                        border
                        border-primary
                        text-primary
                        font-semibold
                        px-8
                        py-4
                        text-center
                        block
                        hover:bg-primary
                        hover:text-white
                        transition">
                        Partner With Us
                     </a>
                     <a href="mailto:research@ciwec.com"
                        class="w-full
                        border
                        border-slate-300
                        text-slate-700
                        font-semibold
                        px-8
                        py-4
                        text-center
                        block
                        hover:border-secondary
                        hover:text-secondary
                        transition">
                        Contact Research Team
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <!-- RESEARCH NUMBERS -->
         <div
            class="grid
            md:grid-cols-4
            gap-6
            mt-16">
            <div
               class="text-center">
               <h3
                  class="text-secondary
                  text-5xl
                  font-black">
                  500+
               </h3>
               <p
                  class="text-white/70
                  mt-3">
                  Publications
               </p>
            </div>
            <div
               class="text-center">
               <h3
                  class="text-secondary
                  text-5xl
                  font-black">
                  100+
               </h3>
               <p
                  class="text-white/70
                  mt-3">
                  Collaborations
               </p>
            </div>
            <div
               class="text-center">
               <h3
                  class="text-secondary
                  text-5xl
                  font-black">
                  40+
               </h3>
               <p
                  class="text-white/70
                  mt-3">
                  Years Research
               </p>
            </div>
            <div
               class="text-center">
               <h3
                  class="text-secondary
                  text-5xl
                  font-black">
                  Global
               </h3>
               <p
                  class="text-white/70
                  mt-3">
                  Recognition
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include "./include/footer.php";
?>