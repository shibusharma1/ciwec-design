<!-- FOOTER -->
<footer>
    <?php
    include './include/locationsection.php';
    ?>
    <!-- ========================================= -->
    <!-- MAIN FOOTER -->
    <!-- ========================================= -->
    <div class="bg-primary relative overflow-hidden">
        <div class="container-custom">
            <div class="grid lg:grid-cols-3 gap-10 lg:gap-12 py-12 lg:py-16">
                <!-- LOGO -->
                <div>
                    <img
                        src="./assets/img/logo.png"
                        class="h-[95px] bg-white p-4 rounded-xl mb-8">
                    <div class="space-y-4">
                        <div>
                            <p class="text-white/70 text-xs uppercase tracking-wider mb-1">
                                Contact
                            </p>
                            <p class="text-white text-base md:text-lg font-bold">
                                +977-61-453082, 457053
                            </p>
                        </div>
                        <div>
                            <p class="text-white/70 text-xs uppercase tracking-wider mb-1">
                                Email
                            </p>
                            <p class="text-white text-base md:text-lg font-bold break-all">
                                info@ciwec-clinic.com
                            </p>
                        </div>
                    </div>
                </div>
                <!-- LINKS -->
                <div class="lg:border-x lg:border-white/20 lg:px-10">
                    <h3 class="text-white text-xl font-black uppercase mb-6">
                        Useful Links
                    </h3>
                    <div class="grid gap-3">
                        <a href="#"
                            class="text-white text-sm font-semibold hover:text-secondary transition-all">
                            Home
                        </a>
                        <a href="#"
                            class="text-white text-sm font-semibold hover:text-secondary transition-all">
                            About Us
                        </a>
                        <a href="#"
                            class="text-white text-sm font-semibold hover:text-secondary transition-all">
                            Health Information
                        </a>
                        <a href="#"
                            class="text-white text-sm font-semibold hover:text-secondary transition-all">
                            Services
                        </a>
                        <a href="#"
                            class="text-white text-sm font-semibold hover:text-secondary transition-all">
                            Doctors At CIWEC
                        </a>
                    </div>
                </div>
                <!-- SUBSCRIBE -->
                <div>
                    <h3 class="text-white text-xl font-black uppercase mb-4">
                        Subscribe
                    </h3>
                    <p class="text-white/90 text-sm leading-6 mb-5">
                        Get the latest updates and offers.
                    </p>
                    <form class="flex overflow-hidden rounded-lg">
                        <input
                            type="email"
                            placeholder="Enter email address"
                            class="flex-1 h-[52px] px-4 text-sm text-gray-700 outline-none">
                        <button
                            class="w-[60px] bg-primary text-white hover:bg-[#0f4060] transition-all duration-300">
                            <i class="fa-regular fa-envelope"></i>
                        </button>
                    </form>
                    <!-- SOCIAL -->
                    <div class="flex items-center gap-6 mt-6">
                        <a href="#"
                            class="flex items-center gap-2 text-white text-sm font-semibold hover:text-secondary transition-all">
                            <i class="fa-brands fa-facebook-f text-lg"></i>
                            Facebook
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 text-white text-sm font-semibold hover:text-secondary transition-all">
                            <i class="fa-brands fa-instagram text-lg"></i>
                            Instagram
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================================= -->
    <!-- COPYRIGHT -->
    <!-- ========================================= -->
    <div class="bg-[#dfe4ea] mb-16">
        <div class="container-custom">
            <div class="py-5 flex flex-col md:flex-row items-center justify-between gap-3">
                <p class="text-xs md:text-sm text-gray-600 text-center md:text-left">
                    Copyright ©2026 CIWEC Hospital. All Rights Reserved.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#"
                        class="text-xs md:text-sm text-gray-600 hover:text-secondary">
                        Terms & Conditions
                    </a>
                    <a href="#"
                        class="text-xs md:text-sm text-gray-600 hover:text-secondary">
                        Privacy Policy
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
<!-- script for the sticky footerbar -->
<!-- <script src="./assets/js/stickyfooterbar.js"></script> -->
<!-- script for the back to top -->
<!-- <script src="./assets/js/backtotop.js"></script> -->
<script defer src="./assets/js/backtotop.js"></script>
<!-- script to toggle the searchbar -->
<script src="./assets/js/searchtoggle.js"></script>
<!-- script for the Testimonial -->
<script src="./assets/js/swiperslider.js"></script>
<!-- script for the swiper slider of specialityslider -->
<!-- <script src="./assets/js/specialityslider.js"></script> -->
<script>
    // =========================
    // SPECIALITY SLIDER
    // =========================

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