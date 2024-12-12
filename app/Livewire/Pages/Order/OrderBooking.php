<?php

namespace App\Livewire\Pages\Order;

use App\Models\Shoe;
use Livewire\Component;
use App\Services\OrderService;

class OrderBooking extends Component
{
    protected $orderService;
    public $data;

    public function boot() {}

    public function mount(OrderService $orderService)
    {
        $this->orderService = $orderService;
        $this->data = $this->orderService->getOrderDetails();
    }

    public function render()
    {

        return view('livewire.pages.order.order-booking', $this->data);
    }
}
