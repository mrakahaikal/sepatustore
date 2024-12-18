<script setup>
import { Link } from '@inertiajs/vue3';


</script>
<template>
    <div class="swiper-slide !w-fit py-[2px]">
        <Link href="details.html">
        <div
            class="flex flex-col shrink-0 w-[230px] h-full rounded-3xl gap-[14px] p-[10px] pb-4 bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
            <div class="w-[210px] h-[230px] rounded-3xl bg-[#D9D9D9] overflow-hidden">
                <img src="assets/images/thumbnails/image2.png" class="w-full h-full object-cover" alt="thumbnail">
            </div>
            <div class="flex flex-col gap-[14px] justify-between">
                <div class="flex items-center justify-between gap-4">
                    <h3 class="font-bold leading-[20px]">Nike Zoom SD 4 Electric</h3>
                    <p class="font-bold text-sm leading-[21px] text-nowrap">Rp 128.000</p>
                </div>
                <div class="flex items-center justify-between gap-2">
                    <div class="flex items-center gap-1">
                        <img src="assets/images/icons/Star 1.svg" class="w-[22px] h-[22px]" alt="star">
                        <p class="font-semibold text-sm leading-[21px]">4.5</p>
                    </div>
                    <p class="text-sm leading-[21px] text-[#878785]">(18,485 reviews)</p>
                </div>
            </div>
        </div>
        </Link>
    </div>
</template>
