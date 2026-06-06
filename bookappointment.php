<?php
$hero_title = "Booking/Inquiry Form";
include "./include/header.php";
include "./include/herobanner.php";
?>
<section id="appointmentForm" class="section-padding bg-slate-100 overflow-hidden">
    <div class="container-custom">
        <div class="text-center max-w-4xl mx-auto mb-8">
            <span class="section-subtitle">
            Appointment & Inquiry
            </span>
            <h2 class="section-title">
                How Can We Help You Today?
            </h2>
            <p class="text-slate-600 mt-4 leading-8">
                Submit your appointment request or medical inquiry
                and our team will contact you as soon as possible.
            </p>
        </div>
        <div class="grid xl:grid-cols-12 gap-8">
            <!-- FORM -->
            <div class="xl:col-span-8">
                <div
                    class="bg-white border border-slate-200 p-8 lg:p-10">
                    <form>
                        <!-- REQUEST TYPE -->
                        <div class="mb-8">
                            <label
                                class="block text-primary font-bold mb-4">
                            I Want To
                            </label>
                            <div
                                class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                                <label
                                    class="border border-slate-200 p-4 cursor-pointer hover:border-secondary">
                                <input
                                    type="radio"
                                    name="requestType"
                                    checked>
                                <span class="ml-2">
                                Appointment
                                </span>
                                </label>
                                <label
                                    class="border border-slate-200 p-4 cursor-pointer hover:border-secondary">
                                <input
                                    type="radio"
                                    name="requestType">
                                <span class="ml-2">
                                Inquiry
                                </span>
                                </label>
                                <label
                                    class="border border-slate-200 p-4 cursor-pointer hover:border-secondary">
                                <input
                                    type="radio"
                                    name="requestType">
                                <span class="ml-2">
                                Health Screening
                                </span>
                                </label>
                                <label
                                    class="border border-slate-200 p-4 cursor-pointer hover:border-secondary">
                                <input
                                    type="radio"
                                    name="requestType">
                                <span class="ml-2">
                                Travel Medicine
                                </span>
                                </label>
                            </div>
                        </div>
                        <!-- PERSONAL INFO -->
                        <div
                            class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label
                                    class="block text-primary font-semibold mb-2">
                                Full Name *
                                </label>
                                <input
                                    type="text"
                                    class="w-full h-14 border border-slate-300 px-5 focus:border-secondary outline-none">
                            </div>
                            <div>
                                <label
                                    class="block text-primary font-semibold mb-2">
                                Email Address *
                                </label>
                                <input
                                    type="email"
                                    class="w-full h-14 border border-slate-300 px-5 focus:border-secondary outline-none">
                            </div>
                            <div>
                                <label
                                    class="block text-primary font-semibold mb-2">
                                Phone Number *
                                </label>
                                <input
                                    type="tel"
                                    class="w-full h-14 border border-slate-300 px-5 focus:border-secondary outline-none">
                            </div>
                            <div>
                                <label
                                    class="block text-primary font-semibold mb-2">
                                Nationality
                                </label>
                                <input
                                    type="text"
                                    class="w-full h-14 border border-slate-300 px-5 focus:border-secondary outline-none">
                            </div>
                        </div>
                        <!-- HOSPITAL DETAILS -->
                        <div
                            class="grid md:grid-cols-2 gap-6 mt-4">
                            <div>
                                <label
                                    class="block text-primary font-semibold mb-2">
                                Preferred Location
                                </label>
                                <select
                                    class="w-full h-14 border border-slate-300 px-5">
                                    <option>
                                        Kathmandu
                                    </option>
                                    <option>
                                        Pokhara
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label
                                    class="block text-primary font-semibold mb-2">
                                Department
                                </label>
                                <select
                                    class="w-full h-14 border border-slate-300 px-5">
                                    <option>
                                        Select Department
                                    </option>
                                    <option>
                                        Internal Medicine
                                    </option>
                                    <option>
                                        Pediatrics
                                    </option>
                                    <option>
                                        Cardiology
                                    </option>
                                    <option>
                                        Orthopedics
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label
                                    class="block text-primary font-semibold mb-2">
                                Preferred Date
                                </label>
                                <input
                                    type="date"
                                    class="w-full h-14 border border-slate-300 px-5">
                            </div>
                            <div>
                                <label
                                    class="block text-primary font-semibold mb-2">
                                Preferred Time
                                </label>
                                <input
                                    type="time"
                                    class="w-full h-14 border border-slate-300 px-5">
                            </div>
                        </div>
                        <!-- MESSAGE -->
                        <div class="mt-4">
                            <label
                                class="block text-primary font-semibold mb-2">
                            Message / Requirement
                            </label>
                            <textarea
                                rows="4"
                                class="w-full border border-slate-300 p-5 resize-none focus:border-secondary outline-none"
                                placeholder="Describe your symptoms, appointment request, inquiry or healthcare requirement..."></textarea>
                        </div>
                        <!-- SUBMIT -->
                        <div class="mt-6">
                            <button
                                type="submit"
                                class="btn-primary">
                            Submit Request
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- RIGHT PANEL -->
            <div
                class="xl:col-span-4">
                <div
                    class="bg-primary text-white p-8 sticky top-32">
                    <h3
                        class="text-2xl font-black">
                        Need Assistance?
                    </h3>
                    <p
                        class="mt-5 text-white/80 leading-8">
                        Our team is available to help with
                        appointments, inquiries, travel medicine,
                        health screening and specialist consultations.
                    </p>
                    <div
                        class="space-y-6 mt-10">
                        <div
                            class="flex gap-4">
                            <i
                                class="fa-solid fa-clock text-secondary text-xl mt-1">
                            </i>
                            <div>
                                <h4
                                    class="font-bold">
                                    Response Time
                                </h4>
                                <p
                                    class="text-white/70 text-sm">
                                    Within 24 Hours
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex gap-4">
                            <i
                                class="fa-solid fa-phone text-secondary text-xl mt-1">
                            </i>
                            <div>
                                <h4
                                    class="font-bold">
                                    Appointment Desk
                                </h4>
                                <p
                                    class="text-white/70 text-sm">
                                    +977-XXXXXXXXX
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex gap-4">
                            <i
                                class="fa-solid fa-envelope text-secondary text-xl mt-1">
                            </i>
                            <div>
                                <h4
                                    class="font-bold">
                                    Email Support
                                </h4>
                                <p
                                    class="text-white/70 text-sm">
                                    info@ciwec.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="border-t border-white/10 mt-10 pt-10">
                        <h4
                            class="font-bold text-lg">
                            Emergency?
                        </h4>
                        <p
                            class="text-white/70 mt-3">
                            For urgent medical situations,
                            please call our emergency team directly.
                        </p>
                        <a href="tel:+977XXXXXXXX"
                            class="btn-secondary mt-4">
                        Call Emergency
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================================= -->
<!-- WHY BOOK WITH CIWEC -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
    <div class="container-custom">
        <!-- HEADING -->
        <div class="text-center max-w-4xl mx-auto mb-12">
            <span class="section-subtitle">
            Why Choose CIWEC
            </span>
            <h2 class="section-title">
                Trusted Healthcare For Local & International Patients
            </h2>
            <p
                class="text-slate-600 mt-4 leading-8">
                For more than four decades, CIWEC Hospital has been
                providing world-class healthcare services, combining
                medical expertise, advanced diagnostics and compassionate care.
            </p>
        </div>
        <!-- FEATURES -->
        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8">
            <!-- CARD -->
            <div
                class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                <div
                    class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
                    <i
                        class="fa-solid fa-user-doctor text-primary text-2xl">
                    </i>
                </div>
                <h3
                    class="text-primary text-xl font-black">
                    Expert Specialists
                </h3>
                <p
                    class="text-slate-600 mt-4 leading-7">
                    Access experienced physicians,
                    surgeons and specialists across
                    multiple medical disciplines.
                </p>
            </div>
            <!-- CARD -->
            <div
                class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                <div
                    class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
                    <i
                        class="fa-solid fa-heart-pulse text-secondary text-2xl">
                    </i>
                </div>
                <h3
                    class="text-primary text-xl font-black">
                    Comprehensive Care
                </h3>
                <p
                    class="text-slate-600 mt-4 leading-7">
                    From preventive health screenings
                    to specialist consultations and
                    long-term care management.
                </p>
            </div>
            <!-- CARD -->
            <div
                class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                <div
                    class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
                    <i
                        class="fa-solid fa-globe text-primary text-2xl">
                    </i>
                </div>
                <h3
                    class="text-primary text-xl font-black">
                    International Standards
                </h3>
                <p
                    class="text-slate-600 mt-4 leading-7">
                    Trusted by expatriates,
                    travelers and international
                    organizations worldwide.
                </p>
            </div>
            <!-- CARD -->
            <div
                class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                <div
                    class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
                    <i
                        class="fa-solid fa-clock text-secondary text-2xl">
                    </i>
                </div>
                <h3
                    class="text-primary text-xl font-black">
                    Fast Response
                </h3>
                <p
                    class="text-slate-600 mt-4 leading-7">
                    Appointment requests and inquiries
                    are reviewed promptly by our
                    dedicated support team.
                </p>
            </div>
        </div>
        <!-- TRUST BAR -->
        <div
            class="grid md:grid-cols-4 gap-6 mt-16">
            <div
                class="text-center p-8 border border-slate-200">
                <h3
                    class="text-primary text-4xl font-black">
                    42+
                </h3>
                <p
                    class="text-slate-600 mt-3">
                    Years Of Excellence
                </p>
            </div>
            <div
                class="text-center p-8 border border-slate-200">
                <h3
                    class="text-primary text-4xl font-black">
                    80+
                </h3>
                <p
                    class="text-slate-600 mt-3">
                    Medical Specialists
                </p>
            </div>
            <div
                class="text-center p-8 border border-slate-200">
                <h3
                    class="text-primary text-4xl font-black">
                    50K+
                </h3>
                <p
                    class="text-slate-600 mt-3">
                    Patients Served
                </p>
            </div>
            <div
                class="text-center p-8 border border-slate-200">
                <h3
                    class="text-primary text-4xl font-black">
                    24/7
                </h3>
                <p
                    class="text-slate-600 mt-3">
                    Patient Support
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ========================================= -->
<!-- FIND YOUR DEPARTMENT -->
<!-- ========================================= -->
<section class="section-padding bg-slate-100 overflow-hidden">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="text-center max-w-4xl mx-auto mb-12">
            <span class="section-subtitle">
            Medical Specialties
            </span>
            <h2 class="section-title">
                Find The Right Department
            </h2>
            <p
                class="text-slate-600 mt-4 leading-8">
                Not sure where to start? Explore our specialties and
                choose the department that best matches your healthcare needs.
            </p>
        </div>
        <!-- DEPARTMENTS -->
        <div
            class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
            <!-- INTERNAL MEDICINE -->
            <div
                class="department-card group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 cursor-pointer"
                data-department="Internal Medicine">
                <div
                    class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
                    <i
                        class="fa-solid fa-stethoscope text-primary text-2xl">
                    </i>
                </div>
                <h3
                    class="text-primary text-2xl font-black">
                    Internal Medicine
                </h3>
                <p
                    class="text-slate-600 mt-4 leading-7">
                    Diagnosis and treatment of adult illnesses,
                    chronic diseases and preventive care.
                </p>
                <span
                    class="inline-flex items-center gap-2 text-secondary font-semibold mt-4">
                Select Department
                <i class="fa-solid fa-arrow-right"></i>
                </span>
            </div>
            <!-- PEDIATRICS -->
            <div
                class="department-card group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 cursor-pointer"
                data-department="Pediatrics">
                <div
                    class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
                    <i
                        class="fa-solid fa-baby text-secondary text-2xl">
                    </i>
                </div>
                <h3
                    class="text-primary text-2xl font-black">
                    Pediatrics
                </h3>
                <p
                    class="text-slate-600 mt-4 leading-7">
                    Comprehensive healthcare services
                    for infants, children and adolescents.
                </p>
                <span
                    class="inline-flex items-center gap-2 text-secondary font-semibold mt-4">
                Select Department
                <i class="fa-solid fa-arrow-right"></i>
                </span>
            </div>
            <!-- CARDIOLOGY -->
            <div
                class="department-card group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 cursor-pointer"
                data-department="Cardiology">
                <div
                    class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
                    <i
                        class="fa-solid fa-heart-pulse text-primary text-2xl">
                    </i>
                </div>
                <h3
                    class="text-primary text-2xl font-black">
                    Cardiology
                </h3>
                <p
                    class="text-slate-600 mt-4 leading-7">
                    Expert diagnosis and management
                    of heart and cardiovascular conditions.
                </p>
                <span
                    class="inline-flex items-center gap-2 text-secondary font-semibold mt-4">
                Select Department
                <i class="fa-solid fa-arrow-right"></i>
                </span>
            </div>
            <!-- ORTHOPEDICS -->
            <div
                class="department-card group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 cursor-pointer"
                data-department="Orthopedics">
                <div
                    class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
                    <i
                        class="fa-solid fa-bone text-secondary text-2xl">
                    </i>
                </div>
                <h3
                    class="text-primary text-2xl font-black">
                    Orthopedics
                </h3>
                <p
                    class="text-slate-600 mt-4 leading-7">
                    Care for bones, joints,
                    muscles and sports injuries.
                </p>
                <span
                    class="inline-flex items-center gap-2 text-secondary font-semibold mt-4">
                Select Department
                <i class="fa-solid fa-arrow-right"></i>
                </span>
            </div>
            <!-- HEALTH SCREENING -->
            <div
                class="department-card group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 cursor-pointer"
                data-department="Health Screening">
                <div
                    class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
                    <i
                        class="fa-solid fa-file-medical text-primary text-2xl">
                    </i>
                </div>
                <h3
                    class="text-primary text-2xl font-black">
                    Health Screening
                </h3>
                <p
                    class="text-slate-600 mt-4 leading-7">
                    Preventive health checkups
                    and executive screening packages.
                </p>
                <span
                    class="inline-flex items-center gap-2 text-secondary font-semibold mt-4">
                Select Department
                <i class="fa-solid fa-arrow-right"></i>
                </span>
            </div>
            <!-- TRAVEL MEDICINE -->
            <div
                class="department-card group bg-white border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500 cursor-pointer"
                data-department="Travel Medicine">
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
                    Vaccinations, travel consultations
                    and international healthcare support.
                </p>
                <span
                    class="inline-flex items-center gap-2 text-secondary font-semibold mt-4">
                Select Department
                <i class="fa-solid fa-arrow-right"></i>
                </span>
            </div>
        </div>
        <!-- HELP BOX -->
        <div
            class="mt-16 bg-primary p-10 text-center">
            <h3
                class="text-white text-3xl font-black">
                Not Sure Which Department You Need?
            </h3>
            <p
                class="text-white/80 mt-5 max-w-3xl mx-auto leading-8">
                Submit your inquiry and our healthcare team
                will guide you to the most appropriate specialist.
            </p>
        </div>
    </div>
</section>
<script>
    const departmentCards =
    document.querySelectorAll(".department-card");
    
    const departmentSelect =
    document.getElementById("departmentSelect");
    
    departmentCards.forEach(card => {
    
        card.addEventListener("click", () => {
    
            const department =
            card.dataset.department;
    
            departmentSelect.value =
            department;
    
            document
            .getElementById("appointmentForm")
            .scrollIntoView({
                behavior: "smooth"
            });
    
        });
    
    });
    
</script>
<!-- ========================================= -->
<!-- WHAT HAPPENS NEXT -->
<!-- ========================================= -->
<section class="section-padding bg-white overflow-hidden">
    <div class="container-custom">
        <!-- HEADING -->
        <div class="text-center max-w-4xl mx-auto mb-20">
            <span class="section-subtitle">
            Simple Process
            </span>
            <h2 class="section-title">
                What Happens After You Submit?
            </h2>
            <p
                class="text-slate-600 mt-4 leading-8">
                Our appointment and inquiry process is designed to be
                simple, efficient and patient-focused. Here's what you
                can expect after submitting your request.
            </p>
        </div>
        <!-- PROCESS -->
        <div class="relative">
            <!-- DESKTOP LINE -->
            <div
                class="hidden xl:block absolute top-12 left-0 right-0 h-[2px] bg-slate-200">
            </div>
            <div
                class="grid md:grid-cols-2 xl:grid-cols-4 gap-10">
                <!-- STEP 1 -->
                <div class="relative text-center">
                    <div
                        class="w-24 h-24 mx-auto bg-primary text-white text-3xl font-black flex items-center justify-center relative z-10">
                        01
                    </div>
                    <h3
                        class="text-primary text-2xl font-black mt-8">
                        Submit Request
                    </h3>
                    <p
                        class="text-slate-600 mt-4 leading-7">
                        Complete the appointment or inquiry form
                        with your medical requirements and
                        preferred schedule.
                    </p>
                </div>
                <!-- STEP 2 -->
                <div class="relative text-center">
                    <div
                        class="w-24 h-24 mx-auto bg-secondary text-white text-3xl font-black flex items-center justify-center relative z-10">
                        02
                    </div>
                    <h3
                        class="text-primary text-2xl font-black mt-8">
                        Review Process
                    </h3>
                    <p
                        class="text-slate-600 mt-4 leading-7">
                        Our patient support team reviews
                        your request and identifies the
                        appropriate department or specialist.
                    </p>
                </div>
                <!-- STEP 3 -->
                <div class="relative text-center">
                    <div
                        class="w-24 h-24 mx-auto bg-primary text-white text-3xl font-black flex items-center justify-center relative z-10">
                        03
                    </div>
                    <h3
                        class="text-primary text-2xl font-black mt-8">
                        We Contact You
                    </h3>
                    <p
                        class="text-slate-600 mt-4 leading-7">
                        A representative will contact you
                        via phone or email to discuss
                        available options and scheduling.
                    </p>
                </div>
                <!-- STEP 4 -->
                <div class="relative text-center">
                    <div
                        class="w-24 h-24 mx-auto bg-secondary text-white text-3xl font-black flex items-center justify-center relative z-10">
                        04
                    </div>
                    <h3
                        class="text-primary text-2xl font-black mt-8">
                        Appointment Confirmed
                    </h3>
                    <p
                        class="text-slate-600 mt-4 leading-7">
                        Your consultation, screening or
                        medical service is confirmed
                        and prepared for your visit.
                    </p>
                </div>
            </div>
        </div>
        <!-- RESPONSE BOX -->
        <div
            class="mt-20 grid lg:grid-cols-3 gap-8">
            <!-- RESPONSE TIME -->
            <div
                class="border border-slate-200 p-8 text-center">
                <div
                    class="w-16 h-16 mx-auto bg-primary/10 flex items-center justify-center mb-6">
                    <i
                        class="fa-solid fa-clock text-primary text-2xl">
                    </i>
                </div>
                <h3
                    class="text-primary text-4xl font-black">
                    24 Hours
                </h3>
                <p
                    class="text-slate-600 mt-4">
                    Typical Response Time
                </p>
            </div>
            <!-- SUPPORT -->
            <div
                class="border border-slate-200 p-8 text-center">
                <div
                    class="w-16 h-16 mx-auto bg-secondary/10 flex items-center justify-center mb-6">
                    <i
                        class="fa-solid fa-headset text-secondary text-2xl">
                    </i>
                </div>
                <h3
                    class="text-primary text-4xl font-black">
                    Dedicated
                </h3>
                <p
                    class="text-slate-600 mt-4">
                    Patient Support Team
                </p>
            </div>
            <!-- EMERGENCY -->
            <div
                class="border border-slate-200 p-8 text-center">
                <div
                    class="w-16 h-16 mx-auto bg-red-100 flex items-center justify-center mb-6">
                    <i
                        class="fa-solid fa-truck-medical text-red-600 text-2xl">
                    </i>
                </div>
                <h3
                    class="text-primary text-4xl font-black">
                    24/7
                </h3>
                <p
                    class="text-slate-600 mt-4">
                    Emergency Assistance
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ========================================= -->
<!-- EMERGENCY SUPPORT -->
<!-- ========================================= -->
<section class="section-padding relative overflow-hidden bg-primary">
    <!-- SHAPES -->
    <div
        class="absolute
        top-0
        left-0
        w-[450px]
        h-[450px]
        bg-white/[0.03]
        rounded-full
        -translate-x-1/2
        -translate-y-1/2">
    </div>
    <div
        class="absolute
        bottom-0
        right-0
        w-[500px]
        h-[500px]
        bg-secondary/[0.08]
        rounded-full
        translate-x-1/3
        translate-y-1/3">
    </div>
    <div
        class="container-custom
        relative
        z-10">
        <div
            class="grid
            xl:grid-cols-12
            gap-12
            items-center">
            <!-- LEFT -->
            <div
                class="xl:col-span-7">
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
                    uppercase
                    tracking-wide">
                <i class="fa-solid fa-triangle-exclamation"></i>
                Emergency Support
                </span>
                <h2
                    class="text-white
                    text-3xl
                    md:text-4xl
                    font-black
                    leading-tight
                    mt-8">
                    Need Immediate
                    Medical Assistance?
                </h2>
                <p
                    class="text-white/80
                    text-lg
                    leading-8
                    mt-8
                    max-w-3xl">
                    If you are experiencing a medical emergency,
                    do not wait for an online appointment request.
                    Contact our emergency support team immediately
                    for urgent medical assistance and guidance.
                </p>
                <!-- FEATURES -->
                <div
                    class="grid
                    md:grid-cols-2
                    gap-6
                    mt-12">
                    <div
                        class="flex items-start gap-4">
                        <div
                            class="w-12 h-12
                            bg-white/10
                            flex
                            items-center
                            justify-center
                            flex-shrink-0">
                            <i
                                class="fa-solid fa-clock
                                text-secondary">
                            </i>
                        </div>
                        <div>
                            <h4
                                class="text-white font-bold">
                                24/7 Availability
                            </h4>
                            <p
                                class="text-white/70 text-sm mt-2">
                                Emergency assistance
                                whenever you need it.
                            </p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4">
                        <div
                            class="w-12 h-12
                            bg-white/10
                            flex
                            items-center
                            justify-center
                            flex-shrink-0">
                            <i
                                class="fa-solid fa-user-doctor
                                text-secondary">
                            </i>
                        </div>
                        <div>
                            <h4
                                class="text-white font-bold">
                                Expert Medical Team
                            </h4>
                            <p
                                class="text-white/70 text-sm mt-2">
                                Immediate support from
                                qualified professionals.
                            </p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4">
                        <div
                            class="w-12 h-12
                            bg-white/10
                            flex
                            items-center
                            justify-center
                            flex-shrink-0">
                            <i
                                class="fa-solid fa-phone
                                text-secondary">
                            </i>
                        </div>
                        <div>
                            <h4
                                class="text-white font-bold">
                                Fast Response
                            </h4>
                            <p
                                class="text-white/70 text-sm mt-2">
                                Reach our support team
                                immediately.
                            </p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4">
                        <div
                            class="w-12 h-12
                            bg-white/10
                            flex
                            items-center
                            justify-center
                            flex-shrink-0">
                            <i
                                class="fa-solid fa-hospital
                                text-secondary">
                            </i>
                        </div>
                        <div>
                            <h4
                                class="text-white font-bold">
                                Trusted Healthcare
                            </h4>
                            <p
                                class="text-white/70 text-sm mt-2">
                                Decades of medical
                                excellence and care.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- RIGHT -->
            <div
                class="xl:col-span-5">
                <div
                    class="bg-white p-10 shadow-2xl">
                    <div
                        class="w-20 h-20
                        bg-red-100
                        flex
                        items-center
                        justify-center
                        mx-auto">
                        <i
                            class="fa-solid fa-truck-medical
                            text-red-600
                            text-4xl">
                        </i>
                    </div>
                    <h3
                        class="text-primary
                        text-3xl
                        font-black
                        text-center
                        mt-8">
                        Emergency Hotline
                    </h3>
                    <p
                        class="text-slate-600
                        text-center
                        mt-4">
                        For urgent medical assistance,
                        contact us immediately.
                    </p>
                    <a
                        href="tel:+977XXXXXXXXX"
                        class="block
                        text-center
                        bg-secondary
                        text-white
                        text-2xl
                        font-black
                        py-5
                        mt-8
                        hover:bg-primary
                        transition">
                    +977 XXX XXX XXXX
                    </a>
                    <div
                        class="grid
                        grid-cols-2
                        gap-4
                        mt-4">
                        <a
                            href="#"
                            class="border
                            border-slate-200
                            py-4
                            text-center
                            font-semibold
                            text-primary
                            hover:border-secondary
                            hover:text-secondary
                            transition">
                        Call Now
                        </a>
                        <a
                            href="./bookappointment.php"
                            class="bg-primary
                            text-white
                            py-4
                            text-center
                            font-semibold
                            hover:bg-secondary
                            transition">
                        Book Visit
                        </a>
                    </div>
                    <div
                        class="border-t
                        border-slate-200
                        mt-8
                        pt-8">
                        <p
                            class="text-sm
                            text-slate-500
                            text-center">
                            For non-emergency appointments,
                            please use the booking form above.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "./include/footer.php"; ?>
