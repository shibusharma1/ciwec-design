<?php include "./include/header.php"; ?>
<section class="relative h-[220px] md:h-[280px] overflow-hidden">
    <img src="./assets/img/contact-banner.jpg"
        class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-primary/80"></div>
    <div class="relative z-10 h-full flex items-center">
        <div class="container-custom">
            <h1 class="text-white text-center text-3xl md:text-5xl font-black mb-3">
                Health Screening
            </h1>
            <div class="flex items-center justify-center gap-2 text-white/90">
                <a href="index.php" class="hover:text-secondary">
                    Home
                </a>
                <i class="fa-solid fa-angle-right text-xs"></i>
                <span class="text-secondary">
                    Health Screening
                </span>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary relative overflow-hidden">
    <div class="container-custom py-20 md:py-28">
        <span
            class="text-secondary
            text-sm
            font-bold
            uppercase
            tracking-[3px]">
            Family Medicine & Wellness
        </span>
        <h1
            class="text-white
            text-4xl
            md:text-6xl
            font-black
            leading-tight
            mt-4">
            Personalized Healthcare
            For Every Stage Of Life
        </h1>
        <p
            class="text-white/80
            text-lg
            max-w-3xl
            mt-6
            leading-8">
            Comprehensive medical care for individuals and families,
            focused on prevention, early diagnosis, long-term wellness
            and continuity of care.
        </p>
    </div>
</section>
<section class="bg-white py-20">
    <div class="container-custom">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span
                    class="text-secondary
                    font-bold
                    uppercase
                    tracking-[3px]">
                    Family Medicine
                </span>
                <h2
                    class="text-primary
                    text-4xl
                    font-black
                    mt-4
                    mb-6">
                    Your Trusted Healthcare Partner
                </h2>
                <p
                    class="text-slate-600
                    leading-8">
                    Family medicine provides comprehensive healthcare
                    services for individuals and families across all ages,
                    genders and health conditions.
                </p>
                <p
                    class="text-slate-600
                    leading-8
                    mt-5">
                    Our physicians focus on prevention, treatment,
                    chronic disease management and long-term health
                    relationships.
                </p>
            </div>
            <div>
                <img
                    src="./assets/img/yourtrustedpartnere.jpg"
                    class="w-full h-[500px] object-cover">
            </div>
        </div>
    </div>
</section>
<section class="bg-slate-100 py-20">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="section-title">
                Why Family Medicine Matters
            </h2>
        </div>
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
            <div
                class="bg-white
                border
                border-slate-200
                p-8
                hover:border-secondary
                transition">
                <div
                    class="w-14 h-14
                    bg-primary/5
                    flex items-center justify-center
                    mb-6">
                    <i class="fa-solid fa-heart-pulse text-primary"></i>
                </div>
                <h3
                    class="text-primary
                    font-black
                    text-xl
                    mb-3">
                    Preventive Care
                </h3>
                <p class="text-slate-600 leading-7">
                    Routine screenings, vaccinations and early detection
                    to support long-term wellness.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="bg-white py-20">
    <div class="container-custom">
        <div class="text-center mb-16">
            <span class="section-subtitle">
                Preventive Healthcare
            </span>
            <h2 class="section-title">
                Health Screening Packages
            </h2>
        </div>
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
            <div class="border border-slate-200 bg-white hover:border-secondary transition">
                <div class="p-8">
                    <span class="text-secondary font-bold">
                        Package 01
                    </span>
                    <h3 class="text-primary text-2xl font-black mt-3">
                        Executive Health Check
                    </h3>
                    <ul class="mt-6 space-y-3 text-slate-600">
                        <li>Physical Examination</li>
                        <li>Laboratory Tests</li>
                        <li>ECG</li>
                        <li>Consultation</li>
                    </ul>
                    <button
                        onclick="openPackageModal()"
                        class="btn-primary w-full mt-8">
                        View Details
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HEALTH SCREENING MODAL -->
<div
    id="packageModal"
    class="fixed inset-0 z-[9999] hidden">
    <!-- BACKDROP -->
    <div
        id="packageOverlay"
        class="absolute inset-0 bg-black/70 backdrop-blur-sm">
    </div>
    <!-- CONTENT -->
    <div
        class="relative h-screen flex items-center justify-center p-4">
        <div
            class="bg-white
            w-full
            max-w-6xl
            max-h-[92vh]
            overflow-y-auto
            shadow-[0_30px_100px_rgba(0,0,0,.20)]">
            <!-- CLOSE -->
            <button
                id="closePackageModal"
                class="absolute top-5 right-5 z-10 w-11 h-11 bg-primary text-white hover:bg-secondary transition">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <!-- HEADER -->
            <div
                class="bg-primary text-white p-10">
                <span
                    class="text-secondary font-bold uppercase tracking-[3px]">
                    Health Screening Package
                </span>
                <h2
                    class="text-4xl font-black mt-4">
                    Executive Health Check
                </h2>
                <p
                    class="text-white/80 mt-4 max-w-3xl">
                    A comprehensive preventive health screening package
                    designed for busy professionals seeking early detection,
                    health risk assessment and complete wellness evaluation.
                </p>
            </div>
            <!-- BODY -->
            <div class="p-8 md:p-10">
                <!-- STATS -->
                <div
                    class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <div class="bg-slate-100 p-5 text-center">
                        <h4 class="text-primary text-2xl font-black">
                            40+
                        </h4>
                        <p class="text-slate-500 text-sm">
                            Diagnostic Tests
                        </p>
                    </div>
                    <div class="bg-slate-100 p-5 text-center">
                        <h4 class="text-primary text-2xl font-black">
                            1 Day
                        </h4>
                        <p class="text-slate-500 text-sm">
                            Completion
                        </p>
                    </div>
                    <div class="bg-slate-100 p-5 text-center">
                        <h4 class="text-primary text-2xl font-black">
                            Doctor
                        </h4>
                        <p class="text-slate-500 text-sm">
                            Consultation
                        </p>
                    </div>
                    <div class="bg-slate-100 p-5 text-center">
                        <h4 class="text-primary text-2xl font-black">
                            Full
                        </h4>
                        <p class="text-slate-500 text-sm">
                            Report Review
                        </p>
                    </div>
                </div>
                <!-- INCLUDED TESTS -->
                <h3
                    class="text-primary text-2xl font-black mb-6">
                    Included Assessments
                </h3>
                <div
                    class="grid md:grid-cols-2 xl:grid-cols-3 gap-5 mb-12">
                    <div class="border border-slate-200 p-5">
                        Physical Examination
                    </div>
                    <div class="border border-slate-200 p-5">
                        Complete Blood Count
                    </div>
                    <div class="border border-slate-200 p-5">
                        Blood Sugar Test
                    </div>
                    <div class="border border-slate-200 p-5">
                        Liver Function Test
                    </div>
                    <div class="border border-slate-200 p-5">
                        Kidney Function Test
                    </div>
                    <div class="border border-slate-200 p-5">
                        Lipid Profile
                    </div>
                    <div class="border border-slate-200 p-5">
                        ECG
                    </div>
                    <div class="border border-slate-200 p-5">
                        Chest X-Ray
                    </div>
                    <div class="border border-slate-200 p-5">
                        Physician Consultation
                    </div>
                </div>
                <!-- WHO SHOULD TAKE -->
                <h3
                    class="text-primary text-2xl font-black mb-6">
                    Recommended For
                </h3>
                <div
                    class="bg-slate-100 p-8 mb-12">
                    <ul class="space-y-4 text-slate-600">
                        <li>✔ Adults above 30 years</li>
                        <li>✔ Corporate executives</li>
                        <li>✔ Individuals with family history of disease</li>
                        <li>✔ Preventive annual wellness checkups</li>
                        <li>✔ Lifestyle risk assessment</li>
                    </ul>
                </div>
                <!-- PREPARATION -->
                <h3
                    class="text-primary text-2xl font-black mb-6">
                    Preparation Guidelines
                </h3>
                <div
                    class="space-y-4 text-slate-600 leading-8 mb-12">
                    <p>
                        • Fast for 10–12 hours before your appointment.
                    </p>
                    <p>
                        • Continue prescribed medications unless advised otherwise.
                    </p>
                    <p>
                        • Bring previous medical reports if available.
                    </p>
                    <p>
                        • Wear comfortable clothing.
                    </p>
                </div>
                <!-- BENEFITS -->
                <h3
                    class="text-primary text-2xl font-black mb-6">
                    Benefits
                </h3>
                <div
                    class="grid md:grid-cols-2 gap-6 mb-12">
                    <div class="border border-slate-200 p-6">
                        Early Detection Of Disease
                    </div>
                    <div class="border border-slate-200 p-6">
                        Personalized Health Recommendations
                    </div>
                    <div class="border border-slate-200 p-6">
                        Reduced Long-Term Health Risks
                    </div>
                    <div class="border border-slate-200 p-6">
                        Comprehensive Wellness Evaluation
                    </div>
                </div>
                <!-- CTA -->
                <div
                    class="bg-primary text-white p-10 text-center">
                    <h3
                        class="text-3xl font-black mb-4">
                        Ready To Schedule Your Screening?
                    </h3>
                    <p
                        class="text-white/80 mb-8">
                        Book your appointment today and take the first
                        step toward better health.
                    </p>
                    <div
                        class="flex flex-wrap justify-center gap-4">
                        <a href="./bookappointment.php"
                            class="btn-light">
                            Book Appointment
                        </a>
                        <a href="#"
                            class="btn-secondary">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="bg-slate-100 py-20">
    <div class="container-custom">
        <div class="text-center mb-14">
            <span class="text-secondary uppercase tracking-[3px] font-bold text-sm">
                Frequently Asked Questions
            </span>
            <h2 class="text-primary text-4xl font-black mt-4">
                Health Screening & Family Medicine FAQ
            </h2>
        </div>
        <div class="max-w-4xl mx-auto space-y-4">
            <!-- FAQ 1 -->
            <div class="faq-item active">
                <button class="faq-btn w-full flex items-center
                    justify-between
                    bg-white
                    border
                    border-slate-200
                    px-6
                    py-5
                    text-left">
                    <span class="text-primary font-bold text-lg">
                        What is Family Medicine?
                    </span>
                    <i
                        class="faq-icon
                    fa-solid
                    fa-plus
                    text-secondary
                    transition-all
                    duration-300">
                    </i>
                </button>
                <div
                    class="faq-content">
                    <div
                        class="px-6
                        pb-6
                        text-slate-600
                        leading-8">
                        Family medicine provides comprehensive healthcare
                        services for individuals and families of all ages,
                        focusing on prevention, diagnosis and long-term care.
                    </div>
                </div>
            </div>
            <!-- FAQ 2 -->
            <div class="faq-item">
                <button
                    class="faq-btn
                    w-full
                    flex
                    items-center
                    justify-between
                    bg-white
                    border
                    border-slate-200
                    px-6
                    py-5
                    text-left">
                    <span
                        class="text-primary
                    font-bold
                    text-lg">
                        Why should I undergo regular health screening?
                    </span>
                    <i
                        class="faq-icon
                    fa-solid
                    fa-plus
                    text-secondary
                    transition-all
                    duration-300">
                    </i>
                </button>
                <div
                    class="faq-content">
                    <div
                        class="px-6
                        pb-6
                        text-slate-600
                        leading-8">
                        Regular screenings help detect diseases early,
                        improve treatment outcomes and support preventive care.
                    </div>
                </div>
            </div>
            <!-- FAQ 3 -->
            <div class="faq-item">
                <button
                    class="faq-btn
                    w-full
                    flex
                    items-center
                    justify-between
                    bg-white
                    border
                    border-slate-200
                    px-6
                    py-5
                    text-left">
                    <span
                        class="text-primary
                    font-bold
                    text-lg">
                        How often should I visit a family physician?
                    </span>
                    <i
                        class="faq-icon
                    fa-solid
                    fa-plus
                    text-secondary
                    transition-all
                    duration-300">
                    </i>
                </button>
                <div
                    class="faq-content">
                    <div
                        class="px-6
                        pb-6
                        text-slate-600
                        leading-8">
                        Annual checkups are recommended for most adults,
                        while patients with chronic conditions may require
                        more frequent visits.
                    </div>
                </div>
            </div>
            <!-- FAQ 4 -->
            <div class="faq-item">
                <button class="faq-btn w-full flex items-center justify-between bg-white border border-slate-200 px-6 py-5 text-left">
                    <span class="text-primary font-bold text-lg">
                        Are health screening packages customizable?
                    </span>
                    <i class="faq-icon fa-solid fa-plus text-secondary transition-all duration-300">
                    </i>
                </button>
                <div class="faq-content">
                    <div class="px-6 pb-6 text-slate-600 leading-8">
                        Yes. Screening packages can be tailored according
                        to age, gender, medical history and risk factors.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary py-20">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-white text-4xl font-black">
                Take Charge Of Your Health Today
            </h2>
            <p class="text-white/80 mt-5">
                Schedule a consultation with our family medicine team
                or explore our health screening packages.
            </p>
            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a href="./bookappointment.php" class="btn-secondary">
                    Book Appointment
                </a>
                <a href="#" class="btn-light">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>
<script>
    const packageModal =
        document.getElementById("packageModal");

    function openPackageModal() {

        packageModal.classList.remove("hidden");

        document.body.style.overflow = "hidden";

    }

    function closePackageModal() {

        packageModal.classList.add("hidden");

        document.body.style.overflow = "";

    }

    document
        .getElementById("closePackageModal")
        .addEventListener("click", closePackageModal);

    document
        .getElementById("packageOverlay")
        .addEventListener("click", closePackageModal);

    document.addEventListener("keydown", (e) => {

        if (e.key === "Escape") {

            closePackageModal();

        }

    });
</script>
<?php include "./include/footer.php"; ?>
