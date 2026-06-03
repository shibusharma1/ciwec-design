<?php
include './include/locationsection.php';
?>
<footer class="bg-primary overflow-hidden">
    <!-- TOP -->
    <div class="border-b border-white/10">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 py-14">
                <!-- <div class="grid lg:grid-cols-4 gap-10 py-14"> -->
                <!-- ABOUT -->
                <div>
                    <img
                        src="./assets/img/logo.png"
                        class="h-20 bg-white p-3 mb-6">
                    <p
                        class="text-white/80 text-sm leading-7">
                        CIWEC Hospital is Nepal's leading travel medicine
                        and international healthcare provider serving
                        travelers, expatriates, diplomats and local communities.
                    </p>
                </div>
                <!-- QUICK LINKS -->
                <div>
                    <h3
                        class="text-white text-lg font-black mb-6">
                        Quick Links
                    </h3>
                    <ul class="space-y-3">
                        <li>
                            <a href=""
                                class="text-white/80 hover:text-secondary transition">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-white/80 hover:text-secondary transition">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="./researchandpublication.php"
                                class="text-white/80 hover:text-secondary transition">
                                Doctors
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-white/80 hover:text-secondary transition">
                                Research
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- SERVICES -->
                <div>
                    <h3 class="text-white text-lg font-black mb-6">
                        Key Services
                    </h3>

                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="text-white/80 hover:text-secondary transition">
                                Travel Medicine
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-white/80 hover:text-secondary transition">
                                Family Medicine
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-white/80 hover:text-secondary transition">
                                Health Screening
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-white/80 hover:text-secondary transition">
                                Emergency Care
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- NEWSLETTER -->
                <div>
                    <h3
                        class="text-white text-lg font-black mb-6">
                        Subscribe
                    </h3>
                    <p
                        class="text-white/70 text-sm mb-5">
                        Get healthcare updates and newsletters.
                    </p>
                    <form class="flex">
                        <input
                            type="email"
                            placeholder="Email Address"
                            class="flex-1 h-12 px-4 text-sm text-slate-700 outline-none focus:ring-2 focus:ring-secondary focus:border-secondary transition">
                        <button
                            class="w-14 bg-secondary text-white hover:bg-white hover:text-primary transition">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                    <!-- SOCIAL -->
                    <div class="flex gap-3 mt-6">
                        <a href="#"
                            class="w-10 h-10 border border-white/20 text-white flex items-center justify-center hover:bg-secondary hover:border-secondary transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 border border-white/20 text-white flex items-center justify-center hover:bg-secondary hover:border-secondary transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 border border-white/20 text-white flex items-center justify-center hover:bg-secondary hover:border-secondary transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOCATION STRIP -->
    <!-- <div class="border-b border-white/10">
        <div class="container-custom">
            <div
                class="grid md:grid-cols-3 gap-6 py-8">
                <div>
                    <h4
                        class="text-secondary font-bold mb-2">
                        Kathmandu
                    </h4>
                    <p class="text-white/70 text-sm">
                        +977-1-4524111
                    </p>
                    <p class="text-white/70 text-sm">
                        info@ciwec-clinic.com
                    </p>
                </div>
                <div>
                    <h4
                        class="text-secondary font-bold mb-2">
                        Pokhara
                    </h4>
                    <p class="text-white/70 text-sm">
                        +977-61-453082
                    </p>
                    <p class="text-white/70 text-sm">
                        pkradministrator@ciwec-clinic.com
                    </p>
                </div>
                <div>
                    <h4
                        class="text-secondary font-bold mb-2">
                        Emergency
                    </h4>
                    <p
                        class="text-white text-lg font-bold">
                        24/7 Available
                    </p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- COPYRIGHT -->
    <div class="pb-20 lg:pb-0 md:pb-0">
        <div class="container-custom">
            <div
                class="flex flex-col md:flex-row justify-between items-center gap-4 py-6">
                <p
                    class="text-white/60 text-sm">
                    © 2025 CIWEC Hospital. All Rights Reserved.
                </p>
                <div
                    class="flex gap-5 text-sm">
                    <a href="#"
                        class="text-white/60 hover:text-secondary transition">
                        Privacy Policy
                    </a>
                    <a href="#"
                        class="text-white/60 hover:text-secondary transition">
                        Terms & Conditions
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
include './include/backtotop.php';
?>

<!-- swiper js  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- script for the sticky header -->
<script src="./assets/js/stickyheader.js"></script>

<!-- script for the back to top -->
<script defer src="./assets/js/backtotop.js"></script>

<!-- Js for FAQ -->
<script defer src="./assets/js/faq.js"></script>

<!-- script for the Testimonial -->
<script src="./assets/js/swiperslider.js"></script>

<script>
    const specialitySwiper = new Swiper(".specialitySwiper", {
        loop: false,
        speed: 900,
        slidesPerView: 1.15,
        spaceBetween: 1,
        autoplay: true,
        pagination: {
            el: ".speciality-pagination",
            clickable: true,
            dynamicBullets: false,
        },

        breakpoints: {
            640: {
                slidesPerView: 2.1,
            },
            1024: {
                slidesPerView: 3.2,
            },
            1280: {
                slidesPerView: 4.5,
            }
        }
    });
</script>

<!-- =====================================================
   SWIPER JS
   ===================================================== -->
<script>
    const patientStoriesSwiper = new Swiper(".patientStoriesSwiper", {

        loop: true,
        speed: 1000,
        spaceBetween: 20,

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },

        pagination: {
            el: ".patient-story-pagination",
            clickable: true,
        },

        breakpoints: {

            0: {
                slidesPerView: 1,
            },

            768: {
                slidesPerView: 2,
            },

        },

    });

    // =====================================================
    // VIDEO MODAL
    // =====================================================

    const videoModal = document.getElementById("videoModal");
    const storyVideo = document.getElementById("storyVideo");
    const closeVideoModal = document.getElementById("closeVideoModal");

    document.querySelectorAll(".story-card").forEach((card) => {

        card.addEventListener("click", () => {

            const video = card.getAttribute("data-video");

            storyVideo.src = video;

            videoModal.classList.remove("hidden");
            videoModal.classList.add("flex");

            storyVideo.play();

            document.body.style.overflow = "hidden";

        });

    });

    // CLOSE
    function closeModal() {

        videoModal.classList.add("hidden");
        videoModal.classList.remove("flex");

        storyVideo.pause();
        storyVideo.currentTime = 0;

        document.body.style.overflow = "auto";

    }

    closeVideoModal.addEventListener("click", closeModal);

    // CLICK OUTSIDE
    videoModal.addEventListener("click", (e) => {

        if (e.target === videoModal) {
            closeModal();
        }

    });

    // ESC CLOSE
    document.addEventListener("keydown", (e) => {

        if (e.key === "Escape") {
            closeModal();
        }

    });
</script>

<!-- script for the sticky footer bar  -->
<script>
    const stickyBar = document.getElementById("stickyBar");
    const heroSection = document.querySelector("section"); // HERO section

    let lastScroll = 0;

    window.addEventListener("scroll", () => {
        const currentScroll = window.scrollY;
        const heroHeight = heroSection.offsetHeight;

        // show only AFTER hero
        if (currentScroll > heroHeight - 100) {
            stickyBar.classList.remove("translate-y-full", "opacity-0", "pointer-events-none");
            stickyBar.classList.add("translate-y-0", "opacity-100");
        } else {
            stickyBar.classList.add("translate-y-full", "opacity-0", "pointer-events-none");
            stickyBar.classList.remove("translate-y-0", "opacity-100");
        }

        lastScroll = currentScroll;
    });
</script>

</body>

</html>