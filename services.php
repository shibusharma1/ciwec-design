<?php
   include "./include/header.php"; ?>
<style>
   .active-filter {
   background: #0A3C69;
   border-color: #0A3C69;
   }
   .active-filter h3 {
   color: white;
   }
   .active-location {
   background: #0A3C69;
   color: white;
   }
   .location-btn {
   color: #0A3C69;
   }
</style>
<section class="relative h-[220px] md:h-[280px] overflow-hidden">
   <img src="./assets/img/researchandpublication.png"
      class="absolute inset-0 w-full h-full object-cover">
   <div class="absolute inset-0 bg-primary/80"></div>
   <div class="relative z-10 h-full flex items-center">
      <div class="container-custom">
         <h1 class="text-white text-center text-3xl md:text-5xl font-black mb-3">
            Services
         </h1>
         <div class="flex items-center justify-center gap-2 text-white/90">
            <a href="index.php" class="hover:text-secondary">
            Home
            </a>
            <i class="fa-solid fa-angle-right text-xs"></i>
            <span class="text-secondary">
            Services
            </span>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- HEALTHCARE EXCELLENCE -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <div
         class="grid lg:grid-cols-12 gap-16 items-center">
         <!-- LEFT IMAGE SECTION -->
         <div
            class="lg:col-span-6">
            <div
               class="relative">
               <!-- MAIN IMAGE -->
               <img
                  src="./assets/img/healthcare-excellence.jpg"
                  alt="Healthcare Excellence"
                  class="w-full h-[650px] object-cover">
               <!-- FLOATING CARD -->
               <div
                  class="absolute bottom-8 left-8 bg-white p-6 shadow-2xl max-w-[280px]">
                  <span
                     class="text-secondary font-bold uppercase text-sm">
                  Trusted Healthcare
                  </span>
                  <h3
                     class="text-primary text-2xl font-black mt-3">
                     40+ Years Of Medical Excellence
                  </h3>
                  <p
                     class="text-slate-600 mt-3 text-sm leading-7">
                     Delivering quality healthcare services
                     to local and international patients.
                  </p>
               </div>
            </div>
         </div>
         <!-- RIGHT CONTENT -->
         <div
            class="lg:col-span-6">
            <span class="section-subtitle">
            Healthcare Excellence
            </span>
            <h2 class="section-title">
               Comprehensive Care,
               Trusted Expertise
            </h2>
            <p
               class="text-slate-600 mt-8 leading-8">
               At CIWEC Hospital, we combine medical expertise,
               advanced technology and compassionate care to
               provide comprehensive healthcare services for
               individuals, families, travelers and communities.
            </p>
            <p
               class="text-slate-600 mt-6 leading-8">
               Our multidisciplinary team of healthcare
               professionals works together to ensure accurate
               diagnosis, effective treatment and long-term
               wellness for every patient.
            </p>
            <!-- FEATURES -->
            <div
               class="space-y-6 mt-10">
               <!-- ITEM -->
               <div
                  class="flex gap-5">
                  <div
                     class="w-14 h-14 bg-primary/10 flex items-center justify-center flex-shrink-0">
                     <i
                        class="fa-solid fa-user-doctor text-primary text-xl">
                     </i>
                  </div>
                  <div>
                     <h4
                        class="text-primary text-xl font-black">
                        Experienced Specialists
                     </h4>
                     <p
                        class="text-slate-600 mt-2">
                        Dedicated physicians and specialists
                        providing expert medical care.
                     </p>
                  </div>
               </div>
               <!-- ITEM -->
               <div
                  class="flex gap-5">
                  <div
                     class="w-14 h-14 bg-secondary/10 flex items-center justify-center flex-shrink-0">
                     <i
                        class="fa-solid fa-stethoscope text-secondary text-xl">
                     </i>
                  </div>
                  <div>
                     <h4
                        class="text-primary text-xl font-black">
                        Patient-Centered Care
                     </h4>
                     <p
                        class="text-slate-600 mt-2">
                        Personalized healthcare focused
                        on individual patient needs.
                     </p>
                  </div>
               </div>
               <!-- ITEM -->
               <div
                  class="flex gap-5">
                  <div
                     class="w-14 h-14 bg-primary/10 flex items-center justify-center flex-shrink-0">
                     <i
                        class="fa-solid fa-laptop-medical text-primary text-xl">
                     </i>
                  </div>
                  <div>
                     <h4
                        class="text-primary text-xl font-black">
                        Modern Medical Technology
                     </h4>
                     <p
                        class="text-slate-600 mt-2">
                        Advanced diagnostics and treatment
                        supported by modern healthcare technology.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- BOTTOM STATS -->
      <div
         class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-20">
         <!-- CARD -->
         <div
            class="text-center border border-slate-200 p-8">
            <h3
               class="text-primary text-5xl font-black">
               40+
            </h3>
            <p
               class="text-slate-600 mt-3">
               Years Of Service
            </p>
         </div>
         <!-- CARD -->
         <div
            class="text-center border border-slate-200 p-8">
            <h3
               class="text-primary text-5xl font-black">
               50+
            </h3>
            <p
               class="text-slate-600 mt-3">
               Healthcare Services
            </p>
         </div>
         <!-- CARD -->
         <div
            class="text-center border border-slate-200 p-8">
            <h3
               class="text-primary text-5xl font-black">
               24/7
            </h3>
            <p
               class="text-slate-600 mt-3">
               Emergency Support
            </p>
         </div>
         <!-- CARD -->
         <div
            class="text-center border border-slate-200 p-8">
            <h3
               class="text-primary text-5xl font-black">
               Global
            </h3>
            <p
               class="text-slate-600 mt-3">
               Patient Trust
            </p>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- INTERACTIVE SERVICE FINDER -->
<!-- ========================================= -->
<section
   id="serviceFinder"
   class="section-padding bg-slate-50 overflow-hidden">
   <div class="container-custom">
      <!-- HEADER -->
      <div
         class="text-center max-w-4xl mx-auto mb-16">
         <span class="section-subtitle">
         Quick Navigation
         </span>
         <h2 class="section-title">
            Find The Right Healthcare Service
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            Select a healthcare category to quickly explore
            services tailored to your medical needs.
         </p>
      </div>
      <!-- SEARCH -->
      <div
         class="max-w-3xl mx-auto mb-12">
         <div class="relative">
            <input
               type="text"
               id="serviceSearch"
               placeholder="Search services..."
               class="w-full h-16 border border-slate-300 pl-14 pr-5 text-lg focus:border-secondary outline-none bg-white">
            <i
               class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-slate-400">
            </i>
         </div>
      </div>
      <!-- CATEGORY BUTTONS -->
      <div
         class="grid md:grid-cols-3 xl:grid-cols-6 gap-5">
         <!-- ITEM -->
         <button
            class="service-filter active-filter group bg-white border border-slate-200 p-6 hover:border-secondary transition"
            data-category="all">
            <div
               class="w-14 h-14 mx-auto bg-primary/10 flex items-center justify-center mb-4">
               <i
                  class="fa-solid fa-hospital text-primary text-xl">
               </i>
            </div>
            <h3
               class="font-bold text-primary">
               All Services
            </h3>
         </button>
         <!-- ITEM -->
         <button
            class="service-filter group bg-white border border-slate-200 p-6 hover:border-secondary transition"
            data-category="emergency">
            <div
               class="w-14 h-14 mx-auto bg-red-100 flex items-center justify-center mb-4">
               <i
                  class="fa-solid fa-truck-medical text-red-600 text-xl">
               </i>
            </div>
            <h3
               class="font-bold text-primary">
               Emergency Care
            </h3>
         </button>
         <!-- ITEM -->
         <button
            class="service-filter group bg-white border border-slate-200 p-6 hover:border-secondary transition"
            data-category="travel">
            <div
               class="w-14 h-14 mx-auto bg-secondary/10 flex items-center justify-center mb-4">
               <i
                  class="fa-solid fa-earth-asia text-secondary text-xl">
               </i>
            </div>
            <h3
               class="font-bold text-primary">
               Travel Medicine
            </h3>
         </button>
         <!-- ITEM -->
         <button
            class="service-filter group bg-white border border-slate-200 p-6 hover:border-secondary transition"
            data-category="screening">
            <div
               class="w-14 h-14 mx-auto bg-primary/10 flex items-center justify-center mb-4">
               <i
                  class="fa-solid fa-heart-pulse text-primary text-xl">
               </i>
            </div>
            <h3
               class="font-bold text-primary">
               Health Screening
            </h3>
         </button>
         <!-- ITEM -->
         <button
            class="service-filter group bg-white border border-slate-200 p-6 hover:border-secondary transition"
            data-category="diagnostic">
            <div
               class="w-14 h-14 mx-auto bg-secondary/10 flex items-center justify-center mb-4">
               <i
                  class="fa-solid fa-microscope text-secondary text-xl">
               </i>
            </div>
            <h3
               class="font-bold text-primary">
               Diagnostics
            </h3>
         </button>
         <!-- ITEM -->
         <button
            class="service-filter group bg-white border border-slate-200 p-6 hover:border-secondary transition"
            data-category="specialist">
            <div
               class="w-14 h-14 mx-auto bg-primary/10 flex items-center justify-center mb-4">
               <i
                  class="fa-solid fa-user-doctor text-primary text-xl">
               </i>
            </div>
            <h3
               class="font-bold text-primary">
               Specialists
            </h3>
         </button>
      </div>
      <!-- RESULT BAR -->
      <div
         class="bg-white border border-slate-200 p-6 mt-10 flex flex-wrap justify-between items-center">
         <h3
            class="text-primary font-black text-xl">
            Available Services
         </h3>
         <span
            id="serviceResultCount"
            class="text-slate-500">
         Showing All Services
         </span>
      </div>
   </div>
</section>
<script>
   const serviceFilters =
       document.querySelectorAll(".service-filter");
   
   serviceFilters.forEach(btn => {
   
       btn.addEventListener("click", () => {
   
           serviceFilters.forEach(item =>
               item.classList.remove("active-filter")
           );
   
           btn.classList.add("active-filter");
   
           const category =
               btn.dataset.category;
   
           filterServices(category);
   
       });
   
   });
   
   function filterServices(category) {
   
       const cards =
           document.querySelectorAll(".service-card");
   
       let count = 0;
   
       cards.forEach(card => {
   
           if (
               category === "all" ||
               card.dataset.category === category
           ) {
   
               card.style.display = "block";
               count++;
   
           } else {
   
               card.style.display = "none";
   
           }
   
       });
   
       document.getElementById(
               "serviceResultCount"
           ).innerText =
           `${count} Services Found`;
   
   }
</script>
<section>
   <div
      class="service-card group bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
      data-category="travel">
      <div class="p-8">
         <div
            class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
            <i
               class="fa-solid fa-earth-asia text-secondary text-2xl">
            </i>
         </div>
         <h3
            class="text-primary text-2xl font-black">
            Travel Medicine
         </h3>
         <p
            class="text-slate-600 mt-4 leading-7">
            Comprehensive travel health consultations,
            vaccinations and preventive care.
         </p>
      </div>
   </div>
   <div
      class="service-card group bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
      data-category="emergency">
      <div class="p-8">
         <div
            class="w-16 h-16 bg-red-100 flex items-center justify-center mb-6">
            <i
               class="fa-solid fa-truck-medical text-red-600 text-2xl">
            </i>
         </div>
         <h3
            class="text-primary text-2xl font-black">
            Emergency Care
         </h3>
         <p
            class="text-slate-600 mt-4 leading-7">
            24/7 emergency services and urgent
            medical support.
         </p>
      </div>
   </div>
   <div
      class="service-card group bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
      data-category="screening">
      <div class="p-8">
         <div
            class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
            <i
               class="fa-solid fa-heart-pulse text-primary text-2xl">
            </i>
         </div>
         <h3
            class="text-primary text-2xl font-black">
            Health Screening
         </h3>
         <p
            class="text-slate-600 mt-4 leading-7">
            Preventive health examinations and
            executive screening packages.
         </p>
      </div>
   </div>
   <div
      class="service-card group bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
      data-category="diagnostic">
      <div class="p-8">
         <div
            class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
            <i
               class="fa-solid fa-microscope text-secondary text-2xl">
            </i>
         </div>
         <h3
            class="text-primary text-2xl font-black">
            Diagnostic Services
         </h3>
         <p
            class="text-slate-600 mt-4 leading-7">
            Laboratory investigations and
            advanced diagnostic testing.
         </p>
      </div>
   </div>
   <div
      class="service-card group bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
      data-category="specialist">
      <div class="p-8">
         <div
            class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
            <i
               class="fa-solid fa-user-doctor text-primary text-2xl">
            </i>
         </div>
         <h3
            class="text-primary text-2xl font-black">
            Specialist Consultation
         </h3>
         <p
            class="text-slate-600 mt-4 leading-7">
            Expert consultations from experienced
            medical specialists.
         </p>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- SERVICES BY LOCATION -->
<!-- ========================================= -->
<section
   id="servicesSection"
   class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <!-- HEADER -->
      <div
         class="text-center max-w-4xl mx-auto mb-16">
         <span class="section-subtitle">
         Healthcare Services
         </span>
         <h2 class="section-title">
            Available Services By Location
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            Explore healthcare services available at our
            Kathmandu and Pokhara facilities. Select a location
            to view services offered at that center.
         </p>
      </div>
      <!-- LOCATION TOGGLE -->
      <div
         class="flex justify-center mb-14">
         <div
            class="inline-flex bg-slate-100 p-2 rounded-full">
            <button
               id="kathmanduBtn"
               class="location-btn active-location px-8 py-4 rounded-full font-bold transition-all duration-300">
            Kathmandu Services
            </button>
            <button
               id="pokharaBtn"
               class="location-btn px-8 py-4 rounded-full font-bold transition-all duration-300">
            Pokhara Services
            </button>
         </div>
      </div>
      <!-- LOCATION INFO -->
      <div
         class="bg-primary overflow-hidden mb-12">
         <div
            class="grid lg:grid-cols-12 items-center">
            <div
               class="lg:col-span-8 p-10">
               <span
                  id="locationLabel"
                  class="text-secondary font-bold uppercase tracking-[3px]">
               Kathmandu Center
               </span>
               <h3
                  id="locationTitle"
                  class="text-white text-4xl font-black mt-4">
                  Comprehensive Healthcare Services
               </h3>
               <p
                  id="locationDescription"
                  class="text-white/80 mt-6 leading-8">
                  Access a full range of medical services,
                  specialist consultations, diagnostics,
                  preventive care and emergency support.
               </p>
            </div>
            <div
               class="lg:col-span-4">
               <img
                  id="locationImage"
                  src="./assets/img/kathmandu-hospital.jpg"
                  class="w-full h-[300px] object-cover">
            </div>
         </div>
      </div>
      <!-- KATHMANDU SERVICES -->
      <div
         id="kathmanduServices"
         class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
         <!-- CARD -->
         <div
            class="service-card bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
            data-category="travel">
            <div class="p-8">
               <div
                  class="flex justify-between items-center mb-6">
                  <span
                     class="text-secondary font-bold">
                  Travel Medicine
                  </span>
                  <i
                     class="fa-solid fa-earth-asia text-secondary text-2xl">
                  </i>
               </div>
               <h3
                  class="text-primary text-2xl font-black">
                  Travel Health Clinic
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Vaccinations, travel consultations
                  and preventive healthcare.
               </p>
               <div
                  class="mt-6 pt-6 border-t">
                  <a
                     href="#"
                     class="font-semibold text-primary hover:text-secondary">
                  Learn More →
                  </a>
               </div>
            </div>
         </div>
         <!-- CARD -->
         <div
            class="service-card bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
            data-category="screening">
            <div class="p-8">
               <div
                  class="flex justify-between items-center mb-6">
                  <span
                     class="text-secondary font-bold">
                  Preventive Care
                  </span>
                  <i
                     class="fa-solid fa-heart-pulse text-primary text-2xl">
                  </i>
               </div>
               <h3
                  class="text-primary text-2xl font-black">
                  Health Screening
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Executive checkups and wellness
                  screening programs.
               </p>
               <div
                  class="mt-6 pt-6 border-t">
                  <a
                     href="#"
                     class="font-semibold text-primary hover:text-secondary">
                  Learn More →
                  </a>
               </div>
            </div>
         </div>
         <!-- MORE CARDS HERE -->
      </div>
      <!-- POKHARA SERVICES -->
      <div
         id="pokharaServices"
         class="hidden grid md:grid-cols-2 xl:grid-cols-3 gap-8">
         <!-- Pokhara Cards -->
      </div>
   </div>
</section>
<script>
   const kathmanduBtn =
       document.getElementById("kathmanduBtn");
   
   const pokharaBtn =
       document.getElementById("pokharaBtn");
   
   const kathmanduServices =
       document.getElementById("kathmanduServices");
   
   const pokharaServices =
       document.getElementById("pokharaServices");
   
   const locationLabel =
       document.getElementById("locationLabel");
   
   const locationTitle =
       document.getElementById("locationTitle");
   
   const locationDescription =
       document.getElementById("locationDescription");
   
   const locationImage =
       document.getElementById("locationImage");
   
   kathmanduBtn.addEventListener("click", () => {
   
       kathmanduBtn.classList.add("active-location");
       pokharaBtn.classList.remove("active-location");
   
       kathmanduServices.classList.remove("hidden");
       pokharaServices.classList.add("hidden");
   
       locationLabel.innerText =
           "Kathmandu Center";
   
       locationTitle.innerText =
           "Comprehensive Healthcare Services";
   
       locationDescription.innerText =
           "Access a full range of medical services, specialist consultations, diagnostics and preventive healthcare.";
   
       locationImage.src =
           "./assets/img/kathmandu-hospital.jpg";
   
   });
   
   pokharaBtn.addEventListener("click", () => {
   
       pokharaBtn.classList.add("active-location");
       kathmanduBtn.classList.remove("active-location");
   
       pokharaServices.classList.remove("hidden");
       kathmanduServices.classList.add("hidden");
   
       locationLabel.innerText =
           "Pokhara Center";
   
       locationTitle.innerText =
           "Quality Healthcare In Pokhara";
   
       locationDescription.innerText =
           "Access essential healthcare services, consultations and diagnostics in Pokhara.";
   
       locationImage.src =
           "./assets/img/pokhara-hospital.jpg";
   
   });
</script>
<!-- ========================================= -->
<!-- SIGNATURE SERVICES -->
<!-- ========================================= -->
<section class="section-padding bg-slate-50 overflow-hidden">
   <div class="container-custom">
      <!-- HEADER -->
      <div
         class="text-center max-w-4xl mx-auto mb-20">
         <span class="section-subtitle">
         Signature Services
         </span>
         <h2 class="section-title">
            What Makes CIWEC Unique
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            Discover the specialized healthcare services
            that have established CIWEC as one of Nepal's
            most trusted healthcare institutions.
         </p>
      </div>
      <!-- SERVICE 1 -->
      <div
         class="bg-white border border-slate-200 overflow-hidden mb-12">
         <div
            class="grid lg:grid-cols-12 items-center">
            <div
               class="lg:col-span-5">
               <img
                  src="./assets/img/travel-medicine.jpg"
                  alt=""
                  class="w-full h-full min-h-[450px] object-cover">
            </div>
            <div
               class="lg:col-span-7 p-10 lg:p-14">
               <span
                  class="text-secondary font-bold uppercase tracking-[3px]">
               Internationally Recognized
               </span>
               <h3
                  class="text-primary text-4xl font-black mt-5">
                  Travel Medicine Center
               </h3>
               <p
                  class="text-slate-600 mt-6 leading-8">
                  CIWEC is internationally known for its
                  expertise in travel medicine, providing
                  vaccinations, travel consultations,
                  preventive care and destination-specific
                  health guidance.
               </p>
               <div
                  class="grid md:grid-cols-2 gap-4 mt-8">
                  <div class="flex items-center gap-3">
                     <i class="fa-solid fa-check text-secondary"></i>
                     <span>Travel Vaccinations</span>
                  </div>
                  <div class="flex items-center gap-3">
                     <i class="fa-solid fa-check text-secondary"></i>
                     <span>Travel Consultations</span>
                  </div>
                  <div class="flex items-center gap-3">
                     <i class="fa-solid fa-check text-secondary"></i>
                     <span>Preventive Guidance</span>
                  </div>
                  <div class="flex items-center gap-3">
                     <i class="fa-solid fa-check text-secondary"></i>
                     <span>International Travelers</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- SERVICE 2 -->
      <div
         class="bg-primary overflow-hidden mb-12">
         <div
            class="grid lg:grid-cols-12 items-center">
            <div
               class="lg:col-span-7 p-10 lg:p-14 order-2 lg:order-1">
               <span
                  class="text-secondary font-bold uppercase tracking-[3px]">
               Mountain Medicine Experts
               </span>
               <h3
                  class="text-white text-4xl font-black mt-5">
                  Altitude Medicine & Trekking Health
               </h3>
               <p
                  class="text-white/80 mt-6 leading-8">
                  Specialized assessment, prevention
                  and treatment of altitude-related illnesses
                  for trekkers, climbers and travelers
                  exploring high-altitude regions.
               </p>
               <div
                  class="grid md:grid-cols-2 gap-4 mt-8 text-white">
                  <div class="flex items-center gap-3">
                     <i class="fa-solid fa-check text-secondary"></i>
                     <span>Altitude Assessment</span>
                  </div>
                  <div class="flex items-center gap-3">
                     <i class="fa-solid fa-check text-secondary"></i>
                     <span>Trekking Advice</span>
                  </div>
                  <div class="flex items-center gap-3">
                     <i class="fa-solid fa-check text-secondary"></i>
                     <span>Emergency Treatment</span>
                  </div>
                  <div class="flex items-center gap-3">
                     <i class="fa-solid fa-check text-secondary"></i>
                     <span>Acclimatization Guidance</span>
                  </div>
               </div>
            </div>
            <div
               class="lg:col-span-5 order-1 lg:order-2">
               <img
                  src="./assets/img/altitude-medicine.jpg"
                  alt=""
                  class="w-full h-full min-h-[450px] object-cover">
            </div>
         </div>
      </div>
      <!-- BOTTOM SERVICES -->
      <div
         class="grid lg:grid-cols-2 gap-8">
         <!-- HEALTH SCREENING -->
         <div
            class="bg-white border border-slate-200 p-10">
            <div
               class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-heart-pulse text-primary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-3xl font-black">
               Executive Health Screening
            </h3>
            <p
               class="text-slate-600 mt-5 leading-8">
               Comprehensive preventive health evaluations
               designed for early disease detection and
               long-term wellness management.
            </p>
            <ul
               class="mt-6 space-y-3 text-slate-600">
               <li>• Executive Packages</li>
               <li>• Wellness Assessment</li>
               <li>• Preventive Screening</li>
               <li>• Specialist Consultation</li>
            </ul>
         </div>
         <!-- EMERGENCY -->
         <div
            class="bg-white border border-slate-200 p-10">
            <div
               class="w-16 h-16 bg-red-100 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-truck-medical text-red-600 text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-3xl font-black">
               Emergency & Urgent Care
            </h3>
            <p
               class="text-slate-600 mt-5 leading-8">
               Immediate medical attention and urgent
               healthcare services supported by experienced
               emergency medical professionals.
            </p>
            <ul
               class="mt-6 space-y-3 text-slate-600">
               <li>• 24/7 Emergency Support</li>
               <li>• Critical Care Services</li>
               <li>• Immediate Treatment</li>
               <li>• Rapid Diagnostics</li>
            </ul>
         </div>
      </div>
      <!-- STATS -->
      <div
         class="grid md:grid-cols-4 gap-6 mt-20">
         <div
            class="bg-white border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-5xl font-black">
               40+
            </h3>
            <p
               class="text-slate-600 mt-3">
               Years Expertise
            </p>
         </div>
         <div
            class="bg-white border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-5xl font-black">
               Global
            </h3>
            <p
               class="text-slate-600 mt-3">
               Recognition
            </p>
         </div>
         <div
            class="bg-white border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-5xl font-black">
               24/7
            </h3>
            <p
               class="text-slate-600 mt-3">
               Emergency Care
            </p>
         </div>
         <div
            class="bg-white border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-5xl font-black">
               Trusted
            </h3>
            <p
               class="text-slate-600 mt-3">
               Healthcare Partner
            </p>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- PATIENT JOURNEY -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <!-- HEADER -->
      <div
         class="text-center max-w-4xl mx-auto mb-20">
         <span class="section-subtitle">
         Patient Experience
         </span>
         <h2 class="section-title">
            Your Healthcare Journey At CIWEC
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            From your first appointment to recovery and follow-up care,
            our healthcare team is committed to supporting you at every step.
         </p>
      </div>
      <!-- TIMELINE -->
      <div class="relative">
         <!-- DESKTOP LINE -->
         <div
            class="hidden xl:block absolute top-16 left-0 right-0 h-[2px] bg-slate-200">
         </div>
         <div
            class="grid md:grid-cols-2 xl:grid-cols-5 gap-8">
            <!-- STEP 1 -->
            <div
               class="relative text-center group">
               <div
                  class="w-32 h-32 mx-auto bg-primary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                  <i
                     class="fa-solid fa-calendar-check text-4xl">
                  </i>
               </div>
               <div
                  class="mt-8">
                  <span
                     class="text-secondary font-bold">
                  STEP 01
                  </span>
                  <h3
                     class="text-primary text-2xl font-black mt-3">
                     Book Appointment
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Schedule your visit online,
                     by phone or directly at our hospital.
                  </p>
               </div>
            </div>
            <!-- STEP 2 -->
            <div
               class="relative text-center group">
               <div
                  class="w-32 h-32 mx-auto bg-secondary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                  <i
                     class="fa-solid fa-user-doctor text-4xl">
                  </i>
               </div>
               <div
                  class="mt-8">
                  <span
                     class="text-secondary font-bold">
                  STEP 02
                  </span>
                  <h3
                     class="text-primary text-2xl font-black mt-3">
                     Consultation
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Meet with experienced physicians
                     and healthcare specialists.
                  </p>
               </div>
            </div>
            <!-- STEP 3 -->
            <div
               class="relative text-center group">
               <div
                  class="w-32 h-32 mx-auto bg-primary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                  <i
                     class="fa-solid fa-microscope text-4xl">
                  </i>
               </div>
               <div
                  class="mt-8">
                  <span
                     class="text-secondary font-bold">
                  STEP 03
                  </span>
                  <h3
                     class="text-primary text-2xl font-black mt-3">
                     Diagnosis
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Advanced diagnostics and testing
                     help determine the right treatment.
                  </p>
               </div>
            </div>
            <!-- STEP 4 -->
            <div
               class="relative text-center group">
               <div
                  class="w-32 h-32 mx-auto bg-secondary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                  <i
                     class="fa-solid fa-notes-medical text-4xl">
                  </i>
               </div>
               <div
                  class="mt-8">
                  <span
                     class="text-secondary font-bold">
                  STEP 04
                  </span>
                  <h3
                     class="text-primary text-2xl font-black mt-3">
                     Treatment
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Personalized treatment plans
                     tailored to your healthcare needs.
                  </p>
               </div>
            </div>
            <!-- STEP 5 -->
            <div
               class="relative text-center group">
               <div
                  class="w-32 h-32 mx-auto bg-primary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                  <i
                     class="fa-solid fa-heart-circle-check text-4xl">
                  </i>
               </div>
               <div
                  class="mt-8">
                  <span
                     class="text-secondary font-bold">
                  STEP 05
                  </span>
                  <h3
                     class="text-primary text-2xl font-black mt-3">
                     Recovery & Follow-Up
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Ongoing care and follow-up support
                     for long-term health and wellness.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- JOURNEY BENEFITS -->
      <div
         class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-24">
         <!-- CARD -->
         <div
            class="bg-slate-50 border border-slate-200 p-8 text-center">
            <div
               class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-clock text-primary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-xl font-black">
               Efficient Care
            </h3>
            <p
               class="text-slate-600 mt-4">
               Streamlined processes for faster access to care.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="bg-slate-50 border border-slate-200 p-8 text-center">
            <div
               class="w-16 h-16 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-user-group text-secondary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-xl font-black">
               Expert Team
            </h3>
            <p
               class="text-slate-600 mt-4">
               Multidisciplinary specialists working together.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="bg-slate-50 border border-slate-200 p-8 text-center">
            <div
               class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-laptop-medical text-primary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-xl font-black">
               Modern Technology
            </h3>
            <p
               class="text-slate-600 mt-4">
               Advanced diagnostics and treatment facilities.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="bg-slate-50 border border-slate-200 p-8 text-center">
            <div
               class="w-16 h-16 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-hand-holding-heart text-secondary text-2xl">
               </i>
            </div>
            <h3
               class="text-primary text-xl font-black">
               Continuous Support
            </h3>
            <p
               class="text-slate-600 mt-4">
               Ongoing guidance throughout your care journey.
            </p>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- WHY CHOOSE CIWEC -->
<!-- ========================================= -->
<section class="section-padding bg-slate-50 overflow-hidden">
   <div class="container-custom">
      <!-- HEADER -->
      <div
         class="text-center max-w-4xl mx-auto mb-20">
         <span class="section-subtitle">
         Why Choose CIWEC
         </span>
         <h2 class="section-title">
            Trusted Healthcare For Over Four Decades
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            Combining medical expertise, international standards
            and compassionate care, CIWEC continues to be a trusted
            healthcare partner for local and international patients.
         </p>
      </div>
      <div
         class="grid lg:grid-cols-12 gap-12 items-center">
         <!-- LEFT IMAGE -->
         <div
            class="lg:col-span-5">
            <div
               class="relative">
               <img
                  src="./assets/img/why-ciwec-services.jpg"
                  alt="Why Choose CIWEC"
                  class="w-full h-[700px] object-cover">
               <!-- FLOATING STATS -->
               <div
                  class="absolute bottom-8 left-8 bg-white p-6 shadow-xl">
                  <h3
                     class="text-primary text-5xl font-black">
                     40+
                  </h3>
                  <p
                     class="text-slate-600 mt-2">
                     Years Of Excellence
                  </p>
               </div>
            </div>
         </div>
         <!-- RIGHT CONTENT -->
         <div
            class="lg:col-span-7">
            <div
               class="grid md:grid-cols-2 gap-8">
               <!-- ITEM -->
               <div
                  class="bg-white border border-slate-200 p-8 hover:border-secondary transition">
                  <div
                     class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
                     <i
                        class="fa-solid fa-user-doctor text-primary text-2xl">
                     </i>
                  </div>
                  <h3
                     class="text-primary text-2xl font-black">
                     Experienced Specialists
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Dedicated physicians and specialists
                     delivering expert medical care.
                  </p>
               </div>
               <!-- ITEM -->
               <div
                  class="bg-white border border-slate-200 p-8 hover:border-secondary transition">
                  <div
                     class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
                     <i
                        class="fa-solid fa-globe text-secondary text-2xl">
                     </i>
                  </div>
                  <h3
                     class="text-primary text-2xl font-black">
                     International Standards
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Healthcare services aligned with
                     internationally recognized practices.
                  </p>
               </div>
               <!-- ITEM -->
               <div
                  class="bg-white border border-slate-200 p-8 hover:border-secondary transition">
                  <div
                     class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
                     <i
                        class="fa-solid fa-microscope text-primary text-2xl">
                     </i>
                  </div>
                  <h3
                     class="text-primary text-2xl font-black">
                     Advanced Diagnostics
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Modern laboratory and diagnostic
                     technologies supporting accurate care.
                  </p>
               </div>
               <!-- ITEM -->
               <div
                  class="bg-white border border-slate-200 p-8 hover:border-secondary transition">
                  <div
                     class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
                     <i
                        class="fa-solid fa-earth-asia text-secondary text-2xl">
                     </i>
                  </div>
                  <h3
                     class="text-primary text-2xl font-black">
                     Travel Medicine Expertise
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Globally recognized expertise in
                     travel medicine and altitude health.
                  </p>
               </div>
               <!-- ITEM -->
               <div
                  class="bg-white border border-slate-200 p-8 hover:border-secondary transition">
                  <div
                     class="w-16 h-16 bg-red-100 flex items-center justify-center mb-6">
                     <i
                        class="fa-solid fa-truck-medical text-red-600 text-2xl">
                     </i>
                  </div>
                  <h3
                     class="text-primary text-2xl font-black">
                     24/7 Emergency Care
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Immediate access to emergency
                     healthcare services whenever needed.
                  </p>
               </div>
               <!-- ITEM -->
               <div
                  class="bg-white border border-slate-200 p-8 hover:border-secondary transition">
                  <div
                     class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
                     <i
                        class="fa-solid fa-hand-holding-heart text-primary text-2xl">
                     </i>
                  </div>
                  <h3
                     class="text-primary text-2xl font-black">
                     Patient-Centered Care
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Compassionate healthcare focused
                     on patient comfort and wellbeing.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- TRUST NUMBERS -->
      <div
         class="grid md:grid-cols-2 xl:grid-cols-4 gap-6 mt-20">
         <div
            class="bg-white border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-5xl font-black">
               40+
            </h3>
            <p
               class="text-slate-600 mt-3">
               Years Experience
            </p>
         </div>
         <div
            class="bg-white border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-5xl font-black">
               50+
            </h3>
            <p
               class="text-slate-600 mt-3">
               Medical Services
            </p>
         </div>
         <div
            class="bg-white border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-5xl font-black">
               24/7
            </h3>
            <p
               class="text-slate-600 mt-3">
               Emergency Support
            </p>
         </div>
         <div
            class="bg-white border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-5xl font-black">
               Global
            </h3>
            <p
               class="text-slate-600 mt-3">
               Patient Trust
            </p>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- EMERGENCY CARE SECTION -->
<!-- ========================================= -->
<section class="relative overflow-hidden bg-slate-950">
   <!-- BACKGROUND EFFECTS -->
   <div
      class="absolute top-0 left-0 w-[500px] h-[500px] bg-red-600/10 rounded-full -translate-x-1/2 -translate-y-1/2">
   </div>
   <div
      class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-primary/20 rounded-full translate-x-1/3 translate-y-1/3">
   </div>
   <div
      class="container-custom relative z-10">
      <div
         class="py-24 lg:py-32">
         <div
            class="grid lg:grid-cols-12 gap-16 items-center">
            <!-- LEFT CONTENT -->
            <div
               class="lg:col-span-7">
               <span
                  class="inline-flex items-center gap-3 bg-red-600 text-white px-5 py-3 font-bold uppercase">
               <i class="fa-solid fa-triangle-exclamation"></i>
               24/7 Emergency Response
               </span>
               <h2
                  class="text-white text-5xl lg:text-6xl font-black mt-8 leading-tight">
                  Immediate Medical
                  Attention When
                  Every Second Counts
               </h2>
               <p
                  class="text-white/70 text-lg leading-8 mt-8">
                  Our emergency team is available around the clock
                  to provide urgent medical care, rapid diagnosis,
                  emergency treatment and critical care services
                  for patients requiring immediate attention.
               </p>
               <!-- FEATURES -->
               <div
                  class="grid md:grid-cols-2 gap-5 mt-10">
                  <div
                     class="flex items-center gap-4">
                     <i
                        class="fa-solid fa-circle-check text-secondary text-xl">
                     </i>
                     <span class="text-white">
                     24/7 Emergency Department
                     </span>
                  </div>
                  <div
                     class="flex items-center gap-4">
                     <i
                        class="fa-solid fa-circle-check text-secondary text-xl">
                     </i>
                     <span class="text-white">
                     Experienced Emergency Physicians
                     </span>
                  </div>
                  <div
                     class="flex items-center gap-4">
                     <i
                        class="fa-solid fa-circle-check text-secondary text-xl">
                     </i>
                     <span class="text-white">
                     Rapid Diagnostic Support
                     </span>
                  </div>
                  <div
                     class="flex items-center gap-4">
                     <i
                        class="fa-solid fa-circle-check text-secondary text-xl">
                     </i>
                     <span class="text-white">
                     Critical Care Services
                     </span>
                  </div>
               </div>
               <!-- BUTTONS -->
               <div
                  class="flex flex-wrap gap-5 mt-12">
                  <a
                     href="tel:+977XXXXXXXXX"
                     class="bg-red-600 text-white px-8 py-4 font-bold hover:bg-red-700 transition">
                  Call Emergency
                  </a>
                  <a
                     href="contact.php"
                     class="border border-white text-white px-8 py-4 font-bold hover:bg-white hover:text-slate-950 transition">
                  Contact Hospital
                  </a>
               </div>
            </div>
            <!-- RIGHT -->
            <div
               class="lg:col-span-5">
               <div
                  class="bg-white p-8 lg:p-10">
                  <div
                     class="w-20 h-20 bg-red-100 flex items-center justify-center mb-8">
                     <i
                        class="fa-solid fa-truck-medical text-red-600 text-4xl">
                     </i>
                  </div>
                  <h3
                     class="text-primary text-4xl font-black">
                     Emergency Hotline
                  </h3>
                  <p
                     class="text-slate-600 mt-5 leading-8">
                     Contact our emergency department
                     immediately if urgent medical care
                     is required.
                  </p>
                  <div
                     class="border-t border-slate-200 mt-8 pt-8">
                     <div
                        class="mb-6">
                        <p
                           class="text-slate-500 text-sm uppercase">
                           Emergency Number
                        </p>
                        <h4
                           class="text-primary text-3xl font-black mt-2">
                           +977-XXXXXXXXX
                        </h4>
                     </div>
                     <div
                        class="mb-6">
                        <p
                           class="text-slate-500 text-sm uppercase">
                           Availability
                        </p>
                        <h4
                           class="text-primary text-2xl font-bold mt-2">
                           24 Hours / 7 Days
                        </h4>
                     </div>
                     <div>
                        <p
                           class="text-slate-500 text-sm uppercase">
                           Support
                        </p>
                        <h4
                           class="text-primary text-2xl font-bold mt-2">
                           Emergency Medical Team
                        </h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- WARNING SIGNS -->
         <div
            class="mt-24">
            <div
               class="text-center mb-12">
               <h3
                  class="text-white text-4xl font-black">
                  Seek Immediate Medical Attention For
               </h3>
            </div>
            <div
               class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">
               <div
                  class="bg-white/5 border border-white/10 p-8">
                  <i
                     class="fa-solid fa-heart-pulse text-red-500 text-3xl mb-5">
                  </i>
                  <h4
                     class="text-white text-xl font-bold">
                     Chest Pain
                  </h4>
                  <p
                     class="text-white/70 mt-3">
                     Persistent chest discomfort or pressure.
                  </p>
               </div>
               <div
                  class="bg-white/5 border border-white/10 p-8">
                  <i
                     class="fa-solid fa-lungs text-red-500 text-3xl mb-5">
                  </i>
                  <h4
                     class="text-white text-xl font-bold">
                     Breathing Difficulty
                  </h4>
                  <p
                     class="text-white/70 mt-3">
                     Severe shortness of breath or distress.
                  </p>
               </div>
               <div
                  class="bg-white/5 border border-white/10 p-8">
                  <i
                     class="fa-solid fa-brain text-red-500 text-3xl mb-5">
                  </i>
                  <h4
                     class="text-white text-xl font-bold">
                     Stroke Symptoms
                  </h4>
                  <p
                     class="text-white/70 mt-3">
                     Sudden weakness, confusion or speech issues.
                  </p>
               </div>
               <div
                  class="bg-white/5 border border-white/10 p-8">
                  <i
                     class="fa-solid fa-temperature-high text-red-500 text-3xl mb-5">
                  </i>
                  <h4
                     class="text-white text-xl font-bold">
                     High Fever
                  </h4>
                  <p
                     class="text-white/70 mt-3">
                     Severe infection symptoms requiring urgent care.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- FACILITIES & TECHNOLOGY -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <!-- HEADER -->
      <div
         class="text-center max-w-4xl mx-auto mb-20">
         <span class="section-subtitle">
         World-Class Infrastructure
         </span>
         <h2 class="section-title">
            Advanced Medical Technology & Facilities
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            CIWEC combines experienced healthcare professionals
            with modern medical technology and advanced facilities
            to deliver accurate diagnosis and effective treatment.
         </p>
      </div>
      <!-- FEATURED FACILITY -->
      <div
         class="grid lg:grid-cols-12 gap-0 bg-slate-50 border border-slate-200 overflow-hidden mb-12">
         <!-- IMAGE -->
         <div
            class="lg:col-span-6">
            <img
               src="./assets/img/medical-laboratory.jpg"
               alt=""
               class="w-full h-full min-h-[550px] object-cover">
         </div>
         <!-- CONTENT -->
         <div
            class="lg:col-span-6 p-10 lg:p-16 flex flex-col justify-center">
            <span
               class="text-secondary font-bold uppercase tracking-[3px]">
            Featured Facility
            </span>
            <h3
               class="text-primary text-4xl font-black mt-5">
               Advanced Diagnostic Laboratory
            </h3>
            <p
               class="text-slate-600 mt-6 leading-8">
               Our state-of-the-art laboratory provides
               comprehensive diagnostic testing with
               reliable results, supporting accurate
               diagnosis and timely treatment decisions.
            </p>
            <div
               class="grid md:grid-cols-2 gap-4 mt-8">
               <div
                  class="flex items-center gap-3">
                  <i
                     class="fa-solid fa-check text-secondary">
                  </i>
                  <span>
                  Pathology Services
                  </span>
               </div>
               <div
                  class="flex items-center gap-3">
                  <i
                     class="fa-solid fa-check text-secondary">
                  </i>
                  <span>
                  Blood Testing
                  </span>
               </div>
               <div
                  class="flex items-center gap-3">
                  <i
                     class="fa-solid fa-check text-secondary">
                  </i>
                  <span>
                  Microbiology
                  </span>
               </div>
               <div
                  class="flex items-center gap-3">
                  <i
                     class="fa-solid fa-check text-secondary">
                  </i>
                  <span>
                  Rapid Reporting
                  </span>
               </div>
            </div>
         </div>
      </div>
      <!-- FACILITY GRID -->
      <div
         class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
         <!-- CARD -->
         <div
            class="group overflow-hidden bg-white border border-slate-200 hover:border-secondary transition-all duration-500">
            <div class="overflow-hidden">
               <img
                  src="./assets/img/radiology.jpg"
                  class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
            </div>
            <div class="p-8">
               <h3
                  class="text-primary text-2xl font-black">
                  Imaging & Radiology
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Modern imaging services supporting
                  accurate diagnosis and treatment planning.
               </p>
            </div>
         </div>
         <!-- CARD -->
         <div
            class="group overflow-hidden bg-white border border-slate-200 hover:border-secondary transition-all duration-500">
            <div class="overflow-hidden">
               <img
                  src="./assets/img/emergency-unit.jpg"
                  class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
            </div>
            <div class="p-8">
               <h3
                  class="text-primary text-2xl font-black">
                  Emergency Department
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Emergency healthcare services
                  available around the clock.
               </p>
            </div>
         </div>
         <!-- CARD -->
         <div
            class="group overflow-hidden bg-white border border-slate-200 hover:border-secondary transition-all duration-500">
            <div class="overflow-hidden">
               <img
                  src="./assets/img/travel-clinic.jpg"
                  class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
            </div>
            <div class="p-8">
               <h3
                  class="text-primary text-2xl font-black">
                  Travel Health Clinic
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Specialized travel medicine,
                  vaccinations and consultations.
               </p>
            </div>
         </div>
         <!-- CARD -->
         <div
            class="group overflow-hidden bg-white border border-slate-200 hover:border-secondary transition-all duration-500">
            <div class="overflow-hidden">
               <img
                  src="./assets/img/vaccination-center.jpg"
                  class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
            </div>
            <div class="p-8">
               <h3
                  class="text-primary text-2xl font-black">
                  Vaccination Center
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Comprehensive vaccination
                  and immunization services.
               </p>
            </div>
         </div>
         <!-- CARD -->
         <div
            class="group overflow-hidden bg-white border border-slate-200 hover:border-secondary transition-all duration-500">
            <div class="overflow-hidden">
               <img
                  src="./assets/img/inpatient-care.jpg"
                  class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
            </div>
            <div class="p-8">
               <h3
                  class="text-primary text-2xl font-black">
                  Inpatient Facilities
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Comfortable patient rooms
                  designed for quality recovery.
               </p>
            </div>
         </div>
         <!-- CARD -->
         <div
            class="group overflow-hidden bg-white border border-slate-200 hover:border-secondary transition-all duration-500">
            <div class="overflow-hidden">
               <img
                  src="./assets/img/health-screening.jpg"
                  class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
            </div>
            <div class="p-8">
               <h3
                  class="text-primary text-2xl font-black">
                  Health Screening Center
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Executive and preventive
                  health screening programs.
               </p>
            </div>
         </div>
      </div>
      <!-- TECHNOLOGY STATS -->
      <div
         class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-20">
         <div
            class="text-center bg-slate-50 border border-slate-200 p-8">
            <h3
               class="text-primary text-5xl font-black">
               Modern
            </h3>
            <p
               class="text-slate-600 mt-3">
               Diagnostic Equipment
            </p>
         </div>
         <div
            class="text-center bg-slate-50 border border-slate-200 p-8">
            <h3
               class="text-primary text-5xl font-black">
               Digital
            </h3>
            <p
               class="text-slate-600 mt-3">
               Healthcare Systems
            </p>
         </div>
         <div
            class="text-center bg-slate-50 border border-slate-200 p-8">
            <h3
               class="text-primary text-5xl font-black">
               Fast
            </h3>
            <p
               class="text-slate-600 mt-3">
               Reporting Services
            </p>
         </div>
         <div
            class="text-center bg-slate-50 border border-slate-200 p-8">
            <h3
               class="text-primary text-5xl font-black">
               Quality
            </h3>
            <p
               class="text-slate-600 mt-3">
               Patient Care
            </p>
         </div>
      </div>
   </div>
</section>
<?php include "./include/footer.php";
   ?>