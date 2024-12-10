@props(['label', 'id', 'isExpanded' => true])

<section id="{{ $id }}" x-data="{ isExpanded: {{ $isExpanded }} }" class="flex flex-col rounded-[20px] p-4 pb-5 gap-5 mx-4 bg-white overflow-hidden transition-all duration-300">
    <button class="group flex items-center justify-between" type="button" @click="isExpanded = ! isExpanded">
        <h2 class="font-bold text-xl leading-[30px]">{{ $label }}</h2>
        <svg class="size-7 transition-all duration-300 group-has-[:checked]:rotate-180" :class="isExpanded ? '' : 'rotate-180'" alt="arrow-icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.9999 25.6666C20.4432 25.6666 25.6666 20.4433 25.6666 14C25.6666 7.55666 20.4432 2.33331 13.9999 2.33331C7.5566 2.33331 2.33325 7.55666 2.33325 14C2.33325 20.4433 7.5566 25.6666 13.9999 25.6666Z" stroke="#090917" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M9.88159 15.47L13.9999 11.3633L18.1183 15.47" stroke="#090917" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
    <div x-cloak x-show="isExpanded" x-collapse class="flex flex-col gap-5 overflow-hidden transition-all duration-300">
        {{ $slot }}
    </div>
</section>
