<?php include "./include/header.php"; ?>
<section class="relative h-[220px] md:h-[280px] overflow-hidden">
    <img src="./assets/img/contact-banner.jpg"
        class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-primary/80"></div>
    <div class="relative z-10 h-full flex items-center">
        <div class="container-custom">
            <h1 class="text-white text-center text-3xl md:text-5xl font-black mb-3">
                Doctors at CIWEC
            </h1>
            <div class="flex items-center justify-center gap-2 text-white/90">
                <a href="index.php" class="hover:text-secondary">
                    Home
                </a>
                <i class="fa-solid fa-angle-right text-xs"></i>
                <span class="text-secondary">
                    Doctors at CIWEC
                </span>
            </div>
        </div>
    </div>
</section>
<section class="relative bg-primary overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <!-- medical pattern -->
    </div>
    <div class="container-custom py-20">
        <span class="section-subtitle">
            Our Specialists
        </span>
        <h1 class="text-white text-5xl font-black mt-3">
            Meet Our Medical Experts
        </h1>
        <p class="text-white/80 mt-6 max-w-3xl">
            Experienced physicians, surgeons and specialists
            providing world-class healthcare services.
        </p>
    </div>
</section>
<section class="bg-slate-50 py-10 -mt-10 relative z-20">
    <div class="container-custom">
        <div class="bg-white border border-slate-200 shadow-sm p-6">
            <div class="grid lg:grid-cols-3 gap-4">
                <input
                    id="doctorSearch"
                    type="text"
                    placeholder="Search Doctor"
                    class="h-14 px-5 border border-slate-300 focus:border-secondary outline-none">
                <select
                    id="departmentFilter"
                    class="h-14 px-5 border border-slate-300 focus:border-secondary outline-none">
                    <option value="">All Departments</option>
                    <option value="Internal Medicine">Internal Medicine</option>
                    <option value="General Practice">General Practice</option>
                </select>
                <select
                    id="locationFilter"
                    class="h-14 px-5 border border-slate-300 focus:border-secondary outline-none">
                    <option value="">All Locations</option>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Pokhara">Pokhara</option>
                </select>
            </div>
        </div>
    </div>
</section>
<section class="py-20">
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
</section>
<div id="doctorModal"
    class="fixed inset-0 z-[9999] hidden">
    <div id="doctorOverlay" class="absolute inset-0 bg-black/70 backdrop-blur-sm">
    </div>
    <div
        class="relative h-screen flex items-center justify-center p-4">
        <div
            class="bg-white max-w-5xl w-full max-h-[90vh] overflow-y-auto">
            <button
                id="closeDoctorModal"
                class="absolute top-4 right-4 w-10 h-10 bg-primary text-white">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div id="doctorModalContent"></div>
        </div>
    </div>
</div>
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
    class="group bg-white border border-slate-200 hover:border-secondary hover:shadow-xl transition-all duration-300">
    
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
        href="#"
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
<?php include "./include/footer.php"; ?>
