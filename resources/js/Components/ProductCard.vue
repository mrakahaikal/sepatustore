<script setup>
import { Link } from '@inertiajs/vue3';
import { SwiperSlide } from 'swiper/vue';

const props = defineProps({
    product: {
        type: Object,
        required: true
    }
})


</script>
<template>
    <div class="!w-fit">
        <Link :href="route('front.details', props.product.slug)">
        <div
            class="flex flex-col shrink-0 w-[230px] h-full rounded-3xl gap-[14px] p-[10px] pb-4 bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
            <div class="w-[210px] h-[230px] rounded-3xl bg-[#D9D9D9] overflow-hidden">
                <img :src="'storage/' + props.product.thumbnail" class="w-full h-full object-cover"
                    :alt="props.product.name">
            </div>
            <div class="flex flex-col gap-[14px] justify-between">
                <div class="flex items-center justify-between gap-4">
                    <h3 class="font-bold leading-[20px]">{{ props.product.name }}</h3>
                    <p class="font-bold text-sm leading-[21px] text-nowrap">Rp{{
                        props.product.price.toLocaleString('id-ID') }}</p>
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
