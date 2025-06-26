<x-app-layout>
    <x-slot:title>
        Order
    </x-slot:title>
    <x-slot:topbar>
        <a href="/">
            <img src="{{ asset('assets/images/icons/back.svg') }}" class="w-10 h-10" alt="icon">
        </a>
        <p class="font-bold text-lg leading-[27px]">Booking</p>
        <div class="dummy-btn w-10"></div>
    </x-slot:topbar>
    <livewire:order-form :$shoe :$orderData />
</x-app-layout>
