<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        if ($this->search) {
            $this->resetPage();
            $products = Product::query()
                ->where('productCode', 'LIKE', "%{$this->search}%")
                ->orWhere('productName', 'LIKE', "%{$this->search}%")
                ->paginate(10);
        } else {
            $products = Product::query()->paginate(10);
        }
        return view('livewire.product-table', ['products' => $products]);
    }
}