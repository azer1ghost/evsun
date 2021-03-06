<?php

namespace App\Http\Livewire;

use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Component;

class AddAttribute extends Component
{
    public object $product;
    public array $attributes;
    public Collection $availableAttributes;

    public function mount($product)
    {
        $this->availableAttributes = $product->availableAttributes();

        $this->attributes = $product->attributes()->select('id', 'name')->get()->toArray();
    }

    public function addAttribute()
    {
        $this->attributes[] = [
            "id" => null,
            "name" => null,
            'pivot' => ['value' => null]
        ];
    }

    public function removeAttribute($index)
    {
        unset($this->attributes[$index]);
    }

    public function render()
    {
        return view('livewire.add-attribute');
    }
}
