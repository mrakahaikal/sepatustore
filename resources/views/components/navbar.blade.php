@php
    $classes = $slot->isEmpty()
        ? 'grid grid-flow-col auto-cols-auto items-center justify-between rounded-full bg-[#2A2A2A] p-2 min-h-16 px-[30px]'
        : 'flex items-center justify-between rounded-full bg-[#2A2A2A] p-[10px] pl-6';
@endphp
<div id="bottom-nav" class="relative flex h-[100px] w-full shrink-0">
    <nav class="fixed bottom-5 w-full max-w-screen-sm px-4 z-30">
        <div class="{{ $classes }}">
            @if (trim($slot))
                {{ $slot }}
            @else
                <x-nav-link href="{{ route('front.index') }}" isEdge="true" icon="heroicon-s-squares-2x2"
                    routeName="front.index">
                    Browse
                </x-nav-link>
                <x-nav-link href="{{ route('brand.index') }}" isEdge="false" icon="heroicon-s-shopping-bag"
                    routeName="brand.index">
                    Brands
                </x-nav-link>
                <x-nav-link href="{{ route('front.check_booking') }}" isEdge="false" icon="heroicon-s-shopping-bag"
                    routeName="front.check_booking">
                    My Order
                </x-nav-link>
                <x-nav-link href="{{ route('filamentblog.post.index') }}" isEdge="true" icon="heroicon-s-newspaper"
                    routeName="filamentblog.post.index">
                    Articles
                </x-nav-link>
            @endif
        </div>
    </nav>
</div>
