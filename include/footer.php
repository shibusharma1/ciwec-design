<?php
include "./include/locationsection.php"; ?>

<footer class="bg-primary overflow-hidden">
    <!-- TOP -->
    <div class="border-b border-white/10">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 py-14">
                
                <!-- ABOUT -->
                <div>
                    <img src="./assets/img/logo.png"
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
                    <h3 class="text-white text-lg font-black mb-6">
                        Quick Links
                    </h3>
                    <ul class="space-y-3">
                         <li>
                            <a href="./index.php"
                                class="text-white/80 hover:text-secondary transition">
                                Home
                            </a>
                        <li>
                            <a href="./about.php"
                                class="text-white/80 hover:text-secondary transition">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="./services.php"
                                class="text-white/80 hover:text-secondary transition">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="./doctors.php"
                                class="text-white/80 hover:text-secondary transition">
                                Doctors
                            </a>
                        </li>
                        <li>
                            <a href="./researchandpublication.php"
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
                            <a href="./altitudesickness.php" class="text-white/80 hover:text-secondary transition">
                                Travel Medicine
                            </a>
                        </li>
                        <li>
                            <a href="./healthinformation.php" class="text-white/80 hover:text-secondary transition">
                                Family Medicine
                            </a>
                        </li>
                        <li>
                            <a href="./healthscreening.php" class="text-white/80 hover:text-secondary transition">
                                Health Screening
                            </a>
                        </li>
                        <li>
                            <a href="./contactus.php" class="text-white/80 hover:text-secondary transition">
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

    <!-- COPYRIGHT -->
    <div class="pb-20 lg:pb-0 md:pb-0">
        <div class="container-custom">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 py-6">
                <p
                    class="text-white/60 text-sm">
                    © 2025 CIWEC Hospital. All Rights Reserved.
                </p>
                <div
                    class="flex gap-5 text-sm">
                    <a href="./privacypolicy.php"
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
include "./include/backtotop.php";
include "./include/stickyfooterbar.php";
?>

<!-- swiper js  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="./assets/js/stickyheader.js"></script>
<script defer src="./assets/js/backtotop.js"></script>
<script defer src="./assets/js/faq.js"></script>
<script src="./assets/js/swiperslider.js"></script>
<script src="./assets/js/awardswiper.js"></script>
<script src="./assets/js/specialityswiper.js"></script>
<script src="./assets/js/patientStoriesSwiper.js"></script>
<script src="./assets/js/stickyfooter.js"></script>
<script src="./assets/js/history.js"></script>
<script src="./assets/js/counter.js"></script>
<script src="./assets/js/newsletters.js"></script>
<script src="./assets/js/healthinformationcards.js"></script>
<script src="./assets/js/doctors.js"></script>
<!-- <script src="./assets/js/healthinformation.js"></script> -->

</body>
</html>