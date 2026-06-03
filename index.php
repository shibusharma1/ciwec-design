<?php include './include/header.php'; ?>

<?php
include './include/stickyfooterbar.php';
?>

<!-- HERO -->
<section class="relative">
    <!-- VIDEO HERO -->
    <div class="relative h-[70vh] md:h-[80vh] xl:h-[90vh] overflow-hidden">
        <video
            class="absolute inset-0 w-full h-full object-cover"
            autoplay
            muted
            loop
            playsinline>
            <source src="./assets/vdo/banner.mp4" type="video/mp4">
        </video>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-primary/90 via-primary/60 to-black/20"></div>
        <!-- Content -->
        <div class="absolute inset-0 flex items-center">
            <div class="container-custom">
                <div class="max-w-3xl">
                    <span
                        class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white text-sm font-medium px-4 py-2 mb-6">
                        <span class="w-2 h-2 bg-secondary rounded-full animate-pulse"></span>
                        Trusted Since 1982
                    </span>
                    <h1
                        class="text-white font-black leading-tight text-[34px] md:text-[52px] xl:text-[70px]">
                        International Standard Healthcare in Nepal
                    </h1>
                    <p
                        class="mt-6 text-white/90 text-base md:text-lg xl:text-xl leading-relaxed max-w-2xl">
                        Providing world-class travel medicine, family medicine,
                        specialist care and emergency services from Kathmandu and
                        Pokhara for over 40 years.
                    </p>
                    <!-- <div class="flex flex-wrap gap-4 mt-8">
                        <a href="#"
                            class="bg-secondary hover:bg-secondary/90 text-white px-8 py-4 font-semibold transition">
                            Book Appointment
                        </a>
                        <a href="#"
                            class="border border-white text-white hover:bg-white hover:text-primary px-8 py-4 font-semibold transition">
                            Find A Doctor
                        </a> -->
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- CTA -->
<!-- =========================================
    QUICK ACTIONS
    ========================================= -->
<section class="relative z-20 -mt-10 md:-mt-12 xl:-mt-16">
    <div class="container-custom">
        <div class="bg-white border border-slate-200 shadow-[0_15px_40px_rgba(0,0,0,.08)]">
            <div class="grid grid-cols-1 md:grid-cols-3">

    <!-- FIND DOCTOR (Hidden on Mobile) -->
    <a href="#"
        class="hidden md:flex group items-center gap-4 p-5 md:p-7 border-r border-slate-200 hover:bg-slate-50 transition-all duration-300">

        <div class="w-14 h-14 bg-primary/10 text-primary flex items-center justify-center flex-shrink-0 transition-all duration-300 group-hover:bg-primary group-hover:text-white">
            <i class="fa-solid fa-user-doctor text-xl"></i>
        </div>

        <div class="flex-1">
            <h3 class="text-primary text-lg font-bold">
                Find a Doctor
            </h3>
            <p class="text-slate-500 text-sm mt-1">
                Search specialists
            </p>
        </div>

        <i class="fa-solid fa-arrow-right text-secondary text-sm transition-all duration-300 group-hover:translate-x-1"></i>
    </a>

    <!-- INQUIRY (Hidden on Mobile) -->
    <a href="#"
        class="hidden md:flex group items-center gap-4 p-5 md:p-7 border-r border-slate-200 hover:bg-slate-50 transition-all duration-300">

        <div class="w-14 h-14 bg-primary/10 text-primary flex items-center justify-center flex-shrink-0 transition-all duration-300 group-hover:bg-primary group-hover:text-white">
            <i class="fa-solid fa-comments text-xl"></i>
        </div>

        <div class="flex-1">
            <h3 class="text-primary text-lg font-bold">
                Inquiry
            </h3>
            <p class="text-slate-500 text-sm mt-1">
                Contact our team
            </p>
        </div>

        <i class="fa-solid fa-arrow-right text-secondary text-sm transition-all duration-300 group-hover:translate-x-1"></i>
    </a>

    <!-- APPOINTMENT (Visible on All Devices) -->
    <a href="#"
        class="group flex items-center gap-4 p-5 md:p-7 bg-primary text-white hover:bg-secondary transition-all duration-300 w-full">

        <div class="w-12 h-12 md:w-14 md:h-14 bg-white/10 flex items-center justify-center flex-shrink-0">
            <i class="fa-solid fa-calendar-check text-lg md:text-xl"></i>
        </div>

        <div class="flex-1">
            <h3 class="text-base md:text-lg font-bold">
                Appointment
            </h3>

            <!-- Visible on Mobile & Desktop -->
            <p class="text-white/80 text-sm mt-1">
                Schedule your visit
            </p>
        </div>

        <i class="fa-solid fa-arrow-right text-white text-sm transition-all duration-300 group-hover:translate-x-1"></i>
    </a>

</div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Image -->
            <div>
                <img
                    src="./assets/img/about-ciwec.webp"
                    class="w-full h-[500px] object-cover">
            </div>
            <!-- Content -->
            <div>
                <span
                    class="text-secondary uppercase tracking-[3px] text-sm font-semibold">
                    About CIWEC
                </span>
                <h2
                    class="text-primary font-black text-3xl md:text-5xl mt-4 leading-tight">
                    Nepal's Leading Travel Medicine & International Healthcare Provider
                </h2>
                <p
                    class="mt-6 text-slate-600 leading-8">
                    Established in 1982, CIWEC Hospital and Travel Medicine
                    Center has grown from a specialist clinic into one of the
                    world's most respected travel medicine institutions.
                </p>
                <p
                    class="mt-4 text-slate-600 leading-8">
                    With facilities in Kathmandu and Pokhara, we provide
                    international-standard healthcare services to residents,
                    expatriates, travelers and organizations.
                </p>
                <a href="#"
                    class="inline-flex mt-8 bg-primary text-white px-7 py-4 font-semibold hover:bg-primary/90 transition">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- =========================
SPECIALITY CENTERS
========================= -->
<section class="speciality-section section-padding bg-slate-50">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="flex items-end justify-between mb-10">
            <div>
                <span class="section-label">
                    Centers of Excellence
                </span>
                <h2 class="section-title mb-0">
                    Specialized Medical Services
                </h2>
            </div>
            <a href="#"
                class="hidden lg:inline-flex items-center gap-2 text-primary font-semibold hover:text-secondary transition">
                View All
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
    <!-- SWIPER -->
    <div class="specialitySwiper">
        <div class="swiper-wrapper">

            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#" class="speciality-card group">
                    <img src="./assets/img/speciality/img1.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Travel Medicine
                        </span>
                        <h3 class="speciality-title">
                            Travel & Tropical Medicine
                        </h3>
                        <p class="speciality-desc">
                            Internationally recognized expertise in travel medicine,
                            infectious diseases and preventive healthcare.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#" class="speciality-card group">
                    <img src="./assets/img/speciality/img11.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Family Medicine
                        </span>
                        <h3 class="speciality-title">
                            Family Healthcare
                        </h3>
                        <p class="speciality-desc">
                            Comprehensive healthcare services for individuals
                            and families of all ages.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#" class="speciality-card group">
                    <img src="./assets/img/speciality/img1.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Travel Medicine
                        </span>
                        <h3 class="speciality-title">
                            Travel & Tropical Medicine
                        </h3>
                        <p class="speciality-desc">
                            Internationally recognized expertise in travel medicine,
                            infectious diseases and preventive healthcare.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#" class="speciality-card group">
                    <img src="./assets/img/speciality/img11.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Family Medicine
                        </span>
                        <h3 class="speciality-title">
                            Family Healthcare
                        </h3>
                        <p class="speciality-desc">
                            Comprehensive healthcare services for individuals
                            and families of all ages.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#" class="speciality-card group">
                    <img src="./assets/img/speciality/img1.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Travel Medicine
                        </span>
                        <h3 class="speciality-title">
                            Travel & Tropical Medicine
                        </h3>
                        <p class="speciality-desc">
                            Internationally recognized expertise in travel medicine,
                            infectious diseases and preventive healthcare.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#" class="speciality-card group">
                    <img src="./assets/img/speciality/img11.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Family Medicine
                        </span>
                        <h3 class="speciality-title">
                            Family Healthcare
                        </h3>
                        <p class="speciality-desc">
                            Comprehensive healthcare services for individuals
                            and families of all ages.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#" class="speciality-card group">
                    <img src="./assets/img/speciality/img1.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Travel Medicine
                        </span>
                        <h3 class="speciality-title">
                            Travel & Tropical Medicine
                        </h3>
                        <p class="speciality-desc">
                            Internationally recognized expertise in travel medicine,
                            infectious diseases and preventive healthcare.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#" class="speciality-card group">
                    <img src="./assets/img/speciality/img11.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Family Medicine
                        </span>
                        <h3 class="speciality-title">
                            Family Healthcare
                        </h3>
                        <p class="speciality-desc">
                            Comprehensive healthcare services for individuals
                            and families of all ages.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#" class="speciality-card group">
                    <img src="./assets/img/speciality/img1.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Travel Medicine
                        </span>
                        <h3 class="speciality-title">
                            Travel & Tropical Medicine
                        </h3>
                        <p class="speciality-desc">
                            Internationally recognized expertise in travel medicine,
                            infectious diseases and preventive healthcare.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!-- CARD -->
            <div class="swiper-slide">
                <a href="#" class="speciality-card group">
                    <img src="./assets/img/speciality/img11.jpg"
                        class="speciality-image">
                    <div class="speciality-overlay"></div>
                    <div class="speciality-content">
                        <span class="speciality-badge">
                            Family Medicine
                        </span>
                        <h3 class="speciality-title">
                            Family Healthcare
                        </h3>
                        <p class="speciality-desc">
                            Comprehensive healthcare services for individuals
                            and families of all ages.
                        </p>
                        <div class="speciality-btn">
                            Learn More
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <!-- KEEP SAME PAGINATION -->
        <div class="speciality-pagination mt-10"></div>
    </div>
</section>

<!-- =========================
Our History
========================= -->
<section class="section-padding bg-white overflow-hidden">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="max-w-3xl mb-14">
            <span
                class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                <span class="w-2 h-2 bg-secondary"></span>
                Our Journey
            </span>
            <h2
                class="text-primary text-3xl md:text-4xl xl:text-5xl font-black leading-tight">
                Over Four Decades of Healthcare Excellence
            </h2>
            <p
                class="text-slate-600 mt-5 text-base md:text-lg leading-8">
                Since 1982, CIWEC has evolved from a travel medicine clinic into
                one of Nepal's most trusted international healthcare providers.
            </p>
        </div>
        <!-- DESKTOP TIMELINE -->
        <div class="hidden lg:block mb-14">
            <div class="relative">
                <div
                    class="absolute left-0 right-0 top-1/2 h-px bg-slate-300">
                </div>
                <div class="flex justify-between">
                    <button
                        class="history-year active relative z-10 flex flex-col items-center"
                        data-year="1982">
                        <span
                            class="w-5 h-5 rounded-full border-4 border-white bg-slate-300 shadow-lg mb-4">
                        </span>
                        <span
                            class="font-bold text-primary text-sm">
                            1982
                        </span>
                    </button>
                    <button
                        class="history-year relative z-10 flex flex-col items-center"
                        data-year="2000">
                        <span
                            class="w-5 h-5 rounded-full border-4 border-white bg-slate-300 shadow-lg mb-4">
                        </span>
                        <span
                            class="font-bold text-primary text-sm">
                            2000
                        </span>
                    </button>
                    <button
                        class="history-year relative z-10 flex flex-col items-center"
                        data-year="2005">
                        <span
                            class="w-5 h-5 rounded-full border-4 border-white bg-slate-300 shadow-lg mb-4">
                        </span>
                        <span
                            class="font-bold text-primary text-sm">
                            2005
                        </span>
                    </button>
                    <button
                        class="history-year relative z-10 flex flex-col items-center"
                        data-year="2014">
                        <span
                            class="w-5 h-5 rounded-full border-4 border-white bg-slate-300 shadow-lg mb-4">
                        </span>
                        <span
                            class="font-bold text-primary text-sm">
                            2014
                        </span>
                    </button>
                    <button
                        class="history-year relative z-10 flex flex-col items-center"
                        data-year="2020">
                        <span
                            class="w-5 h-5 rounded-full border-4 border-white bg-slate-300 shadow-lg mb-4">
                        </span>
                        <span
                            class="font-bold text-primary text-sm">
                            2020
                        </span>
                    </button>
                    <button
                        class="history-year relative z-10 flex flex-col items-center"
                        data-year="2025">
                        <span
                            class="w-5 h-5 rounded-full border-4 border-white bg-slate-300 shadow-lg mb-4">
                        </span>
                        <span
                            class="font-bold text-primary text-sm">
                            2025
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <!-- CONTENT CARD -->
        <div
            class="grid lg:grid-cols-12 bg-slate-50 border border-slate-200 overflow-hidden">
            <!-- IMAGE -->
            <div class="lg:col-span-5">
                <img
                    id="historyImage"
                    src="./assets/img/history-1982.jpg"
                    class="w-full h-[280px] md:h-[420px] lg:h-[520px] object-cover">
            </div>
            <!-- CONTENT -->
            <div
                class="lg:col-span-7 flex items-center">
                <div
                    class="p-8 md:p-10 xl:p-14">
                    <span
                        id="historyYear"
                        class="inline-flex items-center gap-2 text-secondary text-sm font-bold uppercase tracking-[2px] mb-4">
                        1982
                    </span>
                    <h3
                        id="historyTitle"
                        class="text-primary text-3xl md:text-4xl font-black leading-tight mb-6">
                        Foundation of CIWEC
                    </h3>
                    <div
                        class="w-20 h-[3px] bg-secondary mb-8">
                    </div>
                    <p
                        id="historyDescription"
                        class="text-slate-600 text-base md:text-lg leading-8 max-w-3xl">
                        CIWEC was established in 1982 to provide western-standard
                        healthcare services to diplomats, expatriates, aid workers,
                        travelers and local communities throughout Nepal.
                    </p>
                </div>
            </div>
        </div>
        <!-- MOBILE TIMELINE -->
        <div class="lg:hidden mt-10">
            <div
                class="border-l-2 border-secondary pl-6 space-y-8">
                <div class="relative">
                    <span
                        class="absolute -left-[34px] top-1 w-4 h-4 bg-secondary rounded-full">
                    </span>
                    <h4
                        class="text-primary font-bold">
                        1982
                    </h4>
                    <p
                        class="text-slate-600 text-sm mt-1">
                        CIWEC established in Kathmandu.
                    </p>
                </div>
                <div class="relative">
                    <span
                        class="absolute -left-[34px] top-1 w-4 h-4 bg-secondary rounded-full">
                    </span>
                    <h4
                        class="text-primary font-bold">
                        2005
                    </h4>
                    <p
                        class="text-slate-600 text-sm mt-1">
                        Expanded specialist medical services.
                    </p>
                </div>
                <div class="relative">
                    <span
                        class="absolute -left-[34px] top-1 w-4 h-4 bg-secondary rounded-full">
                    </span>
                    <h4
                        class="text-primary font-bold">
                        2014
                    </h4>
                    <p
                        class="text-slate-600 text-sm mt-1">
                        Opened full-service hospital in Pokhara.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
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

<!-- Rectangular design of why ciwec -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="max-w-3xl mb-14">
            <span
                class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                <span class="w-2 h-2 bg-secondary"></span>
                Why Choose CIWEC
            </span>
            <h2
                class="text-primary text-3xl md:text-4xl xl:text-5xl font-black leading-tight mb-6">
                Trusted Healthcare For
                International Travelers
                And Local Communities
            </h2>
            <p
                class="text-slate-600 text-base md:text-lg leading-8">
                More than four decades of excellence in travel medicine,
                emergency care, diagnostics and specialist healthcare.
            </p>
        </div>
        <div class="grid xl:grid-cols-12 gap-8 xl:gap-12 items-center">
            <div class="xl:col-span-5">
                <div class="relative overflow-hidden">
                    <img
                        src="./assets/img/speciality/img1.jpg"
                        class="w-full h-[320px] md:h-[500px] object-cover">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-8">
                        <h3
                            class="text-white text-2xl font-black mb-2">
                            42+ Years
                        </h3>
                        <p
                            class="text-white/90">
                            Delivering trusted healthcare services in Nepal
                        </p>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-7">
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    <div class="group border border-slate-200 p-6 hover:border-secondary hover:-translate-y-1 transition-all duration-300">
                        <img src="./assets/img/ISO-Certified-company-logo.webp"
                            class="w-14 h-14 object-contain mb-4">
                        <h3 class="text-primary text-lg font-black mb-3">
                            ISO Certified
                        </h3>
                        <p class="text-slate-600 text-sm leading-6">
                            Internationally recognized quality standards.
                        </p>
                    </div>
                    <div class="group border border-slate-200 p-6 hover:border-secondary hover:-translate-y-1 transition-all duration-300">
                        <img src="./assets/img/consulting.webp"
                            class="w-14 h-14 object-cover mb-4">
                        <h3 class="text-primary text-lg font-black mb-3">
                            80+ Specialists
                        </h3>
                        <p class="text-slate-600 text-sm leading-6">
                            Multi-disciplinary consultant team.
                        </p>
                    </div>
                    <div class="group border border-slate-200 p-6 hover:border-secondary hover:-translate-y-1 transition-all duration-300">
                        <img src="./assets/img/42-years.webp"
                            class="w-14 h-14 object-cover mb-4">
                        <h3 class="text-primary text-lg font-black mb-3">
                            42+ Years
                        </h3>
                        <p class="text-slate-600 text-sm leading-6">
                            Experience in travel medicine.
                        </p>
                    </div>
                    <div class="group border border-slate-200 p-6 hover:border-secondary hover:-translate-y-1 transition-all duration-300">
                        <img src="./assets/img/170.webp"
                            class="w-14 h-14 object-cover mb-4">
                        <h3 class="text-primary text-lg font-black mb-3">
                            170+ Nations
                        </h3>
                        <p class="text-slate-600 text-sm leading-6">
                            Patients from around the globe.
                        </p>
                    </div>
                    <div class="group border border-slate-200 p-6 hover:border-secondary hover:-translate-y-1 transition-all duration-300">
                        <img src="./assets/img/3000.webp"
                            class="w-14 h-14 object-cover mb-4">
                        <h3 class="text-primary text-lg font-black mb-3">
                            30,000+
                        </h3>
                        <p class="text-slate-600 text-sm leading-6">
                            Insurance cases successfully handled.
                        </p>
                    </div>
                    <div class="group border border-slate-200 p-6 hover:border-secondary hover:-translate-y-1 transition-all duration-300">
                        <img src="./assets/img/circular.webp"
                            class="w-14 h-14 object-cover mb-4">
                        <h3 class="text-primary text-lg font-black mb-3">
                            35+ Years
                        </h3>
                        <p class="text-slate-600 text-sm leading-6">
                            Research in travel related illnesses.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="mt-14 grid grid-cols-2 lg:grid-cols-4 border-t border-slate-200">
            <div class="py-8 text-center">
                <h3 class="text-primary text-3xl font-black mb-2">
                    42+
                </h3>
                <p class="text-slate-600 text-sm">
                    Years Experience
                </p>
            </div>
            <div class="py-8 text-center">
                <h3 class="text-primary text-3xl font-black mb-2">
                    80+
                </h3>
                <p class="text-slate-600 text-sm">
                    Specialists
                </p>
            </div>
            <div class="py-8 text-center">
                <h3 class="text-primary text-3xl font-black mb-2">
                    170+
                </h3>
                <p class="text-slate-600 text-sm">
                    Nationalities Served
                </p>
            </div>
            <div class="py-8 text-center">
                <h3 class="text-primary text-3xl font-black mb-2">
                    24/7
                </h3>
                <p class="text-slate-600 text-sm">
                    Emergency Care
                </p>
            </div>
        </div>
    </div>
</section>

<!-- =========================
WHATS NEW SECTION
========================= -->
<!-- =========================================
    WHAT'S NEW
    ========================================= -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-12">
            <div class="max-w-3xl">
                <span
                    class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                    <span class="w-2 h-2 bg-secondary"></span>
                    What's New
                </span>
                <h2
                    class="text-primary text-3xl md:text-4xl xl:text-5xl font-black leading-tight mb-4">
                    New Services & Healthcare Innovations
                </h2>
                <p
                    class="text-gray-600 text-base md:text-lg leading-8">
                    Discover the latest healthcare services, specialist programs,
                    diagnostic facilities and patient-focused innovations at CIWEC.
                </p>
            </div>
            <a href="#"
                class="inline-flex items-center gap-3 text-primary font-bold group">
                View All Updates
                <span
                    class="w-9 h-9 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </span>
            </a>
        </div>
        <!-- GRID -->
        <div class="grid lg:grid-cols-12 gap-6">
            <!-- FEATURED CARD -->
            <div class="lg:col-span-5">
                <article
                    class="group border border-slate-200 bg-white h-full hover:border-secondary transition-all duration-500">
                    <div class="overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?q=80&w=1200"
                            alt=""
                            class="w-full h-[260px] md:h-[340px] object-cover transition duration-700 group-hover:scale-105">
                    </div>
                    <div class="p-6 md:p-8">
                        <span
                            class="text-secondary text-xs uppercase tracking-[2px] font-bold">
                            Featured Service
                        </span>
                        <h3
                            class="text-primary text-2xl md:text-3xl font-black leading-tight mt-3 mb-4">
                            Second Opinion Consultation
                        </h3>
                        <p
                            class="text-gray-600 leading-8 mb-8">
                            Get expert medical advice from experienced specialists
                            before making important treatment decisions.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-3 text-primary font-bold group">
                            Learn More
                            <span
                                class="w-9 h-9 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                                <i class="fa-solid fa-arrow-right text-xs"></i>
                            </span>
                        </a>
                    </div>
                </article>
            </div>
            <!-- RIGHT COLUMN -->
            <div class="lg:col-span-7">
                <div class="grid md:grid-cols-2 gap-6 h-full">
                    <!-- CARD -->
                    <article
                        class="border border-slate-200 p-6 md:p-8 hover:border-secondary transition-all duration-500 flex flex-col">
                        <div
                            class="w-14 h-14 bg-primary/5 text-primary flex items-center justify-center mb-6">
                            <i class="fa-solid fa-capsules text-xl"></i>
                        </div>
                        <h3
                            class="text-primary text-xl md:text-2xl font-black mb-4">
                            Buy Medicine
                        </h3>
                        <p
                            class="text-gray-600 leading-7 flex-grow">
                            Reliable medication delivered safely to your home
                            with professional pharmacy support.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-3 text-primary font-bold mt-6">
                            Learn More
                            <i class="fa-solid fa-arrow-right text-secondary"></i>
                        </a>
                    </article>
                    <!-- CARD -->
                    <article
                        class="border border-slate-200 p-6 md:p-8 hover:border-secondary transition-all duration-500 flex flex-col">
                        <div
                            class="w-14 h-14 bg-primary/5 text-primary flex items-center justify-center mb-6">
                            <i class="fa-solid fa-flask text-xl"></i>
                        </div>
                        <h3
                            class="text-primary text-xl md:text-2xl font-black mb-4">
                            Labs & Diagnostics
                        </h3>
                        <p
                            class="text-gray-600 leading-7 flex-grow">
                            Comprehensive diagnostic services powered by modern
                            equipment and expert laboratory professionals.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-3 text-primary font-bold mt-6">
                            Learn More
                            <i class="fa-solid fa-arrow-right text-secondary"></i>
                        </a>
                    </article>
                    <!-- CARD -->
                    <article
                        class="border border-slate-200 p-6 md:p-8 hover:border-secondary transition-all duration-500 flex flex-col">
                        <div
                            class="w-14 h-14 bg-primary/5 text-primary flex items-center justify-center mb-6">
                            <i class="fa-solid fa-heart-pulse text-xl"></i>
                        </div>
                        <h3
                            class="text-primary text-xl md:text-2xl font-black mb-4">
                            Health Screening
                        </h3>
                        <p
                            class="text-gray-600 leading-7 flex-grow">
                            Preventive healthcare programs tailored for
                            individuals, families and corporate clients.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-3 text-primary font-bold mt-6">
                            Learn More
                            <i class="fa-solid fa-arrow-right text-secondary"></i>
                        </a>
                    </article>
                    <!-- CARD -->
                    <article
                        class="border border-slate-200 p-6 md:p-8 hover:border-secondary transition-all duration-500 flex flex-col">
                        <div
                            class="w-14 h-14 bg-primary/5 text-primary flex items-center justify-center mb-6">
                            <i class="fa-solid fa-user-doctor text-xl"></i>
                        </div>
                        <h3
                            class="text-primary text-xl md:text-2xl font-black mb-4">
                            Specialist Care
                        </h3>
                        <p
                            class="text-gray-600 leading-7 flex-grow">
                            Access expert consultations from experienced doctors
                            across multiple medical specialties.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-3 text-primary font-bold mt-6">
                            Learn More
                            <i class="fa-solid fa-arrow-right text-secondary"></i>
                        </a>
                    </article>
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
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid xl:grid-cols-[1fr_1fr_1.2fr] gap-6 xl:gap-8 items-stretch">
            <!-- =========================
                DOCTOR 1
                ========================= -->
            <article
                class="group border border-slate-200 bg-white overflow-hidden transition-all duration-500 hover:border-secondary">
                <!-- IMAGE -->
                <div class="relative overflow-hidden">
                    <img
                        src="./assets/doctors/doc1.jpg"
                        alt=""
                        class="w-full h-[320px] md:h-[420px] object-cover transition duration-700 group-hover:scale-105">
                    <!-- BRANCH -->
                    <div
                        class="absolute left-5 top-5 bg-white px-4 py-2 border border-slate-200">
                        <span
                            class="text-primary text-xs font-bold uppercase tracking-[1px]">
                            Kathmandu
                        </span>
                    </div>
                </div>
                <!-- CONTENT -->
                <div class="p-6">
                    <h3
                        class="text-primary text-[24px] font-black leading-tight mb-2">
                        Dr. Sarah Sharma
                    </h3>
                    <p
                        class="text-secondary font-semibold mb-5">
                        Senior Consultant Physician
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-3 text-primary font-bold text-sm group">
                        View Profile
                        <span
                            class="w-8 h-8 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                            <i class="fa-solid fa-arrow-right text-[11px]"></i>
                        </span>
                    </a>
                </div>
            </article>
            <!-- =========================
                DOCTOR 2
                ========================= -->
            <article
                class="group border border-slate-200 bg-white overflow-hidden transition-all duration-500 hover:border-secondary">
                <div class="relative overflow-hidden">
                    <img
                        src="./assets/doctors/doc2.jpg"
                        alt=""
                        class="w-full h-[320px] md:h-[420px] object-cover transition duration-700 group-hover:scale-105">
                    <div
                        class="absolute left-5 top-5 bg-white px-4 py-2 border border-slate-200">
                        <span
                            class="text-primary text-xs font-bold uppercase tracking-[1px]">
                            Pokhara
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3
                        class="text-primary text-[24px] font-black leading-tight mb-2">
                        Dr. Anisha Gurung
                    </h3>
                    <p
                        class="text-secondary font-semibold mb-5">
                        Travel Medicine Specialist
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-3 text-primary font-bold text-sm group">
                        View Profile
                        <span
                            class="w-8 h-8 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                            <i class="fa-solid fa-arrow-right text-[11px]"></i>
                        </span>
                    </a>
                </div>
            </article>
            <!-- =========================
                CONTENT
                ========================= -->
            <div
                class="bg-slate-50 border border-slate-200 p-8 md:p-10 xl:p-12 flex flex-col justify-center">
                <span
                    class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-5">
                    <span class="w-2 h-2 bg-secondary"></span>
                    Meet Our Experts
                </span>
                <h2
                    class="text-primary text-3xl md:text-4xl xl:text-5xl font-black leading-tight mb-6">
                    Healthcare Professionals You Can Trust
                </h2>
                <p
                    class="text-slate-600 text-base md:text-lg leading-8 mb-8">
                    Our experienced physicians in Kathmandu and Pokhara deliver
                    evidence-based healthcare, travel medicine expertise,
                    preventive care and specialist consultations for patients
                    from Nepal and around the world.
                </p>
                <div>
                    <a href="#"
                        class="btn-primary">
                        View All Doctors
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
        <!-- STORIES GRID -->

        <div class="hidden xl:grid grid-cols-12 gap-6">

            <!-- FEATURED STORY -->

            <div class="col-span-6">

                <div class="story-card h-[620px]"
                    data-video="./assets/vdo/banner.mp4">

                    <img
                        src="./assets/img/speciality/img9.jpg"
                        class="story-image">

                    <div class="story-overlay"></div>

                    <button class="story-play-btn">
                        <i class="fa-solid fa-play"></i>
                    </button>

                    <div class="story-content">

                        <span
                            class="inline-block px-3 py-1 bg-secondary text-white text-xs font-semibold uppercase tracking-[1px] mb-4">

                            Featured Story

                        </span>

                        <h3 class="story-title !text-[34px]">
                            Pre-Term Babies
                        </h3>

                        <p class="story-subtitle">
                            Ms Sakshi
                        </p>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="col-span-6">

                <div class="grid grid-cols-2 gap-6 h-full">

                    <!-- CARD -->

                    <div class="story-card h-[300px]"
                        data-video="./assets/vdo/banner.mp4">

                        <img
                            src="./assets/img/speciality/img8.jpg"
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

                    <div class="story-card h-[300px]"
                        data-video="./assets/vdo/banner.mp4">

                        <img
                            src="./assets/img/speciality/img10.jpg"
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

                    <div class="story-card h-[300px]"
                        data-video="./assets/vdo/banner.mp4">

                        <img
                            src="./assets/img/speciality/img1.jpg"
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
                                Mr Haider
                            </p>

                        </div>

                    </div>

                    <div class="story-card h-[300px]"
                        data-video="./assets/vdo/banner.mp4">

                        <img
                            src="./assets/img/speciality/img11.jpg"
                            class="story-image">

                        <div class="story-overlay"></div>

                        <button class="story-play-btn">
                            <i class="fa-solid fa-play"></i>
                        </button>

                        <div class="story-content">

                            <h3 class="story-title">
                                Kidney Donation
                            </h3>

                            <p class="story-subtitle">
                                Ms Paluk Sunger
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- =====================================================
            MOBILE / TABLET SLIDER
            ===================================================== -->
        <div class="xl:hidden">

            <div class="swiper patientStoriesSwiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">

                        <div class="story-card h-[420px]"
                            data-video="./assets/vdo/banner.mp4">

                            <img
                                src="./assets/img/speciality/img9.jpg"
                                class="story-image">

                            <div class="story-overlay"></div>

                            <button class="story-play-btn">
                                <i class="fa-solid fa-play"></i>
                            </button>

                            <div class="story-content">

                                <h3 class="story-title">
                                    Pre-Term Babies
                                </h3>

                                <p class="story-subtitle">
                                    Ms Sakshi
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="patient-story-pagination mt-8"></div>

            </div>

        </div>

    </div>
</section>

<!-- =====================================================
    VIDEO MODAL
    ===================================================== -->
<div
    id="videoModal"
    class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/90 p-4">

    <div
        class="relative w-full max-w-6xl">

        <!-- CLOSE -->

        <button
            id="closeVideoModal"
            class="absolute -top-14 right-0 w-11 h-11 bg-white text-primary hover:bg-secondary hover:text-white transition-all duration-300">

            <i class="fa-solid fa-xmark text-lg"></i>

        </button>

        <!-- VIDEO -->

        <video
            id="storyVideo"
            controls
            playsinline
            class="w-full h-[75vh] aspect-video bg-black">

        </video>

    </div>

</div>

<!-- Statistics section -->
<section class="section-padding bg-white overflow-hidden">
    <div class="container-custom">
        <div class="grid xl:grid-cols-2 gap-12 xl:gap-20 items-center">
            <!-- LEFT -->
            <div>
                <span
                    class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                    <span class="w-2 h-2 bg-secondary"></span>
                    Trusted Worldwide
                </span>
                <h2
                    class="text-primary text-3xl md:text-4xl xl:text-5xl font-black leading-tight mb-6">
                    Delivering Quality Healthcare To Patients Across The Globe
                </h2>
                <p
                    class="text-slate-600 text-base md:text-lg leading-8 mb-8 max-w-2xl">
                    CIWEC Hospital has served international travelers,
                    diplomats, aid workers, expatriates and local communities
                    for over four decades with trusted healthcare services
                    built on international standards and medical excellence.
                </p>
                <div
                    class="flex flex-wrap gap-4">
                    <a href="#"
                        class="border border-primary text-white font-bold px-7 py-4 bg-primary hover:bg-secondary hover:text-white transition-all duration-300">
                        Learn More
                    </a>
                    <a href="#"
                        class="border border-primary text-primary font-bold px-7 py-4 hover:bg-primary hover:text-white transition-all duration-300">
                        Contact Us
                    </a>
                </div>
            </div>
            <!-- RIGHT -->
            <div class="relative">
                <!-- GLOW -->
                <div
                    class="absolute inset-0 bg-primary/5 blur-3xl">
                </div>
                <img
                    src="./assets/img/world-map.svg"
                    alt="World Map"
                    class="relative z-10 w-full max-w-[700px] mx-auto">
                <!-- NEPAL -->
                <div
                    class="absolute top-[37%] left-[71%] z-20">
                    <span
                        class="absolute inset-0 w-5 h-5 bg-secondary rounded-full animate-ping">
                    </span>
                    <span
                        class="relative block w-5 h-5 bg-secondary rounded-full shadow-[0_0_20px_rgba(220,38,38,.6)]">
                    </span>
                </div>
            </div>
        </div>
        <!-- STATS -->
        <div
            class="grid grid-cols-2 xl:grid-cols-4 gap-5 mt-16 xl:mt-20">
            <!-- ITEM -->
            <div
                class="border border-slate-200 bg-white p-6 md:p-8 text-center hover:border-secondary transition-all duration-300">
                <h3
                    class="counter text-primary text-3xl md:text-5xl font-black"
                    data-target="20000">
                    0
                </h3>
                <p
                    class="text-slate-600 mt-3 text-sm md:text-base">
                    International Patients
                </p>
            </div>
            <!-- ITEM -->
            <div
                class="border border-slate-200 bg-white p-6 md:p-8 text-center hover:border-secondary transition-all duration-300">
                <h3
                    class="counter text-primary text-3xl md:text-5xl font-black"
                    data-target="130">
                    0
                </h3>
                <p
                    class="text-slate-600 mt-3 text-sm md:text-base">
                    Countries Served
                </p>
            </div>
            <!-- ITEM -->
            <div
                class="border border-slate-200 bg-white p-6 md:p-8 text-center hover:border-secondary transition-all duration-300">
                <h3
                    class="counter text-primary text-3xl md:text-5xl font-black"
                    data-target="40">
                    0
                </h3>
                <p
                    class="text-slate-600 mt-3 text-sm md:text-base">
                    Years Of Excellence
                </p>
            </div>
            <!-- ITEM -->
            <div
                class="border border-slate-200 bg-white p-6 md:p-8 text-center hover:border-secondary transition-all duration-300">
                <h3
                    class="counter text-primary text-3xl md:text-5xl font-black"
                    data-target="2">
                    0
                </h3>
                <p
                    class="text-slate-600 mt-3 text-sm md:text-base">
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
<section class="section-padding bg-slate-50 overflow-hidden">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-12">
            <div class="max-w-3xl">
                <span
                    class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                    <span class="w-2 h-2 bg-secondary"></span>
                    Patient Feedback
                </span>
                <h2
                    class="text-primary text-3xl md:text-4xl xl:text-5xl font-black leading-tight mb-4">
                    What Our Patients Say
                </h2>
                <p
                    class="text-slate-600 text-base md:text-lg leading-8">
                    Trusted by travelers, expatriates, diplomats and local
                    communities for over four decades.
                </p>
            </div>
            <!-- GOOGLE RATING -->
            <div
                class="border border-slate-200 bg-white px-6 py-5">
                <div class="flex items-center gap-4">
                    <!-- <i
                        class="fa-brands fa-google text-[40px] text-[#4285F4]">
                    </i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-10 h-10">
                        <path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303C33.655 32.657 29.203 36 24 36c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.277 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z" />
                        <path fill="#FF3D00" d="M6.306 14.691l6.571 4.819C14.655 16.108 18.961 13 24 13c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.277 4 24 4 16.318 4 9.656 8.337 6.306 14.691z" />
                        <path fill="#4CAF50" d="M24 44c5.176 0 9.86-1.977 13.409-5.192l-6.19-5.238C29.143 35.091 26.715 36 24 36c-5.181 0-9.625-3.327-11.287-7.946l-6.522 5.025C9.507 39.556 16.227 44 24 44z" />
                        <path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303c-.792 2.237-2.231 4.166-4.084 5.57l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z" />
                    </svg>
                    <div>
                        <div
                            class="flex text-[#f59e0b] text-lg mb-1">
                            ★★★★★
                        </div>
                        <div
                            class="text-primary font-black text-xl">
                            4.9/5 Rating
                        </div>
                        <div
                            class="text-slate-500 text-sm">
                            Based on Google Reviews
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- REVIEWS -->
        <div class="swiper reviewSwiper">
            <div class="swiper-wrapper">
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/men/32.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Joris Van Dorpe
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Thank you so much CIWEC Hospital for all your amazing care.
                            All of the staff was super friendly and made me feel
                            at home immediately.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/women/32.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Ashley Hagaman
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Dr Sandee Gupta cared for me when I took a fall
                            hiking in the Himalayas. He was very professional
                            and showed great concern.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/men/45.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Andrew Attard
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Excellent care and support from the whole medical
                            team. The experience was extremely professional
                            from start to finish.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/men/32.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Joris Van Dorpe
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Thank you so much CIWEC Hospital for all your amazing care.
                            All of the staff was super friendly and made me feel
                            at home immediately.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/women/32.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Ashley Hagaman
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Dr Sandee Gupta cared for me when I took a fall
                            hiking in the Himalayas. He was very professional
                            and showed great concern.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/men/45.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Andrew Attard
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Excellent care and support from the whole medical
                            team. The experience was extremely professional
                            from start to finish.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/men/32.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Joris Van Dorpe
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Thank you so much CIWEC Hospital for all your amazing care.
                            All of the staff was super friendly and made me feel
                            at home immediately.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>
                <!-- REVIEW -->
                <div class="swiper-slide">
                    <article
                        class="group h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300">
                        <div class="flex items-center gap-4 mb-6">
                            <img
                                src="https://randomuser.me/api/portraits/men/45.jpg"
                                class="w-16 h-16 object-cover">
                            <div>
                                <h3
                                    class="text-primary text-lg font-bold">
                                    Andrew Attard
                                </h3>
                                <div
                                    class="text-[#f59e0b] text-sm">
                                    ★★★★★
                                </div>
                            </div>
                        </div>
                        <p
                            class="text-slate-600 leading-8 mb-6">
                            Excellent care and support from the whole medical
                            team. The experience was extremely professional
                            from start to finish.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold text-sm">
                            Read Full Story
                            <i
                                class="fa-solid fa-arrow-right text-secondary">
                            </i>
                        </a>
                    </article>
                </div>

            </div>
            <!-- PAGINATION -->
            <div class="review-pagination mt-10"></div>
        </div>
    </div>
</section>


<!-- Award section -->
<section class="section-padding bg-slate-50">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="max-w-3xl mb-12">
            <span
                class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                <span class="w-2 h-2 bg-secondary"></span>
                Recognition & Excellence
            </span>
            <h2
                class="text-primary text-3xl md:text-4xl xl:text-5xl font-black leading-tight mb-4">
                Awards & Recognitions
            </h2>
            <p
                class="text-slate-600 text-base md:text-lg leading-8">
                CIWEC Hospital has received national and international
                recognition for excellence in healthcare, travel medicine
                and patient-centered services.
            </p>
        </div>
        <!-- SWIPER -->
        <div class="swiper awardSwiper">
            <div class="swiper-wrapper">
                <!-- CARD -->
                <div class="swiper-slide h-auto">
                    <article
                        class="h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300 flex flex-col">
                        <!-- TOP -->
                        <div class="flex items-center justify-between mb-8">
                            <div
                                class="w-14 h-14 bg-primary/5 flex items-center justify-center">
                                <i
                                    class="fa-solid fa-award text-primary text-2xl">
                                </i>
                            </div>
                            <span
                                class="text-secondary text-2xl font-black">
                                2025
                            </span>
                        </div>
                        <!-- CONTENT -->
                        <h3
                            class="text-primary text-2xl font-black leading-tight mb-4">
                            Best Travel Medicine Hospital
                        </h3>
                        <p
                            class="text-slate-600 leading-8 flex-grow">
                            Recognized for excellence in travel medicine,
                            preventive healthcare and international patient care.
                        </p>
                        <!-- ORGANIZATION -->
                        <div
                            class="mt-8 pt-6 border-t border-slate-200">
                            <span
                                class="text-sm font-semibold text-primary">
                                International Healthcare Forum
                            </span>
                        </div>
                    </article>
                </div>
                <!-- CARD -->
                <div class="swiper-slide h-auto">
                    <article
                        class="h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300 flex flex-col">
                        <div class="flex items-center justify-between mb-8">
                            <div
                                class="w-14 h-14 bg-primary/5 flex items-center justify-center">
                                <i
                                    class="fa-solid fa-trophy text-primary text-2xl">
                                </i>
                            </div>
                            <span
                                class="text-secondary text-2xl font-black">
                                2024
                            </span>
                        </div>
                        <h3
                            class="text-primary text-2xl font-black leading-tight mb-4">
                            Healthcare Excellence Award
                        </h3>
                        <p
                            class="text-slate-600 leading-8 flex-grow">
                            Awarded for delivering exceptional healthcare
                            services, patient safety and innovation.
                        </p>
                        <div
                            class="mt-8 pt-6 border-t border-slate-200">
                            <span
                                class="text-sm font-semibold text-primary">
                                Nepal Medical Association
                            </span>
                        </div>
                    </article>
                </div>
                <!-- CARD -->
                <div class="swiper-slide h-auto">
                    <article
                        class="h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300 flex flex-col">
                        <div class="flex items-center justify-between mb-8">
                            <div
                                class="w-14 h-14 bg-primary/5 flex items-center justify-center">
                                <i
                                    class="fa-solid fa-medal text-primary text-2xl">
                                </i>
                            </div>
                            <span
                                class="text-secondary text-2xl font-black">
                                2023
                            </span>
                        </div>
                        <h3
                            class="text-primary text-2xl font-black leading-tight mb-4">
                            International Patient Care Recognition
                        </h3>
                        <p
                            class="text-slate-600 leading-8 flex-grow">
                            Honored for outstanding services to international
                            travelers, expatriates and aid organizations.
                        </p>
                        <div
                            class="mt-8 pt-6 border-t border-slate-200">
                            <span
                                class="text-sm font-semibold text-primary">
                                Global Health Network
                            </span>
                        </div>
                    </article>
                </div>
                <!-- CARD -->
                <div class="swiper-slide h-auto">
                    <article
                        class="h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300 flex flex-col">
                        <div class="flex items-center justify-between mb-8">
                            <div
                                class="w-14 h-14 bg-primary/5 flex items-center justify-center">
                                <i
                                    class="fa-solid fa-trophy text-primary text-2xl">
                                </i>
                            </div>
                            <span
                                class="text-secondary text-2xl font-black">
                                2024
                            </span>
                        </div>
                        <h3
                            class="text-primary text-2xl font-black leading-tight mb-4">
                            Healthcare Excellence Award
                        </h3>
                        <p
                            class="text-slate-600 leading-8 flex-grow">
                            Awarded for delivering exceptional healthcare
                            services, patient safety and innovation.
                        </p>
                        <div
                            class="mt-8 pt-6 border-t border-slate-200">
                            <span
                                class="text-sm font-semibold text-primary">
                                Nepal Medical Association
                            </span>
                        </div>
                    </article>
                </div>
                <!-- CARD -->
                <div class="swiper-slide h-auto">
                    <article
                        class="h-full bg-white border border-slate-200 p-8 hover:border-secondary transition-all duration-300 flex flex-col">
                        <div class="flex items-center justify-between mb-8">
                            <div
                                class="w-14 h-14 bg-primary/5 flex items-center justify-center">
                                <i
                                    class="fa-solid fa-medal text-primary text-2xl">
                                </i>
                            </div>
                            <span
                                class="text-secondary text-2xl font-black">
                                2023
                            </span>
                        </div>
                        <h3
                            class="text-primary text-2xl font-black leading-tight mb-4">
                            International Patient Care Recognition
                        </h3>
                        <p
                            class="text-slate-600 leading-8 flex-grow">
                            Honored for outstanding services to international
                            travelers, expatriates and aid organizations.
                        </p>
                        <div
                            class="mt-8 pt-6 border-t border-slate-200">
                            <span
                                class="text-sm font-semibold text-primary">
                                Global Health Network
                            </span>
                        </div>
                    </article>
                </div>
            </div>
            <!-- PAGINATION -->
            <!-- <div class="award-pagination mt-10"></div> -->
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
<section class="section-padding bg-white overflow-hidden">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
            <div class="max-w-3xl">
                <span
                    class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                    <span class="w-2 h-2 bg-secondary"></span>
                    Publications
                </span>
                <h2
                    class="text-primary text-3xl md:text-4xl xl:text-5xl font-black leading-tight mb-4">
                    Newsletters & Health Publications
                </h2>
                <p
                    class="text-slate-600 text-base md:text-lg leading-8">
                    Explore healthcare updates, travel medicine insights,
                    research publications and hospital newsletters.
                </p>
            </div>
            <a href="#"
                class="inline-flex items-center gap-3 text-primary font-bold group">
                View All Publications
                <span
                    class="w-9 h-9 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </span>
            </a>
        </div>
        <!-- FILTER BAR -->
        <div
            class="border border-slate-200 bg-slate-50 p-5 md:p-6 mb-6">
            <div
                class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5">
                <!-- LEFT -->
                <div
                    class="flex items-center gap-3">
                    <span
                        class="text-sm font-semibold text-primary">
                        Show
                    </span>
                    <select
                        id="perPage"
                        class="h-11 px-4 border border-slate-300 bg-white text-sm text-slate-700 focus:border-secondary outline-none">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                    <span
                        class="text-sm text-slate-600">
                        entries
                    </span>
                </div>
                <!-- SEARCH -->
                <div
                    class="relative w-full lg:w-[320px]">
                    <input
                        type="text"
                        id="searchInput"
                        placeholder="Search publications..."
                        class="w-full h-11 pl-11 pr-4 border border-slate-300 bg-white text-sm outline-none focus:border-secondary">
                    <i
                        class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                    </i>
                </div>
            </div>
        </div>
        <!-- LOADER -->
        <div
            id="newsletterLoader"
            class="hidden py-12">
            <div
                class="w-12 h-12 border-[3px]
                border-slate-200
                border-t-secondary
                rounded-full
                animate-spin
                mx-auto">
            </div>
        </div>
        <!-- CONTENT -->
        <div id="newsletterContent">
            <!-- TABLE -->
            <div
                class="overflow-x-auto border border-slate-200 bg-white">
                <table class="w-full">
                    <thead>
                        <tr
                            class="bg-primary text-white">
                            <th
                                class="px-5 py-4 text-left text-sm font-bold uppercase tracking-wide">
                                #
                            </th>
                            <th
                                class="px-5 py-4 text-left text-sm font-bold uppercase tracking-wide">
                                Publication Title
                            </th>
                            <th
                                class="px-5 py-4 text-center text-sm font-bold uppercase tracking-wide">
                                Download
                            </th>
                        </tr>
                    </thead>
                    <tbody id="newsletterTable">
                        <!-- AJAX DATA -->
                    </tbody>
                </table>
            </div>
            <!-- PAGINATION -->
            <div
                id="newsletterPagination"
                class="flex flex-wrap justify-center gap-2 mt-8">
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
                <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
                    <td class="px-5 py-4 font-semibold text-primary">
                        1
                    </td>
                    <td class="px-5 py-4 text-slate-700">
                        CIWEC Healthcare Newsletter 2025
                    </td>
                    <td class="px-5 py-4 text-center">
                        <a href="#"
                            class="inline-flex items-center gap-2 text-primary font-semibold hover:text-secondary transition">
                        <i class="fa-solid fa-file-pdf text-secondary"></i>
                        Download
                        </a>
                    </td>
                </tr>
            `;
            return;
        }

        data.forEach((item, index) => {
            table.innerHTML += `
            <tr class="border-b border-slate-200 hover:bg-slate-50 transition">
                <td class="px-5 py-4 font-semibold text-primary">
                   ${index + 1}
                </td>
                <td class="px-5 py-4 text-slate-700">
                     ${item.title}
                </td>
                <td class="px-5 py-4 text-center">
                    <a href="${item.file}"
                        class="inline-flex items-center gap-2 text-primary font-semibold hover:text-secondary transition">
                    <i class="fa-solid fa-file-pdf text-secondary"></i>
                    Download
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
                class="
                    min-w-[42px]
                    h-[42px]
                    px-4
                    text-sm
                    font-semibold
                    transition-all
                    duration-300
                    ${currentPage === i
                        ? `
                            bg-primary
                            text-white
                            border
                            border-primary
                        `
                        : `
                            bg-white
                            text-primary
                            border
                            border-slate-300
                            hover:border-secondary
                            hover:text-secondary
                        `
                    }
                "
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

<?php include './include/footer.php'; ?>