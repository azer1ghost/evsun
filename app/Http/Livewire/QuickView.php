<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class QuickView extends Component
{

    public ?Product $product;
    public bool $show = false;

    protected $listeners = ['showModal' => 'showModal'];

    public function showModal($id) {

        $this->product = Product::find($id);;

        $this->product->increment('view_count');

        $this->show();
    }

    public function show() {
        $this->show = true;
    }

    public function close() {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.quick-view');
    }
}
