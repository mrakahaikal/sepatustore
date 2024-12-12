@props(['link','thumbnail','name','category'])

<a href="{{ $link }}" wire:navigate>
    <div class="flex items-center rounded-3xl p-[10px_16px_16px_10px] gap-[14px] bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
        <div class="w-20 h-20 flex shrink-0 rounded-2xl bg-[#D9D9D9] overflow-hidden">
            <img src="{{ Storage::url($thumbnail) }}" class="w-full h-full object-cover" alt="{{ $name }} thumbnail">
        </div>
        <div class="flex w-full items-center justify-between gap-[14px]">
            <div class="flex flex-col gap-[6px]">
                <h3 class="font-bold leading-[20px]">{{ $name }}</h3>
                <p class="text-sm leading-[21px] text-[#878785]">{{ $category }}</p>
            </div>
            <div class="flex flex-col gap-1 items-end shrink-0">
                <div class="flex">
                    <x-icons.star class="size-[18px] flex shrink-0" />
                    <x-icons.star class="size-[18px] flex shrink-0" />
                    <x-icons.star class="size-[18px] flex shrink-0" />
                    <x-icons.star class="size-[18px] flex shrink-0" />
                    <x-icons.star class="size-[18px] flex shrink-0" />
                </div>
                <p class="font-semibold text-sm leading-[21px]">4.5</p>
            </div>
        </div>
    </div>
</a>
