<?php
use Livewire\Volt\Component;
use App\Services\FrontService;
use Livewire\Attributes\Title;

new class extends Component {
    protected FrontService $frontService;

    public function mount(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }
};
?>

<div class="gap-5 flex flex-col w-full">
    <form action="{{ route('front.search') }}" class="flex justify-between items-center mx-4">
        <div
            class="relative flex items-center w-full rounded-l-full px-[14px] gap-[10px] bg-white transition-all duration-300 focus-within:ring-2 focus-within:ring-[#FFC700]">
            <img src="{{ asset('assets/images/icons/search-normal.svg') }}" class="w-6 h-6" alt="icon">
            <input type="text" name="keyword"
                class="w-full py-[14px] appearance-none bg-white outline-none font-semibold placeholder:font-normal placeholder:text-[#878785]"
                placeholder="Search product...">
        </div>
        <button type="submit" class="h-full rounded-r-full py-[14px] px-5 bg-primary">
            <span class="font-semibold">Explore</span>
        </button>
    </form>
    @include('pages.home.partials.partial-category', [
        'categories' => $categories,
    ])
    {{-- <x-pages.home.partials.partial-category :$categories />
    <x-pages.home.partials.partial-featured :$popularShoes />
    <x-pages.home.partials.partial-fresh :$newShoes /> --}}

    <x-slot:script>
        {{-- <script src="{{ asset('js/index.js') }}"></script> --}}
    </x-slot:script>
</div>
