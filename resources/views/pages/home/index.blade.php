<?php
use Livewire\Volt\Component;
use App\Services\FrontService;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;

new #[Title('Surganya Segala Sepatu')] class extends Component {
    protected FrontService $frontService;
    #[Locked]
    public array $data;

    public function mount(FrontService $frontService)
    {
        $this->frontService = $frontService;
        $this->data = $frontService->getFrontData();
    }
};
?>

<div class="gap-5 flex flex-col w-full">
    <div class="px-4">
        <livewire:global-search />
    </div>
    @include('pages.home.partials._category-section', [
        'categories' => $data['categories'],
    ])
    @include('pages.home.partials._brands-section', [
        'brands' => $data['brands'],
    ])
    @include('pages.home.partials._featured-section', [
        'popularShoes' => $data['popularShoes'],
    ])
    @include('pages.home.partials._fresh-section', [
        'newShoes' => $data['newShoes'],
    ])
</div>
