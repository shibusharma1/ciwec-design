<?php include './include/header.php'; ?>

<style>
    .history-year {
        position: relative;
        z-index: 2;
        width: 65px;
        height: 65px;
        border-radius: 999px;
        background: white;
        border: 3px solid #dbe2ea;
        font-weight: 700;
        color: var(--primary);
        transition: .3s;
    }

    .history-year:hover,
    .history-year.active {
        background: var(--secondary);
        border-color: var(--secondary);
        color: white;
    }

    .history-mobile-item {
        display: flex;
        gap: 16px;
        align-items: flex-start;
    }

    .history-dot {
        width: 14px;
        height: 14px;
        border-radius: 999px;
        background: var(--secondary);
        margin-top: 8px;
        flex-shrink: 0;
    }

    .history-mobile-year {
        color: var(--primary);
        font-weight: 800;
        font-size: 18px;
        margin-bottom: 4px;
    }

    .history-mobile-text {
        color: #6b7280;
        line-height: 1.7;
    }
</style>

<!-- HERO -->
<section class="relative overflow-visible">
    <div class="relative h-[75vh] md:h-[80vh] xl:h-[88vh]">
        <!-- VIDEO -->
        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline>
            <source src="./assets/vdo/banner.mp4" type="video/mp4">
        </video>
        <!-- OVERLAY -->
        <div class="absolute rounded-xl inset-0 bg-black/30"></div>
    </div>

    <!-- STICKY ACTION BAR -->
    <div id="actionBar"
        class="absolute left-1/2 bottom-0 -translate-x-1/2 translate-y-1/2 w-full px-3 sm:px-4 z-20">
        <div class="max-w-5xl rounded-xl mx-auto bg-secondary text-white shadow-xl overflow-hidden">
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

<!-- =========================
Our History
========================= -->
<section class="section-padding bg-[#f5f8fc] overflow-hidden">
    <div class="container-custom">
        <!-- HEADING -->
        <div class="text-center mb-8">
            <span
                class="inline-block text-secondary text-sm md:text-base font-bold uppercase tracking-wider mb-3">
                Our Journey
            </span>
            <h2 class="section-title">
                CIWEC Hospital History
            </h2>
        </div>
        <!-- TIMELINE -->
        <div class="relative mb-8 hidden lg:block">
            <div
                class="absolute top-1/2 left-0 right-0 h-[3px] bg-gray-200 -translate-y-1/2">
            </div>
            <div class="grid grid-cols-6 gap-44">
                <button
                    class="history-year active"
                    data-year="1982">
                    1982
                </button>
                <button
                    class="history-year"
                    data-year="2000">
                    2000
                </button>
                <button
                    class="history-year"
                    data-year="2005">
                    2005
                </button>
                <button
                    class="history-year"
                    data-year="2014">
                    2014
                </button>
                <button
                    class="history-year"
                    data-year="2020">
                    2020
                </button>
                <button
                    class="history-year"
                    data-year="2025">
                    2025
                </button>
            </div>
        </div>
        <!-- CONTENT -->
        <div
            class="bg-white rounded-[0.75rem] overflow-hidden shadow-[0_10px_35px_rgba(0,0,0,.06)]">
            <div class="grid lg:grid-cols-2 items-center">
                <!-- IMAGE -->
                <div>
                    <img id="historyImage" src="./assets/img/history-1982.jpg" class="w-full h-[280px] md:h-[420px] object-cover">
                </div>
                <!-- CONTENT -->
                <div class="p-6 md:p-8 xl:p-12">
                    <span id="historyYear" class="inline-block text-secondary font-bold text-sm uppercase mb-3">
                        1982
                    </span>
                    <h3 id="historyTitle" class="text-primary text-2xl md:text-3xl font-black mb-5">
                        Foundation Of CIWEC
                    </h3>
                    <div
                        class="w-20 h-[4px] bg-secondary mb-6">
                    </div>
                    <p id="historyDescription" class="text-gray-600 text-sm md:text-lg leading-8">
                        CIWEC was established in 1982 to provide western-standard
                        healthcare services to diplomats, expatriates, aid workers,
                        travelers and local communities in Nepal.
                    </p>
                </div>
            </div>
        </div>
        <!-- MOBILE TIMELINE -->
        <div class="lg:hidden mt-10">
            <div class="space-y-5">
                <div class="history-mobile-item">
                    <div class="history-dot"></div>
                    <div>
                        <h4 class="history-mobile-year">
                            1982
                        </h4>
                        <p class="history-mobile-text">
                            CIWEC founded.
                        </p>
                    </div>
                </div>
                <div class="history-mobile-item">
                    <div class="history-dot"></div>
                    <div>
                        <h4 class="history-mobile-year">
                            2005
                        </h4>
                        <p class="history-mobile-text">
                            Expanded medical services.
                        </p>
                    </div>
                </div>
                <div class="history-mobile-item">
                    <div class="history-dot"></div>
                    <div>
                        <h4 class="history-mobile-year">
                            2014
                        </h4>
                        <p class="history-mobile-text">
                            Opened Pokhara Hospital.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // const historyData = {

    //     1982: {
    //         title: "Foundation Of CIWEC",
    //         image: "./assets/img/history/history1.webp",
    //         description: "CIWEC was established in 1982 to provide western-standard healthcare services to diplomats, expatriates, aid workers,travelers and local communities in Nepal."
    //     },

    //     2000: {
    //         title: "Service Expansion",
    //         image: "./assets/img/history/history2.webp",
    //         description: "Expanded specialist healthcare..."
    //     },

    //     2005: {
    //         title: "Modern Medical Facilities",
    //         image: "./assets/img/history/history3.webp",
    //         description: "Introduced advanced diagnostics..."
    //     },

    //     2014: {
    //         title: "CIWEC Pokhara Opened",
    //         image: "./assets/img/history/history1.webp",
    //         description: "Opened fully equipped Pokhara hospital..."
    //     },

    //     2020: {
    //         title: "Enhanced Global Care",
    //         image: "./assets/img/history/history2.webp",
    //         description: "Strengthened international patient services..."
    //     },

    //     2025: {
    //         title: "Future Ready Healthcare",
    //         image: "./assets/img/history/history3.webp",
    //         description: "Continued innovation and excellence..."
    //     }

    // };
    const historyData = {

        1982: {
            title: "Foundation Of CIWEC",
            image: "./assets/img/history/history1.webp",
            description: "CIWEC Hospital was established in 1982 with a vision to provide international-standard healthcare services in Nepal. Initially serving diplomats, expatriates, aid workers, and travelers, the institution quickly earned a reputation for delivering high-quality medical care through experienced professionals, advanced diagnostics, and a patient-centered approach."
        },

        2000: {
            title: "Service Expansion",
            image: "./assets/img/history/history2.webp",
            description: "As healthcare needs continued to evolve, CIWEC expanded its range of medical services and specialties. New departments, enhanced outpatient care, and comprehensive preventive health programs were introduced, enabling the hospital to serve a broader community while maintaining its commitment to international healthcare standards."
        },

        2005: {
            title: "Modern Medical Facilities",
            image: "./assets/img/history/history3.webp",
            description: "CIWEC invested significantly in modern medical technology and infrastructure, introducing advanced diagnostic equipment, improved laboratory services, and upgraded clinical facilities. These developments strengthened the hospital's ability to provide accurate diagnoses, efficient treatments, and a higher standard of patient care."
        },

        2014: {
            title: "CIWEC Pokhara Opened",
            image: "./assets/img/history/history1.webp",
            description: "Expanding beyond Kathmandu, CIWEC established its Pokhara facility in 2014 to provide trusted healthcare services to residents, travelers, trekkers, and international visitors in western Nepal. The new center offered comprehensive medical care while maintaining the same quality and expertise that defined the CIWEC brand."
        },

        2020: {
            title: "Enhanced Global Care",
            image: "./assets/img/history/history2.webp",
            description: "During a period of global healthcare challenges, CIWEC strengthened its international patient support services and emergency response capabilities. Enhanced telemedicine solutions, infection prevention measures, and coordinated care systems ensured patients continued to receive safe, reliable, and accessible healthcare."
        },

        2025: {
            title: "Future Ready Healthcare",
            image: "./assets/img/history/history3.webp",
            description: "Building on decades of excellence, CIWEC continues to embrace innovation, digital transformation, and patient-focused healthcare solutions. With ongoing investments in technology, medical expertise, and service quality, the institution remains dedicated to shaping the future of healthcare in Nepal while delivering exceptional care to every patient."
        }
    };

    document.querySelectorAll(".history-year").forEach(button => {

        button.addEventListener("click", () => {

            document.querySelectorAll(".history-year")
                .forEach(btn => btn.classList.remove("active"));

            button.classList.add("active");

            const year = button.dataset.year;

            document.getElementById("historyYear").textContent = year;
            document.getElementById("historyTitle").textContent = historyData[year].title;
            document.getElementById("historyDescription").textContent = historyData[year].description;
            document.getElementById("historyImage").src = historyData[year].image;

        });

    });
</script>

<!-- WHY CIWEC -->
<!-- <section class="relative section-padding bg-[#f3f6f9]">
    <div class="container-custom">
        <div class="text-center mb-20">
            <h2 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-3">
                Why CIWEC
            </h2>
            <p class="max-w-5xl text-[1rem] leading-[2rem] mx-auto font-light font-normal">
                • 42 years of experience • Friendly and quiet environment • 24/7 availability of seasoned post graduate doctors/nurses • Doctors and senior nurses certified by ISTM in Travel Health • Best nurse to patient ratio • Short waiting time for appointments, diagnosis and reports • End to end handling of insurance cases
            </p>
        </div>
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-14">
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
</section> -->

<!-- Circular design of why ciwec -->
<section class="relative overflow-hidden bg-[#ebf0f5] py-6 md:py-8 xl:py-10">
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
                class="relative w-[350px] h-[350px] rounded-full overflow-hidden border-[8px] border-white shadow-[0_18px_50px_rgba(0,0,0,.10)] z-20 bg-white flex items-center justify-center mb-8">
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
<section class="py-16 lg:py-20 bg-[#f5f8fc] overflow-hidden">
    <div class="max-w-7xl mx-auto px-5 lg:px-8">
        <!-- HEADING -->
        <div class="text-center mb-8 lg:mb-12">
            <h2 class="text-primary text-3xl md:text-4xl font-black">
                What's New
            </h2>

            <p class="max-w-3xl mx-auto text-gray-600 text-sm md:text-base leading-relaxed">
                Stay informed about our latest healthcare services and innovations, designed to provide expert care, greater convenience, and a seamless patient experience for you and your family.
            </p>
        </div>
        <!-- GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <!-- LEFT LARGE CARD -->
            <div class="lg:col-span-4">
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-500 h-full group">
                    <!-- IMAGE -->
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?q=80&w=1200&auto=format&fit=crop" alt="" class="w-full h-[240px] md:h-[280px] object-cover group-hover:scale-105 transition duration-700">
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
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-500 p-6 md:p-8 flex flex-col justify-between">
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
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-500 p-6 md:p-8 flex flex-col justify-between">
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
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-500 h-full group">
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
                                Take charge of your health with a personalized healthcare experience designed around your needs and lifestyle.
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
<!-- <section class="section-padding">
    <div class="container-custom">
        <div class="text-center mb-8">
            <h2 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-3 uppercase">
                Accommodation & Patient Comfort
            </h2>
            <p class="max-w-5xl text-[1rem] leading-[2rem] mx-auto font-light font-normal">
                Patient comfort and accommodation are closely intertwined aspects of healthcare that focus on creating a supportive and conducive environment for individuals receiving medical care. The quality of patient accommodation significantly impacts the overall comfort and well-being of patients.
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-6">
            <div class="feature-card">
                <div class="w-[45px] h-[45px] rounded-full bg-[#D50505] text-white text-[24px] text-center mx-auto flex items-center justify-center">
                    <i class="text-sm fa-solid fa-bed"></i>
                </div>
                <h3 class="text-primary leading-[24px] pt-[20px] font-bold">
                    Electronically Adjustable Beds
                </h3>
            </div>
            <div class="feature-card">
                <div class="w-[45px] h-[45px] rounded-full bg-[#D50505] text-white text-[24px] text-center mx-auto flex items-center justify-center">
                    <i class="text-sm fa-solid fa-user-nurse"></i>
                </div>
                <h3 class="text-primary leading-[24px] pt-[20px] font-bold">
                    Computerized Personal Nurse Call System
                </h3>
            </div>
            <div class="feature-card">
                <div class="w-[45px] h-[45px] rounded-full bg-[#D50505] text-white text-[24px] text-center mx-auto flex items-center justify-center">
                    <i class="text-sm fa-solid fa-tv"></i>
                </div>
                <h3 class="text-primary leading-[24px] pt-[20px] font-bold">
                    Digital TV For Entertainment
                </h3>
            </div>
            <div class="feature-card">
                <div class="w-[45px] h-[45px] rounded-full bg-[#D50505] text-white text-[24px] text-center mx-auto flex items-center justify-center">
                    <i class="text-sm fa-solid fa-bread-slice"></i>
                </div>
                <h3 class="text-primary leading-[24px] pt-[20px] font-bold">
                    Healthy And Hygienic Food
                </h3>
            </div>
            <div class="feature-card">
                <div class="w-[45px] h-[45px] rounded-full bg-[#D50505] text-white text-[24px] text-center mx-auto flex items-center justify-center">
                    <i class="text-sm fa-solid fa-wifi"></i>
                </div>
                <h3 class="text-primary leading-[24px] pt-[20px] font-bold">
                    Hi-Speed Wifi
                </h3>
            </div>
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
</section> -->

<!-- =========================================
   OUR DOCTORS SECTION
========================================= -->
<section class="relative overflow-hidden bg-[#EBF0F5] py-10 md:py-14 xl:py-16">
    <!-- BACKGROUND PATTERN -->
    <div class="absolute inset-0 opacity-[0.03]"
        style="background-image:url('https://www.transparenttextures.com/patterns/wavy-lines.png');">
    </div>
    <div class="container-custom relative z-10">
        <div class="grid xl:grid-cols-[1fr_1fr_1.5fr] gap-5 xl:gap-8 items-stretch">
            <!-- =========================================
            DOCTOR CARD 1
            ========================================= -->
            <div class="group rounded-xl bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,.06)] hover:shadow-[0_18px_40px_rgba(0,0,0,.10)] transition-all duration-500">
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
            <div class="group rounded-xl bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,.06)] hover:shadow-[0_18px_40px_rgba(0,0,0,.10)] transition-all duration-500">
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
                    class="section-title mb-5">
                    Meet our Specialists
                </h2>
                <!-- DESCRIPTION -->
                <p
                    class="text-gray-600 text-[15px] md:text-[17px] leading-7 md:leading-8 mb-8 max-w-[560px]">
                    Our experienced doctors in Kathmandu and Pokhara provide world-class healthcare, travel medicine expertise, and compassionate patient-centered care.
                </p>
                <!-- BUTTON -->
                <div>
                    <a href="#"
                        class="btn-primary">
                        <!-- class="inline-flex items-center justify-center bg-secondary hover:bg-primary text-white text-sm md:text-base font-bold px-7 md:px-8 py-3.5 md:py-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"> -->
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
<section class="relative py-10 md:py-14 xl:py-16 bg-[#f5f8fc] overflow-hidden">
    <div class="container-custom">
        <!-- HEADING -->
        <div class="text-center mb-8 md:mb-10">
            <h2 class="text-primary text-[24px] md:text-[30px] xl:text-[36px] font-black leading-tight">
                Patient Stories
            </h2>

            <p class="max-w-3xl mx-auto text-gray-600 text-sm md:text-base leading-relaxed">
                CIWEC Hospital has been recognized nationally and internationally
                for excellence in healthcare, travel medicine and patient care.
            </p>
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
    class="fixed inset-0 z-[9999] hidden items-center rounded-xl justify-center bg-black/80 px-4">
    <!-- MODAL BOX -->
    <div class="relative rounded-xl w-full max-w-5xl bg-black">
        <!-- CLOSE -->
        <button id="closeVideoModal"
            class="absolute -top-12 right-0 text-white text-3xl hover:text-secondary transition-all duration-300 z-50">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <!-- VIDEO -->
        <video id="storyVideo"
            controls
            class="w-full h-auto rounded-xl max-h-[85vh] bg-black">
            <source src="" type="video/mp4">
        </video>
    </div>
</div>

<!-- Statistics section -->
<section class="relative overflow-hidden bg-primary py-16 md:py-20 xl:py-24">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-[0.05]">
        <div class="absolute inset-0"
            style="
            background-image: radial-gradient(white 1px, transparent 1px);
            background-size: 30px 30px;
            ">
        </div>
    </div>
    <div class="container-custom relative z-10">
        <div class="grid xl:grid-cols-2 gap-12 xl:gap-16 items-center">
            <!-- LEFT -->
            <div>
                <span
                    class="inline-block text-secondary text-sm md:text-base font-bold uppercase tracking-wider mb-4">
                    Trusted Worldwide
                </span>
                <h2
                    class="text-white text-[28px] md:text-[40px] xl:text-[52px] font-black leading-tight mb-6">
                    Delivering Quality Healthcare To Patients From Around The World
                </h2>
                <p
                    class="text-white/90 text-sm md:text-lg leading-8 max-w-2xl mb-8">
                    CIWEC Hospital has served international travelers, expatriates,
                    diplomats, aid workers and local communities for more than
                    four decades, providing trusted healthcare services with
                    global standards.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#"
                        class="btn-light">
                        Learn More
                    </a>
                    <a href="#"
                        class="btn-primary">
                        <!-- class="inline-flex items-center justify-center bg-secondary hover:bg-primary text-white text-sm md:text-base font-bold px-7 md:px-8 py-3.5 md:py-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg"> -->
                        Contact Us
                    </a>
                </div>
            </div>
            <!-- RIGHT -->
            <!-- <div>
                <img
                    src="./assets/img/world-health-map.jpg"
                    alt="Global Reach"
                    class="w-full max-w-[650px] mx-auto">
            </div> -->
            <div class="relative">
                <!-- <img src="./assets/img/world-map.svg"> -->
                <img
                    src="./assets/img/world-map.svg"
                    alt="World Map"
                    class="w-full max-w-[650px] mx-auto">
                <div class="absolute top-[35%] left-[71%] w-4 h-4 bg-secondary rounded-full animate-ping"></div>
                <!-- <div class="absolute top-[50%] left-[40%] w-4 h-4 bg-secondary rounded-full animate-ping"></div> -->
                <!-- <div class="absolute top-[60%] left-[75%] w-4 h-4 bg-secondary rounded-full animate-ping"></div> -->
            </div>
        </div>
        <!-- STATS -->
        <div
            class="grid grid-cols-2 lg:grid-cols-4 gap-6 mt-16 md:mt-20">
            <!-- Item -->
            <div class="text-center">
                <h3
                    class="counter text-white text-3xl md:text-5xl font-black"
                    data-target="20000">
                    0
                </h3>
                <p
                    class="text-white/90 text-sm md:text-base mt-3">
                    International Patients
                </p>
            </div>
            <!-- Item -->
            <div class="text-center">
                <h3
                    class="counter text-white text-3xl md:text-5xl font-black"
                    data-target="130">
                    0
                </h3>
                <p
                    class="text-white/90 text-sm md:text-base mt-3">
                    Countries Served
                </p>
            </div>
            <!-- Item -->
            <div class="text-center">
                <h3
                    class="counter text-white text-3xl md:text-5xl font-black"
                    data-target="40">
                    0
                </h3>
                <p
                    class="text-white/90 text-sm md:text-base mt-3">
                    Years Of Excellence
                </p>
            </div>
            <!-- Item -->
            <div class="text-center">
                <h3
                    class="counter text-white text-3xl md:text-5xl font-black"
                    data-target="2">
                    0
                </h3>
                <p
                    class="text-white/90 text-sm md:text-base mt-3">
                    Hospital Locations
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                document.querySelectorAll(".counter").forEach(counter => {
                    const target = +counter.dataset.target;
                    let current = 0;
                    const increment = target / 120;
                    const updateCounter = () => {
                        if (current < target) {
                            current += increment;
                            counter.innerText = Math.floor(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.innerText = target.toLocaleString() + "+";
                        }
                    };
                    updateCounter();
                });
                observer.disconnect();
            }
        });
    });
    observer.observe(document.querySelector(".counter"));
</script>

<!-- TESTIMONIAL -->
<section class="section-padding bg-[#ebf0f5]">
    <div class="container-custom">
        <h2 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-5 uppercase">
            Patient Feedback (Google Review)
        </h2>
        
        <!-- Reviews -->
        <div class="swiper reviewSwiper">
            <div class="swiper-wrapper">
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <div class="review-card rounded-2xl h-full">
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
                    <div class="review-card rounded-2xl h-full">
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
                    <div class="review-card rounded-2xl h-full">
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
                    <div class="review-card rounded-2xl h-full">
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


<!-- Awards and Recognition -->
<section class="section-padding bg-[#f5f8fc]">
   <div class="container-custom">
      <!-- Heading -->
      <div class="text-center mb-10 lg:mb-14">
         <!-- <h2 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black mb-3"> -->
            <h2 class="section-title mb-3">
            Awards & Recognitions
         </h2>
         <p class="max-w-3xl mx-auto text-gray-600 text-sm md:text-base leading-relaxed">
            CIWEC Hospital has been recognized nationally and internationally
            for excellence in healthcare, travel medicine and patient care.
         </p>
      </div>
      <div class="swiper awardSwiper">
         <div class="swiper-wrapper">
            <!-- CARD -->
            <div class="swiper-slide h-auto">
               <div
                  class="bg-white rounded-[20px] p-6 md:p-8 h-full text-center shadow-[0_10px_30px_rgba(0,0,0,.06)] hover:shadow-[0_20px_50px_rgba(0,0,0,.12)] hover:-translate-y-2 transition-all duration-500">
                  <div
                     class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-5 rounded-full bg-secondary/10 flex items-center justify-center">
                     <i class="fa-solid fa-award text-secondary text-2xl md:text-3xl"></i>
                  </div>
                  <div class="text-secondary text-2xl md:text-3xl font-black mb-3">
                     2025
                  </div>
                  <h3 class="text-primary text-lg md:text-xl font-black mb-4">
                     Best Travel Medicine Hospital
                  </h3>
                  <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-5">
                     Recognized for excellence in travel medicine,
                     preventive healthcare and international patient care.
                  </p>
                  <span
                     class="inline-flex px-4 py-2 rounded-full bg-primary/10 text-primary text-xs md:text-sm font-bold">
                  International Healthcare Forum
                  </span>
               </div>
            </div>
            <!-- CARD -->
            <div class="swiper-slide h-auto">
               <div
                  class="bg-white rounded-[20px] p-6 md:p-8 h-full text-center shadow-[0_10px_30px_rgba(0,0,0,.06)] hover:shadow-[0_20px_50px_rgba(0,0,0,.12)] hover:-translate-y-2 transition-all duration-500">
                  <div
                     class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-5 rounded-full bg-primary/10 flex items-center justify-center">
                     <i class="fa-solid fa-trophy text-primary text-2xl md:text-3xl"></i>
                  </div>
                  <div class="text-secondary text-2xl md:text-3xl font-black mb-3">
                     2024
                  </div>
                  <h3 class="text-primary text-lg md:text-xl font-black mb-4">
                     Healthcare Excellence Award
                  </h3>
                  <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-5">
                     Awarded for delivering exceptional healthcare services,
                     patient safety and innovation.
                  </p>
                  <span
                     class="inline-flex px-4 py-2 rounded-full bg-primary/10 text-primary text-xs md:text-sm font-bold">
                  Nepal Medical Association
                  </span>
               </div>
            </div>
            <!-- CARD -->
            <div class="swiper-slide h-auto">
               <div
                  class="bg-white rounded-[20px] p-6 md:p-8 h-full text-center shadow-[0_10px_30px_rgba(0,0,0,.06)] hover:shadow-[0_20px_50px_rgba(0,0,0,.12)] hover:-translate-y-2 transition-all duration-500">
                  <div
                     class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-5 rounded-full bg-secondary/10 flex items-center justify-center">
                     <i class="fa-solid fa-medal text-secondary text-2xl md:text-3xl"></i>
                  </div>
                  <div class="text-secondary text-2xl md:text-3xl font-black mb-3">
                     2023
                  </div>
                  <h3 class="text-primary text-lg md:text-xl font-black mb-4">
                     Quality Healthcare Recognition
                  </h3>
                  <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-5">
                     Honored for maintaining international standards
                     in healthcare quality and patient satisfaction.
                  </p>
                  <span
                     class="inline-flex px-4 py-2 rounded-full bg-primary/10 text-primary text-xs md:text-sm font-bold">
                  Global Healthcare Council
                  </span>
               </div>
            </div>
            <!-- CARD -->
            <div class="swiper-slide h-auto">
               <div
                  class="bg-white rounded-[20px] p-6 md:p-8 h-full text-center shadow-[0_10px_30px_rgba(0,0,0,.06)] hover:shadow-[0_20px_50px_rgba(0,0,0,.12)] hover:-translate-y-2 transition-all duration-500">
                  <div
                     class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-5 rounded-full bg-primary/10 flex items-center justify-center">
                     <i class="fa-solid fa-star text-primary text-2xl md:text-3xl"></i>
                  </div>
                  <div class="text-secondary text-2xl md:text-3xl font-black mb-3">
                     2022
                  </div>
                  <h3 class="text-primary text-lg md:text-xl font-black mb-4">
                     Excellence In Patient Care
                  </h3>
                  <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-5">
                     Recognized for exceptional patient satisfaction
                     and international healthcare standards.
                  </p>
                  <span
                     class="inline-flex px-4 py-2 rounded-full bg-primary/10 text-primary text-xs md:text-sm font-bold">
                  Healthcare Excellence Council
                  </span>
               </div>
            </div>
         </div>
         <!-- Pagination -->
         <div class="award-pagination flex justify-center mt-10"></div>
      </div>
   </div>
</section>
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        new Swiper(".awardSwiper", {
            loop: true,
            speed: 1000,
            spaceBetween: 24,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            pagination: {
                el: ".award-pagination",
                clickable: true,
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },

                768: {
                    slidesPerView: 2,
                },

                1280: {
                    slidesPerView: 3,
                },
            },
        });
    });
</script>

<!-- =========================================================
    NEWSLETTER SECTION
    ========================================================= -->
<section class="section-padding bg-[#ebf0f5] overflow-hidden">
    <div class="container-custom">
        <!-- TOP -->
        <div class="flex flex-row item-center justify-between gap-4 mb-4 md:mb-4">
            <h2 class="text-primary text-xl md:text-2xl xl:text-[32px] font-black uppercase">
                Newsletter
            </h2>
            <a href="#"
                class="btn-primary">
                See All
            </a>
        </div>
        <!-- CARD -->
        <div class="bg-white rounded-xl shadow-[0_8px_30px_rgba(0,0,0,.05)] p-4 md:p-6 xl:p-8">
            <!-- FILTER -->
            <div class="flex flex-row items-end justify-between gap-4 mb-4">
                <!-- SHOW -->
                <div class="flex items-center gap-2">
                    <select id="perPage"
                        class="h-10 md:h-11 px-3 md:px-4
                        border border-gray-300 bg-white
                        rounded-xl
                        text-[13px] md:text-[14px]
                        text-gray-700 outline-none
                        focus:border-secondary
                        transition-all duration-300">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                    <span class="text-[16px] md:text-[18px] text-gray-600 font-medium">
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
                        h-10 md:h-11 px-4 rounded-xl
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
                    <table class="w-full">
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
                    <td colspan="3" class="px-4 py-8 text-center text-gray-500 text-sm">
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
                    <td class="px-3 md:px-4 py-2 md:py-2
                        text-[13px] md:text-[15px]
                        text-gray-700 font-medium">
                        ${index + 1}
    
                    <!-- TITLE -->
                    <td class="px-3 md:px-4 py-2 md:py-2
                        text-[13px] md:text-[15px]
                        text-gray-700 font-medium leading-relaxed">
                        ${item.title}
                    </td>
    
                    <!-- DOWNLOAD -->
                    <td class="px-3 md:px-4 py-2 md:py-2">
                        <a href="${item.file}"
                            download
                            class="w-8 h-8 md:w-10 md:h-10 rounded-xl
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
                        ? 'bg-secondary rounded-xl text-white border-secondary'
                        : 'bg-white rounded-xl text-primary hover:bg-secondary hover:text-white hover:border-secondary'
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