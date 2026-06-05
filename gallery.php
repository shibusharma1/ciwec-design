<?php
$hero_title = "Our Gallery";
include "./include/header.php";
include "./include/herobanner.php";
?>

<section class="section-padding bg-white">
   <div class="container-custom">
      <div
         class="max-w-4xl mx-auto text-center">
         <span class="section-subtitle">
            Explore CIWEC
         </span>
         <h2 class="section-title">
            Moments That Define Our Journey
         </h2>
         <p
            class="mt-6 text-slate-600 leading-8">
            Explore photographs and videos showcasing
            our healthcare services, medical professionals,
            events, facilities and milestones throughout
            CIWEC's history.
         </p>
      </div>
   </div>

   <div class="container-custom mt-8">
      <div
         class="flex
         flex-wrap
         justify-center
         gap-3">
         <button
            class="gallery-filter active"
            data-filter="all">
            All
         </button>
         <button
            class="gallery-filter"
            data-filter="hospital">
            Hospital
         </button>
         <button
            class="gallery-filter"
            data-filter="doctors">
            Doctors
         </button>
         <button
            class="gallery-filter"
            data-filter="events">
            Events
         </button>
         <button
            class="gallery-filter"
            data-filter="facilities">
            Facilities
         </button>
         <!-- <button
            class="gallery-filter"
            data-filter="community">
            Community Outreach
         </button> -->
         <button
            class="gallery-filter"
            data-filter="research">
            Research
         </button>
         <button
            class="gallery-filter"
            data-filter="videos">
            Videos
         </button>
      </div>
   </div>

   <div class="container-custom mt-8">
      <div
         id="galleryGrid"
         class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
         <!-- HOSPITAL -->
         <div class="gallery-item hospital">
            <img
               src="./assets/img/gallery-1.jpg"
               class="w-full h-[300px] object-cover">
         </div>
         <div class="gallery-item hospital">
            <img
               src="./assets/img/gallery-2.jpg"
               class="w-full h-[300px] object-cover">
         </div>
         <!-- DOCTORS -->
         <div class="gallery-item doctors">
            <img
               src="./assets/img/gallery-3.jpg"
               class="w-full h-[300px] object-cover">
         </div>
         <div class="gallery-item doctors">
            <img
               src="./assets/img/gallery-4.jpg"
               class="w-full h-[300px] object-cover">
         </div>
         <!-- EVENTS -->
         <div class="gallery-item events">
            <img
               src="./assets/img/gallery-5.jpg"
               class="w-full h-[300px] object-cover">
         </div>
         <div class="gallery-item events">
            <img
               src="./assets/img/gallery-6.jpg"
               class="w-full h-[300px] object-cover">
         </div>
         <!-- FACILITIES -->
         <div class="gallery-item facilities">
            <img
               src="./assets/img/gallery-7.jpg"
               class="w-full h-[300px] object-cover">
         </div>
         <div class="gallery-item facilities">
            <img
               src="./assets/img/gallery-8.jpg"
               class="w-full h-[300px] object-cover">
         </div>
      </div>
      <div
    id="gallery-empty-state"
    class="hidden">

    <div
        class="bg-slate-100 border border-slate-200 py-20 px-8 text-center">

        <div
            class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-6">

            <i
                class="fa-solid fa-images text-primary text-3xl">
            </i>

        </div>

        <h3
            class="text-primary text-2xl font-black mb-3">

            No Images Available

        </h3>

        <p
            class="text-slate-600 max-w-lg mx-auto leading-7">

            There are currently no images available in this category.
            Please explore other gallery sections or check back later.

        </p>

    </div>

</div>
   </div>
</section>
<!-- ========================================= -->
<!-- FEATURED GALLERY -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <!-- HEADING -->
      <div class="text-center mb-12">
         <span class="section-subtitle">
            Featured Moments
         </span>
         <h2 class="section-title">
            Highlights From Our Journey
         </h2>
         <p
            class="max-w-3xl mx-auto
            text-slate-600
            mt-6
            leading-8">
            Explore some of the most memorable moments,
            healthcare initiatives, events and milestones
            that define the CIWEC experience.
         </p>
      </div>
      <!-- GALLERY LAYOUT -->
      <div
         class="grid
         lg:grid-cols-12
         gap-6">
         <!-- LARGE IMAGE -->
         <div
            class="lg:col-span-7
            relative
            group
            overflow-hidden
            h-[500px]">
            <img
               src="./assets/img/gallery-featured-1.jpg"
               alt="CIWEC Hospital"
               class="w-full
               h-full
               object-cover
               transition-all
               duration-700
               group-hover:scale-110">
            <div
               class="absolute inset-0
               bg-gradient-to-t
               from-primary
               via-primary/50
               to-transparent">
            </div>
            <div
               class="absolute
               bottom-0
               left-0
               p-8">
               <span
                  class="inline-block
                  bg-secondary
                  text-white
                  px-4 py-2
                  text-sm
                  font-bold">
                  FEATURED
               </span>
               <h3
                  class="text-white
                  text-3xl
                  font-black
                  mt-5">
                  Four Decades Of Healthcare Excellence
               </h3>
               <p
                  class="text-white/80
                  mt-4
                  max-w-xl">
                  Celebrating our journey from a travel
                  medicine clinic to one of Nepal's
                  most trusted healthcare institutions.
               </p>
            </div>
         </div>
         <!-- RIGHT SIDE -->
         <div
            class="lg:col-span-5
            grid
            grid-rows-2
            gap-6">
            <!-- CARD -->
            <div
               class="relative
               group
               overflow-hidden">
               <img
                  src="./assets/img/gallery-featured-2.jpg"
                  class="w-full
                  h-full
                  object-cover
                  transition-all
                  duration-700
                  group-hover:scale-110">
               <div
                  class="absolute inset-0
                  bg-gradient-to-t
                  from-primary
                  via-primary/50
                  to-transparent">
               </div>
               <div
                  class="absolute
                  bottom-0
                  left-0
                  p-6">
                  <span
                     class="text-secondary
                     font-bold">
                     Medical Team
                  </span>
                  <h3
                     class="text-white
                     text-xl
                     font-black
                     mt-2">
                     Dedicated Healthcare Professionals
                  </h3>
               </div>
            </div>
            <!-- CARD -->
            <div
               class="relative
               group
               overflow-hidden">
               <img
                  src="./assets/img/gallery-featured-3.jpg"
                  class="w-full
                  h-full
                  object-cover
                  transition-all
                  duration-700
                  group-hover:scale-110">
               <div
                  class="absolute inset-0
                  bg-gradient-to-t
                  from-primary
                  via-primary/50
                  to-transparent">
               </div>
               <div
                  class="absolute
                  bottom-0
                  left-0
                  p-6">
                  <span
                     class="text-secondary
                     font-bold">
                     Community Outreach
                  </span>
                  <h3
                     class="text-white
                     text-xl
                     font-black
                     mt-2">
                     Serving Beyond Hospital Walls
                  </h3>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="section-padding bg-slate-100 overflow-hidden">
   <div class="container-custom">
      <!-- HEADING -->
      <div class="text-center mb-12">
         <span class="section-subtitle">
            Photo Gallery
         </span>
         <h2 class="section-title">
            Capturing Moments Of Excellence
         </h2>
         <p
            class="max-w-3xl mx-auto
            text-slate-600
            mt-6
            leading-8">
            Explore our collection of photographs showcasing
            healthcare services, medical professionals,
            patient care initiatives, facilities and community events.
         </p>
      </div>
      <!-- GALLERY GRID -->
      <div
         id="galleryGrid"
         class="columns-1
         md:columns-2
         xl:columns-4
         gap-6
         space-y-6">
         <!-- ITEM -->
         <div
            class="gallery-item
            hospital
            relative
            group
            overflow-hidden
            break-inside-avoid
            cursor-pointer">
            <img
               src="./assets/img/gallery-1.jpg"
               class="w-full
               transition-all
               duration-700
               group-hover:scale-110">
            <!-- OVERLAY -->
            <div
               class="absolute inset-0
               bg-primary/0
               group-hover:bg-primary/75
               transition-all duration-500">
            </div>
            <!-- CONTENT -->
            <div
               class="absolute
               bottom-0
               left-0
               p-6
               translate-y-8
               opacity-0
               group-hover:translate-y-0
               group-hover:opacity-100
               transition-all duration-500">
               <span
                  class="text-secondary
                  text-sm
                  font-bold">
                  Hospital
               </span>
               <h3
                  class="text-white
                  text-xl
                  font-black
                  mt-2">
                  CIWEC Main Building
               </h3>
            </div>
         </div>
         <!-- ITEM -->
         <div
            class="gallery-item
            doctors
            relative
            group
            overflow-hidden
            break-inside-avoid
            cursor-pointer">
            <img
               src="./assets/img/gallery-2.jpg"
               class="w-full
               transition-all
               duration-700
               group-hover:scale-110">
            <div
               class="absolute inset-0
               bg-primary/0
               group-hover:bg-primary/75
               transition-all duration-500">
            </div>
            <div
               class="absolute
               bottom-0
               left-0
               p-6
               translate-y-8
               opacity-0
               group-hover:translate-y-0
               group-hover:opacity-100
               transition-all duration-500">
               <span
                  class="text-secondary
                  text-sm
                  font-bold">
                  Doctors
               </span>
               <h3
                  class="text-white
                  text-xl
                  font-black
                  mt-2">
                  Specialist Consultation
               </h3>
            </div>
         </div>
         <!-- ITEM -->
         <div
            class="gallery-item
            events
            relative
            group
            overflow-hidden
            break-inside-avoid
            cursor-pointer">
            <img
               src="./assets/img/gallery-3.jpg"
               class="w-full
               transition-all
               duration-700
               group-hover:scale-110">
            <div
               class="absolute inset-0
               bg-primary/0
               group-hover:bg-primary/75
               transition-all duration-500">
            </div>
            <div
               class="absolute
               bottom-0
               left-0
               p-6
               translate-y-8
               opacity-0
               group-hover:translate-y-0
               group-hover:opacity-100
               transition-all duration-500">
               <span
                  class="text-secondary
                  text-sm
                  font-bold">
                  Event
               </span>
               <h3
                  class="text-white
                  text-xl
                  font-black
                  mt-2">
                  Medical Conference
               </h3>
            </div>
         </div>
         <!-- ITEM -->
         <div
            class="gallery-item
            community
            relative
            group
            overflow-hidden
            break-inside-avoid
            cursor-pointer">
            <img
               src="./assets/img/gallery-4.jpg"
               class="w-full
               transition-all
               duration-700
               group-hover:scale-110">
            <div
               class="absolute inset-0
               bg-primary/0
               group-hover:bg-primary/75
               transition-all duration-500">
            </div>
            <div
               class="absolute
               bottom-0
               left-0
               p-6
               translate-y-8
               opacity-0
               group-hover:translate-y-0
               group-hover:opacity-100
               transition-all duration-500">
               <span
                  class="text-secondary
                  text-sm
                  font-bold">
                  Community
               </span>
               <h3
                  class="text-white
                  text-xl
                  font-black
                  mt-2">
                  Health Awareness Program
               </h3>
            </div>
         </div>
         <!-- Add More Images -->
      </div>
   
      <!-- VIEW ALL -->
      <div class="text-center mt-16">
         <button
            id="loadMoreGallery"
            class="btn-primary">
            View More Photos
         </button>
      </div>
   </div>
</section>

<section class="section-padding bg-white overflow-hidden">
   <div class="container-custom">
      <!-- HEADING -->
      <div class="text-center mb-12">
         <span class="section-subtitle">
            Video Gallery
         </span>
         <h2 class="section-title">
            Stories In Motion
         </h2>
         <p
            class="max-w-3xl mx-auto
            text-slate-600
            mt-6
            leading-8">
            Explore videos highlighting CIWEC's healthcare
            services, community initiatives, medical expertise
            and memorable moments throughout our journey.
         </p>
      </div>
      <!-- VIDEOS -->
      <div
         class="grid
         md:grid-cols-2
         xl:grid-cols-3
         gap-8">
         <!-- VIDEO -->
         <div
            class="group
            bg-white
            border
            border-slate-200
            overflow-hidden
            hover:border-secondary
            hover:-translate-y-2
            transition-all duration-500">
            <div
               class="relative
               overflow-hidden">
               <img
                  src="./assets/img/video-1.jpg"
                  class="w-full
                  h-[260px]
                  object-cover
                  transition-all duration-700
                  group-hover:scale-110">
               <!-- OVERLAY -->
               <div
                  class="absolute inset-0
                  bg-primary/40
                  group-hover:bg-primary/60
                  transition-all">
               </div>
               <!-- PLAY -->
               <button
                  class="videoBtn
                  absolute
                  inset-0
                  flex
                  items-center
                  justify-center"
                  data-video="https://www.youtube.com/embed/VIDEO_ID">
                  <div
                     class="w-20
                     h-20
                     rounded-full
                     bg-white
                     text-primary
                     flex
                     items-center
                     justify-center
                     shadow-2xl">
                     <i
                        class="fa-solid fa-play
                        text-xl
                        ml-1">
                     </i>
                  </div>
               </button>
            </div>
            <div class="p-6">
               <span
                  class="text-secondary
                  font-bold
                  text-sm">
                  Documentary
               </span>
               <h3
                  class="text-primary
                  text-xl
                  font-black
                  mt-3">
                  The CIWEC Story
               </h3>
               <p
                  class="text-slate-600
                  mt-4
                  leading-7">
                  A journey through more than four decades
                  of healthcare excellence.
               </p>
            </div>
         </div>
         <!-- VIDEO -->
         <div
            class="group
            bg-white
            border
            border-slate-200
            overflow-hidden
            hover:border-secondary
            hover:-translate-y-2
            transition-all duration-500">
            <div
               class="relative
               overflow-hidden">
               <img
                  src="./assets/img/video-2.jpg"
                  class="w-full
                  h-[260px]
                  object-cover
                  transition-all duration-700
                  group-hover:scale-110">
               <div
                  class="absolute inset-0
                  bg-primary/40">
               </div>
               <button
                  class="videoBtn
                  absolute
                  inset-0
                  flex
                  items-center
                  justify-center"
                  data-video="https://www.youtube.com/embed/VIDEO_ID">
                  <div
                     class="w-20 h-20
                     rounded-full
                     bg-white
                     text-primary
                     flex items-center justify-center">
                     <i
                        class="fa-solid fa-play
                        text-xl ml-1">
                     </i>
                  </div>
               </button>
            </div>
            <div class="p-6">
               <span
                  class="text-secondary
                  font-bold
                  text-sm">
                  Medical Camp
               </span>
               <h3
                  class="text-primary
                  text-xl
                  font-black
                  mt-3">
                  Community Outreach Program
               </h3>
               <p
                  class="text-slate-600
                  mt-4
                  leading-7">
                  Bringing quality healthcare services
                  beyond hospital walls.
               </p>
            </div>
         </div>
         <!-- VIDEO -->
         <div
            class="group
            bg-white
            border
            border-slate-200
            overflow-hidden
            hover:border-secondary
            hover:-translate-y-2
            transition-all duration-500">
            <div
               class="relative
               overflow-hidden">
               <img
                  src="./assets/img/video-3.jpg"
                  class="w-full
                  h-[260px]
                  object-cover
                  transition-all duration-700
                  group-hover:scale-110">
               <div
                  class="absolute inset-0
                  bg-primary/40">
               </div>
               <button
                  class="videoBtn
                  absolute
                  inset-0
                  flex
                  items-center
                  justify-center"
                  data-video="https://www.youtube.com/embed/VIDEO_ID">
                  <div
                     class="w-20 h-20
                     rounded-full
                     bg-white
                     text-primary
                     flex items-center justify-center">
                     <i
                        class="fa-solid fa-play
                        text-xl ml-1">
                     </i>
                  </div>
               </button>
            </div>
            <div class="p-6">
               <span
                  class="text-secondary
                  font-bold
                  text-sm">
                  Health Education
               </span>
               <h3
                  class="text-primary
                  text-xl
                  font-black
                  mt-3">
                  Doctor Insights & Awareness
               </h3>
               <p
                  class="text-slate-600
                  mt-4
                  leading-7">
                  Expert healthcare guidance from
                  CIWEC specialists.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- VIDEO MODAL -->
<!-- ========================================= -->
<div
   id="videoModal"
   class="fixed inset-0 z-[9999] hidden">
   <div
      id="videoOverlay"
      class="absolute inset-0 bg-black/90">
   </div>
   <div
      class="relative
      flex
      items-center
      justify-center
      h-screen
      p-4">
      <button
         id="closeVideo"
         class="absolute
         top-6
         right-6
         text-white
         text-3xl
         z-10">
         <i class="fa-solid fa-xmark"></i>
      </button>
      <div
         class="w-full
         max-w-6xl
         aspect-video">
         <iframe
            id="videoFrame"
            class="w-full h-full"
            src=""
            allowfullscreen>
         </iframe>
      </div>
   </div>
</div>
<script>
   const videoBtns =
      document.querySelectorAll(".videoBtn");

   const videoModal =
      document.getElementById("videoModal");

   const videoFrame =
      document.getElementById("videoFrame");

   const closeVideo =
      document.getElementById("closeVideo");

   const videoOverlay =
      document.getElementById("videoOverlay");

   videoBtns.forEach(btn => {

      btn.addEventListener("click", () => {

         videoFrame.src =
            btn.dataset.video + "?autoplay=1";

         videoModal.classList.remove("hidden");

         document.body.style.overflow =
            "hidden";

      });

   });

   function closeVideoModal() {

      videoModal.classList.add("hidden");

      videoFrame.src = "";

      document.body.style.overflow = "";

   }

   closeVideo.addEventListener(
      "click",
      closeVideoModal
   );

   videoOverlay.addEventListener(
      "click",
      closeVideoModal
   );
</script>
<!-- ========================================= -->
<!-- MEDIA HIGHLIGHTS -->
<!-- ========================================= -->
<section class="section-padding bg-primary overflow-hidden">
   <div class="container-custom">
      <!-- HEADING -->
      <div class="text-center mb-16">
         <span
            class="inline-block
            text-secondary
            uppercase
            tracking-[3px]
            font-bold">
            Media Highlights
         </span>
         <h2
            class="text-white
            text-3xl
            md:text-5xl
            font-black
            mt-4">
            Capturing Our Journey Through The Years
         </h2>
         <p
            class="max-w-3xl mx-auto
            text-white/80
            mt-6
            leading-8">
            Every image and video reflects our commitment
            to healthcare excellence, community engagement
            and patient-centered care.
         </p>
      </div>
      <!-- STATS -->
      <div
         class="grid
         grid-cols-2
         lg:grid-cols-4
         gap-8">
         <!-- ITEM -->
         <div
            class="bg-white/5
            border
            border-white/10
            p-8
            text-center
            hover:border-secondary
            transition-all duration-500">
            <div
               class="w-16 h-16
               mx-auto
               bg-white/10
               flex
               items-center
               justify-center
               mb-5">
               <i
                  class="fa-solid fa-image
                  text-white
                  text-2xl">
               </i>
            </div>
            <h3
               class="text-white
               text-4xl
               font-black">
               500+
            </h3>
            <p
               class="text-white/80
               mt-3">
               Photographs
            </p>
         </div>
         <!-- ITEM -->
         <div
            class="bg-white/5
            border
            border-white/10
            p-8
            text-center
            hover:border-secondary
            transition-all duration-500">
            <div
               class="w-16 h-16
               mx-auto
               bg-white/10
               flex
               items-center
               justify-center
               mb-5">
               <i
                  class="fa-solid fa-video
                  text-white
                  text-2xl">
               </i>
            </div>
            <h3
               class="text-white
               text-4xl
               font-black">
               75+
            </h3>
            <p
               class="text-white/80
               mt-3">
               Videos
            </p>
         </div>
         <!-- ITEM -->
         <div
            class="bg-white/5
            border
            border-white/10
            p-8
            text-center
            hover:border-secondary
            transition-all duration-500">
            <div
               class="w-16 h-16
               mx-auto
               bg-white/10
               flex
               items-center
               justify-center
               mb-5">
               <i
                  class="fa-solid fa-calendar-days
                  text-white
                  text-2xl">
               </i>
            </div>
            <h3
               class="text-white
               text-4xl
               font-black">
               150+
            </h3>
            <p
               class="text-white/80
               mt-3">
               Events Covered
            </p>
         </div>
         <!-- ITEM -->
         <div
            class="bg-white/5
            border
            border-white/10
            p-8
            text-center
            hover:border-secondary
            transition-all duration-500">
            <div
               class="w-16 h-16
               mx-auto
               bg-white/10
               flex
               items-center
               justify-center
               mb-5">
               <i
                  class="fa-solid fa-earth-asia
                  text-white
                  text-2xl">
               </i>
            </div>
            <h3
               class="text-white
               text-4xl
               font-black">
               170+
            </h3>
            <p
               class="text-white/80
               mt-3">
               Nationalities Served
            </p>
         </div>
      </div>
      <!-- QUOTE -->
      <div
         class="mt-12
         max-w-5xl
         mx-auto
         text-center">
         <blockquote
            class="text-white
            text-xl
            md:text-2xl
            italic
            leading-10">
            "Every photograph tells a story,
            every video captures a moment,
            and together they reflect the journey
            of CIWEC Hospital."
         </blockquote>
      </div>
   </div>
</section>
<!-- ========================================= -->
<!-- EXPERIENCE CIWEC CTA -->
<!-- ========================================= -->
<section class="relative overflow-hidden bg-white">
   <!-- BACKGROUND -->
   <div
      class="absolute
      inset-0
      bg-[linear-gradient(135deg,#f8fafc_0%,#ffffff_50%,#eef4f9_100%)]">
   </div>
   <!-- SHAPE -->
   <div
      class="absolute
      top-0
      right-0
      w-[450px]
      h-[450px]
      bg-primary/[0.03]
      rounded-full
      translate-x-1/3
      -translate-y-1/3">
   </div>
   <div
      class="absolute
      bottom-0
      left-0
      w-[350px]
      h-[350px]
      bg-secondary/[0.05]
      rounded-full
      -translate-x-1/3
      translate-y-1/3">
   </div>
   <div
      class="container-custom
      relative
      z-10">
      <div
         class="py-16
         text-center
         max-w-5xl
         mx-auto">
         <!-- SUBTITLE -->
         <span
            class="inline-block
            text-secondary
            uppercase
            tracking-[3px]
            font-bold">
            Beyond The Gallery
         </span>
         <!-- TITLE -->
         <h2
            class="text-primary
            text-3xl
            md:text-4xl
            xl:text-5xl
            font-black
            leading-tight
            mt-5">
            Experience Healthcare
            With Confidence
         </h2>
         <!-- TEXT -->
         <p
            class="max-w-3xl
            mx-auto
            text-slate-600
            text-lg
            leading-8
            mt-8">
            The moments you've seen represent our commitment
            to compassionate care, medical excellence and
            patient wellbeing. Discover how CIWEC Hospital
            can support your healthcare journey.
         </p>
         <!-- BUTTONS -->
         <div
            class="flex
            flex-wrap
            justify-center
            gap-4
            mt-12">
            <a href="./bookappointment.php"
               class="btn-primary">
               Book Appointment
            </a>
            <a href="#"
               class="btn-outline">
               Find A Doctor
            </a>
         </div>
         <!-- TRUST ITEMS -->
         <div
            class="grid
            md:grid-cols-3
            gap-8
            mt-20">
            <div
               class="bg-white
               border
               border-slate-200
               p-8">
               <div
                  class="w-14 h-14
                  mx-auto
                  bg-primary/5
                  flex
                  items-center
                  justify-center
                  mb-5">
                  <i
                     class="fa-solid fa-user-doctor
                     text-primary
                     text-xl">
                  </i>
               </div>
               <h3
                  class="text-primary
                  text-xl
                  font-black">
                  Expert Specialists
               </h3>
               <p
                  class="text-slate-600
                  mt-4
                  leading-7">
                  Experienced healthcare professionals
                  dedicated to quality patient care.
               </p>
            </div>
            <div
               class="bg-white
               border
               border-slate-200
               p-8">
               <div
                  class="w-14 h-14
                  mx-auto
                  bg-primary/5
                  flex
                  items-center
                  justify-center
                  mb-5">
                  <i
                     class="fa-solid fa-heart-pulse
                     text-primary
                     text-xl">
                  </i>
               </div>
               <h3
                  class="text-primary
                  text-xl
                  font-black">
                  Patient-Centered Care
               </h3>
               <p
                  class="text-slate-600
                  mt-4
                  leading-7">
                  Personalized healthcare focused on
                  your wellbeing and comfort.
               </p>
            </div>
            <div
               class="bg-white
               border
               border-slate-200
               p-8">
               <div
                  class="w-14 h-14
                  mx-auto
                  bg-primary/5
                  flex
                  items-center
                  justify-center
                  mb-5">
                  <i
                     class="fa-solid fa-globe
                     text-primary
                     text-xl">
                  </i>
               </div>
               <h3
                  class="text-primary
                  text-xl
                  font-black">
                  International Standards
               </h3>
               <p
                  class="text-slate-600
                  mt-4
                  leading-7">
                  Trusted by travelers, expatriates
                  and patients from around the world.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<script>
   document.addEventListener("DOMContentLoaded", () => {

      const filterButtons =
         document.querySelectorAll(".gallery-filter");

      const galleryItems =
         document.querySelectorAll(".gallery-item");

      function filterGallery(filter) {

         const emptyState =
            document.getElementById("gallery-empty-state");

         let visibleCount = 0;

         galleryItems.forEach(item => {

            if (
               filter === "all" ||
               item.classList.contains(filter)
            ) {

               item.style.display = "block";
               visibleCount++;

            } else {

               item.style.display = "none";

            }

         });

         if (visibleCount === 0) {

            emptyState.classList.remove("hidden");

         } else {

            emptyState.classList.add("hidden");

         }

      }

      // Initial state
      filterGallery("all");

      filterButtons.forEach(button => {

         button.addEventListener("click", () => {

            const filter =
               button.dataset.filter;

            // Remove active class
            filterButtons.forEach(btn => {
               btn.classList.remove("active");
            });

            // Add active class
            button.classList.add("active");

            // Filter gallery
            filterGallery(filter);

         });

      });

   });
</script>
<?php include "./include/footer.php";
?>