<script setup>

</script>

<template>
    <section id="category" class="flex flex-col gap-4 px-4">
        <div class="flex items-center justify-between">
            <h2 class="font-bold leading-[20px]">Our Featured <br>Categories</h2>
            <a href="category.html" class="rounded-full p-[6px_14px] border border-[#2A2A2A] text-xs leading-[18px]">
                View All
            </a>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <a href="category.html">
                <div
                    class="flex items-center justify-between w-full rounded-2xl overflow-hidden bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
                    <div class="flex flex-col gap-[2px] px-[14px]">
                        <h3 class="font-bold text-sm leading-[21px]">Lifestyle</h3>
                        <p class="text-xs leading-[18px] text-[#878785]">223 Shoes</p>
                    </div>
                    <div class="flex shrink-0 w-20 h-[90px] overflow-hidden">
                        <img src="assets/images/thumbnails/photo1.png" class="w-full h-full object-cover object-left"
                            alt="thumbnail">
                    </div>
                </div>
            </a>
            <a href="category.html">
                <div
                    class="flex items-center justify-between w-full rounded-2xl overflow-hidden bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
                    <div class="flex flex-col gap-[2px] px-[14px]">
                        <h3 class="font-bold text-sm leading-[21px]">Running</h3>
                        <p class="text-xs leading-[18px] text-[#878785]">12 Shoes</p>
                    </div>
                    <div class="flex shrink-0 w-20 h-[90px] overflow-hidden">
                        <img src="assets/images/thumbnails/photo2.png" class="w-full h-full object-cover object-left"
                            alt="thumbnail">
                    </div>
                </div>
            </a>
            <a href="category.html">
                <div
                    class="flex items-center justify-between w-full rounded-2xl overflow-hidden bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
                    <div class="flex flex-col gap-[2px] px-[14px]">
                        <h3 class="font-bold text-sm leading-[21px]">Gym</h3>
                        <p class="text-xs leading-[18px] text-[#878785]">142 Shoes</p>
                    </div>
                    <div class="flex shrink-0 w-20 h-[90px] overflow-hidden">
                        <img src="assets/images/thumbnails/photo3.png" class="w-full h-full object-cover object-left"
                            alt="thumbnail">
                    </div>
                </div>
            </a>
            <a href="category.html">
                <div
                    class="flex items-center justify-between w-full rounded-2xl overflow-hidden bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
                    <div class="flex flex-col gap-[2px] px-[14px]">
                        <h3 class="font-bold text-sm leading-[21px]">Sandal</h3>
                        <p class="text-xs leading-[18px] text-[#878785]">51 Shoes</p>
                    </div>
                    <div class="flex shrink-0 w-20 h-[90px] overflow-hidden">
                        <img src="assets/images/thumbnails/photo4.png" class="w-full h-full object-cover object-left"
                            alt="thumbnail">
                    </div>
                </div>
            </a>
        </div>
    </section>
</template>
