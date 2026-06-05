<?php
$hero_title = "Doctors at CIWEC";
include "./include/header.php";
include "./include/herobanner.php";
?>
<style>
   .specialty-chip {
      padding: 12px 24px;
      border: 1px solid #e2e8f0;
      background: white;
      font-weight: 600;
      transition: all .3s ease;
   }

   .specialty-chip:hover {
      border-color: var(--primary);
   }

   .active-specialty {
      background: #0A3C69;
      color: white;
      border-color: #0A3C69;
   }
</style>

<!-- ========================================= -->
<!-- MEDICAL EXCELLENCE -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <div
         class="grid lg:grid-cols-12 gap-16 items-center">
         <!-- LEFT IMAGE -->
         <div
            class="lg:col-span-5">
            <div
               class="relative">
               <!-- MAIN IMAGE -->
               <img
                  src="./assets/img/medical-excellence.jpg"
                  alt="Medical Excellence"
                  class="w-full h-[700px] object-cover">
               <!-- FLOATING CARD -->
               <div
                  class="absolute bottom-8 left-8 bg-white shadow-2xl p-6 max-w-[300px]">
                  <span
                     class="text-secondary font-bold uppercase text-sm">
                     Patient-Centered Care
                  </span>
                  <h3
                     class="text-primary text-2xl font-black mt-3">
                     Compassion Meets Expertise
                  </h3>
                  <p
                     class="text-slate-600 mt-3 leading-7 text-sm">
                     Combining advanced medicine with
                     personalized care for every patient.
                  </p>
               </div>
            </div>
         </div>
         <!-- RIGHT CONTENT -->
         <div
            class="lg:col-span-7">
            <span class="section-subtitle">
               Medical Excellence
            </span>
            <h2 class="section-title">
               Healthcare Delivered By
               Trusted Medical Experts
            </h2>
            <p
               class="text-slate-600 mt-8 leading-8">
               CIWEC's team of physicians, specialists and
               healthcare professionals work collaboratively
               to provide comprehensive, evidence-based and
               patient-focused medical care.
            </p>
            <p
               class="text-slate-600 mt-6 leading-8">
               From preventive healthcare and travel medicine
               to specialist consultations and emergency care,
               our doctors are committed to achieving the best
               possible outcomes for every patient.
            </p>
            <!-- FEATURES -->
            <div
               class="grid md:grid-cols-2 gap-8 mt-12">
               <!-- ITEM -->
               <div
                  class="flex gap-4">
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
                        Highly qualified physicians
                        across multiple specialties.
                     </p>
                  </div>
               </div>
               <!-- ITEM -->
               <div
                  class="flex gap-4">
                  <div
                     class="w-14 h-14 bg-secondary/10 flex items-center justify-center flex-shrink-0">
                     <i
                        class="fa-solid fa-stethoscope text-secondary text-xl">
                     </i>
                  </div>
                  <div>
                     <h4
                        class="text-primary text-xl font-black">
                        Personalized Care
                     </h4>
                     <p
                        class="text-slate-600 mt-2">
                        Individualized treatment plans
                        tailored to patient needs.
                     </p>
                  </div>
               </div>
               <!-- ITEM -->
               <div
                  class="flex gap-4">
                  <div
                     class="w-14 h-14 bg-primary/10 flex items-center justify-center flex-shrink-0">
                     <i
                        class="fa-solid fa-laptop-medical text-primary text-xl">
                     </i>
                  </div>
                  <div>
                     <h4
                        class="text-primary text-xl font-black">
                        Modern Healthcare
                     </h4>
                     <p
                        class="text-slate-600 mt-2">
                        Supported by advanced diagnostics
                        and medical technology.
                     </p>
                  </div>
               </div>
               <!-- ITEM -->
               <div
                  class="flex gap-4">
                  <div
                     class="w-14 h-14 bg-secondary/10 flex items-center justify-center flex-shrink-0">
                     <i
                        class="fa-solid fa-earth-asia text-secondary text-xl">
                     </i>
                  </div>
                  <div>
                     <h4
                        class="text-primary text-xl font-black">
                        International Standards
                     </h4>
                     <p
                        class="text-slate-600 mt-2">
                        Trusted by both local and
                        international patients.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- STATISTICS -->
      <div
         class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-16">
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               40+
            </h3>
            <p
               class="text-slate-600 mt-3">
               Years Of Excellence
            </p>
         </div>
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               Expert
            </h3>
            <p
               class="text-slate-600 mt-3">
               Medical Team
            </p>
         </div>
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               Trusted
            </h3>
            <p
               class="text-slate-600 mt-3">
               Patient Care
            </p>
         </div>
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               Global
            </h3>
            <p
               class="text-slate-600 mt-3">
               Healthcare Standards
            </p>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- DOCTOR SEARCH CENTER -->
<!-- ========================================= -->
<section class="section-padding bg-slate-50 overflow-hidden">

   <div class="container-custom">

      <div class="max-w-5xl mx-auto text-center">

         <span class="section-subtitle">
            Medical Specialists
         </span>

         <h1 class="section-title">
            Find The Right Doctor
         </h1>

         <p class="text-slate-600 mt-6 leading-8 max-w-3xl mx-auto">
            Search our team of experienced healthcare professionals
            by name, specialty or location.
         </p>

      </div>

      <!-- SEARCH -->

      <div
         class="max-w-5xl mx-auto mt-14 bg-white border border-slate-200 p-6 lg:p-8 shadow-sm">

         <div
            class="grid lg:grid-cols-12 gap-5">

            <!-- SEARCH -->

            <div class="lg:col-span-5">

               <label
                  class="block text-primary font-semibold mb-3">

                  Search Doctor

               </label>

               <div class="relative">

                  <input
                     type="text"
                     id="doctorSearch"
                     placeholder="Search by doctor name..."
                     class="w-full h-14 border border-slate-300 pl-14 pr-5 focus:border-secondary outline-none">

                  <i
                     class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-slate-400">
                  </i>

               </div>

            </div>

            <!-- DEPARTMENT -->

            <div class="lg:col-span-3">

               <label
                  class="block text-primary font-semibold mb-3">

                  Specialty

               </label>

               <select
                  id="departmentFilter"
                  class="w-full h-14 border border-slate-300 px-4">

                  <option value="">
                     All Specialties
                  </option>

               </select>

            </div>

            <!-- LOCATION -->

            <div class="lg:col-span-2">

               <label
                  class="block text-primary font-semibold mb-3">

                  Location

               </label>

               <select
                  id="locationFilter"
                  class="w-full h-14 border border-slate-300 px-4">

                  <option value="">
                     All Locations
                  </option>

                  <option value="Kathmandu">
                     Kathmandu
                  </option>

                  <option value="Pokhara">
                     Pokhara
                  </option>

               </select>

            </div>

            <!-- BUTTON -->

            <div
               class="lg:col-span-2 flex items-end">

               <button
                  id="searchDoctorBtn"
                  class="btn-primary w-full">

                  Search

               </button>

            </div>

         </div>

      </div>

   </div>

</section>
<section class="pb-10 bg-slate-50">

   <div class="container-custom">

      <div
         class="flex flex-wrap justify-center gap-3">

         <button
            class="gallery-filter specialty-chip active"
            data-specialty="all">

            All Specialists

         </button>

         <button
            class="gallery-filter specialty-chip"
            data-specialty="Internal Medicine">

            Internal Medicine

         </button>

         <button
            class="gallery-filter specialty-chip"
            data-specialty="Travel">

            Travel Medicine

         </button>

         <button
            class="gallery-filter specialty-chip"
            data-specialty="Cardiology">

            Cardiology

         </button>

         <button
            class="gallery-filter specialty-chip"
            data-specialty="Pediatrics">

            Pediatrics

         </button>

      </div>

   </div>

</section>
<section class="pb-20 bg-white">

   <div class="container-custom">

      <div
         class="grid md:grid-cols-3 gap-8">

         <div
            class="bg-slate-50 border border-slate-200 p-10 text-center">

            <div
               class="text-primary text-5xl font-black">

               50+

            </div>

            <h3
               class="text-primary font-bold mt-4">

               Specialists

            </h3>

         </div>

         <div
            class="bg-slate-50 border border-slate-200 p-10 text-center">

            <div
               class="text-secondary text-5xl font-black">

               2

            </div>

            <h3
               class="text-primary font-bold mt-4">

               Locations

            </h3>

         </div>

         <div
            class="bg-slate-50 border border-slate-200 p-10 text-center">

            <div
               class="text-primary text-5xl font-black">

               24/7

            </div>

            <h3
               class="text-primary font-bold mt-4">

               Healthcare Support

            </h3>

         </div>

      </div>

   </div>

</section>

<!-- <section class="py-20">
    <div class="container-custom">
        <div
            id="doctorLoader"
            class="hidden py-20">

            <div class="flex flex-col items-center">

                <div
                    class="w-14 h-14
                    border-[3px]
                    border-slate-200
                    border-t-secondary
                    rounded-full
                    animate-spin">
                </div>

                <p class="text-slate-500
                        text-sm
                        font-medium
                        mt-4">
                    Loading Doctors...
                </p>
            </div>
        </div>
        <div
            id="doctorGrid"
            class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        </div>
    </div>
</section> -->
<section class="pb-24 bg-white">

   <div class="container-custom">

      <div
         class="flex flex-wrap items-center justify-between gap-4 mb-12">

         <div>

            <h2
               class="text-primary text-4xl font-black">

               Available Doctors

            </h2>

            <p
               class="text-slate-500 mt-2">

               Browse our medical professionals

            </p>

         </div>

         <div
            class="bg-primary text-white px-6 py-3 font-semibold">

            <span id="doctorCount">

               Showing All Doctors

            </span>

         </div>

      </div>

      <div id="doctorLoader"></div>

      <div
         id="doctorGrid"
         class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
      </div>

   </div>

</section>






<script>
   const doctors = [

      {
         name: "Dr. David R. Shlim",
         location: "Kathmandu",
         department: "Internal Medicine",
         qualification: "MD, Medical Director Emeritus",
         experience: "25+ Years",
         image: "./assets/doctors/david.png",

         about: "Extensive experience in travel medicine and infectious disease.",

         education: [
            "Harvard Medical School",
            "Internal Medicine Residency"
         ],

         languages: "English, Nepali",

         patients: "5000+",
         research: "12"

      },

      {
         name: "Dr. Samrat Bashyal",
         location: "Kathmandu",
         department: "General Practice",
         qualification: "MD, General Practitioner",
         experience: "10+ Years",
         image: "./assets/doctors/samrat.png",

         about: "Experienced physician focusing on primary healthcare.",

         education: [
            "Kathmandu University",
            "MD General Practice"
         ],

         languages: "English, Nepali",

         patients: "3500+",
         research: "5"
      }

   ];
</script>
<script>
   const doctorLoader =
      document.getElementById("doctorLoader");

   const doctorGrid =
      document.getElementById("doctorGrid");

   function showLoader() {

      doctorLoader.classList.remove("hidden");

      doctorGrid.classList.add("hidden");

   }

   function hideLoader() {

      doctorLoader.classList.add("hidden");

      doctorGrid.classList.remove("hidden");

   }
</script>
<script>
   function renderDoctors(data) {

      doctorGrid.innerHTML = "";

      if (data.length === 0) {

         doctorGrid.innerHTML = `
    
    <div class="col-span-full text-center py-20">
    
    <i class="fa-solid fa-user-doctor text-5xl text-slate-300 mb-4"></i>
    
    <p class="text-slate-500">
    
        No doctors found
    
    </p>
    
    </div>
    
    `;

         return;

      }

      data.forEach((doctor, index) => {

         doctorGrid.innerHTML += `
    
   <article
    class="doctor-card group bg-white border border-slate-200 hover:border-secondary hover:shadow-xl transition-all duration-300"
    data-specialty="${doctor.specialty}"
    data-location="${doctor.location}">   
    
    <div class="relative">
    
        <img
        src="${doctor.image}"
        class="w-full h-[320px] object-cover">
    
        <div class="absolute top-4 left-4">
    
            <span
            class="bg-primary text-white px-3 py-1 text-xs">
    
                ${doctor.location}
    
            </span>
    
        </div>
    
    </div>
    
    <div class="p-6">
    
        <h3
        class="text-primary text-xl font-black">
    
            ${doctor.name}
    
        </h3>
    
        <p
        class="text-secondary font-semibold mt-2">
    
            ${doctor.department}
    
        </p>
    
        <p
        class="text-slate-500 text-sm mt-3">
    
            ${doctor.qualification}
    
        </p>
    
        <div
        class="mt-4 pt-4 border-t">
    
            <span
            class="text-sm text-slate-600">
    
                ${doctor.experience}
    
            </span>
    
        </div>
    
        <button
        onclick="openDoctor(${index})"
        class="btn-primary w-full mt-5">
    
            View Profile
    
        </button>
    
    </div>
    
    </article>
    
    `;

      });

   }
</script>
<script>
   const doctorModal =
      document.getElementById("doctorModal");

   const doctorModalContent =
      document.getElementById("doctorModalContent");

   function openDoctor(index) {

      const doctor = doctors[index];

      doctorModalContent.innerHTML = `
    
    <div class="grid lg:grid-cols-2">
    
    <div>
    
        <img
        src="${doctor.image}"
        class="w-full h-full object-cover">
    
    </div>
    
    <div class="p-10">
    
        <h2
        class="text-primary text-4xl font-black">
    
            ${doctor.name}
    
        </h2>
    
        <p
        class="text-secondary font-bold mt-2">
    
            ${doctor.department}
    
        </p>
    
        <p
        class="text-slate-600 mt-4">
    
            ${doctor.qualification}
    
        </p>
    
        <div
        class="grid grid-cols-3 gap-4 mt-8">
    
            <div>
    
                <h4 class="text-2xl font-black text-primary">
    
                    ${doctor.experience}
    
                </h4>
    
                <p class="text-sm">
    
                    Experience
    
                </p>
    
            </div>
    
            <div>
    
                <h4 class="text-2xl font-black text-primary">
    
                    ${doctor.patients}
    
                </h4>
    
                <p class="text-sm">
    
                    Patients
    
                </p>
    
            </div>
    
            <div>
    
                <h4 class="text-2xl font-black text-primary">
    
                    ${doctor.research}
    
                </h4>
    
                <p class="text-sm">
    
                    Publications
    
                </p>
    
            </div>
    
        </div>
    
        <h3
        class="font-black text-primary mt-10 mb-3">
    
            About Doctor
    
        </h3>
    
        <p class="text-slate-600">
    
            ${doctor.about}
    
        </p>
    
        <h3
        class="font-black text-primary mt-8 mb-3">
    
            Education
    
        </h3>
    
        <ul class="space-y-2">
    
            ${doctor.education.map(item=>`<li>${item}</li>`).join("")}
    
        </ul>
    
        <a
        href="./bookappointment.php"
        class="btn-primary mt-8 inline-flex">
    
            Book Appointment
    
        </a>
    
    </div>
    
    </div>
    
    `;

      doctorModal.classList.remove("hidden");

      document.body.style.overflow = "hidden";

   }
</script>
<script>
   document
      .getElementById("closeDoctorModal")
      .addEventListener("click", closeDoctor);

   document
      .getElementById("doctorOverlay")
      .addEventListener("click", closeDoctor);

   function closeDoctor() {

      doctorModal.classList.add("hidden");

      document.body.style.overflow = "";

   }
</script>
<script>
   const search =
      document.getElementById("doctorSearch");

   const department =
      document.getElementById("departmentFilter");

   const location =
      document.getElementById("locationFilter");

   let doctorFilterTimeout;

   let filterTimeout;

   function filterDoctors() {

      clearTimeout(filterTimeout);

      showLoader();

      filterTimeout = setTimeout(() => {

         const keyword =
            search.value.toLowerCase();

         const dept =
            department.value;

         const loc =
            location.value;

         const filtered =
            doctors.filter(doctor => {

               const matchSearch =
                  doctor.name.toLowerCase().includes(keyword);

               const matchDepartment =
                  dept === "" ||
                  doctor.department === dept;

               const matchLocation =
                  loc === "" ||
                  doctor.location === loc;

               return (
                  matchSearch &&
                  matchDepartment &&
                  matchLocation
               );

            });

         renderDoctors(filtered);

         hideLoader();

      }, 700);

   }
</script>
<script>
   document.addEventListener("DOMContentLoaded", () => {

      showLoader();

      setTimeout(() => {

         renderDoctors(doctors);

         hideLoader();

      }, 1000);

   });
</script>

<!-- ========================================= -->
<!-- SPECIALTIES -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <!-- HEADER -->
      <div
         class="text-center max-w-4xl mx-auto mb-20">
         <span class="section-subtitle">
            Areas Of Expertise
         </span>
         <h2 class="section-title">
            Medical Specialties We Cover
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            Our multidisciplinary team provides specialized
            healthcare services across a wide range of medical
            disciplines to support comprehensive patient care.
         </p>
      </div>
      <!-- SPECIALTY GRID -->
      <div
         class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-stethoscope text-primary text-3xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Internal Medicine
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Comprehensive adult healthcare,
               diagnosis and treatment.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-heart-pulse text-secondary text-3xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Cardiology
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Heart health, cardiovascular
               assessment and prevention.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-baby text-primary text-3xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Pediatrics
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Specialized healthcare for
               infants, children and adolescents.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-earth-asia text-secondary text-3xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Travel Medicine
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Vaccinations, travel consultations
               and preventive care.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-mountain text-primary text-3xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Altitude Medicine
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               High-altitude illness prevention
               and treatment expertise.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-allergies text-secondary text-3xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Dermatology
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Diagnosis and treatment
               of skin-related conditions.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-lungs text-primary text-3xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Pulmonology
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Respiratory care and
               lung health management.
            </p>
         </div>
         <!-- CARD -->
         <div
            class="group bg-slate-100 border border-slate-200 p-8 text-center hover:border-secondary hover:-translate-y-2 transition-all duration-500">
            <div
               class="w-20 h-20 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
               <i
                  class="fa-solid fa-brain text-secondary text-3xl">
               </i>
            </div>
            <h3
               class="text-primary text-2xl font-black">
               Neurology
            </h3>
            <p
               class="text-slate-600 mt-4 leading-7">
               Specialized care for disorders
               affecting the nervous system.
            </p>
         </div>
      </div>
      <!-- FEATURE BAR -->
      <div
         class="bg-primary mt-20 overflow-hidden">
         <div
            class="grid lg:grid-cols-12 items-center">
            <div
               class="lg:col-span-8 p-10 lg:p-14">
               <span
                  class="text-secondary font-bold uppercase tracking-[3px]">
                  Comprehensive Healthcare
               </span>
               <h3
                  class="text-white text-4xl font-black mt-5">
                  Expert Care Across Multiple Specialties
               </h3>
               <p
                  class="text-white/80 mt-6 leading-8">
                  Our collaborative approach allows specialists
                  from different disciplines to work together
                  to provide the best possible outcomes.
               </p>
            </div>
            <div
               class="lg:col-span-4">
               <img
                  src="./assets/img/medical-specialties.jpg"
                  alt=""
                  class="w-full h-[300px] object-cover">
            </div>
         </div>
      </div>
      <!-- STATS -->
      <div
         class="grid md:grid-cols-4 gap-6 mt-20">
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               Multi
            </h3>
            <p
               class="text-slate-600 mt-3">
               Specialties
            </p>
         </div>
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               Expert
            </h3>
            <p
               class="text-slate-600 mt-3">
               Consultants
            </p>
         </div>
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               Trusted
            </h3>
            <p
               class="text-slate-600 mt-3">
               Medical Care
            </p>
         </div>
         <div
            class="bg-slate-100 border border-slate-200 p-8 text-center">
            <h3
               class="text-primary text-4xl font-black">
               Quality
            </h3>
            <p
               class="text-slate-600 mt-3">
               Healthcare
            </p>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- CONSULTATION JOURNEY -->
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
            Your Consultation Journey
         </h2>
         <p
            class="text-slate-600 mt-6 leading-8">
            From finding the right specialist to ongoing follow-up care,
            our process is designed to make your healthcare journey
            smooth, efficient and patient-focused.
         </p>
      </div>
      <!-- TIMELINE -->
      <div class="relative">
         <!-- LINE -->
         <div
            class="hidden xl:block absolute top-20 left-0 right-0 h-[2px] bg-slate-200">
         </div>
         <div
            class="grid md:grid-cols-2 xl:grid-cols-5 gap-10">
            <!-- STEP 1 -->
            <div class="relative text-center">
               <div
                  class="w-40 h-40 mx-auto bg-primary rounded-full flex items-center justify-center shadow-xl relative z-10">
                  <i
                     class="fa-solid fa-user-doctor text-white text-5xl">
                  </i>
               </div>
               <div class="mt-8">
                  <span
                     class="text-secondary font-bold">
                     STEP 01
                  </span>
                  <h3
                     class="text-primary text-2xl font-black mt-3">
                     Find Your Doctor
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Browse specialists and choose the
                     healthcare professional best suited
                     to your needs.
                  </p>
               </div>
            </div>
            <!-- STEP 2 -->
            <div class="relative text-center">
               <div
                  class="w-40 h-40 mx-auto bg-secondary rounded-full flex items-center justify-center shadow-xl relative z-10">
                  <i
                     class="fa-solid fa-calendar-check text-white text-5xl">
                  </i>
               </div>
               <div class="mt-8">
                  <span
                     class="text-secondary font-bold">
                     STEP 02
                  </span>
                  <h3
                     class="text-primary text-2xl font-black mt-3">
                     Book Appointment
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Schedule your consultation online,
                     by phone or directly at the hospital.
                  </p>
               </div>
            </div>
            <!-- STEP 3 -->
            <div class="relative text-center">
               <div
                  class="w-40 h-40 mx-auto bg-primary rounded-full flex items-center justify-center shadow-xl relative z-10">
                  <i
                     class="fa-solid fa-stethoscope text-white text-5xl">
                  </i>
               </div>
               <div class="mt-8">
                  <span
                     class="text-secondary font-bold">
                     STEP 03
                  </span>
                  <h3
                     class="text-primary text-2xl font-black mt-3">
                     Consultation
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Meet your doctor for evaluation,
                     discussion and personalized advice.
                  </p>
               </div>
            </div>
            <!-- STEP 4 -->
            <div class="relative text-center">
               <div
                  class="w-40 h-40 mx-auto bg-secondary rounded-full flex items-center justify-center shadow-xl relative z-10">
                  <i
                     class="fa-solid fa-notes-medical text-white text-5xl">
                  </i>
               </div>
               <div class="mt-8">
                  <span
                     class="text-secondary font-bold">
                     STEP 04
                  </span>
                  <h3
                     class="text-primary text-2xl font-black mt-3">
                     Diagnosis & Treatment
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Receive a diagnosis, treatment plan
                     and any necessary investigations.
                  </p>
               </div>
            </div>
            <!-- STEP 5 -->
            <div class="relative text-center">
               <div
                  class="w-40 h-40 mx-auto bg-primary rounded-full flex items-center justify-center shadow-xl relative z-10">
                  <i
                     class="fa-solid fa-heart-circle-check text-white text-5xl">
                  </i>
               </div>
               <div class="mt-8">
                  <span
                     class="text-secondary font-bold">
                     STEP 05
                  </span>
                  <h3
                     class="text-primary text-2xl font-black mt-3">
                     Follow-Up Care
                  </h3>
                  <p
                     class="text-slate-600 mt-4 leading-7">
                     Ongoing monitoring and support
                     to help achieve better outcomes.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- BOTTOM SECTION -->
      <div
         class="grid lg:grid-cols-12 gap-12 items-center mt-24">
         <!-- IMAGE -->
         <div
            class="lg:col-span-5">
            <img
               src="./assets/img/consultation-journey.jpg"
               alt="Consultation Journey"
               class="w-full h-[550px] object-cover">
         </div>
         <!-- CONTENT -->
         <div
            class="lg:col-span-7">
            <span
               class="text-secondary font-bold uppercase tracking-[3px]">
               Seamless Patient Experience
            </span>
            <h3
               class="text-primary text-4xl font-black mt-5">
               Healthcare Designed Around Your Needs
            </h3>
            <p
               class="text-slate-600 mt-6 leading-8">
               We believe healthcare should be accessible,
               transparent and stress-free. Our patient journey
               is designed to help you receive the right care
               at the right time with confidence.
            </p>
            <!-- BENEFITS -->
            <div
               class="grid md:grid-cols-2 gap-6 mt-10">
               <div class="flex gap-4">
                  <i
                     class="fa-solid fa-circle-check text-secondary text-xl mt-1">
                  </i>
                  <span>
                     Easy Appointment Scheduling
                  </span>
               </div>
               <div class="flex gap-4">
                  <i
                     class="fa-solid fa-circle-check text-secondary text-xl mt-1">
                  </i>
                  <span>
                     Personalized Consultation
                  </span>
               </div>
               <div class="flex gap-4">
                  <i
                     class="fa-solid fa-circle-check text-secondary text-xl mt-1">
                  </i>
                  <span>
                     Comprehensive Evaluation
                  </span>
               </div>
               <div class="flex gap-4">
                  <i
                     class="fa-solid fa-circle-check text-secondary text-xl mt-1">
                  </i>
                  <span>
                     Ongoing Follow-Up Care
                  </span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- BOOK CONSULTATION CTA -->
<!-- ========================================= -->
<section class="relative overflow-hidden bg-primary">
   <!-- BACKGROUND SHAPES -->
   <div
      class="absolute top-0 left-0 w-[500px] h-[500px] bg-white/[0.03] rounded-full -translate-x-1/2 -translate-y-1/2">
   </div>
   <div
      class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-secondary/10 rounded-full translate-x-1/3 translate-y-1/3">
   </div>
   <div
      class="container-custom relative z-10">
      <div
         class="py-24 lg:py-32">
         <!-- HEADER -->
         <div
            class="max-w-5xl mx-auto text-center">
            <span
               class="inline-flex items-center gap-3 bg-white/10 px-5 py-3 text-white font-semibold">
               <i
                  class="fa-solid fa-user-doctor text-secondary">
               </i>
               Expert Medical Care Starts Here
            </span>
            <h2
               class="text-white text-5xl lg:text-6xl font-black mt-8 leading-tight">
               Connect With The Right
               Specialist Today
            </h2>
            <p
               class="text-white/80 text-lg leading-8 mt-8 max-w-3xl mx-auto">
               Whether you need a specialist consultation,
               preventive health advice, travel medicine support,
               or follow-up care, our experienced medical team
               is ready to help.
            </p>
         </div>
         <!-- ACTION CARDS -->
         <div
            class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-20">
            <!-- BOOK -->
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
                  Book Appointment
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Schedule your consultation
                  with a trusted specialist.
               </p>
               <a
                  href="./bookappointment.php"
                  class="inline-block mt-8 bg-primary text-white px-8 py-3 font-semibold hover:bg-secondary transition">
                  Book Now
               </a>
            </div>
            <!-- FIND DOCTOR -->
            <div
               class="bg-white p-8 text-center hover:-translate-y-2 transition-all duration-500">
               <div
                  class="w-20 h-20 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
                  <i
                     class="fa-solid fa-user-doctor text-secondary text-3xl">
                  </i>
               </div>
               <h3
                  class="text-primary text-2xl font-black">
                  Find Specialist
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Browse our experienced
                  doctors and specialties.
               </p>
               <a
                  href="#doctor-search"
                  class="inline-block mt-8 bg-secondary text-white px-8 py-3 font-semibold hover:bg-primary transition">
                  Find Doctor
               </a>
            </div>
            <!-- CONTACT -->
            <div
               class="bg-white p-8 text-center hover:-translate-y-2 transition-all duration-500">
               <div
                  class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-6">
                  <i
                     class="fa-solid fa-headset text-primary text-3xl">
                  </i>
               </div>
               <h3
                  class="text-primary text-2xl font-black">
                  Contact Hospital
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Get assistance regarding
                  doctors and appointments.
               </p>
               <a
                  href="./contact.php"
                  class="inline-block mt-8 bg-primary text-white px-8 py-3 font-semibold hover:bg-secondary transition">
                  Contact Us
               </a>
            </div>
            <!-- EMERGENCY -->
            <div
               class="bg-white p-8 text-center border-t-4 border-red-500 hover:-translate-y-2 transition-all duration-500">
               <div
                  class="w-20 h-20 mx-auto bg-red-100 flex items-center justify-center mb-6">
                  <i
                     class="fa-solid fa-truck-medical text-red-600 text-3xl">
                  </i>
               </div>
               <h3
                  class="text-primary text-2xl font-black">
                  Emergency Care
               </h3>
               <p
                  class="text-slate-600 mt-4 leading-7">
                  Immediate medical assistance
                  available 24 hours a day.
               </p>
               <a
                  href="tel:+977XXXXXXXXX"
                  class="inline-block mt-8 bg-red-600 text-white px-8 py-3 font-semibold hover:bg-red-700 transition">
                  Call Now
               </a>
            </div>
         </div>
         <!-- BOTTOM STATS -->
         <div
            class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-16">
            <div class="text-center">
               <h3
                  class="text-white text-4xl font-black">
                  Expert
               </h3>
               <p
                  class="text-white/70 mt-3">
                  Medical Specialists
               </p>
            </div>
            <div class="text-center">
               <h3
                  class="text-white text-4xl font-black">
                  Multi
               </h3>
               <p
                  class="text-white/70 mt-3">
                  Specialties Covered
               </p>
            </div>
            <div class="text-center">
               <h3
                  class="text-white text-4xl font-black">
                  Trusted
               </h3>
               <p
                  class="text-white/70 mt-3">
                  Patient Care
               </p>
            </div>
            <div class="text-center">
               <h3
                  class="text-white text-4xl font-black">
                  24/7
               </h3>
               <p
                  class="text-white/70 mt-3">
                  Emergency Support
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include "./include/footer.php"; ?>