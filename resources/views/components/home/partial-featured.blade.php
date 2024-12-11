<section id="featured" class="flex flex-col gap-4">
    <div class="flex items-center justify-between px-4">
        <h2 class="font-bold leading-[20px]">Explore Our <br>Featured</h2>
        <a href="#" class="rounded-full p-[6px_14px] border border-[#2A2A2A] text-xs leading-[18px]">
            View All
        </a>
    </div>
    <div class="swiper w-full overflow-hidden">
        <div class="swiper-wrapper">
            @forelse($popularShoes as $item)
            <x-product-card link="{{ route('front.details', $item->slug) }}" name="{{ $item->name }}" price="{{ $item->price }}" thumbnail="{{ $item->thumbnail }}" />
            @empty
            <p>There's no item available</p>
            @endforelse
        </div>
    </div>
</section>
