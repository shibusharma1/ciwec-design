<!-- SEARCH OVERLAY -->
<div id="searchWrapper"
    class="fixed inset-0 z-[999] opacity-0 invisible transition-all duration-500">
    <!-- DARK BACKGROUND -->
    <div id="searchOverlay"
        class="absolute inset-0 bg-black/60 backdrop-blur-[2px]">
    </div>
    <!-- SEARCH BAR -->
    <div
        class="relative pt-[100px] lg:pt-[115px]">
        <div class="container-custom">
            <div
                class="w-full sm:max-w-[85%] md:max-w-[70%] lg:max-w-[55%] xl:max-w-[40%] mx-auto shadow-[0_20px_60px_rgba(0,0,0,.25)]">
                <form
                    class="rounded-xl flex items-center bg-white overflow-hidden">
                    <!-- INPUT -->
                    <input type="text"
                        placeholder="Search.."
                        class="flex-1 h-[52px] md:h-[56px] px-4 md:px-6 text-[16px] md:text-[18px] text-gray-700 font-semibold outline-none border-none">
                    <!-- BUTTON -->
                    <button
                        class="w-[82px] md:w-[65px] h-[52px] md:h-[56px] bg-secondary text-white text-xl hover:bg-primary transition-all duration-300">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
