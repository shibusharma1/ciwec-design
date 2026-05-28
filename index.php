<?php include './include/header.php'; ?>

<!-- HERO -->
<section class="relative overflow-visible">
    <div class="relative h-[80vh] md:h-[85vh] xl:h-[90vh]">
        <!-- VIDEO -->
        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline>
            <source src="./assets/vdo/banner.mp4" type="video/mp4">
        </video>
        <!-- OVERLAY -->
        <div class="absolute inset-0 bg-black/30"></div>
    </div>
    <!-- STICKY ACTION BAR -->
    <div id="actionBar"
        class="absolute left-1/2 bottom-0 -translate-x-1/2 translate-y-1/2 w-full px-3 sm:px-4 z-20">
        <div class="max-w-5xl mx-auto bg-secondary text-white shadow-xl overflow-hidden">
            <!-- FORCE SINGLE ROW ALWAYS -->
            <div class="grid grid-cols-3 divide-x divide-white/30">
                <!-- FIND A DOCTOR -->
                <div class="flex items-center justify-center gap-2 sm:gap-3 py-3 sm:py-5 px-2 hover:bg-white/10 transition">
                    <i class="fa-solid fa-stethoscope text-lg sm:text-xl md:text-2xl"></i>
                    <span class="text-[10px] sm:text-xs md:text-sm lg:text-base font-semibold uppercase text-center leading-tight">
                        Find A Doctor
                    </span>
                </div>
                <!-- INQUIRY -->
                <div class="flex items-center justify-center gap-2 sm:gap-3 py-3 sm:py-5 px-2 hover:bg-white/10 transition">
                    <i class="fa-regular fa-clipboard text-lg sm:text-xl md:text-2xl"></i>
                    <span class="text-[10px] sm:text-xs md:text-sm lg:text-base font-semibold uppercase text-center leading-tight">
                        Inquiry
                    </span>
                </div>
                <!-- APPOINTMENT -->
                <div class="flex items-center justify-center gap-2 sm:gap-3 py-3 sm:py-5 px-2 hover:bg-white/10 transition">
                    <i class="fa-regular fa-calendar-check text-lg sm:text-xl md:text-2xl"></i>
                    <span class="text-[10px] sm:text-xs md:text-sm lg:text-base font-semibold uppercase text-center leading-tight">
                        Appointment
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Sticky bar at the bottom 0 -->
<div id="stickyBar"
    class="fixed bottom-0 left-0 w-full bg-secondary text-white shadow-xl z-50 
   translate-y-full opacity-0 pointer-events-none
   transition-all duration-500 ease-in-out border-t-2 border-[var(--color-primary)]">
    <div class="max-w-5xl mx-auto grid grid-cols-3 text-center divide-x divide-white/30">
        <!-- FIND A DOCTOR -->
        <div class="py-3 sm:py-4 px-2 sm:px-0 flex flex-col sm:flex-row justify-center items-center gap-1 sm:gap-3 hover:bg-white/10 transition">
            <i class="fa-solid fa-stethoscope text-lg sm:text-2xl md:text-3xl"></i>
            <span class="text-[10px] sm:text-xs md:text-sm font-semibold uppercase leading-tight">
                Find A Doctor
            </span>
        </div>
        <!-- INQUIRY -->
        <div class="py-3 sm:py-4 px-2 sm:px-0 flex flex-col sm:flex-row justify-center items-center gap-1 sm:gap-3 hover:bg-white/10 transition">
            <i class="fa-regular fa-clipboard text-lg sm:text-2xl md:text-3xl"></i>
            <span class="text-[10px] sm:text-xs md:text-sm font-semibold uppercase leading-tight">
                Inquiry
            </span>
        </div>
        <!-- APPOINTMENT -->
        <div class="py-3 sm:py-4 px-2 sm:px-0 flex flex-col sm:flex-row justify-center items-center gap-1 sm:gap-3 hover:bg-white/10 transition">
            <i class="fa-regular fa-calendar-check text-lg sm:text-2xl md:text-3xl"></i>
            <span class="text-[10px] sm:text-xs md:text-sm font-semibold uppercase leading-tight">
                Appointment
            </span>
        </div>
    </div>
</div>

<!-- ABOUT -->
<section class="relative bg-primary section-padding overflow-visible">
    <div class="container-custom text-center">
        <h2 class="text-white text-xl md:text-2xl xl:text-[32px] font-black mb-4">
            About CIWEC Hospital
        </h2>
        <div class="flex items-center max-w-[480px] mx-auto mt-5 mb-8">
            <div class="flex-1 h-[3px] bg-white"></div>
            <div class="w-20 md:w-24 h-[12px] rounded-full bg-[#2f8bcf] mx-3 shadow-[0_0_15px_rgba(47,139,207,.35)]">
            </div>
            <div class="flex-1 h-[3px] bg-white"></div>
        </div>
        <p class="max-w-5xl text-[1rem] leading-[2rem] mx-auto text-white font-light font-normal">
            CIWEC Hospital and Travel Medicine Center is one of the most reputable destination travel medicine centers in the world. It was established as a clinic in 1982 to meet the need for a western standard clinic to treat foreign diplomats and aid workers in Nepal. During its 40 plus years of journey, it has expanded its services from a small clinic set up in 1982, to a full service hospital providing both outpatient and inpatient care.&nbsp; In September 2014, CIWEC opened a fully equipped hospital in Pokhara. CIWEC is widely known around the world as ”CIWEC Clinic” and ”CIWEC Clinic Travel Medic[...]
        </p>

        <div class="mt-8">
            <a href="#"
                class="btn-light text-sm">
                Read More
            </a>
        </div>
    </div>
</section>
<!-- =========================
SPECIALITY CENTERS
========================= -->
<section class="speciality-section section-padding">
    <div class="container-custom">
        <!-- TOP -->
        <div class="flex items-end justify-between mb-8 md:mb-10">
            <!-- TITLE -->
            <div>
                <span class="block text-secondary uppercase tracking-[3px] text-[30px] md:text-base font-semibold mb-2">
                    Our Specialty
                </span>
                <h2 class="text-primary text-[32px] md:text-[36px] font-semibold leading-none">
                    Centers
                </h2>
            </div>
            <!-- SEE ALL -->
            <a href="#"
                class="hidden md:flex items-center gap-3 text-primary text-sm uppercase tracking-[2px] hover:text-secondary transition-all duration-300">
                See All
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>
    </div>
    <!-- SLIDER -->
    <div class="specialitySwiper pl-4 md:pl-10 xl:pl-[80px]">
        <div class="swiper-wrapper">
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#"
                    class="speciality-card group">
                    <!-- IMAGE -->
                    <img src="./assets/img/speciality/img1.jpg"
                        class="speciality-image">
                    <!-- OVERLAY -->
                    <div class="speciality-overlay"></div>
                    <!-- CONTENT -->
                    <div class="speciality-content">
                        <h3 class="speciality-title">
                            Cardio-Neuro-Vascular
                            Intervention Center
                        </h3>
                        <p class="speciality-desc">
                            Innovative treatment for strokes and cardiovascular disease with modern medical care.
                        </p>
                        <span class="speciality-link">
                            See Details
                        </span>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#"
                    class="speciality-card group">
                    <img src="./assets/img/speciality/img11.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <h3 class="speciality-title">
                            Pediatric Orthopedic Clinic
                        </h3>
                        <p class="speciality-desc">
                            Specialized orthopedic treatment and rehabilitation care for children.
                        </p>
                        <span class="speciality-link">
                            See Details
                        </span>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#"
                    class="speciality-card group">
                    <!-- IMAGE -->
                    <img src="./assets/img/speciality/img2.png"
                        class="speciality-image">
                    <!-- OVERLAY -->
                    <div class="speciality-overlay"></div>
                    <!-- CONTENT -->
                    <div class="speciality-content">
                        <h3 class="speciality-title">
                            Cardio-Neuro-Vascular
                            Intervention Center
                        </h3>
                        <p class="speciality-desc">
                            Innovative treatment for strokes and cardiovascular disease with modern medical care.
                        </p>
                        <span class="speciality-link">
                            See Details
                        </span>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#"
                    class="speciality-card group">
                    <img src="./assets/img/speciality/img3.png"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <h3 class="speciality-title">
                            Pediatric Rehabilitation Center
                        </h3>
                        <p class="speciality-desc">
                            Rehabilitation programs designed specifically for children and young patients.
                        </p>
                        <span class="speciality-link">
                            See Details
                        </span>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#"
                    class="speciality-card group">
                    <img src="./assets/img/speciality/img10.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <h3 class="speciality-title">
                            Scoliosis Center
                        </h3>
                        <p class="speciality-desc">
                            Advanced scoliosis diagnosis and treatment for both children and adults.
                        </p>
                        <span class="speciality-link">
                            See Details
                        </span>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#"
                    class="speciality-card group">
                    <img src="./assets/img/speciality/img4.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <h3 class="speciality-title">
                            Pediatric Orthopedic Clinic
                        </h3>
                        <p class="speciality-desc">
                            Specialized orthopedic treatment and rehabilitation care for children.
                        </p>
                        <span class="speciality-link">
                            See Details
                        </span>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#"
                    class="speciality-card group">
                    <img src="./assets/img/speciality/img5.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <h3 class="speciality-title">
                            Hematology Center
                        </h3>
                        <p class="speciality-desc">
                            Blood disorder diagnosis and comprehensive hematology treatments.
                        </p>
                        <span class="speciality-link">
                            See Details
                        </span>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#"
                    class="speciality-card group">
                    <img src="./assets/img/speciality/img6.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <h3 class="speciality-title">
                            Hematology Center
                        </h3>
                        <p class="speciality-desc">
                            Blood disorder diagnosis and comprehensive hematology treatments.
                        </p>
                        <span class="speciality-link">
                            See Details
                        </span>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#"
                    class="speciality-card group">
                    <img src="./assets/img/speciality/img7.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <h3 class="speciality-title">
                            Hematology Center
                        </h3>
                        <p class="speciality-desc">
                            Blood disorder diagnosis and comprehensive hematology treatments.
                        </p>
                        <span class="speciality-link">
                            See Details
                        </span>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#"
                    class="speciality-card group">
                    <img src="./assets/img/speciality/img8.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <h3 class="speciality-title">
                            Hematology Center
                        </h3>
                        <p class="speciality-desc">
                            Blood disorder diagnosis and comprehensive hematology treatments.
                        </p>
                        <span class="speciality-link">
                            See Details
                        </span>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#"
                    class="speciality-card group">
                    <img src="./assets/img/speciality/img9.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <h3 class="speciality-title">
                            Hematology Center
                        </h3>
                        <p class="speciality-desc">
                            Blood disorder diagnosis and comprehensive hematology treatments.
                        </p>
                        <span class="speciality-link">
                            See Details
                        </span>
                    </div>
                </a>
            </div>

        </div>
        <!-- PAGINATION -->
        <div class="speciality-pagination mt-10 flex justify-center"></div>
    </div>
</section>
<!-- WHY CIWEC -->
<section class="relative section-padding bg-[#f3f6f9]">
    <div class="container-custom">
        <!-- Heading -->
        <div class="text-center mb-20">
            <h2 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-3">
                Why CIWEC
            </h2>
            <p class="max-w-5xl text-[1rem] leading-[2rem] mx-auto font-light font-normal">
                • 42 years of experience • Friendly and quiet environment • 24/7 availability of seasoned post graduate doctors/nurses • Doctors and senior nurses certified by ISTM in Travel Health • Best nurse to patient ratio • Short waiting time for appointments, diagnosis and reports • End to end handling of insurance cases
            </p>
        </div>
        <!-- Grid -->
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-14">
            <!-- Item -->
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-8 text-center sm:text-left">
                <img src="./assets/img/ISO-Certified-company-logo.webp"
                    class="w-24 h-24 object-contain">
                <div>
                    <h3 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-2">
                        ISO Certified
                    </h3>
                    <p class="max-w-5xl text-[1rem] leading-[2rem] mx-auto font-light font-normal">
                        Both branches of CIWEC hospital are ISO certified
                    </p>
                </div>
            </div>
            <!-- Item -->
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-8 text-center sm:text-left">
                <img src="./assets/img/consulting.webp"
                    class="w-24 h-24 rounded-full object-cover">
                <div>
                    <h3 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-2">
                        80+
                    </h3>
                    <p class="max-w-5xl text-[1rem] leading-[2rem] mx-auto font-light font-normal">
                        Consultants in various specialists
                    </p>
                </div>
            </div>
            <!-- Item -->
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-8 text-center sm:text-left">
                <img src="./assets/img/42-years.webp"
                    class="w-24 h-24 rounded-full object-cover">
                <div>
                    <h3 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-2">
                        42 years+
                    </h3>
                    <p class="max-w-5xl text-[1rem] leading-[2rem] mx-auto font-light font-normal">
                        experience in dealing with travel related illnesses
                    </p>
                </div>
            </div>
            <!-- Item -->
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-8 text-center sm:text-left">
                <img src="./assets/img/170.webp"
                    class="w-24 h-24 rounded-full object-cover">
                <div>
                    <h3 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-2">
                        170 +
                    </h3>
                    <p class="max-w-5xl text-[1rem] leading-[2rem] mx-auto font-light font-normal">
                        Nationalities as patients
                    </p>
                </div>
            </div>
            <!-- Item -->
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-8 text-center sm:text-left">
                <img src="./assets/img/3000.webp"
                    class="w-24 h-24 rounded-full object-cover">
                <div>
                    <h3 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-2">
                        30,000+
                    </h3>
                    <p class="max-w-5xl text-[1rem] leading-[2rem] mx-auto font-light font-normal">
                        Insurance cases closed
                    </p>
                </div>
            </div>
            <!-- Item -->
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-8 text-center sm:text-left">
                <img src="./assets/img/circular.webp"
                    class="w-24 h-24 rounded-full object-cover">
                <div>
                    <h3 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-2">
                        35+
                    </h3>
                    <p class="max-w-5xl text-[1rem] leading-[2rem] mx-auto font-light font-normal">
                        Years research in travel related illnesses
                    </p>
                </div>
            </div>
            <!-- Item -->
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-8 text-center sm:text-left">
                <img src="./assets/img/ismt_certified.webp"
                    class="w-24 h-24 rounded-full object-cover">
                <div>
                    <h3 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-2">
                        ISTM Certified
                    </h3>
                    <p class="max-w-5xl text-[1rem] leading-[2rem] mx-auto font-light font-normal">
                        Our doctors and nurses are certified in travel health by the International Society of Travel Medicine
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Circular design of why ciwec -->
<section class="relative overflow-hidden bg-[#f3f6f9] py-6 md:py-8 xl:py-10 border-4 border-t-primary">
    <!-- BACKGROUND -->
    <div class="absolute inset-0 opacity-[0.03]"
        style="background-image:url('https://www.transparenttextures.com/patterns/wavy-lines.png');">
    </div>
    <div class="container-custom relative z-10">
        <!-- =========================================
         HEADING
         ========================================= -->
        <div class="text-center max-w-5xl mx-auto mb-10 lg:mb-14">
            <h2 class="text-primary text-[24px] md:text-[32px] xl:text-[38px] font-black mb-3">
                Why CIWEC
            </h2>
            <p class="text-gray-600 text-sm md:text-[15px] leading-relaxed md:leading-7 font-normal">
                • 42 years of experience • Friendly and quiet environment • 24/7 availability of seasoned post graduate doctors/nurses • Doctors and senior nurses certified by ISTM in Travel Health • Best nurse to patient ratio • Short waiting time for appointments, diagnosis and reports • End to end handling of insurance cases
            </p>
        </div>
        <!-- =========================================
         DESKTOP / LARGE SCREEN
         ========================================= -->
        <div
            class="hidden xl:flex items-center justify-center relative max-w-[1200px] mx-auto min-h-[650px]">
            <!-- OUTER CIRCLE -->
            <div
                class="absolute w-[560px] h-[560px] rounded-full border border-dashed border-gray-500">
            </div>
            <!-- CENTER -->
            <div
                class="relative w-[300px] h-[300px] rounded-full overflow-hidden border-[8px] border-white shadow-[0_18px_50px_rgba(0,0,0,.10)] z-20 bg-white flex items-center justify-center mb-8">
                <div class="text-center px-8">
                    <h3 class="text-primary text-[34px] font-black leading-tight mb-4">
                        Why CIWEC
                    </h3>
                    <p class="text-gray-500 text-sm leading-6">
                        Trusted travel healthcare with global expertise.
                    </p>
                </div>
            </div>
            <!-- =========================================
            TOP
            ========================================= -->
            <div class="absolute top-[-7%] left-1/2 -translate-x-1/2 text-center max-w-[190px] ">
                <h3 class="text-primary text-[18px] font-black leading-[1.3] mb-2">

                    ISO Certified
                </h3>
                <p class="text-gray-600 text-[13px] leading-5">
                    Both branches of CIWEC hospital are ISO certified
                </p>
                <img src="./assets/img/ISO-Certified-company-logo.webp"
                    class="w-14 h-14 object-contain mx-auto mb-3">
            </div>
            <!-- RIGHT TOP -->
            <div class="absolute right-[16%] top-[22%] max-w-[200px]">
                <div class="flex items-start gap-3">
                    <img src="./assets/img/consulting.webp"
                        class="w-14 h-14 rounded-full object-cover shrink-0">
                    <div>
                        <h3 class="text-primary text-[18px] font-black leading-[1.3] mb-1">
                            80+
                        </h3>
                        <p class="text-gray-600 text-[13px] leading-5">
                            Consultants in various specialists
                        </p>
                    </div>
                </div>
            </div>
            <!-- RIGHT CENTER -->
            <div class="absolute right-[13%] bottom-[28%] max-w-[220px]">
                <div class="flex items-start gap-3">
                    <img src="./assets/img/3000.webp"
                        class="w-14 h-14 rounded-full object-cover shrink-0">
                    <div>
                        <h3 class="text-primary text-[18px] font-black leading-[1.3] mb-1">
                            30,000+
                        </h3>
                        <p class="text-gray-600 text-[13px] leading-5">
                            Insurance cases closed successfully
                        </p>
                    </div>
                </div>
            </div>
            <!-- RIGHT BOTTOM -->
            <div class="absolute right-[26%] bottom-[3%] max-w-[210px]">
                <div class="flex items-start gap-3">
                    <img src="./assets/img/circular.webp"
                        class="w-14 h-14 rounded-full object-cover shrink-0">
                    <div>
                        <h3 class="text-primary text-[18px] font-black leading-[1.3] mb-1">
                            35+
                        </h3>
                        <p class="text-gray-600 text-[13px] leading-5">
                            Years research in travel related illnesses
                        </p>
                    </div>
                </div>
            </div>
            <!-- LEFT TOP -->
            <div class="absolute left-[14%] top-[22%] max-w-[220px] text-right">
                <div class="flex items-start gap-3 flex-row-reverse">
                    <img src="./assets/img/42-years.webp"
                        class="w-14 h-14 rounded-full object-cover shrink-0">
                    <div>
                        <h3 class="text-primary text-[18px] font-black leading-[1.3] mb-1">
                            42 Years+
                        </h3>
                        <p class="text-gray-600 text-[13px] leading-5">
                            Experience in travel related illnesses
                        </p>
                    </div>
                </div>
            </div>
            <!-- LEFT CENTER -->
            <div class="absolute left-[14%] bottom-[28%] max-w-[220px] text-right">
                <div class="flex items-start gap-3 flex-row-reverse">
                    <img src="./assets/img/170.webp"
                        class="w-14 h-14 rounded-full object-cover shrink-0">
                    <div>
                        <h3 class="text-primary text-[18px] font-black leading-[1.3] mb-1">
                            170+
                        </h3>
                        <p class="text-gray-600 text-[13px] leading-5">
                            Nationalities as patients
                        </p>
                    </div>
                </div>
            </div>
            <!-- LEFT BOTTOM -->
            <div class="absolute left-[24%] bottom-[3%] max-w-[230px] text-right">
                <div class="flex items-start gap-3 flex-row-reverse">
                    <img src="./assets/img/ismt_certified.webp"
                        class="w-14 h-14 rounded-full object-cover shrink-0">
                    <div>
                        <h3 class="text-primary text-[18px] font-black leading-[1.3] mb-1">
                            ISTM Certified
                        </h3>
                        <p class="text-gray-600 text-[13px] leading-5">
                            Certified in travel health by ISTM
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- =========================================
         TABLET VIEW
         ========================================= -->
        <div class="hidden md:grid xl:hidden grid-cols-2 gap-5">
            <!-- ITEM -->
            <div
                class="bg-white rounded-2xl p-5 shadow-sm flex items-start gap-4 hover:shadow-md transition-all duration-300">
                <img src="./assets/img/ISO-Certified-company-logo.webp"
                    class="w-14 h-14 object-contain shrink-0">
                <div>
                    <h3 class="text-primary text-lg font-black mb-1">
                        ISO Certified
                    </h3>
                    <p class="text-gray-600 text-sm leading-6">
                        Both branches of CIWEC hospital are ISO certified
                    </p>
                </div>
            </div>
            <!-- ITEM -->
            <div
                class="bg-white rounded-2xl p-5 shadow-sm flex items-start gap-4 hover:shadow-md transition-all duration-300">
                <img src="./assets/img/consulting.webp"
                    class="w-14 h-14 rounded-full object-cover shrink-0">
                <div>
                    <h3 class="text-primary text-lg font-black mb-1">
                        80+
                    </h3>
                    <p class="text-gray-600 text-sm leading-6">
                        Consultants in various specialists
                    </p>
                </div>
            </div>
            <!-- ITEM -->
            <div
                class="bg-white rounded-2xl p-5 shadow-sm flex items-start gap-4 hover:shadow-md transition-all duration-300">
                <img src="./assets/img/42-years.webp"
                    class="w-14 h-14 rounded-full object-cover shrink-0">
                <div>
                    <h3 class="text-primary text-lg font-black mb-1">
                        42 Years+
                    </h3>
                    <p class="text-gray-600 text-sm leading-6">
                        Experience in travel related illnesses
                    </p>
                </div>
            </div>
            <!-- ITEM -->
            <div
                class="bg-white rounded-2xl p-5 shadow-sm flex items-start gap-4 hover:shadow-md transition-all duration-300">
                <img src="./assets/img/170.webp"
                    class="w-14 h-14 rounded-full object-cover shrink-0">
                <div>
                    <h3 class="text-primary text-lg font-black mb-1">
                        170+
                    </h3>
                    <p class="text-gray-600 text-sm leading-6">
                        Nationalities as patients
                    </p>
                </div>
            </div>
            <!-- ITEM -->
            <div
                class="bg-white rounded-2xl p-5 shadow-sm flex items-start gap-4 hover:shadow-md transition-all duration-300">
                <img src="./assets/img/3000.webp"
                    class="w-14 h-14 rounded-full object-cover shrink-0">
                <div>
                    <h3 class="text-primary text-lg font-black mb-1">
                        30,000+
                    </h3>
                    <p class="text-gray-600 text-sm leading-6">
                        Insurance cases closed
                    </p>
                </div>
            </div>
            <!-- ITEM -->
            <div
                class="bg-white rounded-2xl p-5 shadow-sm flex items-start gap-4 hover:shadow-md transition-all duration-300">
                <img src="./assets/img/circular.webp"
                    class="w-14 h-14 rounded-full object-cover shrink-0">
                <div>
                    <h3 class="text-primary text-lg font-black mb-1">
                        35+
                    </h3>
                    <p class="text-gray-600 text-sm leading-6">
                        Years research in travel related illnesses
                    </p>
                </div>
            </div>
        </div>
        <!-- =========================================
         MOBILE VIEW
         ========================================= -->
        <div class="md:hidden space-y-4">
            <!-- CARD -->
            <div
                class="bg-white rounded-2xl p-4 shadow-sm flex items-center gap-4">
                <img src="./assets/img/ISO-Certified-company-logo.webp"
                    class="w-12 h-12 object-contain shrink-0">
                <div>
                    <h3 class="text-primary text-[17px] font-black mb-1">
                        ISO Certified
                    </h3>
                    <p class="text-gray-600 text-[13px] leading-5">
                        Both branches of CIWEC hospital are ISO certified
                    </p>
                </div>
            </div>
            <!-- CARD -->
            <div
                class="bg-white rounded-2xl p-4 shadow-sm flex items-center gap-4">
                <img src="./assets/img/consulting.webp"
                    class="w-12 h-12 rounded-full object-cover shrink-0">
                <div>
                    <h3 class="text-primary text-[17px] font-black mb-1">
                        80+
                    </h3>
                    <p class="text-gray-600 text-[13px] leading-5">
                        Consultants in various specialists
                    </p>
                </div>
            </div>
            <!-- CARD -->
            <div
                class="bg-white rounded-2xl p-4 shadow-sm flex items-center gap-4">
                <img src="./assets/img/42-years.webp"
                    class="w-12 h-12 rounded-full object-cover shrink-0">
                <div>
                    <h3 class="text-primary text-[17px] font-black mb-1">
                        42 Years+
                    </h3>
                    <p class="text-gray-600 text-[13px] leading-5">
                        Experience in travel related illnesses
                    </p>
                </div>
            </div>
            <!-- CARD -->
            <div
                class="bg-white rounded-2xl p-4 shadow-sm flex items-center gap-4">
                <img src="./assets/img/170.webp"
                    class="w-12 h-12 rounded-full object-cover shrink-0">
                <div>
                    <h3 class="text-primary text-[17px] font-black mb-1">
                        170+
                    </h3>
                    <p class="text-gray-600 text-[13px] leading-5">
                        Nationalities as patients
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- =========================
    WHATS NEW SECTION
    ========================= -->
<!-- =========================
WHATS NEW SECTION
========================= -->
<section class="py-16 lg:py-20 bg-[#f5f5f5] overflow-hidden">
    <div class="max-w-7xl mx-auto px-5 lg:px-8">

        <!-- HEADING -->
        <div class="text-center mb-8 lg:mb-12">
            <h2 class="text-primary text-3xl md:text-4xl font-black">
                What's New
            </h2>
        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            <!-- LEFT LARGE CARD -->
            <div class="lg:col-span-4">
                <div class="bg-white overflow-hidden shadow-md hover:shadow-xl transition duration-500 h-full group">

                    <!-- IMAGE -->
                    <div class="overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?q=80&w=1200&auto=format&fit=crop"
                            alt=""
                            class="w-full h-[240px] md:h-[280px] object-cover group-hover:scale-105 transition duration-700">
                    </div>

                    <!-- CONTENT -->
                    <div class="p-6 md:p-8 flex flex-col justify-between">

                        <div>
                            <h3 class="text-primary text-[28px] md:text-[32px] font-bold leading-tight mb-4">
                                Second Opinion
                            </h3>

                            <p class="text-gray-600 text-[15px] md:text-[17px] leading-7">
                                Confirm diagnosis and take informed decision about your treatment plan with some of Nepal’s top experts.
                            </p>
                        </div>

                        <!-- BOTTOM -->
                        <div class="flex items-center justify-between mt-8">

                            <a href="#"
                                class="inline-flex items-center gap-3 text-primary font-semibold text-[15px] hover:text-secondary transition">

                                Know More

                                <span class="w-8 h-8 bg-secondary text-white flex items-center justify-center text-xs">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>

                            <div class="text-secondary/20 text-[34px]">
                                <i class="fa-solid fa-user-doctor"></i>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- CENTER SMALL CARDS -->
            <div class="lg:col-span-4">
                <div class="grid grid-cols-1 gap-6 h-full">

                    <!-- CARD -->
                    <div class="bg-white shadow-md hover:shadow-xl transition duration-500 p-6 md:p-8 flex flex-col justify-between">

                        <div>
                            <h3 class="text-primary text-[24px] md:text-[28px] font-bold leading-tight mb-4">
                                Buy Medicine
                            </h3>

                            <p class="text-gray-600 text-[15px] leading-7">
                                Recover without worrying about going out to buy reliable medication delivered to your doorstep.
                            </p>
                        </div>

                        <div class="flex items-center justify-between mt-8">

                            <a href="#"
                                class="inline-flex items-center gap-3 text-primary font-semibold text-[15px] hover:text-secondary transition">

                                Know More

                                <span class="w-8 h-8 bg-secondary text-white flex items-center justify-center text-xs">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>

                            <div class="text-secondary/20 text-[30px]">
                                <i class="fa-solid fa-capsules"></i>
                            </div>

                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="bg-white shadow-md hover:shadow-xl transition duration-500 p-6 md:p-8 flex flex-col justify-between">

                        <div>
                            <h3 class="text-primary text-[24px] md:text-[28px] font-bold leading-tight mb-4">
                                Labs & Diagnostics
                            </h3>

                            <p class="text-gray-600 text-[15px] leading-7">
                                Advanced diagnostics with modern infrastructure and expert medical professionals.
                            </p>
                        </div>

                        <div class="flex items-center justify-between mt-8">

                            <a href="#"
                                class="inline-flex items-center gap-3 text-primary font-semibold text-[15px] hover:text-secondary transition">

                                Know More

                                <span class="w-8 h-8 bg-secondary text-white flex items-center justify-center text-xs">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>

                            <div class="text-secondary/20 text-[30px]">
                                <i class="fa-solid fa-flask-vial"></i>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT LARGE CARD -->
            <div class="lg:col-span-4">
                <div class="bg-white overflow-hidden shadow-md hover:shadow-xl transition duration-500 h-full group">

                    <!-- IMAGE -->
                    <div class="overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=1200&auto=format&fit=crop"
                            alt=""
                            class="w-full h-[240px] md:h-[280px] object-cover group-hover:scale-105 transition duration-700">
                    </div>

                    <!-- CONTENT -->
                    <div class="p-6 md:p-8 flex flex-col justify-between">

                        <div>
                            <h3 class="text-primary text-[28px] md:text-[32px] font-bold leading-tight mb-4">
                                Health Check
                            </h3>

                            <p class="text-gray-600 text-[15px] md:text-[17px] leading-7">
                                Take charge of your well-being with a healthcare experience customised for you.
                            </p>
                        </div>

                        <!-- BOTTOM -->
                        <div class="flex items-center justify-between mt-8">

                            <a href="#"
                                class="inline-flex items-center gap-3 text-primary font-semibold text-[15px] hover:text-secondary transition">

                                Know More

                                <span class="w-8 h-8 bg-secondary text-white flex items-center justify-center text-xs">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>

                            <div class="text-secondary/20 text-[34px]">
                                <i class="fa-solid fa-heart-pulse"></i>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ACCOMMODATION -->
<section class="section-padding">
    <div class="container-custom">
        <div class="text-center mb-8">
            <h2 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-3 uppercase">
                Accommodation & Patient Comfort
            </h2>
            <p class="max-w-5xl text-[1rem] leading-[2rem] mx-auto font-light font-normal">
                Patient comfort and accommodation are closely intertwined aspects of healthcare that focus on creating a supportive and conducive environment for individuals receiving medical care. The quality of patient accommodation significantly impacts the overall comfort and well-being of patients.
            </p>
        </div>
        <!-- Cards -->
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-6">
            <!-- Card -->
            <div class="feature-card">
                <div class="w-[45px] h-[45px] rounded-full bg-[#D50505] text-white text-[24px] text-center mx-auto flex items-center justify-center">
                    <i class="text-sm fa-solid fa-bed"></i>
                </div>
                <h3 class="text-primary leading-[24px] pt-[20px] font-bold">
                    Electronically Adjustable Beds
                </h3>
            </div>
            <!-- Card -->
            <div class="feature-card">
                <div class="w-[45px] h-[45px] rounded-full bg-[#D50505] text-white text-[24px] text-center mx-auto flex items-center justify-center">
                    <i class="text-sm fa-solid fa-user-nurse"></i>
                </div>
                <h3 class="text-primary leading-[24px] pt-[20px] font-bold">
                    Computerized Personal Nurse Call System
                </h3>
            </div>
            <!-- Card -->
            <div class="feature-card">
                <div class="w-[45px] h-[45px] rounded-full bg-[#D50505] text-white text-[24px] text-center mx-auto flex items-center justify-center">
                    <i class="text-sm fa-solid fa-tv"></i>
                </div>
                <h3 class="text-primary leading-[24px] pt-[20px] font-bold">
                    Digital TV For Entertainment
                </h3>
            </div>
            <!-- Card -->
            <div class="feature-card">
                <div class="w-[45px] h-[45px] rounded-full bg-[#D50505] text-white text-[24px] text-center mx-auto flex items-center justify-center">
                    <i class="text-sm fa-solid fa-bread-slice"></i>
                </div>
                <h3 class="text-primary leading-[24px] pt-[20px] font-bold">
                    Healthy And Hygienic Food
                </h3>
            </div>
            <!-- Card -->
            <div class="feature-card">
                <div class="w-[45px] h-[45px] rounded-full bg-[#D50505] text-white text-[24px] text-center mx-auto flex items-center justify-center">
                    <i class="text-sm fa-solid fa-wifi"></i>
                </div>
                <h3 class="text-primary leading-[24px] pt-[20px] font-bold">
                    Hi-Speed Wifi
                </h3>
            </div>
            <!-- Card -->
            <div class="feature-card">
                <div class="w-[45px] h-[45px] rounded-full bg-[#D50505] text-white text-[24px] text-center mx-auto flex items-center justify-center">
                    <i class="text-sm fa-solid fa-phone"></i>
                </div>
                <h3 class="text-primary leading-[24px] pt-[20px] font-bold">
                    Telephone For Local & International Calls
                </h3>
            </div>
        </div>
    </div>
</section>

<!-- =========================================
   OUR DOCTORS SECTION
   MODERN • RESPONSIVE • CIWEC THEME
   ========================================= -->
<section class="relative overflow-hidden bg-[#f3f6f9] py-10 md:py-14 xl:py-16">
    <!-- BACKGROUND PATTERN -->
    <div class="absolute inset-0 opacity-[0.03]"
        style="background-image:url('https://www.transparenttextures.com/patterns/wavy-lines.png');">
    </div>
    <div class="container-custom relative z-10">
        <div class="grid xl:grid-cols-[1fr_1fr_1.5fr] gap-5 xl:gap-8 items-stretch">
            <!-- =========================================
            DOCTOR CARD 1
            ========================================= -->
            <div
                class="group bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,.06)] hover:shadow-[0_18px_40px_rgba(0,0,0,.10)] transition-all duration-500">
                <!-- IMAGE -->
                <div class="relative overflow-hidden">
                    <img src="./assets/doctors/doc1.jpg"
                        alt="Kathmandu Doctor"
                        class="w-full h-[300px] md:h-[360px] object-cover transition-transform duration-700 group-hover:scale-105">
                    <!-- LOCATION -->
                    <div
                        class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-full shadow-sm">
                        <span class="text-primary text-[12px] font-semibold">
                            Kathmandu Branch
                        </span>
                    </div>
                </div>
                <!-- CONTENT -->
                <div class="bg-secondary px-5 py-5 text-center">
                    <h3 class="text-white text-[24px] md:text-[28px] font-bold leading-tight mb-1">
                        Dr. Sarah Sharma
                    </h3>
                    <p class="text-white/90 text-sm md:text-base font-medium">
                        Senior Consultant Physician
                    </p>
                </div>
            </div>
            <!-- =========================================
            DOCTOR CARD 2
            ========================================= -->
            <div
                class="group bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,.06)] hover:shadow-[0_18px_40px_rgba(0,0,0,.10)] transition-all duration-500">
                <!-- IMAGE -->
                <div class="relative overflow-hidden">
                    <img src="./assets/doctors/doc2.jpg"
                        alt="Pokhara Doctor"
                        class="w-full h-[300px] block md:h-[360px] object-cover transition-transform duration-700 group-hover:scale-105">
                    <!-- LOCATION -->
                    <div
                        class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-full shadow-sm">
                        <span class="text-primary text-[12px] font-semibold">
                            Pokhara Branch
                        </span>
                    </div>
                </div>
                <!-- CONTENT -->
                <div class="bg-secondary px-5 py-5 text-center">
                    <h3 class="text-white text-[24px] md:text-[28px] font-bold leading-tight mb-1">
                        Dr. Anisha Gurung
                    </h3>
                    <p class="text-white/90 text-sm md:text-base font-medium">
                        Travel Medicine Specialist
                    </p>
                </div>
            </div>
            <!-- =========================================
            CONTENT SIDE
            ========================================= -->
            <div
                class="bg-[#f7f7f7] rounded-[20px] p-7 md:p-10 xl:p-12 flex flex-col justify-center">
                <!-- SMALL TITLE -->
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-secondary text-sm md:text-base font-black uppercase tracking-wide">
                        Our Doctors
                    </span>
                    <div class="w-12 h-[2px] bg-secondary"></div>
                </div>
                <!-- MAIN TITLE -->
                <h2
                    class="text-primary text-[30px] md:text-[40px] xl:text-[46px] font-black leading-tight mb-5">
                    Meet our Specialists
                </h2>
                <!-- DESCRIPTION -->
                <p
                    class="text-gray-600 text-[15px] md:text-[17px] leading-7 md:leading-8 mb-8 max-w-[560px]">
                    Our experienced doctors from Kathmandu and Pokhara provide world-class healthcare,
                    travel medicine expertise, compassionate consultation, and patient-centered care
                    with international standards.
                </p>
                <!-- BUTTON -->
                <div>
                    <a href="#"
                        class="inline-flex items-center justify-center bg-secondary hover:bg-primary text-white text-sm md:text-base font-bold px-7 md:px-8 py-3.5 md:py-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg">
                        VIEW ALL DOCTORS
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =====================================================
    PATIENT STORIES SECTION
    ===================================================== -->
<section class="relative py-10 md:py-14 xl:py-16 bg-[#f7f7f7] overflow-hidden">
    <div class="container-custom">
        <!-- HEADING -->
        <div class="text-center mb-8 md:mb-10">
            <h2 class="text-primary text-[24px] md:text-[30px] xl:text-[36px] font-black leading-tight">
                Patient Stories
            </h2>
        </div>
        <!-- =====================================================
            DESKTOP GRID
            ===================================================== -->
        <div class="hidden xl:grid grid-cols-5 gap-4 auto-rows-[220px]">
            <!-- CARD -->
            <div class="story-card row-span-2 mt-20 mb-20"
                data-video="./assets/vdo/banner.mp4">
                <img src="./assets/img/speciality/img7.jpg"
                    class="story-image">
                <div class="story-overlay"></div>
                <button class="story-play-btn">
                    <i class="fa-solid fa-play"></i>
                </button>
                <div class="story-content">
                    <h3 class="story-title">
                        Mauritian Patient Treated For Esophageal Cancer
                    </h3>
                    <p class="story-subtitle">
                        Mr Fazl Hosany
                    </p>
                </div>
            </div>
            <!-- CARD -->
            <div class="story-card"
                data-video="./assets/vdo/banner.mp4">
                <img src="./assets/img/speciality/img8.jpg"
                    class="story-image">
                <div class="story-overlay"></div>
                <button class="story-play-btn">
                    <i class="fa-solid fa-play"></i>
                </button>
                <div class="story-content">
                    <h3 class="story-title">
                        Liver Failure
                    </h3>
                    <p class="story-subtitle">
                        Baby Bhavika
                    </p>
                </div>
            </div>
            <!-- CARD LARGE -->
            <div class="story-card row-span-2"
                data-video="./assets/vdo/banner.mp4">
                <img src="./assets/img/speciality/img9.jpg"
                    class="story-image">
                <div class="story-overlay"></div>
                <button class="story-play-btn">
                    <i class="fa-solid fa-play"></i>
                </button>
                <div class="story-content">
                    <h3 class="story-title">
                        Pre-term Babies
                    </h3>
                    <p class="story-subtitle">
                        Ms Sakshi
                    </p>
                </div>
            </div>
            <!-- CARD -->
            <div class="story-card"
                data-video="./assets/vdo/banner.mp4">
                <img src="./assets/img/speciality/img10.jpg"
                    class="story-image">
                <div class="story-overlay"></div>
                <button class="story-play-btn">
                    <i class="fa-solid fa-play"></i>
                </button>
                <div class="story-content">
                    <h3 class="story-title">
                        Neurosurgical Treatment
                    </h3>
                    <p class="story-subtitle">
                        Mr Devender Jeet Singh
                    </p>
                </div>
            </div>
            <!-- CARD -->
            <div class="story-card row-span-2 mt-20 mb-20"
                data-video="./assets/vdo/banner.mp4">
                <img src="./assets/img/speciality/img11.jpg"
                    class="story-image">
                <div class="story-overlay"></div>
                <button class="story-play-btn">
                    <i class="fa-solid fa-play"></i>
                </button>
                <div class="story-content">
                    <h3 class="story-title">
                        Mother Saves Daughter By Donating A Kidney
                    </h3>
                    <p class="story-subtitle">
                        Ms Paluk Sunger
                    </p>
                </div>
            </div>
            <!-- CARD -->
            <div class="story-card"
                data-video="./assets/vdo/banner.mp4">
                <img src="./assets/img/speciality/img1.jpg"
                    class="story-image">
                <div class="story-overlay"></div>
                <button class="story-play-btn">
                    <i class="fa-solid fa-play"></i>
                </button>
                <div class="story-content">
                    <h3 class="story-title">
                        Jaw Cancer
                    </h3>
                    <p class="story-subtitle">
                        Dr Abhilasha Agarwal
                    </p>
                </div>
            </div>
            <!-- CARD -->
            <div class="story-card"
                data-video="./assets/vdo/banner.mp4">
                <img src="./assets/img/speciality/img4.jpg"
                    class="story-image">
                <div class="story-overlay"></div>
                <button class="story-play-btn">
                    <i class="fa-solid fa-play"></i>
                </button>
                <div class="story-content">
                    <h3 class="story-title">
                        Bone Marrow Transplant
                    </h3>
                    <p class="story-subtitle">
                        Patient Father Mr Haider
                    </p>
                </div>
            </div>
        </div>
        <!-- =====================================================
            MOBILE / TABLET SLIDER
            ===================================================== -->
        <div class="xl:hidden">
            <div class="swiper patientStoriesSwiper overflow-hidden" dir="rtl">
                <div class="swiper-wrapper">
                    <!-- SLIDE -->
                    <div class="swiper-slide">
                        <div class="story-card h-[420px]"
                            data-video="./assets/vdo/banner.mp4">
                            <img src="./assets/img/speciality/img7.jpg"
                                class="story-image">
                            <div class="story-overlay"></div>
                            <button class="story-play-btn">
                                <i class="fa-solid fa-play"></i>
                            </button>
                            <div class="story-content">
                                <h3 class="story-title">
                                    Mauritian Patient Treated For Esophageal Cancer
                                </h3>
                                <p class="story-subtitle">
                                    Mr Fazl Hosany
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDE -->
                    <div class="swiper-slide">
                        <div class="story-card h-[420px]"
                            data-video="./assets/vdo/banner.mp4">
                            <img src="./assets/img/speciality/img8.jpg"
                                class="story-image">
                            <div class="story-overlay"></div>
                            <button class="story-play-btn">
                                <i class="fa-solid fa-play"></i>
                            </button>
                            <div class="story-content">
                                <h3 class="story-title">
                                    Liver Failure
                                </h3>
                                <p class="story-subtitle">
                                    Baby Bhavika
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDE -->
                    <div class="swiper-slide">
                        <div class="story-card h-[420px]"
                            data-video="./assets/vdo/banner.mp4">
                            <img src="./assets/img/speciality/img9.jpg"
                                class="story-image">
                            <div class="story-overlay"></div>
                            <button class="story-play-btn">
                                <i class="fa-solid fa-play"></i>
                            </button>
                            <div class="story-content">
                                <h3 class="story-title">
                                    Pre-term Babies
                                </h3>
                                <p class="story-subtitle">
                                    Ms Sakshi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DOTS -->
                <div class="swiper-pagination patient-story-pagination mt-8 !relative"></div>
            </div>
        </div>
    </div>
</section>
<!-- =====================================================
    VIDEO MODAL
    ===================================================== -->
<div id="videoModal"
    class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/80 px-4">
    <!-- MODAL BOX -->
    <div class="relative w-full max-w-5xl bg-black">
        <!-- CLOSE -->
        <button id="closeVideoModal"
            class="absolute -top-12 right-0 text-white text-3xl hover:text-secondary transition-all duration-300 z-50">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <!-- VIDEO -->
        <video id="storyVideo"
            controls
            class="w-full h-auto max-h-[85vh] bg-black">
            <source src="" type="video/mp4">
        </video>
    </div>
</div>

<!-- TESTIMONIAL -->
<section class="section-padding bg-[#ffffff]">
    <div class="container-custom">
        <h2 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-5 uppercase">
            Patient Feedback (Google Review)
        </h2>

        <!-- Reviews -->
        <div class="swiper reviewSwiper">
            <div class="swiper-wrapper">
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <div class="review-card h-full">
                        <div class="absolute top-6 right-6 text-secondary text-3xl md:text-5xl">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                        <img src="https://randomuser.me/api/portraits/men/32.jpg"
                            class="w-20 h-20 rounded-full mb-6">
                        <h3 class="text-[18px] md:text-[22px] font-black text-primary mb-2">
                            Joris Van Dorpe
                        </h3>
                        <div class="text-orange-500 text-lg mb-4">
                            ★★★★★
                        </div>
                        <p class="text-[15px] md:text-[17px] leading-[1.8] text-gray-600">
                            Thank you so much CIWEC Hospital for all your amazing care. All of the staff was super friendly and made me feel at home immediately.
                            <a href="#"
                                class="text-secondary font-semibold ml-1 hover:underline">
                                Read more
                            </a>
                        </p>
                    </div>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <div class="review-card h-full">
                        <div class="absolute top-6 right-6 text-secondary text-3xl md:text-5xl">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                        <img src="https://randomuser.me/api/portraits/women/32.jpg"
                            class="w-20 h-20 rounded-full mb-6">
                        <h3 class="text-[18px] md:text-[22px] font-black text-primary mb-2">
                            Ashley Hagaman
                        </h3>
                        <div class="text-orange-500 text-lg mb-4">
                            ★★★★★
                        </div>
                        <p class="text-[15px] md:text-[17px] leading-[1.8] text-gray-600">
                            Dr Sandee Gupta cared for me when I took a fall hiking in the Himalayas. He was very professional and showed great concern.
                            <a href="#"
                                class="text-secondary font-semibold ml-1 hover:underline">
                                Read more
                            </a>
                        </p>
                    </div>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <div class="review-card h-full">
                        <div class="absolute top-6 right-6 text-secondary text-3xl md:text-5xl">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                        <img src="https://randomuser.me/api/portraits/men/45.jpg"
                            class="w-20 h-20 rounded-full mb-6">
                        <h3 class="text-[18px] md:text-[22px] font-black text-primary mb-2">
                            Andrew Attard
                        </h3>
                        <div class="text-orange-500 text-lg mb-4">
                            ★★★★★
                        </div>
                        <p class="text-[15px] md:text-[17px] leading-[1.8] text-gray-600">
                            Excellent care and support from the whole medical team. The experience was extremely professional.
                            <a href="#"
                                class="text-secondary font-semibold ml-1 hover:underline">
                                Read more
                            </a>
                        </p>
                    </div>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <div class="review-card h-full">
                        <div class="absolute top-6 right-6 text-secondary text-3xl md:text-5xl">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                        <img src="https://randomuser.me/api/portraits/men/45.jpg"
                            class="w-20 h-20 rounded-full mb-6">
                        <h3 class="text-[18px] md:text-[22px] font-black text-primary mb-2">
                            John Attard
                        </h3>
                        <div class="text-orange-500 text-lg mb-4">
                            ★★★★★
                        </div>
                        <p class="text-[15px] md:text-[17px] leading-[1.8] text-gray-600">
                            Good care and support from the whole medical team. The Well experienced was extremely professional.
                            <a href="#"
                                class="text-secondary font-semibold ml-1 hover:underline">
                                Read more
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
    NEWSLETTER SECTION
    ========================================================= -->
<section class="section-padding bg-[#f5f8fc] overflow-hidden">
    <div class="container-custom">
        <!-- TOP -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6 md:mb-8">
            <h2 class="section-title">
                Newsletter
            </h2>
            <a href="#"
                class="btn-primary text-sm md:text-base">
                See All
            </a>
        </div>
        <!-- CARD -->
        <div class="bg-white shadow-[0_8px_30px_rgba(0,0,0,.05)] p-4 md:p-6 xl:p-8">
            <!-- FILTER -->
            <div class="flex flex-row items-center justify-between gap-4 mb-4">
                <!-- SHOW -->
                <div class="flex items-center gap-2">
                    <select id="perPage"
                        class="h-10 md:h-11 px-3 md:px-4
                        border border-gray-300 bg-white
                        text-[13px] md:text-[14px]
                        text-gray-700 outline-none
                        focus:border-secondary
                        transition-all duration-300">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                    <span class="text-[13px] md:text-[14px] text-gray-600 font-medium">
                        entries
                    </span>
                </div>
                <!-- SEARCH -->
                <div class="flex flex-col sm:flex-row sm:items-center gap-2">
                    <span class="text-[13px] md:text-[14px] text-gray-600 font-medium">
                        Search:
                    </span>
                    <input
                        type="text"
                        id="searchInput"
                        placeholder="Search newsletter..."
                        class="w-full sm:w-[240px] md:w-[280px]
                        h-10 md:h-11 px-4
                        border border-gray-300
                        text-[13px] md:text-[14px]
                        text-gray-700
                        outline-none
                        focus:border-secondary
                        transition-all duration-300">
                </div>
            </div>
            <!-- LOADER -->
            <div id="newsletterLoader"
                class="hidden py-10">
                <div class="w-10 h-10 border-[3px]
                    border-gray-200 border-t-secondary
                    rounded-full animate-spin mx-auto">
                </div>
            </div>
            <!-- CONTENT -->
            <div id="newsletterContent">
                <!-- TABLE -->
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[650px]">
                        <!-- HEAD -->
                        <thead>
                            <tr class="border-b-2 border-gray-200">
                                <th class="px-3 md:px-4 py-2 text-left
                                    text-[13px] md:text-[15px]
                                    font-black text-primary">
                                    S.No
                                </th>
                                <th class="px-3 md:px-4 py-2 text-left
                                    text-[13px] md:text-[15px]
                                    font-black text-primary">
                                    Title
                                </th>
                                <th class="px-3 md:px-4 py-2 text-left
                                    text-[13px] md:text-[15px]
                                    font-black text-primary">
                                    Download
                                </th>
                            </tr>
                        </thead>
                        <!-- BODY -->
                        <tbody id="newsletterTable">
                            <!-- AJAX DATA -->
                        </tbody>
                    </table>
                </div>
                <!-- PAGINATION -->
                <div id="newsletterPagination"
                    class="flex flex-wrap justify-center gap-2 mt-4">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========================================================
    DUMMY DATA
    ========================================================= -->
<script>
    const newsletters = [

        {
            id: 1,
            title: "Newsletter July 2025",
            file: "./assets/pdf/news1.pdf"
        },

        {
            id: 2,
            title: "March – April Newsletter",
            file: "./assets/pdf/news2.pdf"
        },

        {
            id: 3,
            title: "Newsletter Jan-Feb 2024",
            file: "./assets/pdf/news3.pdf"
        },

        {
            id: 4,
            title: "Newsletter September – October 2023",
            file: "./assets/pdf/news4.pdf"
        },

        {
            id: 5,
            title: "Newsletter July – August 2023",
            file: "./assets/pdf/news5.pdf"
        },

        {
            id: 6,
            title: "Newsletter May 2023",
            file: "./assets/pdf/news6.pdf"
        },

        {
            id: 7,
            title: "Newsletter January 2023",
            file: "./assets/pdf/news7.pdf"
        },

        {
            id: 8,
            title: "Newsletter December 2022",
            file: "./assets/pdf/news8.pdf"
        },

    ];
</script>
<!-- =========================================================
    AJAX STYLE JS
    ========================================================= -->
<script>
    const table = document.getElementById("newsletterTable");

    const pagination = document.getElementById("newsletterPagination");

    const loader = document.getElementById("newsletterLoader");

    const content = document.getElementById("newsletterContent");

    const searchInput = document.getElementById("searchInput");

    const perPageSelect = document.getElementById("perPage");

    let currentPage = 1;

    let perPage = 5;

    let search = "";

    // =====================================================
    // SHOW LOADER
    // =====================================================

    function showLoader() {

        loader.classList.remove("hidden");

        content.style.opacity = ".3";

        content.style.pointerEvents = "none";

    }

    // =====================================================
    // HIDE LOADER
    // =====================================================

    function hideLoader() {

        loader.classList.add("hidden");

        content.style.opacity = "1";

        content.style.pointerEvents = "auto";

    }

    // =====================================================
    // TABLE
    // =====================================================

    function renderTable(data) {

        table.innerHTML = "";

        if (data.length === 0) {

            table.innerHTML = `
    
                <tr>
    
                    <td colspan="3"
                        class="px-4 py-8 text-center text-gray-500 text-sm">
    
                        No newsletter found.
    
                    </td>
    
                </tr>
    
            `;

            return;

        }

        data.forEach((item, index) => {

            table.innerHTML += `
    
                <tr class="border-b border-gray-200 hover:bg-[#f8fbff] transition-all duration-300">
    
                    <!-- ID -->
                    <td class="px-3 md:px-4 py-3 md:py-4
                        text-[13px] md:text-[15px]
                        text-gray-700 font-medium">
    
                        ${index + 1}
    
                    </td>
    
                    <!-- TITLE -->
                    <td class="px-3 md:px-4 py-3 md:py-4
                        text-[13px] md:text-[15px]
                        text-gray-700 font-medium leading-relaxed">
    
                        ${item.title}
    
                    </td>
    
                    <!-- DOWNLOAD -->
                    <td class="px-3 md:px-4 py-3 md:py-4">
    
                        <a href="${item.file}"
                            download
                            class="w-10 h-10 md:w-11 md:h-11
                            rounded-[10px]
                            bg-primary hover:bg-secondary
                            text-white text-sm
                            inline-flex items-center justify-center
                            transition-all duration-300 hover:-translate-y-1">
    
                            <i class="fa-solid fa-download"></i>
    
                        </a>
    
                    </td>
    
                </tr>
    
            `;

        });

    }

    // =====================================================
    // PAGINATION
    // =====================================================

    function renderPagination(totalPages) {

        pagination.innerHTML = "";

        for (let i = 1; i <= totalPages; i++) {

            pagination.innerHTML += `
    
                <button
                    class="min-w-[40px] h-10 px-4 
                    border border-gray-300
                    text-[13px] md:text-[14px]
                    font-bold
                    transition-all duration-300
    
                    ${currentPage === i
    
                        ? 'bg-secondary text-white border-secondary'
    
                        : 'bg-white text-primary hover:bg-secondary hover:text-white hover:border-secondary'
                    }"
    
                    onclick="changePage(${i})">
    
                    ${i}
    
                </button>
    
            `;

        }

    }

    // =====================================================
    // FETCH DATA
    // =====================================================

    function fetchNewsletters() {

        showLoader();

        setTimeout(() => {

            let filtered = newsletters.filter(item =>

                item.title.toLowerCase().includes(search.toLowerCase())

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

    // =====================================================
    // PAGE CHANGE
    // =====================================================

    function changePage(page) {

        currentPage = page;

        fetchNewsletters();

    }

    // =====================================================
    // PER PAGE
    // =====================================================

    perPageSelect.addEventListener("change", (e) => {

        perPage = parseInt(e.target.value);

        currentPage = 1;

        fetchNewsletters();

    });

    // =====================================================
    // SEARCH DEBOUNCE
    // =====================================================

    let typingTimer;

    searchInput.addEventListener("keyup", (e) => {

        clearTimeout(typingTimer);

        typingTimer = setTimeout(() => {

            search = e.target.value;

            currentPage = 1;

            fetchNewsletters();

        }, 1000);

    });

    // =====================================================
    // INITIAL LOAD
    // =====================================================

    fetchNewsletters();
</script>
<!-- script for the sticky footer bar  -->
<script>
    const stickyBar = document.getElementById("stickyBar");
    const heroSection = document.querySelector("section"); // HERO section

    let lastScroll = 0;

    window.addEventListener("scroll", () => {
        const currentScroll = window.scrollY;
        const heroHeight = heroSection.offsetHeight;

        // show only AFTER hero
        if (currentScroll > heroHeight - 100) {
            stickyBar.classList.remove("translate-y-full", "opacity-0", "pointer-events-none");
            stickyBar.classList.add("translate-y-0", "opacity-100");
        } else {
            stickyBar.classList.add("translate-y-full", "opacity-0", "pointer-events-none");
            stickyBar.classList.remove("translate-y-0", "opacity-100");
        }

        lastScroll = currentScroll;
    });
</script>

<?php include './include/footer.php'; ?>