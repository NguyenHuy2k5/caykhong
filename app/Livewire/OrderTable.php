<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderTable extends Component
{
    use WithPagination;
    public $search = '';
    public $limit = '';

    public function render()
    {
        if ($this->search) {
            $this->resetPage();
            $orders = Order::query()
                ->where('orderNumber', 'LIKE', "%{$this->search}%")
                ->orWhere('orderDate', 'LIKE', "%{$this->search}%")
                ->paginate(10);
        } else {
            $orders = Order::query()->paginate(10);
        }
        if ($this->limit){
            $this->resetPage();
            $orders = Order::query()
                ->paginate($this->limit);
        } else {
            $orders = Order::query()->paginate(5);
        }
        return view('livewire.order-table', ['orders' => $orders]);
    }
}
