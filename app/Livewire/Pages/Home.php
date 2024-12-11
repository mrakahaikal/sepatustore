<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Services\FrontService;
use Livewire\Attributes\Title;

#[Title('Surganya Segala Sepatu')]
class Home extends Component
{
    protected $frontService;

    public function mount(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }

    public function render()
    {
        $data = $this->frontService->getFrontData();

        return view('livewire.pages.home', $data);
    }
}
