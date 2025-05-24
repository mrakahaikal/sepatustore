<section id="category" class="flex flex-col gap-4 px-4">
    <div class="flex items-center justify-between">
        <h2 class="font-bold leading-[20px]">Our Featured <br>Categories</h2>
        <a href="{{ route('front.categories') }}" wire:navigate
            class="rounded-full p-[6px_14px] border border-[#2A2A2A] text-xs leading-[18px]">
            View All
        </a>
    </div>
    <div class="grid grid-cols-2 gap-4">
        @forelse($categories as $item)
            <a href="{{ route('front.category', $item->slug) }}" wire:navigate>
                <div
                    class="flex items-center justify-between w-full rounded-2xl overflow-hidden bg-white transition-all duration-300 hover:ring-2 hover:ring-[#FFC700]">
                    <div class="flex flex-col gap-[2px] px-[14px]">
                        <h3 class="font-bold text-sm leading-[21px]">{{ $item->name }}</h3>
                        <p class="text-xs leading-[18px] text-[#878785]">{{ $item->shoes->count() }} Shoes</p>
                    </div>
                    <div class="flex shrink-0 w-20 h-[90px] overflow-hidden">
                        <img src="{{ Storage::url($item->icon) }}" class="w-full h-full object-cover object-left"
                            alt="thumbnail">
                    </div>
                </div>
            </a>
        @empty
            <p>There's no category available</p>
        @endforelse
    </div>
</section>
