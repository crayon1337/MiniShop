<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    private function getProducts()
    {
        return \App\Models\Product::all();
    }

    public function render()
    {
        return view('livewire.product', [
            'products' => $this->getProducts(),
        ]);
    }
}
