<x-app-layout>
    <x-slot:title>{{ $brand->name }}</x-slot:title>
    <x-slot:topbar>
        <a href="{{ route('brand.index') }}" wire:navigate>
            <img src="{{ asset('assets/images/icons/back.svg') }}" class="w-10 h-10" alt="icon">
        </a>
        <p class="font-bold text-lg leading-[27px]">Brand</p>
        <div class="dummy-btn w-10"></div>
    </x-slot:topbar>
    <div class="px-4">
        <div class="flex items-center justify-between w-full rounded-2xl overflow-hidden bg-white">
            <div class="flex flex-col gap-[2px] px-[30px] pr-4">
                <h3 class="font-bold text-[22px] leading-[33px]">{{ $brand->name }}</h3>
                <p class="text-[#878785]">{{ $brand->shoes->count() }} Shoes</p>
            </div>
            <div class="flex shrink-0 w-[140px] h-[120px] overflow-hidden">
                <img src="{{ Storage::url($brand->logo) }}" class="w-full h-full object-cover object-left"
                    alt="{{ $brand->name }} icon">
            </div>
        </div>
    </div>
    <section id="{{ $brand->name }}-categories" class="flex flex-col gap-4 px-4 mb-[111px]">
        <div class="flex flex-col gap-4">
            @forelse($brand->shoes as $shoe)
                <a wire:key='{{ $shoe->id }}' href="{{ route('front.details', $shoe) }}" wire:navigate>
                    <div
                        class="flex items-center rounded-3xl p-[10px_16px_16px_10px] gap-[14px] bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
                        <div class="w-20 h-20 flex shrink-0 rounded-2xl bg-[#D9D9D9] overflow-hidden">
                            <img src="{{ Storage::url($shoe->thumbnail) }}" class="w-full h-full object-cover"
                                alt="{{ $shoe->name }} thumbnail">
                        </div>
                        <div class="flex w-full items-center justify-between gap-[14px]">
                            <div class="flex flex-col gap-[6px]">
                                <h3 class="font-bold leading-[20px]">{{ $shoe->name }}</h3>
                                <p class="text-sm leading-[21px] text-[#878785]">
                                    Rp{{ number_format($shoe->price, 0, ',', '.') }}</p>
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
                <div class="flex flex-col gap-4 items-center">
                    <h3 class="font-bold leading-[20px]">Uppps, gak ada apa-apa nih.</h3>
                    <img class="w-72 h-72 shrink-0" src="{{ asset('assets/images/illustrations/404.svg') }}"
                        alt="404 Not Found">
                    <h3 class="font-bold leading-[20px]">Kepoin yang ini aja yuk!</h3>
                    @foreach ($randomShoes as $item)
                        <x-product-card-horizontal wire:key='shoe-{{ $item->id }}'
                            link="{{ route('front.details', $item->slug) }}" thumbnail="{{ $item->thumbnail }}"
                            name="{{ $item->name }}" brand="{{ $item->brand->name }}" />
                    @endforeach
                </div>
            @endforelse
        </div>
    </section>
    <x-navbar></x-navbar>
</x-app-layout>
