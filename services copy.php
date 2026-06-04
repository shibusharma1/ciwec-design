<?php
include "./include/header.php"; ?>

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

<section class="bg-white py-16 md:py-20">
    <div class="container-custom">
        <!-- HEADING -->
        <div class="max-w-4xl mb-14">
            <span class="text-secondary
            text-sm
            font-bold
            uppercase
            tracking-[3px]">
                Healthcare Services
            </span>
            <h1
                class="mt-4
            text-primary
            text-4xl
            md:text-5xl
            font-black
            leading-tight">
                Comprehensive Medical Services Across Kathmandu & Pokhara
            </h1>
            <p
                class="mt-6
            text-slate-600
            text-lg
            leading-8">
                CIWEC Hospital provides specialized healthcare services,
                diagnostics, preventive medicine, emergency care and
                travel medicine expertise through our hospitals in
                Kathmandu and Pokhara.
            </p>
        </div>
        <!-- QUICK NAV -->
        <div class="flex flex-wrap gap-4 mb-14">

            <button
                id="kathmanduBtn"
                class="service-tab active-service-tab">
                Kathmandu Services
            </button>

            <button
                id="pokharaBtn"
                class="service-tab">

                Pokhara Services

            </button>

        </div>
        <!-- <div
            class="flex flex-wrap gap-4 mb-16">
            <a href="#kathmanduServices"
                class="px-6 py-3 bg-primary text-white font-semibold hover:bg-secondary transition">
                Kathmandu Services
            </a>
            <a href="#pokharaServices"
                class="px-6 py-3 border border-slate-300 text-primary font-semibold hover:border-primary transition">
                Pokhara Services
            </a>
        </div> -->
    </div>
</section>

<section id="kathmanduServices" class="bg-slate-50 py-20">
    <div class="container-custom">
        <div
            class="flex items-center gap-5 mb-14">
            <div class="w-16 h-[2px] bg-secondary">
            </div>
            <h2 class="text-primary
            text-3xl
            md:text-4xl
            font-black">
                Kathmandu Hospital
            </h2>
        </div>
        <div class="grid lg:grid-cols-2 gap-8">
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3
                                class="text-primary
                        text-xl
                        font-black
                        mb-3">
                                Emergency Services
                            </h3>
                            <p
                                class="text-slate-600
                        leading-7">
                                Available 24 hours a day, 365 days a year with
                                experienced emergency physicians and nurses
                                providing immediate medical care.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Ambulance Service
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Fully equipped ambulance services available for emergency response,
                                patient transfers, and timely transportation with trained medical staff.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Inpatient Services
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Comfortable inpatient facilities providing continuous medical care,
                                monitoring, and support for patients requiring hospitalization.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Outpatient Services
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Comprehensive consultation and treatment services for patients who
                                do not require overnight admission, delivered by experienced specialists.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Laboratory Services
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Accurate diagnostic testing and laboratory analysis performed using
                                modern equipment to support timely and effective medical decisions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Radiology / X-Ray
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Advanced imaging services including digital X-ray examinations to
                                assist in the diagnosis and management of various medical conditions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Dental Services
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Preventive, restorative, and routine dental care services focused on
                                maintaining optimal oral health for patients of all ages.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Operation Theatre
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Modern surgical facilities equipped to perform a wide range of
                                procedures safely, supported by skilled surgeons and clinical teams.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Endoscopy & Colonoscopy
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Minimally invasive diagnostic procedures for evaluating digestive
                                health and detecting gastrointestinal conditions with precision.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Immunization Services
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Vaccination programs for children, adults, and travelers to help
                                protect against preventable diseases and maintain long-term health.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Health Screening Packages
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Comprehensive health check-up packages designed to identify risk
                                factors early and promote proactive healthcare management.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Pediatric Care
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Specialized healthcare services for infants, children, and adolescents,
                                ensuring healthy growth and development at every stage.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Obstetrics & Gynecology
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Expert women's healthcare services including maternity care,
                                reproductive health, and gynecological consultations and treatments.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Orthopedics
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Diagnosis and treatment of bone, joint, muscle, and sports-related
                                conditions to help patients regain mobility and quality of life.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Physiotherapy
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Personalized rehabilitation programs aimed at restoring movement,
                                reducing pain, and improving physical function after injury or illness.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Dermatology
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Professional care for skin, hair, and nail conditions, offering
                                diagnosis, treatment, and preventive dermatological services.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="pokharaServices" class="bg-slate-50 py-20">
    <div class="container-custom">
        <div
            class="flex items-center gap-5 mb-14">
            <div class="w-16 h-[2px] bg-secondary">
            </div>
            <h2 class="text-primary
            text-3xl
            md:text-4xl
            font-black">
                Pokhara Hospital
            </h2>
        </div>
        <div class="grid lg:grid-cols-2 gap-8">
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Ambulance Service
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Fully equipped ambulance services available for emergency response,
                                patient transfers, and timely transportation with trained medical staff.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Inpatient Services
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Comfortable inpatient facilities providing continuous medical care,
                                monitoring, and support for patients requiring hospitalization.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Outpatient Services
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Comprehensive consultation and treatment services for patients who
                                do not require overnight admission, delivered by experienced specialists.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Laboratory Services
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Accurate diagnostic testing and laboratory analysis performed using
                                modern equipment to support timely and effective medical decisions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Radiology / X-Ray
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Advanced imaging services including digital X-ray examinations to
                                assist in the diagnosis and management of various medical conditions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Dental Services
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Preventive, restorative, and routine dental care services focused on
                                maintaining optimal oral health for patients of all ages.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Operation Theatre
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Modern surgical facilities equipped to perform a wide range of
                                procedures safely, supported by skilled surgeons and clinical teams.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Endoscopy & Colonoscopy
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Minimally invasive diagnostic procedures for evaluating digestive
                                health and detecting gastrointestinal conditions with precision.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Immunization Services
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Vaccination programs for children, adults, and travelers to help
                                protect against preventable diseases and maintain long-term health.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Health Screening Packages
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Comprehensive health check-up packages designed to identify risk
                                factors early and promote proactive healthcare management.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Pediatric Care
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Specialized healthcare services for infants, children, and adolescents,
                                ensuring healthy growth and development at every stage.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Obstetrics & Gynecology
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Expert women's healthcare services including maternity care,
                                reproductive health, and gynecological consultations and treatments.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Orthopedics
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Diagnosis and treatment of bone, joint, muscle, and sports-related
                                conditions to help patients regain mobility and quality of life.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Physiotherapy
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Personalized rehabilitation programs aimed at restoring movement,
                                reducing pain, and improving physical function after injury or illness.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group
            bg-white
            border
            border-slate-200
            hover:border-primary
            hover:shadow-[0_20px_50px_rgba(0,0,0,.06)]
            transition-all
            duration-300">
                <div class="p-8">
                    <div
                        class="flex items-start gap-5">
                        <div
                            class="w-14 h-14
                     bg-primary/5
                     flex items-center justify-center
                     flex-shrink-0">
                            <i
                                class="fa-solid fa-truck-medical
                        text-primary
                        text-xl">
                            </i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl font-black mb-3">
                                Dermatology
                            </h3>
                            <p class="text-slate-600 leading-7">
                                Professional care for skin, hair, and nail conditions, offering
                                diagnosis, treatment, and preventive dermatological services.
                            </p>
                        </div>
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

        kathmanduServices.classList.remove("hidden");
        pokharaServices.classList.add("hidden");

        kathmanduBtn.classList.add("active-service-tab");
        pokharaBtn.classList.remove("active-service-tab");

    });

    pokharaBtn.addEventListener("click", () => {

        pokharaServices.classList.remove("hidden");
        kathmanduServices.classList.add("hidden");

        pokharaBtn.classList.add("active-service-tab");
        kathmanduBtn.classList.remove("active-service-tab");

    });
</script>
<?php include "./include/footer.php";
?>
