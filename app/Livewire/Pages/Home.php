<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Surganya Segala Sepatu')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.pages.home');
    }
}
