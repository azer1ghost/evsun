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

    public ?string $search = null;

    public array $filters = [];

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

    public function resetFilter()
    {
        $this->search = null;
        $this->filters = [];
    }

    public function render()
    {
        return view('livewire.products')->with([

            'categories' => ProductCategory::withCount('products')->get(),

            'products' => Product::query()
                ->orderByView()
                ->when($this->byCategory, function ($query){
                    $query->where('product_category_id', $this->byCategory);
                })
                ->when($this->search, function ($query){
                    $query
                        ->where('name', 'LIKE', "%$this->search%")
                        ->orWhere('serial', 'LIKE', "%$this->search%");
                })
                ->where(function ($query)  {
                    foreach ($this->filters as $column => $value) {
                        $query->when($this->filters[$column], function ($query) use ($column, $value){
                            if (is_array($value)) {
                                $query->whereHas('attributes', function ($query) use ($column) {
                                    $query->whereIn('attribute_product.value', $this->filters[$column]);
                                });
                            } else {
                                $query->whereHas('attributes', function($query) use ($value) {
                                    $query
                                        ->where('attribute_product.value', 'LIKE', "%" . trim($value) . "%")
                                        ->orWhere('attribute_product.value', 'LIKE', "%" . $value . "%");
                                });
                            }
                        });
                    }
                })
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
