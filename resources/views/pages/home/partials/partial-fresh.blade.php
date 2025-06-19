<section id="fresh" class="flex flex-col gap-4 px-4">
    <div class="flex items-center justify-between">
        <h2 class="font-bold leading-[20px]">Fresh From <br>Great Designers</h2>
        <a href="#" class="rounded-full p-[6px_14px] border border-[#2A2A2A] text-xs leading-[18px]">
            View All
        </a>
    </div>
    <div class="flex flex-col gap-4">
        @forelse($newShoes as $item)
        <x-product-card-horizontal wire:key='{{ $item->id }}' link="{{ route('front.details', $item->slug) }}" thumbnail="{{ $item->thumbnail }}" name="{{ $item->name }}" category="{{ $item->category->name }}" />
        @empty
        <p>There's no item available</p>
        @endforelse
    </div>
</section>
