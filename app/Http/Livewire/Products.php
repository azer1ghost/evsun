<?php

namespace App\Http\Livewire;

use App\Models\Attribute;
use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;

class Products extends Component
{
    public int $perPage = 4;

    public ?int $byCategory = null;

    public ?int $product_id = 0;

    public function loadMore()
    {
        $this->perPage += 4;
    }

    public function quickView($id)
    {
        $this->product_id = $id;
    }

    public function getModalProperty()
    {
        return Product::find($this->product_id);
    }


    public function render()
    {
        return view('livewire.products')->with([

            'categories' => ProductCategory::withCount('products')->get(),

            'products' => Product::query()
                ->when($this->byCategory, function ($query){
                    $query->where('product_category_id', $this->byCategory);
                })
                ->orderByView()
                ->active()
                ->paginate($this->perPage),

            'attributes' => Attribute::with([
                    'products' => function ($query) {
                        $query->select('id');
                    }
                ])
                ->onlyFilterable()
                ->active()
                ->get()
                ->unique(),

        ]);
    }
}
