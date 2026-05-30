<?php include './include/header.php'; ?>

<section class="relative h-[220px] md:h-[280px] lg:h-[340px] overflow-hidden">
    <img src="./assets/img/contact-banner.jpg"
        class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-primary/75"></div>
    <div class="relative h-full flex items-center text-center">
        <div class="container-custom">
            <h1 class="text-white text-3xl md:text-5xl font-black mb-3">
                Contact Us
            </h1>
            <div class="flex items-center justify-center gap-3 text-white text-sm md:text-base">
                <a href="index.php"
                    class="hover:text-secondary transition-all">
                    Home
                </a>
                <span>/</span>
                <span class="text-secondary">
                    Contact Us
                </span>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container-custom text-center">
        <h2 class="section-title mb-5">
            Get In Touch With CIWEC
        </h2>
        <p class="max-w-3xl mx-auto text-gray-600 text-sm md:text-lg leading-8">
            Whether you need medical assistance, appointment booking,
            travel medicine consultation, or emergency support,
            our team is ready to help.
        </p>
    </div>
</section>

<section class="section-padding">
    <div class="container-custom">
        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
            <!-- Phone -->
            <div class="bg-white rounded-xl p-8 text-center shadow-lg">
                <div class="w-16 h-16 rounded-full bg-primary/10 mx-auto mb-5 flex items-center justify-center">
                    <i class="fa-solid fa-phone text-primary text-2xl"></i>
                </div>
                <h3 class="text-primary text-xl font-black mb-3">
                    Call Us
                </h3>
                <p class="text-gray-600">
                    +977-1-4524111
                </p>
            </div>
            <!-- Email -->
            <div class="bg-white rounded-xl p-8 text-center shadow-lg">
                <div class="w-16 h-16 rounded-full bg-secondary/10 mx-auto mb-5 flex items-center justify-center">
                    <i class="fa-solid fa-envelope text-secondary text-2xl"></i>
                </div>
                <h3 class="text-primary text-xl font-black mb-3">
                    Email
                </h3>
                <p class="text-gray-600 break-all">
                    info@ciwec-clinic.com
                </p>
            </div>
            <!-- Kathmandu -->
            <div class="bg-white rounded-xl p-8 text-center shadow-lg">
                <div class="w-16 h-16 rounded-full bg-primary/10 mx-auto mb-5 flex items-center justify-center">
                    <i class="fa-solid fa-location-dot text-primary text-2xl"></i>
                </div>
                <h3 class="text-primary text-xl font-black mb-3">
                    Kathmandu
                </h3>
                <p class="text-gray-600">
                    Kapurdhara Marg, Kathmandu
                </p>
            </div>
            <!-- Emergency -->
            <div class="bg-white rounded-xl p-8 text-center shadow-lg">
                <div class="w-16 h-16 rounded-full bg-secondary/10 mx-auto mb-5 flex items-center justify-center">
                    <i class="fa-solid fa-truck-medical text-secondary text-2xl"></i>
                </div>
                <h3 class="text-primary text-xl font-black mb-3">
                    Emergency
                </h3>
                <p class="text-gray-600">
                    24/7 Medical Support
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-[#f8fafc]">
    <div class="container-custom">
        <div class="grid xl:grid-cols-2 gap-12 items-stretch">
            <!-- FORM -->
            <div>
                <h2 class="section-title mb-6">
                    Send Us A Message
                </h2>
                <form class="space-y-5">
                    <input type="text"
                        placeholder="Full Name"
                        class="w-full h-[50px] px-5 rounded-xl border border-gray-300 outline-none focus:border-secondary">
                    <input type="email"
                        placeholder="Email Address"
                        class="w-full h-[50px] px-5 rounded-xl border border-gray-300 outline-none focus:border-secondary">
                    <input type="text"
                        placeholder="Phone Number"
                        class="w-full h-[50px] px-5 rounded-xl border border-gray-300 outline-none focus:border-secondary">
                    <textarea
                        rows="4"
                        placeholder="Message"
                        class="w-full p-5 rounded-xl border border-gray-300 outline-none focus:border-secondary"></textarea>
                    <button class="btn-primary">
                        Send Message
                    </button>
                </form>
            </div>
            <!-- IMAGE -->
            <div class="h-full">
                <img src="./assets/img/history/history1.webp"
                    class="w-full h-full object-cover rounded-xl shadow-xl">
            </div>
        </div>
    </div>
</section>

<?php
include './include/stickyfooterbar.php';
// include './include/locationsection.php';
?>

<section class="section-padding bg-[#EBF0F5]">
    <div class="container-custom text-center">
        <h2 class="text-primary text-2xl md:text-4xl font-black mb-5">
            Need Immediate Medical Assistance?
        </h2>
        <p class="text-primary max-w-2xl mx-auto mb-8">
            Our medical team is available 24/7 to provide support and emergency care.
        </p>
        <a href="tel:+97714524111"
            class="btn-primary">
            Call Now
        </a>
    </div>
</section>

<?php include './include/footer.php'; ?>