<?php
include './include/header.php';
?>
<section class="relative h-[220px] md:h-[280px] overflow-hidden">
    <img src="./assets/img/heathinformation.png"
        class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-primary/80"></div>
    <div class="relative z-10 h-full flex items-center">
        <div class="container-custom">
            <h1 class="text-white text-center text-3xl md:text-5xl font-black mb-3">
                Health Information
            </h1>
            <div class="flex items-center justify-center gap-2 text-white/90">
                <a href="index.php" class="hover:text-secondary">
                    Home
                </a>
                <i class="fa-solid fa-angle-right text-xs"></i>
                <span class="text-secondary">
                    Health Information
                </span>
            </div>
        </div>
    </div>
</section>
<section class="section-padding bg-[#f8fafc]">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="text-center mb-10">
            <h2 class="section-title">
                Health Information
            </h2>
            <p class="section-description max-w-3xl mx-auto">
                Trusted health information and travel medicine guidance
                from CIWEC Hospital specialists.
            </p>
        </div>
        <!-- SWIPER -->
        <div class="swiper healthInfoSwiper overflow-hidden">
            <div class="swiper-wrapper">
                <!-- CARD -->
                <div class="swiper-slide h-auto">
                    <article
                        class="group bg-white rounded-[20px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 h-full flex flex-col">
                        <!-- IMAGE -->
                        <div class="relative overflow-hidden">
                            <img src="./assets/img/health/immunization.png"
                                class="w-full h-[220px] object-cover transition-all duration-700 group-hover:scale-110">
                            <span
                                class="absolute top-4 left-4 px-3 py-1 bg-secondary text-white text-xs font-bold rounded-full">
                                Vaccination
                            </span>
                        </div>
                        <!-- CONTENT -->
                        <div class="p-6 flex flex-col flex-grow">
                            <h3
                                class="text-primary text-xl font-black mb-3 leading-tight">
                                Adult Immunizations
                            </h3>
                            <p
                                class="text-gray-600 text-sm md:text-base leading-7 flex-grow">
                                Essential vaccination information for adults,
                                travelers and families.
                            </p>
                            <a href="#"
                                class="inline-flex items-center gap-3 text-secondary font-bold mt-5">
                                Read More
                                <span
                                    class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center">
                                    <i class="fa-solid fa-arrow-right text-xs"></i>
                                </span>
                            </a>
                        </div>
                    </article>
                </div>
                <!-- CARD -->
                <div class="swiper-slide h-auto">
                    <article
                        class="group bg-white rounded-[20px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 h-full flex flex-col">
                        <div class="relative overflow-hidden">
                            <img src="./assets/img/health/cyclospora.png"
                                class="w-full h-[220px] object-cover transition-all duration-700 group-hover:scale-110">
                            <span
                                class="absolute top-4 left-4 px-3 py-1 bg-primary text-white text-xs font-bold rounded-full">
                                Infectious Disease
                            </span>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3
                                class="text-primary text-xl font-black mb-3">
                                All About Cyclospora
                            </h3>
                            <p
                                class="text-gray-600 text-sm md:text-base leading-7 flex-grow">
                                Learn symptoms, diagnosis, treatment and
                                prevention of Cyclospora infection.
                            </p>
                            <a href="#"
                                class="inline-flex items-center gap-3 text-secondary font-bold mt-5">
                                Read More
                                <span
                                    class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center">
                                    <i class="fa-solid fa-arrow-right text-xs"></i>
                                </span>
                            </a>
                        </div>
                    </article>
                </div>
                <!-- CARD -->
                <div class="swiper-slide h-auto">
                    <article
                        class="group bg-white rounded-[20px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 h-full flex flex-col">
                        <div class="relative overflow-hidden">
                            <img src="./assets/img/health/altitude.png"
                                class="w-full h-[220px] object-cover transition-all duration-700 group-hover:scale-110">
                            <span
                                class="absolute top-4 left-4 px-3 py-1 bg-secondary text-white text-xs font-bold rounded-full">
                                Travel Medicine
                            </span>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3
                                class="text-primary text-xl font-black mb-3">
                                Altitude Illness Advice
                            </h3>
                            <p
                                class="text-gray-600 text-sm md:text-base leading-7 flex-grow">
                                Important guidance for trekkers and travelers
                                visiting high-altitude regions.
                            </p>
                            <a href="#"
                                class="inline-flex items-center gap-3 text-secondary font-bold mt-5">
                                Read More
                                <span
                                    class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center">
                                    <i class="fa-solid fa-arrow-right text-xs"></i>
                                </span>
                            </a>
                        </div>
                    </article>
                </div>
                <!-- CARD -->
                <div class="swiper-slide h-auto">
                    <article
                        class="group bg-white rounded-[20px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 h-full flex flex-col">
                        <!-- IMAGE -->
                        <div class="relative overflow-hidden">
                            <img src="./assets/img/health/immunization.png"
                                class="w-full h-[220px] object-cover transition-all duration-700 group-hover:scale-110">
                            <span
                                class="absolute top-4 left-4 px-3 py-1 bg-secondary text-white text-xs font-bold rounded-full">
                                Vaccination
                            </span>
                        </div>
                        <!-- CONTENT -->
                        <div class="p-6 flex flex-col flex-grow">
                            <h3
                                class="text-primary text-xl font-black mb-3 leading-tight">
                                Adult Immunizations
                            </h3>
                            <p
                                class="text-gray-600 text-sm md:text-base leading-7 flex-grow">
                                Essential vaccination information for adults,
                                travelers and families.
                            </p>
                            <a href="#"
                                class="inline-flex items-center gap-3 text-secondary font-bold mt-5">
                                Read More
                                <span
                                    class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center">
                                    <i class="fa-solid fa-arrow-right text-xs"></i>
                                </span>
                            </a>
                        </div>
                    </article>
                </div>
                <!-- CARD -->
                <div class="swiper-slide h-auto">
                    <article
                        class="group bg-white rounded-[20px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 h-full flex flex-col">
                        <div class="relative overflow-hidden">
                            <img src="./assets/img/health/cyclospora.png"
                                class="w-full h-[220px] object-cover transition-all duration-700 group-hover:scale-110">
                            <span
                                class="absolute top-4 left-4 px-3 py-1 bg-primary text-white text-xs font-bold rounded-full">
                                Infectious Disease
                            </span>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3
                                class="text-primary text-xl font-black mb-3">
                                All About Cyclospora
                            </h3>
                            <p
                                class="text-gray-600 text-sm md:text-base leading-7 flex-grow">
                                Learn symptoms, diagnosis, treatment and
                                prevention of Cyclospora infection.
                            </p>
                            <a href="#"
                                class="inline-flex items-center gap-3 text-secondary font-bold mt-5">
                                Read More
                                <span
                                    class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center">
                                    <i class="fa-solid fa-arrow-right text-xs"></i>
                                </span>
                            </a>
                        </div>
                    </article>
                </div>
                <!-- CARD -->
                <div class="swiper-slide h-auto">
                    <article
                        class="group bg-white rounded-[20px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 h-full flex flex-col">
                        <div class="relative overflow-hidden">
                            <img src="./assets/img/health/altitude.png"
                                class="w-full h-[220px] object-cover transition-all duration-700 group-hover:scale-110">
                            <span
                                class="absolute top-4 left-4 px-3 py-1 bg-secondary text-white text-xs font-bold rounded-full">
                                Travel Medicine
                            </span>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3
                                class="text-primary text-xl font-black mb-3">
                                Altitude Illness Advice
                            </h3>
                            <p
                                class="text-gray-600 text-sm md:text-base leading-7 flex-grow">
                                Important guidance for trekkers and travelers
                                visiting high-altitude regions.
                            </p>
                            <a href="#"
                                class="inline-flex items-center gap-3 text-secondary font-bold mt-5">
                                Read More
                                <span
                                    class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center">
                                    <i class="fa-solid fa-arrow-right text-xs"></i>
                                </span>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
            <!-- PAGINATION -->
            <div class="healthInfoPagination mt-10 text-center"></div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", () => {

        new Swiper(".healthInfoSwiper", {

            loop: true,

            speed: 800,

            spaceBetween: 24,

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            pagination: {
                el: ".healthInfoPagination",
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
                }
            }

        });

    });
</script>
<?php
include './include/stickyfooterbar.php';
include './include/footer.php';
?>