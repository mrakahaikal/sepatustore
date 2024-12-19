<script setup>
import ProductCard from '@/Components/ProductCard.vue';
import { Swiper, SwiperSlide } from 'swiper/vue';

const props = defineProps({
    products: {
        type: Object,
        required: true
    }
})
</script>
<template>
    <section id="featured" class="flex flex-col gap-4">
        <div class="flex items-center justify-between px-4">
            <h2 class="font-bold leading-[20px]">Explore Our <br>Featured</h2>
            <a href="#" class="rounded-full p-[6px_14px] border border-[#2A2A2A] text-xs leading-[18px]">
                View All
            </a>
        </div>
        <div class="swiper w-full overflow-hidden">
            <swiper class="w-full" :slides-per-view="'auto'" :slides-offset-before="16" :slides-offset-after="16"
                :speed="500" :space-between="16">
                <swiper-slide class="!w-fit py-0.5" v-for="product in products" :key="product.id">
                    <ProductCard :product="product" />
                </swiper-slide>
            </swiper>
        </div>
    </section>
</template>
