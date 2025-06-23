<?php

use Livewire\Volt\Component;
use App\Services\FrontService;
use Livewire\Attributes\Title;

new #[Title('Semua Brand')] class extends Component {
    protected FrontService $frontService;

    #[Locked]
    public $data;

    public function mount(FrontService $frontService)
    {
        $this->frontService = $frontService;
        $this->data = $frontService->getFrontData()['brands'];
    }
};

?>

<div>

    <x-slot:topbar>
        <a href="{{ route('front.index') }}" wire:navigate>
            <img src="{{ asset('assets/images/icons/back.svg') }}" class="w-10 h-10" alt="icon">
        </a>
        <p class="font-bold text-lg leading-[27px]">Semua Brand</p>
        <div class="dummy-btn w-10"></div>
    </x-slot:topbar>
    <section id="all-brands" class="flex flex-col gap-4 px-4 mb-[111px]">
        <div class="flex flex-col gap-4">
            @forelse($data as $item)
                <a href="{{ route('brand.show', $item->slug) }}" wire:navigate>
                    <div
                        class="flex items-center justify-between w-full rounded-2xl overflow-hidden bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
                        <div class="flex flex-col gap-[2px] px-[14px]">
                            <h3 class="font-bold text-sm leading-[21px]">{{ $item->name }}</h3>
                            <p class="text-xs leading-[18px] text-[#878785]">{{ $item->shoes->count() }} Shoes</p>
                        </div>
                        <div class="flex shrink-0 w-20 h-[90px] overflow-hidden">
                            <img src="{{ Storage::url($item->logo) }}" class="w-full h-full object-cover"
                                alt="{{ $item->name }}">
                        </div>
                    </div>
                </a>
            @empty
                <div class="flex flex-col gap-4 items-center">
                    <h3 class="font-bold leading-[20px]">Uppps, gak ada apa-apa nih.</h3>
                    <img class="w-72 h-72 shrink-0" src="{{ asset('assets/images/illustrations/404.svg') }}"
                        alt="404 Not Found">
                </div>
            @endforelse
        </div>
    </section>
</div>
