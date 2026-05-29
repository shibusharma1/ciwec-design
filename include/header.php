<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        CIWEC Hospital – CIWEC Hospital and Travel Medicine Center is one of the most reputable destination travel medicine hospitals in the world.
    </title>

    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <!-- links -->

    <!-- Swiper js CDN -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#11497b',
                        secondary: '#d71920',
                        lightbg: '#eef3f7',
                        darktext: '#163a63',
                        bordercolor: '#d7dde5'
                    },
                    fontFamily: {
                        roboto: ['Roboto', 'sans-serif']
                    },
                    boxShadow: {
                        soft: '0 2px 15px rgba(0,0,0,.06)'
                    }
                }
            }
        }
    </script>
    <!-- css links -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/speciality.css">
    <link rel="stylesheet" href="./assets/css/patient-stories.css">
    <link rel="stylesheet" href="./assets/css/whatsnew.css">
</head>

<body class="font-roboto">


    <?php
    include 'topbar.php';
    ?>


    <!-- MOBILE OVERLAY -->
    <div id="overlay"
        class="mobile-overlay fixed inset-0 bg-black/60 z-[90]"></div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu"
        class="mobile-menu fixed top-0 right-[-100%] w-[320px] h-screen bg-white z-[999] overflow-y-auto transition-all duration-500">
        <!-- TOP -->
        <div class="flex items-center justify-between p-5 border-b">
            <img src="./assets/img/logo.png"
                class="h-14">
            <button id="closeMenu"
                class="w-10 h-10 bg-primary text-white">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <!-- NAVIGATION -->
        <div class="p-5">
            <!-- HOME -->
            <a href="#"
                class="mobile-link">
                Home
            </a>

            <!-- ABOUT -->
            <div class="mobile-dropdown">
                <!-- BUTTON -->
                <button
                    class="mobile-dropdown-btn">
                    <span>
                        About Us
                    </span>
                    <i class="fa-solid fa-angle-down mobile-arrow"></i>
                </button>

                <!-- MENU -->
                <div class="mobile-dropdown-menu">

                    <a href="#" class="mobile-sublink">
                        About Us
                    </a>
                    <a href="#" class="mobile-sublink">
                        CIWEC History
                    </a>
                    <a href="#" class="mobile-sublink">
                        Gallery
                    </a>
                    <a href="#" class="mobile-sublink">
                        CIWEC CSR
                    </a>
                </div>
            </div>

            <!-- SERVICES -->
            <div class="mobile-dropdown">
                <!-- BUTTON -->
                <button
                    class="mobile-dropdown-btn">
                    <span>
                        Services
                    </span>
                    <i class="fa-solid fa-angle-down mobile-arrow"></i>
                </button>

                <!-- MENU -->
                <div class="mobile-dropdown-menu">
                    <a href="#" class="mobile-sublink">
                        Services
                    </a>
                    <a href="#" class="mobile-sublink">
                        Doctors at CIWEC
                    </a>

                    <a href="#" class="mobile-sublink">
                        Family Medicine & Health Screening
                    </a>

                    <a href="#" class="mobile-sublink">
                        Altitude illness and frostbite
                    </a>
                </div>
            </div>

            <!-- OTHER LINKS -->
            <a href="#"
                class="mobile-link">
                Health Information
            </a>

            <a href="#"
                class="mobile-link">
                Research & Publication
            </a>

            <a href="#"
                class="mobile-link border-b-0">
                Contact
            </a>
        </div>

    </div>

    <!-- HEADER -->
    <header id="header"
        class="bg-white sticky top-0 z-50 transition-all duration-300">
        <div class="container-custom">
            <div class="flex items-center justify-between">
                <!-- LEFT -->
                <div class="flex items-center justify-between gap-6">
                    <!-- Sidebar Menu -->
                    <!-- Logo -->
                    <a href="../ciwec/index.php">
                        <img width="128" height="71" src="./assets/img/logo.png"
                            class="h-[65px] lg:h-[80px] object-contain">
                    </a>
                </div>

                <!-- DESKTOP NAVIGATION -->
                <nav class="hidden xl:flex items-center gap-10">
                    <!-- HOME -->
                    <a href="#"
                        class="nav-link text-secondary">
                        Home
                    </a>
                    <!-- ABOUT DROPDOWN -->
                    <div class="relative dropdown-parent">
                        <!-- BUTTON -->
                        <button
                            class="nav-link flex items-center gap-2 dropdown-toggle"
                            data-dropdown="aboutDropdown">
                            About Us
                            <i class="fa-solid fa-angle-down text-[13px] transition-all duration-300 dropdown-icon"></i>
                        </button>
                        <!-- MENU -->
                        <div
                            id="aboutDropdown"
                            class="dropdown-menu absolute top-[170%] left-0 w-[320px] bg-white border border-gray-100 shadow-[0_15px_40px_rgba(0,0,0,.12)] opacity-0 invisible translate-y-3 transition-all duration-300 z-50">
                            <a href="#"
                                class="dropdown-link">
                                About Us
                            </a>
                            <a href="#"
                                class="dropdown-link">
                                CIWEC History
                            </a>
                            <a href="#"
                                class="dropdown-link">
                                Gallery
                            </a>
                            <a href="#"
                                class="dropdown-link border-b-0">
                                CIWEC CSR
                            </a>
                        </div>
                    </div>
                    <!-- SERVICES DROPDOWN -->
                    <div class="relative dropdown-parent">
                        <!-- BUTTON -->
                        <button
                            class="nav-link flex items-center gap-2 dropdown-toggle"
                            data-dropdown="servicesDropdown">
                            Services
                            <i class="fa-solid fa-angle-down text-[13px] transition-all duration-300 dropdown-icon"></i>
                        </button>
                        <!-- MENU -->
                        <div
                            id="servicesDropdown"
                            class="dropdown-menu absolute top-[170%] left-0 w-[360px] bg-white border border-gray-100 shadow-[0_15px_40px_rgba(0,0,0,.12)] opacity-0 invisible translate-y-3 transition-all duration-300 z-50">
                            <a href="#"
                                class="dropdown-link">
                                Services
                            </a>
                            <a href="#"
                                class="dropdown-link">
                                Doctors at CIWEC
                            </a>

                            <a href="#"
                                class="dropdown-link">
                                Family Medicine & Health Screening
                            </a>
                            <a href="#"
                                class="dropdown-link border-b-0">
                                Altitude illness and frostbite
                            </a>
                        </div>
                    </div>
                    <!-- OTHER LINKS -->
                    <a href="#"
                        class="nav-link">
                        Health Information
                    </a>
                    <a href="#"
                        class="nav-link">
                        Research & Publication
                    </a>
                    <a href="#"
                        class="nav-link">
                        Contact
                    </a>
                </nav>

                <div class="flex item-center gap-6">
                    <!-- <button id="searchToggle" class="search-pulse text-[28px] text-primary">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button> -->
                    <button
                        id="searchToggle"
                        class="group search-pulse hidden md:flex items-center
           gap-3 px-4 py-2 rounded-full
           border border-secondary
           bg-white/80 backdrop-blur-sm
           hover:bg-primary hover:text-white
           hover:border-primary
           transition-all duration-300">

                        <i
                            class="fa-solid fa-magnifying-glass text-[20px]
               group-hover:rotate-12 transition-all duration-300">
                        </i>

                        <span
                            class="hidden lg:block text-sm font-semibold uppercase tracking-wider">

                            Search

                        </span>

                    </button>

                    <!-- Mobile Icon Only -->
                    <button
                        id="searchToggleMobile"
                        class="md:hidden search-pulse text-[28px] text-primary">

                        <i class="fa-solid fa-magnifying-glass"></i>

                    </button>
                    <button id="menuToggle" class="lg:hidden text-[32px] text-primary">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>


    <!-- Searchbar -->
    <?php
    include './include/searchbar.php';
    ?>


    <script>
        // OPEN MENU
        const menuToggle = document.getElementById("menuToggle");
        const mobileMenu = document.getElementById("mobileMenu");

        // CLOSE BUTTON
        const closeMenu = document.getElementById("closeMenu");

        // OPEN
        menuToggle.addEventListener("click", () => {
            mobileMenu.classList.add("active");
        });

        // CLOSE
        closeMenu.addEventListener("click", () => {
            mobileMenu.classList.remove("active");
        });

        const dropdownParents = document.querySelectorAll(".dropdown-parent");
        const dropdownMenus = document.querySelectorAll(".dropdown-menu");
        const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

        function closeAllDropdowns() {
            dropdownMenus.forEach((menu) => {
                menu.classList.remove("active");
            });
            dropdownParents.forEach((parent) => {
                parent.classList.remove("active");
            });
        }

        dropdownParents.forEach((parent) => {
            const toggle = parent.querySelector(".dropdown-toggle");
            const dropdownId = toggle.dataset.dropdown;
            const menu = document.getElementById(dropdownId);

            // HOVER (DESKTOP)
            parent.addEventListener("mouseenter", () => {
                if (window.innerWidth >= 1280) {
                    closeAllDropdowns();
                    menu.classList.add("active");
                    parent.classList.add("active");
                }
            });

            parent.addEventListener("mouseleave", () => {
                if (window.innerWidth >= 1280) {
                    menu.classList.remove("active");
                    parent.classList.remove("active");
                }
            });

            // CLICK
            toggle.addEventListener("click", (e) => {
                e.stopPropagation();
                const isActive = menu.classList.contains("active");
                closeAllDropdowns();
                if (!isActive) {
                    menu.classList.add("active");
                    parent.classList.add("active");
                }
            });
        });

        // CLICK OUTSIDE
        document.addEventListener("click", (e) => {
            if (!e.target.closest(".dropdown-parent")) {
                closeAllDropdowns();
            }
        });

        // ESC CLOSE
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape") {
                closeAllDropdowns();
            }
        });

        // MOBILE DROPDOWN
        const mobileDropdowns = document.querySelectorAll(".mobile-dropdown");
        mobileDropdowns.forEach((dropdown) => {
            const button = dropdown.querySelector(".mobile-dropdown-btn");
            button.addEventListener("click", () => {
                // CLOSE OTHERS
                mobileDropdowns.forEach((item) => {
                    if (item !== dropdown) {
                        item.classList.remove("active");
                    }
                });
                // TOGGLE CURRENT
                dropdown.classList.toggle("active");
            });
        });
    </script>