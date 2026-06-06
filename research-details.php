<?php
$hero_title = " Research & Publications";
include "./include/header.php";
include "./include/herobanner.php";
?>
<section class="section-padding bg-slate-100">
    <div class="container-custom">

        <!-- HERO HEADER -->
        <div class="max-w-4xl mb-8">

            <span class="section-subtitle">
                Travel Medicine Research
            </span>

            <h1 class="text-primary text-4xl md:text-5xl font-black leading-tight mt-4">
                Medical Challenges for Travelers Visiting Nepal
            </h1>

            <div class="flex flex-wrap justify-start gap-4 mt-6 text-sm text-slate-500">

                <span>Published: <b class="text-primary">2024</b></span>
                <span> Citations: <b class="text-primary">250+</b></span>
                <span> Category: <b class="text-primary">Travel Medicine</b></span>

            </div>

        </div>

        <!-- MAIN CONTENT -->
        <div class="grid lg:grid-cols-12 gap-10">

            <!-- ARTICLE -->
            <div class="lg:col-span-8">

                <!-- FEATURE IMAGE -->
                <img src="./assets/img/featured-research.png"
                    class="w-full h-[420px] object-cover border border-slate-200">

                <!-- CONTENT -->
                <div class="mt-8 space-y-6 text-slate-600 leading-8">

                    <p>
                        International travel to Nepal exposes visitors to unique
                        environmental and medical challenges including altitude
                        sickness, infectious diseases and limited access to healthcare
                        in remote regions.
                    </p>

                    <p>
                        This research analyzes disease patterns among trekkers and
                        travelers, highlighting preventive strategies and clinical
                        management approaches used in high-altitude medicine.
                    </p>

                    <blockquote class="border-l-4 border-secondary pl-6 italic text-lg text-slate-700">
                        "Early recognition and prevention remain the most effective tools
                        in reducing travel-related medical complications in Nepal."
                    </blockquote>

                    <p>
                        Findings from this study contribute to global travel medicine
                        guidelines and improve safety recommendations for expedition
                        teams and international visitors.
                    </p>

                </div>

                <!-- AUTHOR BOX -->
                <div class="mt-10 bg-white border border-slate-200 p-6">

                    <p class="text-slate-500 text-sm">Lead Researcher</p>
                    <h4 class="text-primary font-bold mt-2">
                        Dr. David R. Shlim & Research Team
                    </h4>

                    <p class="text-slate-600 mt-4 leading-7 text-sm">
                        Travel medicine specialist with extensive experience in Himalayan
                        expedition healthcare and infectious disease research.
                    </p>

                </div>

            </div>

            <!-- SIDEBAR -->
            <div class="lg:col-span-4">

                <div class="bg-white border border-slate-200 p-6 sticky top-24">

                    <h3 class="text-primary font-black text-xl mb-4">
                        Quick Summary
                    </h3>

                    <ul class="space-y-3 text-slate-600 text-sm leading-7">

                        <li>✔ High-altitude illness risks analyzed</li>
                        <li>✔ Infectious disease patterns studied</li>
                        <li>✔ Travel safety guidelines developed</li>
                        <li>✔ Preventive care recommendations included</li>

                    </ul>

                    <a href="./assets/pdf/research-paper.pdf"
                        download
                        class="btn-primary w-full text-center mt-6">
                        Download Full Paper
                    </a>

                </div>

            </div>

        </div>
    </div>
</section>

<section class="section-padding bg-slate-200">
    <div class="container-custom">
        <div class="mb-8">
            <span class="section-subtitle">Related Research</span>
            <h2 class="section-title">More Publications</h2>
        </div>
        <?php
        include "./include/researchcards.php"
        ?>
    </div>
</section>

<?php
include "./include/footer.php";
?>