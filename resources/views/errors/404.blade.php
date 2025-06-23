<x-app-layout>
    <x-slot:title>Halaman tidak tersedia</x-slot:title>
    <div class="max-w-sm h-full mx-auto text-center mt-20">
        <h1 class="font-bold leading-[20px]">Ups, halaman tidak tersedia</h1>
        <img class="w-72 h-72 shrink-0" src="{{ asset('assets/images/illustrations/404.svg') }}" alt="404 Not Found">
        <x-button-link href="/" wire:navigate>Kembali ke Halaman Utama</x-button-link>
    </div>
</x-app-layout>
