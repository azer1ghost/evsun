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

    public ?Product $product = null;

    public function loadMore()
    {
        $this->perPage += 4;
    }

    public function quickView($id)
    {
        $this->product = Product::find($id);
    }

    public function render()
    {
        return view('livewire.products')->with([

            'categories' => ProductCategory::withCount('products')->get(),

            'products' => Product::query()
                ->when($this->byCategory, function ($query){
                    $query->where('product_category_id', $this->byCategory);
                })
                ->active()
                ->paginate($this->perPage),

            'attributes' => Attribute::onlyFilterable()->active()->get()->unique(),

        ]);
    }
}
