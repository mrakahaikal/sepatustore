<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex flex-col items-center justify-center px-4 gap-[30px] my-auto">
        <livewire:dropdown />
        <div class="py-12 w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
        <div x-data="{ open: false, search: '', options: ['Apple', 'Banana', 'Cherry', 'Date', 'Elderberry'] }" class="relative w-64">
            <div
                class="relative flex items-center w-full rounded-l-full px-[14px] gap-[10px] bg-white transition-all duration-300 focus-within:ring-2 focus-within:ring-[#FFC700]">
                <img src="{{ asset('assets/images/icons/search-normal.svg') }}" class="w-6 h-6" alt="icon">
                <input type="search" x-model="search" @focus="open = true" @click.away="open = false"
                    class="w-full py-[14px] appearance-none bg-white outline-none font-semibold placeholder:font-normal placeholder:text-[#878785]"
                    placeholder="Search product...">
            </div>
            <ul x-show="open" class="absolute z-10 w-full bg-white border mt-1 rounded shadow">
                <template x-for="option in options.filter(o => o.toLowerCase().includes(search.toLowerCase()))"
                    :key="option">
                    <li @click="search = option; open = false" class="px-3 py-2 hover:bg-gray-100 cursor-pointer"
                        x-text="option"></li>
                </template>
            </ul>
        </div>

    </div>
</x-app-layout>
