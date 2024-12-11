<?php

namespace App\Livewire\Pages;

use App\Models\Shoe;
use Livewire\Component;
use App\Services\FrontService;

class ProductDetails extends Component
{
    protected $frontService;
    protected $shoe;

    public function mount(FrontService $frontService, Shoe $shoe)
    {
        $this->frontService = $frontService;
        $this->shoe = $shoe;
    }

    public function render()
    {
        return view('livewire.pages.product-details', ['shoe' => $this->shoe]);
    }
}
