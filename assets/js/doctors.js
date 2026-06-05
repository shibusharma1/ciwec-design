const doctors = [
  {
    name: "Dr. David R. Shlim",
    location: "Kathmandu",
    department: "Internal Medicine",
    qualification: "MD, Medical Director Emeritus",
    experience: "25+ Years",
    image: "./assets/img/doctors/david.png",

    about: "Extensive experience in travel medicine and infectious disease.",

    education: ["Harvard Medical School", "Internal Medicine Residency"],

    languages: "English, Nepali",

    patients: "5000+",
    research: "12",
  },

  {
    name: "Dr. Samrat Bashyal",
    location: "Kathmandu",
    department: "General Practice",
    qualification: "MD, General Practitioner",
    experience: "10+ Years",
    image: "./assets/img/doctors/samrat.png",

    about: "Experienced physician focusing on primary healthcare.",

    education: ["Kathmandu University", "MD General Practice"],

    languages: "English, Nepali",

    patients: "3500+",
    research: "5",
  },
];

const doctorLoader = document.getElementById("doctorLoader");

const doctorGrid = document.getElementById("doctorGrid");

function showLoader() {
  doctorLoader.classList.remove("hidden");

  doctorGrid.classList.add("hidden");
}

function hideLoader() {
  doctorLoader.classList.add("hidden");

  doctorGrid.classList.remove("hidden");
}

function populateDepartments() {
  const departmentSelect = document.getElementById("departmentFilter");

  const departments = [...new Set(doctors.map((doctor) => doctor.department))];

  departments.forEach((department) => {
    departmentSelect.insertAdjacentHTML(
      "beforeend",
      `
             <option value="${department}">
                 ${department}
             </option>
             `,
    );
  });
}

function renderDoctors(data) {
  const doctorCount = document.getElementById("doctorCount");

  const emptyState = document.getElementById("doctorEmptyState");

  doctorGrid.innerHTML = "";

  doctorCount.innerText = `${data.length} Doctor${data.length !== 1 ? "s" : ""}`;

  if (data.length === 0) {
    emptyState.classList.remove("hidden");

    return;
  }

  emptyState.classList.add("hidden");

  data.forEach((doctor, index) => {
    doctorGrid.innerHTML += `
    
         <article
             class="group bg-white border border-slate-200 hover:border-secondary hover:shadow-xl transition-all duration-500 overflow-hidden">
    
             <div class="relative overflow-hidden">
    
                 <img
                     src="${doctor.image || "./assets/img/doctor-placeholder.jpg"}"
                     alt="${doctor.name}"
                     class="w-full h-[320px] object-cover transition duration-700 group-hover:scale-105">
    
                 <div
                     class="absolute top-4 left-4">
    
                     <span
                         class="bg-primary text-white px-4 py-2 text-xs font-semibold">
    
                         ${doctor.location}
    
                     </span>
    
                 </div>
    
             </div>
    
             <div class="p-6">
    
                 <span
                     class="text-secondary text-sm font-semibold">
    
                     ${doctor.department}
    
                 </span>
    
                 <h3
                     class="text-primary text-xl font-black mt-2">
    
                     ${doctor.name}
    
                 </h3>
    
                 <p
                     class="text-slate-500 text-sm mt-3 leading-7">
    
                     ${doctor.qualification}
    
                 </p>
    
                 <div
                     class="flex items-center justify-between mt-5 pt-5 border-t">
    
                     <span class="text-sm text-slate-600">
    
                         ${doctor.experience}
    
                     </span>
    
                     <span class="text-sm text-secondary font-semibold">
    
                         Experience
    
                     </span>
    
                 </div>
    
                 <button
                     onclick="openDoctor(${doctors.indexOf(doctor)})"
                     class="btn-primary w-full mt-6">
    
                     View Profile
    
                 </button>
    
             </div>
    
         </article>
    
         `;
  });
}
const doctorModal = document.getElementById("doctorModal");

const doctorModalContent = document.getElementById("doctorModalContent");

function openDoctor(index) {
  const doctor = doctors[index];

  doctorModalContent.innerHTML = `
    
     <div class="grid lg:grid-cols-12">
    
         <!-- IMAGE -->
    
         <div class="lg:col-span-5">
    
             <img
                 src="${doctor.image || "./assets/img/doctor-placeholder.jpg"}"
                 class="w-full h-[350px] lg:h-full object-cover">
    
         </div>
    
         <!-- DETAILS -->
    
         <div class="lg:col-span-7 p-6 lg:p-8">
    
             <span
                 class="inline-block bg-secondary/10 text-secondary px-4 py-2 font-semibold">
    
                 ${doctor.department}
    
             </span>
    
             <h2
                 class="text-primary text-4xl font-black mt-4">
    
                 ${doctor.name}
    
             </h2>
    
             <p
                 class="text-slate-600 mt-4">
    
                 ${doctor.qualification}
    
             </p>
    
             <div
                 class="grid grid-cols-3 gap-5 mt-6">
    
                 <div>
    
                     <div
                         class="text-primary text-3xl font-black">
    
                         ${doctor.experience}
    
                     </div>
    
                     <p class="text-sm text-slate-500">
    
                         Experience
    
                     </p>
    
                 </div>
    
                 <div>
    
                     <div
                         class="text-primary text-3xl font-black">
    
                         ${doctor.patients}
    
                     </div>
    
                     <p class="text-sm text-slate-500">
    
                         Patients
    
                     </p>
    
                 </div>
    
                 <div>
    
                     <div
                         class="text-primary text-3xl font-black">
    
                         ${doctor.research}
    
                     </div>
    
                     <p class="text-sm text-slate-500">
    
                         Publications
    
                     </p>
    
                 </div>
    
             </div>
    
             <div class="mt-6">
    
                 <h3
                     class="text-primary text-xl font-black mb-4">
    
                     About Doctor
    
                 </h3>
    
                 <p
                     class="text-slate-600 leading-8">
    
                     ${doctor.about}
    
                 </p>
    
             </div>
    
             <div class="mt-6">
    
                 <h3
                     class="text-primary text-xl font-black mb-4">
    
                     Education
    
                 </h3>
    
                 <ul class="space-y-3">
    
                     ${doctor.education
                       .map(
                         (item) => `
                         <li class="flex items-start gap-3">
                             <i class="fa-solid fa-circle-check text-secondary mt-1"></i>
                             <span>${item}</span>
                         </li>
                     `,
                       )
                       .join("")}
    
                 </ul>
    
             </div>
    
             <div class="mt-6">
    
                 <h3
                     class="text-primary text-xl font-black mb-4">
    
                     Languages
    
                 </h3>
    
                 <p class="text-slate-600">
    
                     ${doctor.languages}
    
                 </p>
    
             </div>
    
             <a
                 href="./bookappointment.php"
                 class="btn-primary mt-10 inline-flex">
    
                 Book Appointment
    
             </a>
    
         </div>
    
     </div>
    
     `;

  doctorModal.classList.remove("hidden");

  document.body.style.overflow = "hidden";
}

function closeDoctor() {
  doctorModal.classList.add("hidden");

  document.body.style.overflow = "";
}

document
  .getElementById("closeDoctorModal")
  .addEventListener("click", closeDoctor);

document.getElementById("doctorOverlay").addEventListener("click", closeDoctor);

function filterDoctors() {
  showLoader();

  setTimeout(() => {
    const keyword = document.getElementById("doctorSearch").value.toLowerCase();

    const department = document.getElementById("departmentFilter").value;

    const location = document.getElementById("locationFilter").value;

    const filteredDoctors = doctors.filter((doctor) => {
      const matchSearch = doctor.name.toLowerCase().includes(keyword);

      const matchDepartment =
        department === "" || doctor.department === department;

      const matchLocation = location === "" || doctor.location === location;

      return matchSearch && matchDepartment && matchLocation;
    });

    renderDoctors(filteredDoctors);

    hideLoader();
  }, 500);
}
document.addEventListener("DOMContentLoaded", () => {
  populateDepartments();

  renderDoctors(doctors);

  document
    .getElementById("doctorSearch")
    .addEventListener("input", filterDoctors);

  document
    .getElementById("departmentFilter")
    .addEventListener("change", filterDoctors);

  document
    .getElementById("locationFilter")
    .addEventListener("change", filterDoctors);

  document.getElementById("resetFilters").addEventListener("click", () => {
    document.getElementById("doctorSearch").value = "";
    document.getElementById("departmentFilter").value = "";
    document.getElementById("locationFilter").value = "";

    renderDoctors(doctors);
  });
});
