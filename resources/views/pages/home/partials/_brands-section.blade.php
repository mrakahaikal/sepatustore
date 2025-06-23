<section id="brands" class="flex flex-col gap-4 px-4">
    <div class="flex items-center justify-between">
        <h2 class="font-bold leading-[20px]">From Local & <br>Well-known Brands</h2>
        <a href="{{ route('brand.index') }}" wire:navigate
            class="rounded-full p-[6px_14px] border border-[#2A2A2A] text-xs leading-[18px]">
            View All
        </a>
    </div>
    <div class="swiper-brand gap-4">
        <div class="swiper-wrapper">
            @forelse($brands as $item)
                <a href="{{ route('brand.show', $item) }}" wire:key="brand-{{ $loop->iteration }}"
                    class="flex flex-col shrink-0 swiper-slide p-2 items-center justify-center gap-2 !w-24 min-h-36 rounded-2xl overflow-hidden bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
                    <div class="flex flex-row shrink-0 justify-center w-20 h-20 rounded-full overflow-hidden">
                        <img src="{{ Storage::url($item->logo) }}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col text-center">
                        <h3 class="font-bold text-sm">{{ $item->name }}</h3>
                    </div>
                </a>

            @empty
                <p>There's no category available</p>
            @endforelse
        </div>
    </div>
</section>
