<section id="fresh" class="flex flex-col gap-4 px-4">
    <div class="flex items-center justify-between">
        <h2 class="font-bold leading-[20px]">Fresh From <br>Great Designers</h2>
        <a href="#" class="rounded-full p-[6px_14px] border border-[#2A2A2A] text-xs leading-[18px]">
            View All
        </a>
    </div>
    <div class="flex flex-col gap-4">
        @forelse($newShoes as $item)
        <a href="{{ route('front.details', $item->slug) }}" wire:navigate>
            <div class="flex items-center rounded-3xl p-[10px_16px_16px_10px] gap-[14px] bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
                <div class="w-20 h-20 flex shrink-0 rounded-2xl bg-[#D9D9D9] overflow-hidden">
                    <img src="{{ Storage::url($item->thumbnail) }}" class="w-full h-full object-cover" alt="thumbnail">
                </div>
                <div class="flex w-full items-center justify-between gap-[14px]">
                    <div class="flex flex-col gap-[6px]">
                        <h3 class="font-bold leading-[20px]">{{ $item->name }}</h3>
                        <p class="text-sm leading-[21px] text-[#878785]">{{ $item->category->name }}</p>
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
        @empty
        <p>There's no item available</p>
        @endforelse
    </div>
</section>
