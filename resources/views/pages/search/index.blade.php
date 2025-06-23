<?php

use Livewire\Attributes\Url;
use Livewire\Volt\Component;
use App\Services\FrontService;

new class extends Component {
    protected FrontService $service;
    #[Url]
    public ?string $keyword;

    public function mount(FrontService $service)
    {
        $this->service = $service;
    }

    public function with()
    {
        return [
            'shoes' => $this->service->searchShoes($this->keyword),
        ];
    }
};

?>
<div>
    <x-slot:title>
        Hasil Pencarian
    </x-slot:title>
    <x-slot:topbar>
        <a href="{{ route('front.index') }}">
            <img src="{{ asset('assets/images/icons/back.svg') }}" class="w-10 h-10" alt="icon">
        </a>
        <p class="font-bold text-lg leading-[27px]">Search Result</p>
        <div class="dummy-btn w-10"></div>
    </x-slot:topbar>
    <div class="px-4">
        <livewire:global-search :search="$keyword" />
    </div>
    <section id="result" class="flex flex-col gap-4 px-4 mb-[111px] mt-[10px]">
        @if ($keyword == null)
            <p class="text-center"><strong>Uppps!</strong> Keyword Kosong</p>
            <img class="w-96 h-96 shrink-0 mx-auto mt-2" src="{{ asset('assets/images/illustrations/question.svg') }}"
                alt="Nothing Matches">
        @else
            <p class="text-center">Menampilkan semua hasil dengan keyword <strong>"{{ $keyword }}"</strong></p>
            @forelse ($shoes as $shoe)
                <a href="{{ route('front.details', $shoe->slug) }}">
                    <div
                        class="flex items-center rounded-3xl p-[10px_16px_16px_10px] gap-[14px] bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
                        <div class="w-20 h-20 flex shrink-0 rounded-2xl bg-[#D9D9D9] overflow-hidden">
                            <img src="{{ Storage::url($shoe->thumbnail) }}" class="w-full h-full object-cover"
                                alt="thumbnail">
                        </div>
                        <div class="flex w-full items-center justify-between gap-[14px]">
                            <div class="flex flex-col gap-[6px]">
                                <h3 class="font-bold leading-[20px]">{{ $shoe->name }}</h3>
                                <p class="text-sm leading-[21px] text-[#878785]">{{ $shoe->category->name }}</p>
                            </div>
                            <div class="flex flex-col gap-1 items-end shrink-0">
                                <div class="flex">
                                    <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                        class="w-[18px] h-[18px] flex shrink-0" alt="star">
                                    <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                        class="w-[18px] h-[18px] flex shrink-0" alt="star">
                                    <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                        class="w-[18px] h-[18px] flex shrink-0" alt="star">
                                    <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                        class="w-[18px] h-[18px] flex shrink-0" alt="star">
                                    <img src="{{ asset('assets/images/icons/Star 1.svg') }}"
                                        class="w-[18px] h-[18px] flex shrink-0" alt="star">
                                </div>
                                <p class="font-semibold text-sm leading-[21px]">4.5</p>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <img class="w-96 h-96 shrink-0 mx-auto mt-2"
                    src="{{ asset('assets/images/illustrations/question.svg') }}" alt="Nothing Matches">
                <p class="text-center">Tidak ada hasil sesuai dengan keyword <strong>"{{ $keyword }}"</strong></p>
            @endforelse
        @endif
    </section>
</div>
