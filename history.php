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
                Our History
            </h1>
            <div class="flex items-center justify-center gap-2 text-white/90">
                <a href="index.php" class="hover:text-secondary">
                Home
                </a>
                <i class="fa-solid fa-angle-right text-xs"></i>
                <span class="text-secondary">
                Our History
                </span>
            </div>
        </div>
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
<!-- ========================================= -->
<!-- CIWEC AT A GLANCE -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
    <div class="container-custom">
        <!-- HEADING -->
        <div class="text-center mb-16">
            <span class="section-subtitle">
            CIWEC At A Glance
            </span>
            <h2 class="section-title">
                Four Decades Of Healthcare Excellence
            </h2>
            <p
                class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                From a small travel medicine clinic established in 1982
                to one of Nepal's most trusted international healthcare
                institutions, CIWEC Hospital continues to set benchmarks
                in quality healthcare, research and patient care.
            </p>
        </div>
        <!-- STATS -->
        <div
            class="grid
            md:grid-cols-2
            xl:grid-cols-4
            gap-8">
            <!-- ITEM -->
            <div
                class="group
                bg-slate-50
                border
                border-slate-200
                p-8
                text-center
                hover:border-secondary
                hover:-translate-y-2
                transition-all duration-500">
                <div
                    class="w-20 h-20
                    mx-auto
                    bg-primary/5
                    rounded-full
                    flex
                    items-center
                    justify-center
                    mb-6">
                    <i
                        class="fa-regular fa-calendar-check
                        text-primary
                        text-3xl">
                    </i>
                </div>
                <h3
                    class="text-primary
                    text-5xl
                    font-black
                    counter"
                    data-target="42">
                    42+
                </h3>
                <p
                    class="text-slate-600
                    mt-4
                    font-medium">
                    Years Of Excellence
                </p>
            </div>
            <!-- ITEM -->
            <div
                class="group
                bg-slate-50
                border
                border-slate-200
                p-8
                text-center
                hover:border-secondary
                hover:-translate-y-2
                transition-all duration-500">
                <div
                    class="w-20 h-20
                    mx-auto
                    bg-primary/5
                    rounded-full
                    flex
                    items-center
                    justify-center
                    mb-6">
                    <i
                        class="fa-solid fa-earth-americas
                        text-primary
                        text-3xl">
                    </i>
                </div>
                <h3
                    class="text-primary
                    text-5xl
                    font-black">
                    170+
                </h3>
                <p
                    class="text-slate-600
                    mt-4
                    font-medium">
                    Nationalities Served
                </p>
            </div>
            <!-- ITEM -->
            <div
                class="group
                bg-slate-50
                border
                border-slate-200
                p-8
                text-center
                hover:border-secondary
                hover:-translate-y-2
                transition-all duration-500">
                <div
                    class="w-20 h-20
                    mx-auto
                    bg-primary/5
                    rounded-full
                    flex
                    items-center
                    justify-center
                    mb-6">
                    <i
                        class="fa-solid fa-user-doctor
                        text-primary
                        text-3xl">
                    </i>
                </div>
                <h3
                    class="text-primary
                    text-5xl
                    font-black">
                    80+
                </h3>
                <p
                    class="text-slate-600
                    mt-4
                    font-medium">
                    Medical Specialists
                </p>
            </div>
            <!-- ITEM -->
            <div
                class="group
                bg-primary
                text-white
                p-8
                text-center
                relative
                overflow-hidden
                hover:-translate-y-2
                transition-all duration-500">
                <div
                    class="absolute
                    top-0
                    right-0
                    w-24
                    h-24
                    bg-secondary/20
                    rounded-full
                    translate-x-10
                    -translate-y-10">
                </div>
                <div
                    class="w-20 h-20
                    mx-auto
                    bg-white/10
                    rounded-full
                    flex
                    items-center
                    justify-center
                    mb-6">
                    <i
                        class="fa-solid fa-hospital
                        text-white
                        text-3xl">
                    </i>
                </div>
                <h3
                    class="text-5xl
                    font-black">
                    2
                </h3>
                <p
                    class="text-white/80
                    mt-4
                    font-medium">
                    Hospital Locations
                </p>
            </div>
        </div>
        <!-- HIGHLIGHT BAR -->
        <div
            class="mt-16
            bg-primary
            text-white
            p-8
            lg:p-10">
            <div
                class="grid
                md:grid-cols-3
                gap-8
                items-center">
                <div>
                    <h3
                        class="text-secondary
                        text-3xl
                        font-black
                        mb-3">
                        Travel Medicine Leaders
                    </h3>
                    <p
                        class="text-white/80
                        leading-7">
                        Internationally recognized expertise
                        in travel, expedition and altitude medicine.
                    </p>
                </div>
                <div>
                    <h3
                        class="text-secondary
                        text-3xl
                        font-black
                        mb-3">
                        Research Excellence
                    </h3>
                    <p
                        class="text-white/80
                        leading-7">
                        Contributing to global healthcare
                        through research and innovation.
                    </p>
                </div>
                <div>
                    <h3
                        class="text-secondary
                        text-3xl
                        font-black
                        mb-3">
                        International Standards
                    </h3>
                    <p
                        class="text-white/80
                        leading-7">
                        Delivering quality healthcare
                        trusted by patients worldwide.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================================= -->
<!-- GROWTH THROUGH THE YEARS -->
<!-- ========================================= -->
<section class="section-padding bg-slate-50 overflow-hidden">
    <div class="container-custom">
        <!-- HEADING -->
        <div class="text-center mb-20">
            <span class="section-subtitle">
            Evolution Of CIWEC
            </span>
            <h2 class="section-title">
                Growing With Purpose
            </h2>
            <p
                class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                Over four decades, CIWEC has continuously evolved
                from a specialized travel medicine clinic into a
                comprehensive healthcare institution trusted by
                patients from around the world.
            </p>
        </div>
        <!-- JOURNEY -->
        <div class="space-y-24">
            <!-- ROW 1 -->
            <div
                class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div
                        class="inline-flex
                        items-center
                        bg-primary
                        text-white
                        px-5 py-2
                        font-bold
                        mb-6">
                        1982
                    </div>
                    <h3
                        class="text-primary
                        text-3xl
                        font-black
                        mb-6">
                        Humble Beginnings
                    </h3>
                    <p
                        class="text-slate-600
                        leading-8">
                        CIWEC was founded to provide high-quality
                        healthcare services for diplomats,
                        expatriates, aid workers and travelers
                        visiting Nepal.
                    </p>
                </div>
                <div>
                    <img
                        src="./assets/img/history-1982.jpg"
                        class="w-full
                        h-[400px]
                        object-cover
                        shadow-lg">
                </div>
            </div>
            <!-- ROW 2 -->
            <div
                class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="lg:order-2">
                    <div
                        class="inline-flex
                        items-center
                        bg-secondary
                        text-white
                        px-5 py-2
                        font-bold
                        mb-6">
                        2000
                    </div>
                    <h3
                        class="text-primary
                        text-3xl
                        font-black
                        mb-6">
                        Expanding Medical Services
                    </h3>
                    <p
                        class="text-slate-600
                        leading-8">
                        Growing demand led to the expansion of
                        healthcare services, introducing broader
                        medical specialties and enhanced patient care.
                    </p>
                </div>
                <div class="lg:order-1">
                    <img
                        src="./assets/img/history-2000.jpg"
                        class="w-full
                        h-[400px]
                        object-cover
                        shadow-lg">
                </div>
            </div>
            <!-- ROW 3 -->
            <div
                class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div
                        class="inline-flex
                        items-center
                        bg-primary
                        text-white
                        px-5 py-2
                        font-bold
                        mb-6">
                        2014
                    </div>
                    <h3
                        class="text-primary
                        text-3xl
                        font-black
                        mb-6">
                        Opening Of Pokhara Hospital
                    </h3>
                    <p
                        class="text-slate-600
                        leading-8">
                        CIWEC expanded its reach by establishing a
                        fully equipped hospital in Pokhara, bringing
                        quality healthcare services closer to western Nepal.
                    </p>
                </div>
                <div>
                    <img
                        src="./assets/img/history-2014.jpg"
                        class="w-full
                        h-[400px]
                        object-cover
                        shadow-lg">
                </div>
            </div>
            <!-- ROW 4 -->
            <div
                class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="lg:order-2">
                    <div
                        class="inline-flex
                        items-center
                        bg-secondary
                        text-white
                        px-5 py-2
                        font-bold
                        mb-6">
                        Today
                    </div>
                    <h3
                        class="text-primary
                        text-3xl
                        font-black
                        mb-6">
                        A Trusted Global Healthcare Partner
                    </h3>
                    <p
                        class="text-slate-600
                        leading-8">
                        Today CIWEC serves patients from more than
                        170 nationalities and continues to be a
                        leader in travel medicine, research,
                        preventive healthcare and international
                        healthcare services.
                    </p>
                </div>
                <div class="lg:order-1">
                    <img
                        src="./assets/img/history-today.jpg"
                        class="w-full
                        h-[400px]
                        object-cover
                        shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================================= -->
<!-- HISTORICAL GALLERY -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
    <div class="container-custom">
        <!-- HEADING -->
        <div class="text-center mb-16">
            <span class="section-subtitle">
            Historical Gallery
            </span>
            <h2 class="section-title">
                Moments That Shaped CIWEC
            </h2>
            <p
                class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                A visual journey through the milestones,
                achievements and memorable moments that
                have defined CIWEC Hospital over the years.
            </p>
        </div>
        <!-- GALLERY -->
        <div
            class="grid
            md:grid-cols-2
            xl:grid-cols-4
            gap-6">
            <!-- IMAGE 1 -->
            <div
                class="group
                relative
                overflow-hidden
                h-[320px]">
                <img
                    src="./assets/img/history-gallery-1.jpg"
                    class="w-full h-full object-cover
                    transition-all duration-700
                    group-hover:scale-110">
                <div
                    class="absolute inset-0
                    bg-gradient-to-t
                    from-primary
                    via-primary/60
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
                    1982
                    </span>
                    <h3
                        class="text-white
                        font-black
                        text-xl
                        mt-2">
                        Foundation Of CIWEC
                    </h3>
                </div>
            </div>
            <!-- IMAGE 2 -->
            <div
                class="group
                relative
                overflow-hidden
                h-[320px]">
                <img
                    src="./assets/img/history-gallery-2.jpg"
                    class="w-full h-full object-cover
                    transition-all duration-700
                    group-hover:scale-110">
                <div
                    class="absolute inset-0
                    bg-gradient-to-t
                    from-primary
                    via-primary/60
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
                    1995
                    </span>
                    <h3
                        class="text-white
                        font-black
                        text-xl
                        mt-2">
                        Expanding Medical Services
                    </h3>
                </div>
            </div>
            <!-- LARGE IMAGE -->
            <div
                class="group
                relative
                overflow-hidden
                h-[320px]
                md:col-span-2">
                <img
                    src="./assets/img/history-gallery-3.jpg"
                    class="w-full h-full object-cover
                    transition-all duration-700
                    group-hover:scale-110">
                <div
                    class="absolute inset-0
                    bg-gradient-to-t
                    from-primary
                    via-primary/60
                    to-transparent">
                </div>
                <div
                    class="absolute
                    bottom-0
                    left-0
                    p-8">
                    <span
                        class="text-secondary
                        font-bold">
                    2005
                    </span>
                    <h3
                        class="text-white
                        font-black
                        text-3xl
                        mt-2">
                        International Recognition
                    </h3>
                    <p
                        class="text-white/80
                        mt-4
                        max-w-xl">
                        Recognition as one of South Asia's
                        leading travel medicine centers.
                    </p>
                </div>
            </div>
            <!-- IMAGE 4 -->
            <div
                class="group
                relative
                overflow-hidden
                h-[320px]
                md:col-span-2">
                <img
                    src="./assets/img/history-gallery-4.jpg"
                    class="w-full h-full object-cover
                    transition-all duration-700
                    group-hover:scale-110">
                <div
                    class="absolute inset-0
                    bg-gradient-to-t
                    from-primary
                    via-primary/60
                    to-transparent">
                </div>
                <div
                    class="absolute
                    bottom-0
                    left-0
                    p-8">
                    <span
                        class="text-secondary
                        font-bold">
                    2014
                    </span>
                    <h3
                        class="text-white
                        font-black
                        text-3xl
                        mt-2">
                        CIWEC Pokhara Opens
                    </h3>
                    <p
                        class="text-white/80
                        mt-4
                        max-w-xl">
                        Expanding healthcare access to western Nepal.
                    </p>
                </div>
            </div>
            <!-- IMAGE 5 -->
            <div
                class="group
                relative
                overflow-hidden
                h-[320px]">
                <img
                    src="./assets/img/history-gallery-5.jpg"
                    class="w-full h-full object-cover
                    transition-all duration-700
                    group-hover:scale-110">
                <div
                    class="absolute inset-0
                    bg-gradient-to-t
                    from-primary
                    via-primary/60
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
                    Today
                    </span>
                    <h3
                        class="text-white
                        font-black
                        text-xl
                        mt-2">
                        World-Class Healthcare
                    </h3>
                </div>
            </div>
            <!-- IMAGE 6 -->
            <div
                class="group
                relative
                overflow-hidden
                h-[320px]">
                <img
                    src="./assets/img/history-gallery-6.jpg"
                    class="w-full h-full object-cover
                    transition-all duration-700
                    group-hover:scale-110">
                <div
                    class="absolute inset-0
                    bg-gradient-to-t
                    from-primary
                    via-primary/60
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
                    Future
                    </span>
                    <h3
                        class="text-white
                        font-black
                        text-xl
                        mt-2">
                        Continuing Innovation
                    </h3>
                </div>
            </div>
        </div>
        <!-- QUOTE -->
        <div
            class="mt-20
            bg-slate-50
            border-l-4
            border-secondary
            p-10
            max-w-5xl
            mx-auto">
            <p
                class="text-xl
                md:text-2xl
                italic
                text-slate-700
                leading-10
                text-center">
                "Every photograph tells a story of dedication,
                innovation and our unwavering commitment to
                providing exceptional healthcare services."
            </p>
        </div>
    </div>
</section>
<!-- ========================================= -->
<!-- LEGACY & FUTURE VISION -->
<!-- ========================================= -->
<section class="section-padding bg-slate-50 overflow-hidden">
    <div class="container-custom">
        <!-- HEADING -->
        <div class="text-center mb-20">
            <span class="section-subtitle">
            Looking Back & Moving Forward
            </span>
            <h2 class="section-title">
                Our Legacy & Future Vision
            </h2>
            <p
                class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                While our history reflects decades of dedication and
                healthcare excellence, our future is focused on
                innovation, research and expanding access to
                world-class healthcare services.
            </p>
        </div>
        <!-- CONTENT -->
        <div
            class="grid
            lg:grid-cols-2
            gap-10">
            <!-- LEGACY -->
            <div
                class="group
                relative
                bg-white
                border
                border-slate-200
                p-10
                hover:border-secondary
                hover:-translate-y-2
                transition-all duration-500">
                <div
                    class="absolute
                    top-0
                    left-0
                    w-full
                    h-1
                    bg-primary">
                </div>
                <div
                    class="w-20 h-20
                    bg-primary/5
                    flex
                    items-center
                    justify-center
                    mb-8">
                    <i
                        class="fa-solid fa-landmark
                        text-primary
                        text-3xl">
                    </i>
                </div>
                <span
                    class="text-primary
                    font-bold
                    uppercase
                    tracking-wider">
                Our Legacy
                </span>
                <h3
                    class="text-primary
                    text-3xl
                    font-black
                    mt-4
                    mb-6">
                    Four Decades Of Trust
                </h3>
                <p
                    class="text-slate-600
                    leading-8">
                    Since 1982, CIWEC Hospital has earned a reputation
                    for excellence in travel medicine, preventive care,
                    emergency medical services and international healthcare.
                </p>
                <p
                    class="text-slate-600
                    leading-8
                    mt-6">
                    Thousands of travelers, diplomats, aid workers,
                    expatriates and local communities have trusted
                    CIWEC for compassionate and evidence-based healthcare.
                </p>
                <!-- STATS -->
                <div
                    class="grid
                    grid-cols-2
                    gap-6
                    mt-10">
                    <div>
                        <h4
                            class="text-primary
                            text-4xl
                            font-black">
                            42+
                        </h4>
                        <p
                            class="text-slate-500
                            mt-2">
                            Years Of Excellence
                        </p>
                    </div>
                    <div>
                        <h4
                            class="text-primary
                            text-4xl
                            font-black">
                            170+
                        </h4>
                        <p
                            class="text-slate-500
                            mt-2">
                            Nationalities Served
                        </p>
                    </div>
                </div>
            </div>
            <!-- FUTURE -->
            <div
                class="group
                relative
                bg-primary
                text-white
                p-10
                overflow-hidden">
                <div
                    class="absolute
                    top-0
                    right-0
                    w-56
                    h-56
                    bg-secondary/10
                    rounded-full
                    translate-x-20
                    -translate-y-20">
                </div>
                <div
                    class="relative z-10">
                    <div
                        class="w-20 h-20
                        bg-white/10
                        flex
                        items-center
                        justify-center
                        mb-8">
                        <i
                            class="fa-solid fa-rocket
                            text-secondary
                            text-3xl">
                        </i>
                    </div>
                    <span
                        class="text-secondary
                        font-bold
                        uppercase
                        tracking-wider">
                    Future Vision
                    </span>
                    <h3
                        class="text-3xl
                        font-black
                        mt-4
                        mb-6">
                        Shaping The Next Generation Of Healthcare
                    </h3>
                    <p
                        class="text-white/85
                        leading-8">
                        CIWEC Hospital continues to invest in
                        advanced medical technologies, clinical
                        research and patient-centered innovations
                        that improve healthcare outcomes.
                    </p>
                    <p
                        class="text-white/85
                        leading-8
                        mt-6">
                        Our vision is to remain Nepal's leading
                        international healthcare institution while
                        expanding our role in travel medicine,
                        preventive healthcare and global health research.
                    </p>
                    <!-- FUTURE GOALS -->
                    <div
                        class="mt-10
                        space-y-4">
                        <div
                            class="flex items-center gap-3">
                            <i
                                class="fa-solid fa-check
                                text-secondary">
                            </i>
                            <span>
                            Advanced Medical Technology
                            </span>
                        </div>
                        <div
                            class="flex items-center gap-3">
                            <i
                                class="fa-solid fa-check
                                text-secondary">
                            </i>
                            <span>
                            Expanded Research Initiatives
                            </span>
                        </div>
                        <div
                            class="flex items-center gap-3">
                            <i
                                class="fa-solid fa-check
                                text-secondary">
                            </i>
                            <span>
                            Greater Global Collaboration
                            </span>
                        </div>
                        <div
                            class="flex items-center gap-3">
                            <i
                                class="fa-solid fa-check
                                text-secondary">
                            </i>
                            <span>
                            Enhanced Patient Experience
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- QUOTE -->
        <div
            class="mt-20
            text-center
            max-w-5xl
            mx-auto">
            <h3
                class="text-primary
                text-3xl
                md:text-4xl
                font-black
                leading-tight">
                Building On Our History,
                Advancing Towards The Future
            </h3>
            <p
                class="text-slate-600
                leading-8
                mt-6">
                Our commitment remains unchanged:
                delivering trusted healthcare with compassion,
                innovation and excellence for generations to come.
            </p>
        </div>
    </div>
</section>
<!-- ========================================= -->
<!-- HISTORY CTA -->
<!-- ========================================= -->
<section class="relative overflow-hidden bg-primary">
    <!-- DECORATION -->
    <div
        class="absolute
        top-0
        left-0
        w-[500px]
        h-[500px]
        bg-white/[0.03]
        rounded-full
        -translate-x-1/2
        -translate-y-1/2">
    </div>
    <div
        class="absolute
        bottom-0
        right-0
        w-[600px]
        h-[600px]
        bg-secondary/[0.08]
        rounded-full
        translate-x-1/3
        translate-y-1/3">
    </div>
    <div class="container-custom relative z-10">
        <div
            class="py-24
            lg:py-32
            text-center
            max-w-5xl
            mx-auto">
            <!-- SUBTITLE -->
            <span
                class="inline-block
                text-secondary
                font-bold
                uppercase
                tracking-[4px]
                mb-5">
            Continuing The Journey
            </span>
            <!-- TITLE -->
            <h2
                class="text-white
                text-4xl
                md:text-5xl
                xl:text-6xl
                font-black
                leading-tight">
                Building On More Than
                Four Decades Of Excellence
            </h2>
            <!-- TEXT -->
            <p
                class="max-w-3xl
                mx-auto
                text-white/80
                text-lg
                leading-8
                mt-8">
                Our history is built on trust, innovation,
                compassion and clinical excellence.
                As we move forward, CIWEC Hospital remains
                committed to delivering world-class healthcare
                for future generations.
            </p>
            <!-- CTA BUTTONS -->
            <div
                class="flex
                flex-wrap
                justify-center
                gap-4
                mt-12">
                <a href="#"
                    class="btn-primary">
                Book Appointment
                </a>
                <a href="#"
                    class="btn-light">
                Find A Doctor
                </a>
            </div>
            <!-- TRUST BAR -->
            <div
                class="grid
                grid-cols-2
                lg:grid-cols-4
                gap-8
                mt-20">
                <div>
                    <h3
                        class="text-secondary
                        text-4xl
                        font-black">
                        42+
                    </h3>
                    <p
                        class="text-white/80
                        mt-3">
                        Years Of Service
                    </p>
                </div>
                <div>
                    <h3
                        class="text-secondary
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
                <div>
                    <h3
                        class="text-secondary
                        text-4xl
                        font-black">
                        80+
                    </h3>
                    <p
                        class="text-white/80
                        mt-3">
                        Specialists
                    </p>
                </div>
                <div>
                    <h3
                        class="text-secondary
                        text-4xl
                        font-black">
                        2
                    </h3>
                    <p
                        class="text-white/80
                        mt-3">
                        Hospital Locations
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================================= -->
<!-- HISTORY CTA -->
<!-- ========================================= -->
<section class="relative overflow-hidden bg-primary">
    <!-- DECORATION -->
    <div
        class="absolute
        top-0
        left-0
        w-[500px]
        h-[500px]
        bg-white/[0.03]
        rounded-full
        -translate-x-1/2
        -translate-y-1/2">
    </div>
    <div
        class="absolute
        bottom-0
        right-0
        w-[600px]
        h-[600px]
        bg-secondary/[0.08]
        rounded-full
        translate-x-1/3
        translate-y-1/3">
    </div>
    <div class="container-custom relative z-10">
        <div
            class="py-24
            lg:py-32
            text-center
            max-w-5xl
            mx-auto">
            <!-- SUBTITLE -->
            <span
                class="inline-block
                text-secondary
                font-bold
                uppercase
                tracking-[4px]
                mb-5">
            Continuing The Journey
            </span>
            <!-- TITLE -->
            <h2
                class="text-white
                text-4xl
                md:text-5xl
                xl:text-6xl
                font-black
                leading-tight">
                Building On More Than
                Four Decades Of Excellence
            </h2>
            <!-- TEXT -->
            <p
                class="max-w-3xl
                mx-auto
                text-white/80
                text-lg
                leading-8
                mt-8">
                Our history is built on trust, innovation,
                compassion and clinical excellence.
                As we move forward, CIWEC Hospital remains
                committed to delivering world-class healthcare
                for future generations.
            </p>
            <!-- CTA BUTTONS -->
            <div
                class="flex
                flex-wrap
                justify-center
                gap-4
                mt-12">
                <a href="#"
                    class="btn-primary">
                Book Appointment
                </a>
                <a href="#"
                    class="btn-light">
                Find A Doctor
                </a>
            </div>
            <!-- TRUST BAR -->
            <div
                class="grid
                grid-cols-2
                lg:grid-cols-4
                gap-8
                mt-20">
                <div>
                    <h3
                        class="text-secondary
                        text-4xl
                        font-black">
                        42+
                    </h3>
                    <p
                        class="text-white/80
                        mt-3">
                        Years Of Service
                    </p>
                </div>
                <div>
                    <h3
                        class="text-secondary
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
                <div>
                    <h3
                        class="text-secondary
                        text-4xl
                        font-black">
                        80+
                    </h3>
                    <p
                        class="text-white/80
                        mt-3">
                        Specialists
                    </p>
                </div>
                <div>
                    <h3
                        class="text-secondary
                        text-4xl
                        font-black">
                        2
                    </h3>
                    <p
                        class="text-white/80
                        mt-3">
                        Hospital Locations
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================================= -->
<!-- HISTORY VIDEO MODAL -->
<!-- ========================================= -->
<div id="historyVideoModal"
    class="fixed inset-0 z-[9999] hidden">
    <!-- BACKDROP -->
    <div
        id="historyVideoOverlay"
        class="absolute inset-0 bg-black/90">
    </div>
    <!-- CONTENT -->
    <div
        class="relative
        flex
        items-center
        justify-center
        h-full
        p-4">
        <div
            class="relative
            w-full
            max-w-6xl">
            <!-- CLOSE -->
            <button
                id="closeHistoryVideo"
                class="absolute
                -top-12
                right-0
                text-white
                text-3xl">
            <i class="fa-solid fa-xmark"></i>
            </button>
            <!-- IFRAME -->
            <div
                class="aspect-video">
                <iframe
                    id="historyVideoFrame"
                    class="w-full h-full"
                    src=""
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>
<script>
    const historyVideoBtns =
        document.querySelectorAll(".historyVideoBtn");
    
    const historyVideoModal =
        document.getElementById("historyVideoModal");
    
    const historyVideoFrame =
        document.getElementById("historyVideoFrame");
    
    const closeHistoryVideo =
        document.getElementById("closeHistoryVideo");
    
    const historyVideoOverlay =
        document.getElementById("historyVideoOverlay");
    
    historyVideoBtns.forEach(btn => {
    
        btn.addEventListener("click", () => {
    
            const video =
                btn.dataset.video;
    
            historyVideoFrame.src =
                video + "?autoplay=1";
    
            historyVideoModal.classList.remove("hidden");
    
            document.body.style.overflow =
                "hidden";
    
        });
    
    });
    
    function closeVideo() {
    
        historyVideoModal.classList.add("hidden");
    
        historyVideoFrame.src = "";
    
        document.body.style.overflow = "";
    
    }
    
    closeHistoryVideo.addEventListener(
        "click",
        closeVideo
    );
    
    historyVideoOverlay.addEventListener(
        "click",
        closeVideo
    );
</script>
<!-- ========================================= -->
<!-- LEADERSHIP THROUGH THE YEARS -->
<!-- ========================================= -->
<section class="section-padding bg-slate-50 overflow-hidden">
    <div class="container-custom">
        <div class="text-center mb-16">
            <span class="section-subtitle">
            Leadership Legacy
            </span>
            <h2 class="section-title">
                The People Who Shaped CIWEC
            </h2>
            <p
                class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                Behind every milestone stands a team of visionary
                healthcare professionals whose dedication and
                leadership helped shape CIWEC into the institution
                it is today.
            </p>
        </div>
        <div
            class="grid
            md:grid-cols-2
            xl:grid-cols-4
            gap-8">
            <!-- PERSON -->
            <div
                class="bg-white
                border
                border-slate-200
                text-center
                overflow-hidden
                hover:border-secondary
                hover:-translate-y-2
                transition-all duration-500">
                <img
                    src="./assets/img/leader-1.jpg"
                    class="w-full h-[320px] object-cover">
                <div class="p-6">
                    <h3
                        class="text-primary
                        font-black
                        text-xl">
                        Dr. Founder Name
                    </h3>
                    <p
                        class="text-secondary
                        font-semibold
                        mt-2">
                        Founder
                    </p>
                    <p
                        class="text-slate-500
                        text-sm
                        mt-4">
                        Established CIWEC's vision for
                        international healthcare.
                    </p>
                </div>
            </div>
            <!-- Repeat 3 More -->
        </div>
    </div>
</section>
<section class="bg-primary py-16">
    <div class="container-custom">
        <div
            class="grid
            md:grid-cols-2
            xl:grid-cols-5
            gap-10
            text-center">
            <div>
                <h3 class="text-secondary text-5xl font-black">
                    42+
                </h3>
                <p class="text-white">
                    Years
                </p>
            </div>
            <div>
                <h3 class="text-secondary text-5xl font-black">
                    170+
                </h3>
                <p class="text-white">
                    Nationalities
                </p>
            </div>
            <div>
                <h3 class="text-secondary text-5xl font-black">
                    80+
                </h3>
                <p class="text-white">
                    Specialists
                </p>
            </div>
            <div>
                <h3 class="text-secondary text-5xl font-black">
                    2
                </h3>
                <p class="text-white">
                    Hospitals
                </p>
            </div>
            <div>
                <h3 class="text-secondary text-5xl font-black">
                    24/7
                </h3>
                <p class="text-white">
                    Care
                </p>
            </div>
        </div>
    </div>
</section>
<?php
    include './include/footer.php';
    ?>