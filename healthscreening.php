<?php
   include "./include/header.php"; ?>
<style>
   .knowledge-chip {
   padding: 12px 22px;
   background: white;
   border: 1px solid #e2e8f0;
   font-weight: 600;
   transition: .3s;
   }
   .knowledge-chip:hover {
   border-color: #f59e0b;
   color: #f59e0b;
   }
</style>
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
<!-- ========================================= -->
<!-- HEALTH INFORMATION INTRO -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <div
         class="grid lg:grid-cols-12 gap-16 items-center">
         <!-- LEFT CONTENT -->
         <div
            class="lg:col-span-6">
            <span class="section-subtitle">
            Patient Education
            </span>
            <h2 class="section-title">
               Trusted Health Information From Medical Experts
            </h2>
            <p
               class="text-slate-600 leading-8 mt-8">
               Access reliable, evidence-based health information
               prepared by CIWEC's healthcare professionals.
               Our goal is to help patients, families, travelers
               and communities make informed healthcare decisions.
            </p>
            <p class="text-slate-600 leading-8 mt-6">
               From preventive healthcare and travel medicine
               to altitude illness, vaccinations and disease
               prevention, explore resources designed to support
               healthier lives and better healthcare outcomes.
            </p>
            <!-- HIGHLIGHTS -->
            <div class="grid md:grid-cols-2 gap-5 mt-10">
               <div class="flex gap-4">
                  <div class="w-12 h-12 bg-primary/10 flex items-center justify-center flex-shrink-0">
                     <i class="fa-solid fa-circle-check text-primary">
                     </i>
                  </div>
                  <div>
                     <h4 class="text-primary font-bold">
                        Expert Reviewed
                     </h4>
                     <p class="text-slate-600 text-sm mt-2">
                        Information developed
                        by healthcare professionals.
                     </p>
                  </div>
               </div>
               <div class="flex gap-4">
                  <div class="w-12 h-12 bg-secondary/10 flex items-center justify-center flex-shrink-0">
                     <i class="fa-solid fa-book-medical text-secondary">
                     </i>
                  </div>
                  <div>
                     <h4 class="text-primary font-bold">
                        Evidence-Based
                     </h4>
                     <p class="text-slate-600 text-sm mt-2">
                        Based on current medical
                        knowledge and best practices.
                     </p>
                  </div>
               </div>
               <div class="flex gap-4">
                  <div class="w-12 h-12 bg-primary/10 flex items-center justify-center flex-shrink-0">
                     <i class="fa-solid fa-globe text-primary">
                     </i>
                  </div>
                  <div>
                     <h4 class="text-primary font-bold">
                        Travel Health Expertise
                     </h4>
                     <p class="text-slate-600 text-sm mt-2">
                        Specialized information
                        for travelers and trekkers.
                     </p>
                  </div>
               </div>
               <div class="flex gap-4">
                  <div class="w-12 h-12 bg-secondary/10 flex items-center justify-center flex-shrink-0">
                     <i class="fa-solid fa-heart-pulse text-secondary">
                     </i>
                  </div>
                  <div>
                     <h4 class="text-primary font-bold">
                        Preventive Care
                     </h4>
                     <p class="text-slate-600 text-sm mt-2">
                        Practical guidance for
                        maintaining good health.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- RIGHT IMAGE -->
         <div class="lg:col-span-6">
            <div class="relative">
               <img src="./assets/img/health/healthinformation.png" alt="Health Information" class="w-full h-[650px] object-cover">
               <!-- FLOATING CARD -->
               <div class="absolute
                  bottom-8
                  left-8
                  bg-white
                  p-6
                  shadow-xl
                  max-w-[280px]">
                  <div class="flex items-center gap-4">
                     <div class="w-14 h-14 bg-primary text-white flex items-center justify-center">
                        <i class="fa-solid fa-user-doctor text-xl"></i>
                     </div>
                     <div>
                        <h4 class="text-primary font-black">
                           Medical Guidance
                        </h4>
                        <p class="text-slate-500 text-sm">
                           Trusted Healthcare Knowledge
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- BOTTOM STATS -->
      <div class="grid md:grid-cols-4 gap-6 mt-20">
         <div class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3 class="text-primary text-4xl font-black">
               100+
            </h3>
            <p class="text-slate-600 mt-3">
               Health Articles
            </p>
         </div>
         <div class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3 class="text-primary text-4xl font-black">
               40+
            </h3>
            <p class="text-slate-600 mt-3">
               Years Of Expertise
            </p>
         </div>
         <div class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3 class="text-primary text-4xl font-black">
               Travel
            </h3>
            <p class="text-slate-600 mt-3">
               Health Specialists
            </p>
         </div>
         <div class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3 class="text-primary text-4xl font-black">
               Trusted
            </h3>
            <p class="text-slate-600 mt-3">
               Medical Resources
            </p>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- HEALTH CATEGORIES -->
<!-- ========================================= -->
<section class="section-padding bg-slate-100 overflow-hidden">
   <div class="container-custom">
      <!-- HEADING -->
      <div class="text-center max-w-4xl mx-auto mb-16">
         <span class="section-subtitle">
         Explore Topics
         </span>
         <h2 class="section-title">
            Browse Health Information By Category
         </h2>
         <p class="text-slate-600 mt-6 leading-8">
            Discover expert guidance across a wide range of
            healthcare topics including travel medicine,
            altitude illness, vaccinations, disease prevention
            and family health.
         </p>
      </div>
      <!-- CATEGORY GRID -->
      <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
         <!-- TRAVEL HEALTH -->
         <div class="health-category group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 cursor-pointer"
            data-category="Travel Health">
            <div class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
               <i class="fa-solid fa-earth-asia text-primary text-2xl">
               </i>
            </div>
            <h3 class="text-primary text-2xl font-black">
               Travel Health
            </h3>
            <p class="text-slate-600 mt-4 leading-7">
               Essential information for international travelers,
               vaccinations, travel safety and preventive care.
            </p>
            <div class="flex justify-between items-center mt-8 pt-6 border-t border-slate-200">
               <span class="text-secondary font-semibold">
               25 Articles
               </span>
               <i class="fa-solid fa-arrow-right text-primary group-hover:text-secondary">
               </i>
            </div>
         </div>
         <!-- ALTITUDE ILLNESS -->
         <div class="health-category group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 cursor-pointer"
            data-category="Altitude Illness">
            <div class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
               <i class="fa-solid fa-mountain text-secondary text-2xl">
               </i>
            </div>
            <h3 class="text-primary text-2xl font-black">
               Altitude Illness
            </h3>
            <p class="text-slate-600 mt-4 leading-7">
               Learn about altitude sickness,
               acclimatization, prevention and treatment.
            </p>
            <div class="flex justify-between items-center mt-8 pt-6 border-t border-slate-200">
               <span class="text-secondary font-semibold">
               18 Articles
               </span>
               <i class="fa-solid fa-arrow-right text-primary group-hover:text-secondary">
               </i>
            </div>
         </div>
         <!-- VACCINATIONS -->
         <div class="health-category group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 cursor-pointer"
            data-category="Vaccinations">
            <div class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
               <i class="fa-solid fa-syringe text-primary text-2xl">
               </i>
            </div>
            <h3 class="text-primary text-2xl font-black">
               Vaccinations
            </h3>
            <p class="text-slate-600 mt-4 leading-7">
               Vaccination recommendations,
               schedules and travel vaccine guidance.
            </p>
            <div class="flex justify-between items-center mt-8 pt-6 border-t border-slate-200">
               <span class="text-secondary font-semibold">
               15 Articles
               </span>
               <i class="fa-solid fa-arrow-right text-primary group-hover:text-secondary">
               </i>
            </div>
         </div>
         <!-- INFECTIOUS DISEASES -->
         <div class="health-category group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 cursor-pointer"
            data-category="Infectious Diseases">
            <div class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
               <i class="fa-solid fa-virus text-secondary text-2xl">
               </i>
            </div>
            <h3 class="text-primary text-2xl font-black">
               Infectious Diseases
            </h3>
            <p class="text-slate-600 mt-4 leading-7">
               Information on prevention,
               symptoms and treatment options.
            </p>
            <div class="flex justify-between items-center mt-8 pt-6 border-t border-slate-200">
               <span class="text-secondary font-semibold">
               30 Articles
               </span>
               <i class="fa-solid fa-arrow-right text-primary group-hover:text-secondary">
               </i>
            </div>
         </div>
         <!-- FAMILY HEALTH -->
         <div class="health-category group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 cursor-pointer"
            data-category="Family Health">
            <div class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
               <i class="fa-solid fa-people-group text-primary text-2xl">
               </i>
            </div>
            <h3 class="text-primary text-2xl font-black">
               Family Health
            </h3>
            <p class="text-slate-600 mt-4 leading-7">
               Healthcare guidance for children,
               adults and family wellness.
            </p>
            <div class="flex justify-between items-center mt-8 pt-6 border-t border-slate-200">
               <span
                  class="text-secondary font-semibold">
               20 Articles
               </span>
               <i class="fa-solid fa-arrow-right text-primary group-hover:text-secondary">
               </i>
            </div>
         </div>
         <!-- PREVENTIVE CARE -->
         <div class="health-category group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 cursor-pointer"
            data-category="Preventive Care">
            <div class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
               <i class="fa-solid fa-heart-pulse text-secondary text-2xl">
               </i>
            </div>
            <h3 class="text-primary text-2xl font-black">
               Preventive Care
            </h3>
            <p class="text-slate-600 mt-4 leading-7">
               Health screenings, wellness programs
               and disease prevention strategies.
            </p>
            <div class="flex justify-between items-center mt-8 pt-6 border-t border-slate-200">
               <span class="text-secondary font-semibold">
               22 Articles
               </span>
               <i class="fa-solid fa-arrow-right text-primary group-hover:text-secondary">
               </i>
            </div>
         </div>
      </div>
      <!-- BOTTOM CTA -->
      <div class="mt-16 bg-primary p-10 text-center">
         <h3 class="text-white text-3xl font-black">
            Looking For Specific Health Information?
         </h3>
         <p
            class="text-white/80 mt-5 max-w-3xl mx-auto leading-8">
            Browse our complete health information library
            or use the search feature below to find articles,
            guides and educational resources.
         </p>
      </div>
   </div>
</section>
<script>
   const categoryCards =
       document.querySelectorAll(".health-category");
   
   const categorySelect =
       document.getElementById("healthCategory");
   
   categoryCards.forEach(card => {
   
       card.addEventListener("click", () => {
   
           const category =
               card.dataset.category;
   
           if (categorySelect) {
   
               categorySelect.value =
                   category;
   
               categorySelect.dispatchEvent(
                   new Event("change")
               );
   
           }
   
           document
               .getElementById("health-library")
               ?.scrollIntoView({
                   behavior: "smooth"
               });
   
       });
   
   });
</script>
<!-- ========================================= -->
<!-- FEATURED HEALTH GUIDES -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <!-- HEADING -->
      <div class="text-center max-w-4xl mx-auto mb-16">
         <span class="section-subtitle">
         Featured Resources
         </span>
         <h2 class="section-title">
            Essential Health Guides
         </h2>
         <p class="text-slate-600 mt-6 leading-8">
            Explore some of our most frequently accessed health
            information resources, prepared by CIWEC's medical
            professionals to help you stay informed and healthy.
         </p>
      </div>
      <!-- FEATURED GUIDE -->
      <div class="bg-slate-100 border border-slate-200 overflow-hidden">
         <div class="grid lg:grid-cols-12 items-center">
            <!-- IMAGE -->
            <div class="lg:col-span-5 relative">
               <img src="./assets/img/altitudesickness.png"
                  alt=""
                  class="w-full h-full min-h-[550px] object-cover">
               <div class="absolute top-6 left-6">
                  <span class="bg-secondary text-white px-4 py-2 text-sm font-bold uppercase">
                  Most Popular Guide
                  </span>
               </div>
            </div>
            <!-- CONTENT -->
            <div class="lg:col-span-7 p-10 lg:p-14">
               <span class="text-primary font-bold uppercase tracking-[3px]">
               Altitude Medicine
               </span>
               <h3 class="text-primary text-4xl font-black mt-5 leading-tight">
                  Complete Guide To Altitude Sickness
               </h3>
               <p class="text-slate-600 mt-8 leading-8">
                  Learn how altitude affects the body,
                  understand early warning signs,
                  recognize symptoms and discover
                  proven prevention strategies for
                  safe trekking and mountain travel.
               </p>
               <!-- FEATURES -->
               <div class="grid md:grid-cols-2 gap-5 mt-10">
                  <div class="flex items-center gap-3">
                     <i class="fa-solid fa-circle-check text-secondary">
                     </i>
                     <span>
                     Symptoms Explained
                     </span>
                  </div>
                  <div class="flex items-center gap-3">
                     <i class="fa-solid fa-circle-check text-secondary">
                     </i>
                     <span>
                     Prevention Strategies
                     </span>
                  </div>
                  <div class="flex items-center gap-3">
                     <i class="fa-solid fa-circle-check text-secondary">
                     </i>
                     <span>
                     Emergency Warning Signs
                     </span>
                  </div>
                  <div
                     class="flex items-center gap-3">
                     <i
                        class="fa-solid fa-circle-check text-secondary">
                     </i>
                     <span>
                     Treatment Options
                     </span>
                  </div>
               </div>
               <!-- ACTIONS -->
               <div
                  class="flex flex-wrap gap-4 mt-10">
                  <button
                     class="btn-primary">
                  Read Full Guide
                  </button>
                  <button
                     class="btn-secondary">
                  Download PDF
                  </button>
               </div>
            </div>
         </div>
      </div>
      <!-- OTHER GUIDES -->
      <div
         class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mt-12">
         <!-- GUIDE -->
         <article
            class="group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <img
               src="./assets/img/travel-health-guide.jpg"
               class="w-full h-60 object-cover">
            <div class="p-8">
               <span
                  class="text-secondary text-sm font-bold uppercase">
               Travel Health
               </span>
               <h3
                  class="text-primary text-2xl font-black mt-4">
                  Traveler's Health & Safety Guide
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Essential travel health advice,
                  vaccinations and preventive measures.
               </p>
               <a href="#"
                  class="inline-flex items-center gap-2 text-primary hover:text-secondary font-semibold mt-6">
               Read Guide
               <i
                  class="fa-solid fa-arrow-right">
               </i>
               </a>
            </div>
         </article>
         <!-- GUIDE -->
         <article
            class="group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <img
               src="./assets/img/vaccination-guide.jpg"
               class="w-full h-60 object-cover">
            <div class="p-8">
               <span
                  class="text-secondary text-sm font-bold uppercase">
               Vaccinations
               </span>
               <h3
                  class="text-primary text-2xl font-black mt-4">
                  Travel Vaccination Guide
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Recommended vaccines,
                  schedules and travel preparation.
               </p>
               <a href="#"
                  class="inline-flex items-center gap-2 text-primary hover:text-secondary font-semibold mt-6">
               Read Guide
               <i
                  class="fa-solid fa-arrow-right">
               </i>
               </a>
            </div>
         </article>
         <!-- GUIDE -->
         <article
            class="group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <img
               src="./assets/img/preventive-guide.jpg"
               class="w-full h-60 object-cover">
            <div class="p-8">
               <span
                  class="text-secondary text-sm font-bold uppercase">
               Preventive Care
               </span>
               <h3
                  class="text-primary text-2xl font-black mt-4">
                  Preventive Health Screening Guide
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Learn the importance of regular
                  health screening and early detection.
               </p>
               <a href="#"
                  class="inline-flex items-center gap-2 text-primary hover:text-secondary font-semibold mt-6">
               Read Guide
               <i
                  class="fa-solid fa-arrow-right">
               </i>
               </a>
            </div>
         </article>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- HEALTH INFORMATION LIBRARY -->
<!-- ========================================= -->
<section
   id="health-library"
   class="section-padding bg-slate-100 overflow-hidden">
   <div class="container-custom">
      <!-- HEADER -->
      <div
         class="text-center max-w-4xl mx-auto mb-16">
         <span class="section-subtitle">
         Medical Resource Center
         </span>
         <h2 class="section-title">
            Health Information Library
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            Access educational resources, health guides,
            patient information documents and medical
            publications prepared by healthcare experts.
         </p>
      </div>
      <!-- SEARCH PANEL -->
      <div
         class="bg-white border border-slate-200 p-6 lg:p-8 mb-10">
         <div
            class="grid lg:grid-cols-12 gap-5">
            <!-- SEARCH -->
            <div
               class="lg:col-span-6">
               <label
                  class="block text-primary font-semibold mb-3">
               Search Resources
               </label>
               <div
                  class="relative">
                  <input
                     type="text"
                     id="healthSearch"
                     placeholder="Search health information..."
                     class="w-full h-14 border border-slate-300 pl-14 pr-5 focus:border-secondary outline-none">
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
                  id="healthCategory"
                  class="w-full h-14 border border-slate-300 px-5">
                  <option value="">
                     All Categories
                  </option>
                  <option value="Travel Health">
                     Travel Health
                  </option>
                  <option value="Altitude Illness">
                     Altitude Illness
                  </option>
                  <option value="Vaccinations">
                     Vaccinations
                  </option>
                  <option value="Infectious Diseases">
                     Infectious Diseases
                  </option>
                  <option value="Family Health">
                     Family Health
                  </option>
               </select>
            </div>
            <!-- SORT -->
            <div
               class="lg:col-span-3">
               <label
                  class="block text-primary font-semibold mb-3">
               Sort By
               </label>
               <select
                  id="healthSort"
                  class="w-full h-14 border border-slate-300 px-5">
                  <option>
                     Latest First
                  </option>
                  <option>
                     Oldest First
                  </option>
                  <option>
                     A - Z
                  </option>
                  <option>
                     Z - A
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
            Available Resources
         </h3>
         <span
            id="resourceCount"
            class="text-slate-500">
         Showing 0 Resources
         </span>
      </div>
      <!-- LOADER -->
      <div
         id="healthLoader"
         class="hidden py-20">
         <div
            class="flex justify-center">
            <div
               class="w-16 h-16 border-4 border-primary border-t-transparent rounded-full animate-spin">
            </div>
         </div>
      </div>
      <!-- RESOURCE GRID -->
      <div
         id="healthGrid"
         class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
         <!-- JS RENDER -->
      </div>
      <!-- PAGINATION -->
      <div
         id="pagination"
         class="flex justify-center mt-16 gap-3">
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
   class="flex justify-center mt-10 gap-2"></div>
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
<div
   class="grid md:grid-cols-4 gap-6 mt-20">
   <div
      class="bg-white border border-slate-200 p-8 text-center">
      <h3
         class="text-primary text-4xl font-black">
         100+
      </h3>
      <p
         class="text-slate-600 mt-3">
         Health Resources
      </p>
   </div>
   <div
      class="bg-white border border-slate-200 p-8 text-center">
      <h3
         class="text-primary text-4xl font-black">
         Expert
      </h3>
      <p
         class="text-slate-600 mt-3">
         Reviewed Content
      </p>
   </div>
   <div
      class="bg-white border border-slate-200 p-8 text-center">
      <h3
         class="text-primary text-4xl font-black">
         Updated
      </h3>
      <p
         class="text-slate-600 mt-3">
         Medical Information
      </p>
   </div>
   <div
      class="bg-white border border-slate-200 p-8 text-center">
      <h3
         class="text-primary text-4xl font-black">
         Trusted
      </h3>
      <p
         class="text-slate-600 mt-3">
         Healthcare Guidance
      </p>
   </div>
</div>
<!-- ========================================= -->
<!-- TRAVEL HEALTH CENTER -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <!-- HEADER -->
      <div
         class="text-center max-w-4xl mx-auto mb-16">
         <span class="section-subtitle">
         Travel Medicine Expertise
         </span>
         <h2 class="section-title">
            CIWEC Travel Health Center
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            Whether you're trekking in the Himalayas,
            exploring Nepal or travelling internationally,
            our travel health resources help you prepare,
            stay healthy and travel safely.
         </p>
      </div>
      <!-- MAIN FEATURE -->
      <div
         class="bg-primary overflow-hidden">
         <div
            class="grid lg:grid-cols-12 items-center">
            <!-- CONTENT -->
            <div
               class="lg:col-span-7 p-10 lg:p-14">
               <span
                  class="text-secondary font-bold uppercase tracking-[3px]">
               Featured Travel Guide
               </span>
               <h3
                  class="text-white text-4xl font-black mt-5">
                  Essential Travel Health Preparation
               </h3>
               <p
                  class="text-white/80 mt-8 leading-8">
                  Learn everything you need to know before
                  travelling including vaccinations,
                  altitude preparation, food safety,
                  emergency planning and travel health tips.
               </p>
               <div
                  class="grid md:grid-cols-2 gap-5 mt-10">
                  <div
                     class="flex items-center gap-3">
                     <i
                        class="fa-solid fa-circle-check text-secondary">
                     </i>
                     <span class="text-white">
                     Vaccination Guidance
                     </span>
                  </div>
                  <div
                     class="flex items-center gap-3">
                     <i
                        class="fa-solid fa-circle-check text-secondary">
                     </i>
                     <span class="text-white">
                     Trekking Preparation
                     </span>
                  </div>
                  <div
                     class="flex items-center gap-3">
                     <i
                        class="fa-solid fa-circle-check text-secondary">
                     </i>
                     <span class="text-white">
                     Altitude Awareness
                     </span>
                  </div>
                  <div
                     class="flex items-center gap-3">
                     <i
                        class="fa-solid fa-circle-check text-secondary">
                     </i>
                     <span class="text-white">
                     Emergency Planning
                     </span>
                  </div>
               </div>
               <div
                  class="flex flex-wrap gap-4 mt-10">
                  <button
                     class="btn-secondary">
                  Read Guide
                  </button>
                  <button
                     class="btn-light text-white">
                  Download PDF
                  </button>
               </div>
            </div>
            <!-- IMAGE -->
            <div
               class="lg:col-span-5">
               <img
                  src="./assets/img/travel-health-center.jpg"
                  alt=""
                  class="w-full h-full min-h-[500px] object-cover">
            </div>
         </div>
      </div>
      <!-- TOPICS -->
      <div
         class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mt-16">
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-syringe text-primary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Travel Vaccinations
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Recommended vaccinations and immunization
               schedules before international travel.
            </p>
         </div>
         <!-- CARD -->
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
               Altitude Awareness
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Understand altitude sickness,
               symptoms and prevention strategies.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-utensils text-primary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Food & Water Safety
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Practical guidance for avoiding
               foodborne and waterborne illnesses.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-kit-medical text-secondary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Travel Medical Kit
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Essential medicines and health
               supplies every traveler should carry.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-person-hiking text-primary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Trekking Health
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Safety recommendations for trekking,
               hiking and adventure travel.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-plane-circle-check text-secondary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Travel Emergencies
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               What to do and where to seek help
               during a medical emergency abroad.
            </p>
         </div>
      </div>
      <!-- QUICK STATS -->
      <div
         class="grid md:grid-cols-4 gap-6 mt-20">
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               40+
            </h3>
            <p
               class="text-slate-600 mt-2">
               Years Experience
            </p>
         </div>
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               Global
            </h3>
            <p
               class="text-slate-600 mt-2">
               Travel Expertise
            </p>
         </div>
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               Trusted
            </h3>
            <p
               class="text-slate-600 mt-2">
               Medical Guidance
            </p>
         </div>
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               24/7
            </h3>
            <p
               class="text-slate-600 mt-2">
               Patient Support
            </p>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- FAQ SECTION -->
<!-- ========================================= -->
<section class="section-padding bg-slate-100 overflow-hidden">
   <div class="container-custom">
      <!-- HEADER -->
      <div
         class="text-center max-w-4xl mx-auto mb-16">
         <span class="section-subtitle">
         Frequently Asked Questions
         </span>
         <h2 class="section-title">
            Health Information FAQs
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            Find answers to common questions about travel health,
            altitude illness, vaccinations and preventive healthcare.
         </p>
      </div>
      <!-- FAQS -->
      <div
         class="max-w-5xl mx-auto space-y-4">
         <!-- FAQ 1 -->
         <div
            class="faq-item bg-white border border-slate-200">
            <button
               class="faq-btn w-full flex items-center justify-between p-6 text-left">
            <span
               class="text-primary text-lg font-bold">
            How can I prevent altitude sickness while trekking?
            </span>
            <i
               class="fa-solid fa-plus faq-icon text-secondary">
            </i>
            </button>
            <div
               class="faq-content hidden px-6 pb-6">
               <p
                  class="text-slate-600 leading-8">
                  Ascend gradually, stay hydrated,
                  avoid excessive alcohol and allow
                  adequate time for acclimatization.
                  Seek medical advice before high-altitude travel.
               </p>
            </div>
         </div>
         <!-- FAQ 2 -->
         <div
            class="faq-item bg-white border border-slate-200">
            <button
               class="faq-btn w-full flex items-center justify-between p-6 text-left">
            <span
               class="text-primary text-lg font-bold">
            What vaccinations should I consider before traveling?
            </span>
            <i
               class="fa-solid fa-plus faq-icon text-secondary">
            </i>
            </button>
            <div
               class="faq-content hidden px-6 pb-6">
               <p
                  class="text-slate-600 leading-8">
                  Vaccination recommendations depend
                  on your destination, travel duration
                  and medical history. Common travel
                  vaccines may include Hepatitis A,
                  Typhoid, Rabies and others.
               </p>
            </div>
         </div>
         <!-- FAQ 3 -->
         <div
            class="faq-item bg-white border border-slate-200">
            <button
               class="faq-btn w-full flex items-center justify-between p-6 text-left">
            <span
               class="text-primary text-lg font-bold">
            How can I avoid traveler's diarrhea?
            </span>
            <i
               class="fa-solid fa-plus faq-icon text-secondary">
            </i>
            </button>
            <div
               class="faq-content hidden px-6 pb-6">
               <p
                  class="text-slate-600 leading-8">
                  Drink safe water, eat thoroughly
                  cooked food, practice good hand
                  hygiene and avoid questionable
                  street food sources.
               </p>
            </div>
         </div>
         <!-- FAQ 4 -->
         <div
            class="faq-item bg-white border border-slate-200">
            <button
               class="faq-btn w-full flex items-center justify-between p-6 text-left">
            <span
               class="text-primary text-lg font-bold">
            When should I seek medical attention while traveling?
            </span>
            <i
               class="fa-solid fa-plus faq-icon text-secondary">
            </i>
            </button>
            <div
               class="faq-content hidden px-6 pb-6">
               <p
                  class="text-slate-600 leading-8">
                  Seek immediate medical attention if
                  you experience severe breathing
                  difficulty, chest pain, persistent
                  fever, dehydration or symptoms of
                  severe altitude illness.
               </p>
            </div>
         </div>
         <!-- FAQ 5 -->
         <div
            class="faq-item bg-white border border-slate-200">
            <button
               class="faq-btn w-full flex items-center justify-between p-6 text-left">
            <span
               class="text-primary text-lg font-bold">
            What should I include in a travel medical kit?
            </span>
            <i
               class="fa-solid fa-plus faq-icon text-secondary">
            </i>
            </button>
            <div
               class="faq-content hidden px-6 pb-6">
               <p
                  class="text-slate-600 leading-8">
                  A travel medical kit should include
                  prescription medications, pain relievers,
                  antiseptics, bandages, oral rehydration
                  salts and destination-specific medications.
               </p>
            </div>
         </div>
      </div>
      <!-- HELP BOX -->
      <div
         class="bg-primary text-center p-10 mt-16 max-w-5xl mx-auto">
         <h3
            class="text-white text-3xl font-black">
            Still Have Questions?
         </h3>
         <p
            class="text-white/80 mt-4 max-w-2xl mx-auto leading-8">
            Our healthcare professionals are available
            to provide personalized medical advice and
            travel health recommendations.
         </p>
         <a href="#"
            class="btn-secondary mt-8">
         Contact Our Team
         </a>
      </div>
   </div>
</section>
<script>
   renderCards(healthResources);
   updateResourceCount();
   const faqButtons =
       document.querySelectorAll(".faq-btn");
   
   faqButtons.forEach(button => {
   
       button.addEventListener("click", () => {
   
           const currentItem =
               button.parentElement;
   
           const currentContent =
               currentItem.querySelector(".faq-content");
   
           const currentIcon =
               currentItem.querySelector(".faq-icon");
   
           document
               .querySelectorAll(".faq-item")
               .forEach(item => {
   
                   if (item !== currentItem) {
   
                       item.querySelector(".faq-content")
                           .classList.add("hidden");
   
                       item.querySelector(".faq-icon")
                           .classList.remove("fa-minus");
   
                       item.querySelector(".faq-icon")
                           .classList.add("fa-plus");
   
                   }
   
               });
   
           currentContent.classList.toggle("hidden");
   
           if (currentContent.classList.contains("hidden")) {
   
               currentIcon.classList.remove("fa-minus");
               currentIcon.classList.add("fa-plus");
   
           } else {
   
               currentIcon.classList.remove("fa-plus");
               currentIcon.classList.add("fa-minus");
   
           }
   
       });
   
   });
</script>
<!-- ========================================= -->
<!-- EMERGENCY HEALTH RESOURCES -->
<!-- ========================================= -->
<section class="section-padding relative overflow-hidden bg-primary">
   <!-- BACKGROUND SHAPES -->
   <div
      class="absolute
      top-0
      left-0
      w-[450px]
      h-[450px]
      rounded-full
      bg-white/[0.03]
      -translate-x-1/2
      -translate-y-1/2">
   </div>
   <div
      class="absolute
      bottom-0
      right-0
      w-[500px]
      h-[500px]
      rounded-full
      bg-red-500/10
      translate-x-1/3
      translate-y-1/3">
   </div>
   <div
      class="container-custom
      relative
      z-10">
      <div>
         <!-- HEADER -->
         <div
            class="text-center max-w-4xl mx-auto">
            <span
               class="inline-flex
               items-center
               gap-2
               bg-red-500
               text-white
               px-4
               py-2
               text-sm
               font-bold
               uppercase">
            <i class="fa-solid fa-triangle-exclamation"></i>
            Emergency Health Information
            </span>
            <h2
               class="text-white
               text-3xl
               md:text-5xl
               font-black
               mt-8">
               Know When To Seek Immediate Medical Care
            </h2>
            <p
               class="text-white/80
               mt-8
               text-lg
               leading-8">
               Some symptoms require urgent medical evaluation.
               If you experience any of the warning signs below,
               seek medical attention immediately.
            </p>
         </div>
         <!-- WARNING SIGNS -->
         <div
            class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-16">
            <!-- ITEM -->
            <div
               class="bg-white/5 border border-white/10 p-8">
               <div
                  class="w-16 h-16 bg-red-500/20 flex items-center justify-center mb-6">
                  <i
                     class="fa-solid fa-lungs text-red-400 text-2xl">
                  </i>
               </div>
               <h3
                  class="text-white text-xl font-black">
                  Breathing Difficulty
               </h3>
               <p
                  class="text-white/70 mt-4 leading-7">
                  Severe shortness of breath,
                  difficulty breathing or sudden
                  respiratory distress.
               </p>
            </div>
            <!-- ITEM -->
            <div
               class="bg-white/5 border border-white/10 p-8">
               <div
                  class="w-16 h-16 bg-red-500/20 flex items-center justify-center mb-6">
                  <i
                     class="fa-solid fa-heart-pulse text-red-400 text-2xl">
                  </i>
               </div>
               <h3
                  class="text-white text-xl font-black">
                  Chest Pain
               </h3>
               <p
                  class="text-white/70 mt-4 leading-7">
                  Persistent chest pain,
                  pressure or symptoms
                  suggestive of heart problems.
               </p>
            </div>
            <!-- ITEM -->
            <div
               class="bg-white/5 border border-white/10 p-8">
               <div
                  class="w-16 h-16 bg-red-500/20 flex items-center justify-center mb-6">
                  <i
                     class="fa-solid fa-brain text-red-400 text-2xl">
                  </i>
               </div>
               <h3
                  class="text-white text-xl font-black">
                  Neurological Symptoms
               </h3>
               <p
                  class="text-white/70 mt-4 leading-7">
                  Sudden confusion, loss of
                  consciousness, seizures
                  or stroke symptoms.
               </p>
            </div>
            <!-- ITEM -->
            <div
               class="bg-white/5 border border-white/10 p-8">
               <div
                  class="w-16 h-16 bg-red-500/20 flex items-center justify-center mb-6">
                  <i
                     class="fa-solid fa-temperature-high text-red-400 text-2xl">
                  </i>
               </div>
               <h3
                  class="text-white text-xl font-black">
                  High Fever
               </h3>
               <p
                  class="text-white/70 mt-4 leading-7">
                  Persistent high fever,
                  severe infection symptoms
                  or dehydration.
               </p>
            </div>
         </div>
         <!-- ACTION PANEL -->
         <div
            class="bg-white mt-20 p-10 lg:p-14">
            <div
               class="grid lg:grid-cols-12 gap-10 items-center">
               <!-- LEFT -->
               <div
                  class="lg:col-span-8">
                  <h3
                     class="text-primary text-4xl font-black">
                     Need Immediate Medical Assistance?
                  </h3>
                  <p
                     class="text-slate-600 mt-6 leading-8">
                     If you are experiencing a medical emergency,
                     contact our emergency support team immediately
                     or visit the nearest emergency department.
                  </p>
               </div>
               <!-- RIGHT -->
               <div
                  class="lg:col-span-4">
                  <div
                     class="space-y-4">
                     <a
                        href="tel:+977XXXXXXXXX"
                        class="block bg-red-600 text-white text-center py-4 font-bold hover:bg-red-700 transition">
                     Emergency Hotline
                     </a>
                     <a
                        href="contact.php"
                        class="block bg-primary text-white text-center py-4 font-bold hover:bg-secondary transition">
                     Contact Hospital
                     </a>
                     <a
                        href="doctors.php"
                        class="block border border-primary text-primary text-center py-4 font-bold hover:bg-primary hover:text-white transition">
                     Find A Doctor
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- HEALTH EDUCATION CTA -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <div
         class="bg-primary relative overflow-hidden">
         <!-- DECORATION -->
         <div
            class="absolute top-0 right-0 w-80 h-80 bg-secondary/10 rounded-full translate-x-1/3 -translate-y-1/3">
         </div>
         <div
            class="absolute bottom-0 left-0 w-64 h-64 bg-white/5 rounded-full -translate-x-1/3 translate-y-1/3">
         </div>
         <div
            class="relative z-10 p-10 lg:p-20">
            <div
               class="max-w-5xl mx-auto text-center">
               <span
                  class="inline-block text-secondary font-bold uppercase tracking-[4px] mb-5">
               Professional Medical Guidance
               </span>
               <h2
                  class="text-white text-4xl lg:text-6xl font-black leading-tight">
                  Need Personalized Medical Advice?
               </h2>
               <p
                  class="text-white/80 text-lg leading-8 mt-8 max-w-3xl mx-auto">
                  The health information provided on this page is
                  intended for educational purposes. If you have
                  symptoms, medical concerns or require treatment,
                  our healthcare professionals are ready to help.
               </p>
               <!-- CTA BUTTONS -->
               <div
                  class="flex flex-wrap justify-center gap-5 mt-12">
                  <a
                     href="./bookappointment.php"
                     class="bg-secondary text-white px-8 py-4 font-bold hover:bg-white hover:text-primary transition">
                  Book Appointment
                  </a>
                  <a
                     href="doctors.php"
                     class="bg-white text-primary px-8 py-4 font-bold hover:bg-secondary hover:text-white transition">
                  Find A Doctor
                  </a>
                  <a
                     href="contact.php"
                     class="border border-white text-white px-8 py-4 font-bold hover:bg-white hover:text-primary transition">
                  Contact CIWEC
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- SUPPORT CARDS -->
      <div
         class="grid md:grid-cols-3 gap-8 mt-12">
         <!-- CARD -->
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <div
               class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-user-doctor text-primary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Expert Doctors
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Access experienced physicians,
               specialists and healthcare professionals.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <div
               class="w-16 h-16 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-hospital text-secondary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Comprehensive Care
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               From preventive healthcare to
               specialist consultations and treatment.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <div
               class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-headset text-primary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Patient Support
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Our team is available to assist
               with appointments and health inquiries.
            </p>
         </div>
      </div>
   </div>
</section>
<script>
   const healthResources = [{
           title: "Understanding Diabetes",
           category: "Preventive Health",
           description: "Learn about diabetes prevention and management.",
           image: "./assets/img/diabetes.jpg",
           pdf: "pdfs/diabetes.pdf"
       },
       {
           title: "Travel Health Guide",
           category: "Travel Medicine",
           description: "Essential health advice for international travelers.",
           image: "./assets/img/travel-health.jpg",
           pdf: "pdfs/travel.pdf"
       },
       {
           title: "Heart Health Tips",
           category: "Wellness",
           description: "Lifestyle changes for better cardiovascular health.",
           image: "./assets/img/heart-health.jpg",
           pdf: "pdfs/heart.pdf"
       }
   ];
   const healthSearch =
       document.getElementById('healthSearch');
   
   const categoryFilter =
       document.getElementById('categoryFilter');
   
   const resourceCount =
       document.getElementById('resourceCount');
   
   let filteredResources = [...healthResources];
   
   function filterResources() {
       const searchTerm =
           healthSearch.value.toLowerCase();
   
       const category =
           categoryFilter.value.toLowerCase();
   
       filteredResources =
           healthResources.filter(item => {
               const matchSearch =
                   item.title.toLowerCase().includes(searchTerm) ||
                   item.description.toLowerCase().includes(searchTerm);
   
               const matchCategory = !category ||
                   item.category.toLowerCase() === category;
   
               return matchSearch && matchCategory;
           });
   
       updateResourceCount();
       renderCards(filteredResources);
   }
   
   healthSearch.addEventListener(
       'input',
       filterResources
   );
   
   categoryFilter.addEventListener(
       'change',
       filterResources
   );
   
   function updateResourceCount() {
       const total =
           filteredResources.length;
   
       resourceCount.innerHTML =
           `${total} Resource${total !== 1 ? 's' : ''} Found`;
   }
   
   function renderCards(resources) {
       const container =
           document.getElementById('articlesContainer');
   
       if (resources.length === 0) {
           container.innerHTML = `
       <div class="bg-white border border-slate-200 p-16 text-center">
   
           <i class="fa-solid fa-book-medical text-6xl text-slate-300"></i>
   
           <h3 class="text-primary text-3xl font-black mt-8">
               No Resources Found
           </h3>
   
           <p class="text-slate-600 mt-4">
               Try adjusting your search or category.
           </p>
   
       </div>
       `;
   
           return;
       }
   
       container.innerHTML =
           `
   <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
   
       ${resources.map(item => `
   
           <div
               class="group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-500 overflow-hidden">
   
               <div class="relative">
   
                   <img
                       src="${item.image}"
                       alt="${item.title}"
                       class="w-full h-64 object-cover group-hover:scale-110 transition duration-700">
   
                   <div
                       class="absolute top-5 left-5 bg-primary text-white px-4 py-2 text-sm font-semibold">
   
                       ${item.category}
   
                   </div>
   
               </div>
   
               <div class="p-8">
   
                   <h3
                       class="text-primary text-2xl font-black">
   
                       ${item.title}
   
                   </h3>
   
                   <p
                       class="text-slate-600 mt-4 line-clamp-3">
   
                       ${item.description}
   
                   </p>
   
                   <button
                       onclick="openPDF('${item.pdf}')"
                       class="mt-8 text-secondary font-semibold flex items-center gap-2">
   
                       Read Resource
   
                       <i class="fa-solid fa-arrow-right"></i>
   
                   </button>
   
               </div>
   
           </div>
   
       `).join('')}
   
   </div>
   `;
   }
   
   // for knowledge chip
   document
       .querySelectorAll('.knowledge-chip')
       .forEach(chip => {
           chip.addEventListener('click', () => {
               healthSearch.value =
                   chip.innerText;
   
               filterResources();
           });
       });
   
   function openPDF(pdfUrl) {
       document
           .getElementById('pdfViewer')
           .src = pdfUrl;
   
       document
           .getElementById('pdfModal')
           .classList.remove('hidden');
   }
</script>
<!-- ========================================= -->
<!-- HEALTH SCREENING CTA -->
<!-- ========================================= -->
<section class="relative overflow-hidden hidden bg-slate-950">
   <!-- DECORATIVE SHAPES -->
   <div
      class="absolute top-0 left-0 w-[500px] h-[500px] bg-primary/20 rounded-full -translate-x-1/2 -translate-y-1/2">
   </div>
   <div
      class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-secondary/10 rounded-full translate-x-1/3 translate-y-1/3">
   </div>
   <div class="container-custom relative z-10">
      <div class="py-24 lg:py-32">
         <!-- HEADER -->
         <div
            class="max-w-5xl mx-auto text-center">
            <span
               class="inline-flex items-center gap-3 bg-white/10 text-white px-5 py-3 font-semibold">
            <i
               class="fa-solid fa-heart-pulse text-secondary">
            </i>
            Take Control Of Your Health
            </span>
            <h2
               class="text-white text-4xl lg:text-6xl font-black mt-8 leading-tight">
               Your Future Health
               Starts With One Screening
            </h2>
            <p
               class="text-white/70 text-lg leading-8 mt-8 max-w-3xl mx-auto">
               Whether you're planning a routine health check,
               executive assessment, corporate wellness program
               or preventive healthcare consultation, our team
               is ready to guide you.
            </p>
         </div>
         <!-- CTA CARDS -->
         <div
            class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-20">
            <!-- CARD -->
            <div
               class="bg-white p-8 text-center hover:-translate-y-2 transition-all duration-500">
               <div
                  class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-6">
                  <i
                     class="fa-solid fa-calendar-check text-primary text-3xl">
                  </i>
               </div>
               <h3
                  class="text-primary text-2xl font-black">
                  Book Screening
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Schedule a preventive health
                  assessment with our experts.
               </p>
               <a
                  href="./bookappointment.php"
                  class="inline-block mt-8 bg-primary text-white px-8 py-3 font-semibold hover:bg-secondary transition">
               Book Now
               </a>
            </div>
            <!-- CARD -->
            <div
               class="bg-white p-8 text-center hover:-translate-y-2 transition-all duration-500">
               <div
                  class="w-20 h-20 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
                  <i
                     class="fa-solid fa-building text-secondary text-3xl">
                  </i>
               </div>
               <h3
                  class="text-primary text-2xl font-black">
                  Corporate Packages
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Wellness programs designed
                  for organizations and teams.
               </p>
               <a
                  href="contact.php"
                  class="inline-block mt-8 bg-secondary text-white px-8 py-3 font-semibold hover:bg-primary transition">
               Learn More
               </a>
            </div>
            <!-- CARD -->
            <div
               class="bg-white p-8 text-center hover:-translate-y-2 transition-all duration-500">
               <div
                  class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-6">
                  <i
                     class="fa-solid fa-user-doctor text-primary text-3xl">
                  </i>
               </div>
               <h3
                  class="text-primary text-2xl font-black">
                  Talk To Advisor
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Discuss your health concerns
                  with our medical team.
               </p>
               <a
                  href="contact.php"
                  class="inline-block mt-8 bg-primary text-white px-8 py-3 font-semibold hover:bg-secondary transition">
               Contact Us
               </a>
            </div>
            <!-- CARD -->
            <div
               class="bg-white p-8 text-center border-t-4 border-red-500 hover:-translate-y-2 transition-all duration-500">
               <div
                  class="w-20 h-20 mx-auto bg-red-100 flex items-center justify-center mb-6">
                  <i
                     class="fa-solid fa-phone-volume text-red-600 text-3xl">
                  </i>
               </div>
               <h3
                  class="text-primary text-2xl font-black">
                  Call Hospital
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Speak directly with our
                  healthcare support team.
               </p>
               <a
                  href="tel:+977XXXXXXXXX"
                  class="inline-block mt-8 bg-red-600 text-white px-8 py-3 font-semibold hover:bg-red-700 transition">
               Call Now
               </a>
            </div>
         </div>
         <!-- TRUST BAR -->
         <div
            class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-24">
            <div class="text-center">
               <h3
                  class="text-white text-4xl font-black">
                  40+
               </h3>
               <p
                  class="text-white/70 mt-3">
                  Years Of Excellence
               </p>
            </div>
            <div class="text-center">
               <h3
                  class="text-white text-4xl font-black">
                  Trusted
               </h3>
               <p
                  class="text-white/70 mt-3">
                  Healthcare Provider
               </p>
            </div>
            <div class="text-center">
               <h3
                  class="text-white text-4xl font-black">
                  Preventive
               </h3>
               <p
                  class="text-white/70 mt-3">
                  Health Focus
               </p>
            </div>
            <div class="text-center">
               <h3
                  class="text-white text-4xl font-black">
                  Expert
               </h3>
               <p
                  class="text-white/70 mt-3">
                  Medical Guidance
               </p>
            </div>
         </div>
         <!-- FINAL MESSAGE -->
         <div
            class="max-w-4xl mx-auto text-center mt-24">
            <h3
               class="text-white text-3xl lg:text-4xl font-black">
               Prevention Is One Of The Most Powerful
               Investments You Can Make In Your Health
            </h3>
            <p
               class="text-white/70 leading-8 mt-6">
               Don't wait for symptoms to appear. Take a proactive
               approach to your wellbeing and gain the confidence
               that comes from understanding your health.
            </p>
         </div>
      </div>
   </div>
</section>
<?php include "./include/footer.php";
   ?>