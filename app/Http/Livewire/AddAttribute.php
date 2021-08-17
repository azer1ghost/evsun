<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddAttribute extends Component
{
    public object $product;
    public $attributes;

    public $availableAttributes;

    public function mount($product)
    {
        $this->availableAttributes = $product->availableAttributes();
        $this->attributes = $product->attributes()->select('id', 'name', 'key')->get();
    }

    public function addAttribute()
    {
        $newArr = ["id" => null, "name" => null, "url" => null];
        $this->attributes[] = $newArr;
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
