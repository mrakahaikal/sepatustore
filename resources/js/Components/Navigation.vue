<script setup>

</script>

<template>
    <div id="bottom-nav" class="relative flex h-[100px] w-full shrink-0">
        <nav class="fixed bottom-5 w-full max-w-[640px] px-4 z-30">
            <div
                class="grid grid-flow-col auto-cols-auto items-center justify-between rounded-full bg-[#2A2A2A] p-2 px-[30px]">
                <a href="index.html" class="active flex shrink-0 -mx-[22px]">
                    <div class="flex items-center rounded-full gap-[10px] p-[12px_16px] bg-[#C5F277]">
                        <img src="assets/images/icons/3dcube.svg" class="w-6 h-6" alt="icon">
                        <span class="font-bold text-sm leading-[21px]">Browse</span>
                    </div>
                </a>
                <a href="check-booking.html" class="mx-auto w-full">
                    <img src="assets/images/icons/bag-2-white.svg" class="w-6 h-6" alt="icon">
                </a>
                <a href="#" class="mx-auto w-full">
                    <img src="assets/images/icons/star-white.svg" class="w-6 h-6" alt="icon">
                </a>
                <a href="#" class="mx-auto w-full">
                    <img src="assets/images/icons/24-support-white.svg" class="w-6 h-6" alt="icon">
                </a>
            </div>
        </nav>
    </div>
</template>
