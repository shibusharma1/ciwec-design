<?php
$hero_title = "Services";
include "./include/header.php";
include "./include/herobanner.php";
?>

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
                        src="./assets/img/speciality/img1.jpg"
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
                    class="text-primary text-4xl font-black">
                    40+
                </h3>
                <p
                    class="text-slate-600 mt-3">
                    Years Of Service
                </p>
            </div>
            <div
                class="text-center border border-slate-200 p-8">
                <h3
                    class="text-primary text-4xl font-black">
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
                    class="text-primary text-4xl font-black">
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
                    class="text-primary text-4xl font-black">
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

<section class="section-padding bg-slate-100 overflow-hidden">
    <div class="container-custom">
        <div class="max-w-5xl mx-auto text-center">
            <span class="section-subtitle">
                Healthcare Services
            </span>
            <h2 class="section-title">
                Find The Right Healthcare Service
            </h2>
            <p class="text-slate-600 mt-6 leading-8 max-w-3xl mx-auto">
                Explore our comprehensive healthcare services,
                specialist consultations, diagnostics,
                emergency care and preventive health programs.
            </p>
        </div>
        <!-- SEARCH hidden not matching with design -->
        <div class="max-w-3xl hidden mx-auto mt-12">
            <div class="relative">
                <input
                    type="text"
                    id="serviceSearch"
                    placeholder="Search healthcare services..."
                    class="w-full h-16 border border-slate-200 pl-16 pr-5 text-lg focus:border-secondary outline-none bg-white">
                <i
                    class="fa-solid fa-magnifying-glass absolute left-6 top-1/2 -translate-y-1/2 text-secondary">
                </i>
            </div>
        </div>
        <!-- <div class="flex flex-wrap justify-center gap-3 mt-12">
            <button
                class="gallery-filter active service-filter"
                data-category="all">
                All Services
            </button>
            <button
                class="gallery-filter service-filter"
                data-category="emergency">
                Emergency Care
            </button>
            <button
                class="gallery-filter service-filter"
                data-category="travel">
                Travel Medicine
            </button>
            <button
                class="gallery-filter service-filter"
                data-category="screening">
                Health Screening
            </button>
            <button
                class="gallery-filter service-filter"
                data-category="diagnostic">
                Diagnostics
            </button>
            <button
                class="gallery-filter service-filter"
                data-category="specialist">
                Specialists
            </button>
        </div> -->
        <div
            id="serviceGrid"
            class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mt-12">
            <!-- TRAVEL -->
            <div
                class="service-card group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-300"
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
                        class="text-slate-600 mt-4 leading-8">
                        Comprehensive travel consultations,
                        vaccinations and preventive healthcare
                        guidance for international travelers.
                    </p>
                </div>
            </div>
            <!-- EMERGENCY -->
            <div
                class="service-card group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-300"
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
                        class="text-slate-600 mt-4 leading-8">
                        Immediate emergency response and
                        urgent medical treatment available
                        around the clock.
                    </p>
                </div>
            </div>
            <!-- SCREENING -->
            <div
                class="service-card group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-300"
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
                        class="text-slate-600 mt-4 leading-8">
                        Preventive health examinations and
                        executive wellness packages designed
                        for early detection.
                    </p>
                </div>
            </div>
            <!-- DIAGNOSTICS -->
            <div
                class="service-card group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-300"
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
                        Diagnostics
                    </h3>
                    <p
                        class="text-slate-600 mt-4 leading-8">
                        Modern laboratory investigations
                        and diagnostic testing services.
                    </p>
                </div>
            </div>
            <!-- SPECIALISTS -->
            <div
                class="service-card group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-300"
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
                        class="text-slate-600 mt-4 leading-8">
                        Access experienced specialists
                        across a wide range of medical
                        disciplines.
                    </p>
                </div>
            </div>
        </div>
        <!-- EMPTY STATE -->
        <div
            id="service-empty-state"
            class="hidden mt-12">
            <div
                class="bg-slate-100 border border-slate-200 py-20 px-8 text-center">
                <div
                    class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-6">
                    <i
                        class="fa-solid fa-stethoscope text-primary text-3xl">
                    </i>
                </div>
                <h3
                    class="text-primary text-3xl font-black">
                    No Services Found
                </h3>
                <p
                    class="text-slate-600 mt-4 max-w-xl mx-auto">
                    We couldn't find any healthcare services
                    matching your search or selected category.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================= -->
<!-- SERVICES BY LOCATION -->
<!-- ========================================= -->
<section id="servicesSection" class="section-padding bg-white overflow-hidden">
    <div class="container-custom">
        <!-- HEADER -->
        <div
            class="text-center max-w-4xl mx-auto mb-12">
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
                        Travel Health Clinic(PKH)
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

    kathmanduBtn.addEventListener("click", () => {

        kathmanduBtn.classList.add("active-location");
        pokharaBtn.classList.remove("active-location");

        kathmanduServices.classList.remove("hidden");
        pokharaServices.classList.add("hidden");
    });

    pokharaBtn.addEventListener("click", () => {

        pokharaBtn.classList.add("active-location");
        kathmanduBtn.classList.remove("active-location");

        pokharaServices.classList.remove("hidden");
        kathmanduServices.classList.add("hidden");
    });
</script>
<!-- ========================================= -->
<!-- SIGNATURE SERVICES -->
<!-- ========================================= -->
<!-- <section class="section-padding bg-slate-100 overflow-hidden">
    <div class="container-custom">
        <div
            class="text-center max-w-4xl mx-auto mb-12">
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
        <div
            class="bg-white border border-slate-200 overflow-hidden mb-12">
            <div
                class="grid lg:grid-cols-12 items-center">
                <div
                    class="lg:col-span-5">
                    <img
                        src="./assets/img/health/altitude.png"
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
                        src="./assets/img/heathinformation.png  "
                        alt=""
                        class="w-full h-full min-h-[450px] object-cover">
                </div>
            </div>
        </div>
        <div
            class="grid lg:grid-cols-2 gap-8">
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
        <div
            class="grid md:grid-cols-4 gap-6 mt-12">
            <div
                class="bg-white border border-slate-200 p-8 text-center">
                <h3
                    class="text-primary text-4xl font-black">
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
                    class="text-primary text-4xl font-black">
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
                    class="text-primary text-4xl font-black">
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
                    class="text-primary text-4xl font-black">
                    Trusted
                </h3>
                <p
                    class="text-slate-600 mt-3">
                    Healthcare Partner
                </p>
            </div>
        </div>
    </div>
</section> -->
<!-- ========================================= -->
<!-- PATIENT JOURNEY -->
<!-- ========================================= -->
<section class="section-padding bg-slate-100 overflow-hidden">
    <div class="container-custom">
        <!-- HEADER -->
        <div
            class="text-center max-w-4xl mx-auto mb-12">
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
        <!-- <div
            class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-12">
            <div
                class="bg-slate-100 border border-slate-200 p-8 text-center">
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
            <div
                class="bg-slate-100 border border-slate-200 p-8 text-center">
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
            <div
                class="bg-slate-100 border border-slate-200 p-8 text-center">
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
            <div
                class="bg-slate-100 border border-slate-200 p-8 text-center">
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
        </div> -->
    </div>
</section>
<!-- ========================================= -->
<!-- WHY CHOOSE CIWEC -->
<!-- ========================================= -->
<!-- <section class="section-padding bg-slate-100 overflow-hidden">
    <div class="container-custom">
        <div
            class="text-center max-w-4xl mx-auto mb-12">
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
            <div
                class="lg:col-span-5">
                <div
                    class="relative">
                    <img
                        src="./assets/img/altitude-expert-doctor.png"
                        alt="Why Choose CIWEC"
                        class="w-full h-[700px] object-cover">
                    <div
                        class="absolute bottom-8 left-8 bg-white p-6 shadow-xl">
                        <h3
                            class="text-primary text-4xl font-black">
                            40+
                        </h3>
                        <p
                            class="text-slate-600 mt-2">
                            Years Of Excellence
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="lg:col-span-7">
                <div
                    class="grid md:grid-cols-2 gap-8">
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
                    <div
                        class="bg-white hidden border border-slate-200 p-8 hover:border-secondary transition">
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
                    <div
                        class="bg-white hidden border border-slate-200 p-8 hover:border-secondary transition">
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
        <div
            class="grid md:grid-cols-2 xl:grid-cols-4 gap-6 mt-20">
            <div
                class="bg-white border border-slate-200 p-8 text-center">
                <h3
                    class="text-primary text-4xl font-black">
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
                    class="text-primary text-4xl font-black">
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
                    class="text-primary text-4xl font-black">
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
                    class="text-primary text-4xl font-black">
                    Global
                </h3>
                <p
                    class="text-slate-600 mt-3">
                    Patient Trust
                </p>
            </div>
        </div>
    </div>
</section> -->
<!-- ========================================= -->
<!-- FACILITIES & TECHNOLOGY -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
    <div class="container-custom">
        <!-- HEADER -->
        <div
            class="text-center max-w-4xl mx-auto mb-12">
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
            class="grid lg:grid-cols-12 gap-0 bg-slate-100 border border-slate-200 overflow-hidden mb-12">
            <!-- IMAGE -->
            <div
                class="lg:col-span-6">
                <img
                    src="./assets/img/health/cyclospora.png"
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
                        src="./assets/img/radiology.png"
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
                        src="./assets/img/emergency-unit.png"
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
                        src="./assets/img/travel-clinic.png"
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
                        src="./assets/img/vaccination-center.png"
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
                        src="./assets/img/inpatient-care.png"
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
                        src="./assets/img/health-screening.png"
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
        <!-- <div
            class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-20">
            <div
                class="text-center bg-slate-100 border border-slate-200 p-8">
                <h3
                    class="text-primary text-4xl font-black">
                    Modern
                </h3>
                <p
                    class="text-slate-600 mt-3">
                    Diagnostic Equipment
                </p>
            </div>
            <div
                class="text-center bg-slate-100 border border-slate-200 p-8">
                <h3
                    class="text-primary text-4xl font-black">
                    Digital
                </h3>
                <p
                    class="text-slate-600 mt-3">
                    Healthcare Systems
                </p>
            </div>
            <div
                class="text-center bg-slate-100 border border-slate-200 p-8">
                <h3
                    class="text-primary text-4xl font-black">
                    Fast
                </h3>
                <p
                    class="text-slate-600 mt-3">
                    Reporting Services
                </p>
            </div>
            <div
                class="text-center bg-slate-100 border border-slate-200 p-8">
                <h3
                    class="text-primary text-4xl font-black">
                    Quality
                </h3>
                <p
                    class="text-slate-600 mt-3">
                    Patient Care
                </p>
            </div>
        </div> -->
    </div>
</section>
<?php include "./include/footer.php";
?>