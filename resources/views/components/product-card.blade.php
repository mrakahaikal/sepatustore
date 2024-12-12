@props(['link','thumbnail','name','price', 'id'])

<div class="swiper-slide !w-fit py-0.5" wire:key='{{ $id }}'>
    <a href="{{ $link }}">
        <div class="flex flex-col shrink-0 w-[230px] h-full rounded-3xl gap-[14px] p-[10px] pb-4 bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
            <div class="w-[210px] h-[230px] rounded-3xl bg-[#D9D9D9] overflow-hidden">
                <img src="{{ Storage::url($thumbnail) }}" class="w-full h-full object-cover" alt="{{ $name }} thumbnail">
            </div>
            <div class="flex flex-col gap-[14px] justify-between">
                <div class="flex items-center justify-between gap-4">
                    <h3 class="font-bold leading-[20px]">{{ $name }}</h3>
                    <p class="font-bold text-sm leading-[21px] text-nowrap">Rp{{ number_format($price, 0, ',','.') }}</p>
                </div>
                <div class="flex items-center justify-between gap-2">
                    <div class="flex items-center gap-1">
                        <x-icons.star class="size-[22px]" />
                        <p class="font-semibold text-sm leading-[21px]">4.5</p>
                    </div>
                    <p class="text-sm leading-[21px] text-[#878785]">(18,485 reviews)</p>
                </div>
            </div>
        </div>
    </a>
</div>
