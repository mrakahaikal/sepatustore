<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Categories from './Partials/Categories.vue';
import Featured from './Partials/Featured.vue';
import Fresh from './Partials/Fresh.vue';
import Navigation from '@/Components/Navigation.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Surganya Segala Sepatu" />
    <AppLayout>
        <div id="top-bar" class="flex justify-between items-center px-4 mt-[60px]">
            <img src="assets/images/logos/logo.svg" class="flex shrink-0" alt="logo">
            <a href="#">
                <img src="assets/images/icons/notification.svg" class="w-10 h-10" alt="icon">
            </a>
        </div>
        <form class="flex justify-between items-center mx-4">
            <div
                class="relative flex items-center w-full rounded-l-full px-[14px] gap-[10px] bg-white transition-all duration-300 focus-within:ring-2 focus-within:ring-[#FFC700]">
                <img src="assets/images/icons/search-normal.svg" class="w-6 h-6" alt="icon">
                <input type="text"
                    class="w-full py-[14px] appearance-none bg-white outline-none font-semibold placeholder:font-normal placeholder:text-[#878785]"
                    placeholder="Search product...">
            </div>
            <button type="submit" class="h-full rounded-r-full py-[14px] px-5 bg-[#C5F277]">
                <span class="font-semibold">Explore</span>
            </button>
        </form>
        <Categories />
        <Featured />
        <Fresh />
        <Navigation />
    </AppLayout>
</template>
