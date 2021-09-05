<?php

namespace App\Http\Livewire;

use App\Models\Attribute;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        return view('livewire.products')->with([
            'products' => Product::active()->get(),
            'attributes' => Attribute::onlyFilterable()->active()->get()->unique(),
        ]);
    }
}
