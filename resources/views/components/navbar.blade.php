<div id="bottom-nav" class="relative flex h-[100px] w-full shrink-0">
    <nav class="fixed bottom-5 w-full max-w-[640px] px-4 z-30">
        <div
            class="grid grid-flow-col auto-cols-auto items-center justify-between rounded-full bg-[#2A2A2A] p-2 min-h-16 px-[30px]">
            <x-nav-link href="{{ route('front.index') }}" isEdge="true" icon="heroicon-s-squares-2x2"
                routeName="front.index">
                Browse
            </x-nav-link>
            <x-nav-link href="{{ route('front.check_booking') }}" isEdge="false" icon="heroicon-s-shopping-bag"
                routeName="front.check_booking">
                My Order
            </x-nav-link>
            <x-nav-link href="{{ route('filamentblog.post.index') }}" isEdge="false" icon="heroicon-s-newspaper"
                routeName="filamentblog.post.index">
                Articles
            </x-nav-link>
            <x-nav-link href="{{ route('user.dashboard') }}" isEdge="true" icon="heroicon-s-user-circle"
                routeName="user.dashboard">
                Akun
            </x-nav-link>
        </div>
    </nav>
</div>
