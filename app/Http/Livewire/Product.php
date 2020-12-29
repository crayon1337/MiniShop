<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    private function getProducts()
    {
        return \App\Models\Product::limit(6)->orderBy('created_at','desc')->get();
    }

    public function render()
    {
        return view('livewire.product', [
            'data' => $this->getProducts(),
        ]);
    }
}
