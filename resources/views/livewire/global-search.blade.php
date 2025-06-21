<?php

namespace App\Livewire;

use App\Models\Shoe;
use App\Models\Category;
use Livewire\Volt\Component;
use Firefly\FilamentBlog\Models\Post;
use Firefly\FilamentBlog\Models\Category as BlogCategory;

new class extends Component {
    public string $search = '';
    public bool $open = false;
    public array $results = [];

    protected array $searchables = [
        Shoe::class => 'Produk',
        Post::class => 'Post',
        Category::class => 'Kategori',
        BlogCategory::class => 'Kategori Blog',
    ];

    public function updatedSearch()
    {
        $this->results = [];

        if (strlen($this->search) < 2) {
            return;
        }

        foreach ($this->searchables as $model => $label) {
            if (!method_exists(app($model), 'search')) {
                continue;
            }

            $items = app($model)
                ::search($this->search, 5)
                ->map(
                    fn($item) => [
                        'id' => $item->id,
                        'label' => $item->getGlobalSearchTitle(),
                        'route' => $item->getGlobalSearchRoute(),
                        'thumb' => $item->getGlobalSearchThumbnail(),
                        'icon' => $item->getGlobalSearchIcon(),
                    ],
                )
                ->toArray();

            if (!empty($items)) {
                $this->results[$label] = $items;
            }
        }
    }
};

?>

<div x-data="{ open: false }" class="relative max-w-screen-sm" @click.away="open = false">
    <form action="{{ route('front.search') }}" class="flex justify-between items-center">
        <div
            class="relative flex items-center w-full rounded-l-full px-[14px] gap-[10px] bg-white transition-all duration-300 focus-within:ring-2 focus-within:ring-[#FFC700]">
            @svg('heroicon-s-magnifying-glass', 'w-6 h-6')
            <input type="text" type="text" name="keyword" wire:model.live.debounce.300ms="search" @focus="open = true"
                autocomplete="off"
                class="w-full py-[14px] appearance-none bg-white outline-none font-semibold placeholder:font-normal placeholder:text-[#878785]"
                placeholder="Search...">
            <div class="absolute right-3 top-4" wire:loading wire:target="search">
                <svg class="animate-spin size-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4" />
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z" />
                </svg>
            </div>
        </div>
        <button type="submit" class="h-full rounded-r-full py-[14px] px-5 bg-primary">
            <span class="font-semibold">Explore</span>
        </button>
    </form>

    <ul x-show="open" x-transition
        class="absolute z-10 w-full rounded-2xl bg-white border mt-1 shadow min-h-40 max-h-96 overflow-y-auto text-sm">
        @if (empty($results))
            @if (strlen($search) >= 2)
                <li class="px-3 py-3 text-gray-400 text-md text-center italic">
                    Tidak ditemukan hasil untuk "<strong>{{ $search }}</strong>"
                    <img class="w-48 h-48 shrink-0 mx-auto mt-2"
                        src="{{ asset('assets/images/illustrations/question.svg') }}" alt="Nothing Matches">
                </li>
            @else
                <li class="px-3 py-3 text-gray-400 text-md text-center italic">
                    Cari apa saja...
                    <img class="w-48 h-48 shrink-0 mx-auto mt-2"
                        src="{{ asset('assets/images/illustrations/explore.svg') }}" alt="Explore">
                </li>
            @endif
        @else
            @foreach ($results as $section => $items)
                <li class="px-3 py-1 text-gray-500 uppercase text-xs bg-gray-50">{{ $section }}</li>

                @foreach ($items as $item)
                    <li class="px-3 py-2 hover:bg-gray-100 cursor-pointer flex items-center space-x-3">
                        @if ($item['route'])
                            <a href="{{ $item['route'] }}" wire:navigate class="flex items-center space-x-3">
                                @if (!empty($item['thumb']) || $item['thumb'] !== null)
                                    <img src="{{ Storage::url($item['thumb']) }}"
                                        class="w-8 h-8 rounded object-cover border border-gray-200" alt="">
                                @else
                                    <div
                                        class="w-8 h-8 rounded bg-gray-100 flex items-center justify-center text-gray-400 text-sm">
                                        @svg($item['icon'], 'size-4 text-gray-400')
                                    </div>
                                @endif

                                <span class="text-sm text-gray-800">{{ $item['label'] }}</span>
                            </a>
                        @else
                            <span class="text-sm text-gray-800">{{ $item['label'] }}</span>
                        @endif
                    </li>
                @endforeach
            @endforeach
        @endif
    </ul>
</div>
