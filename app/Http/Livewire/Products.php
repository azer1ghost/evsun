<?php

namespace App\Http\Livewire;

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Value;
use Livewire\Component;

class Products extends Component
{
    public int $perPage = 4;

    public ?int $byCategory = null;

    public ?int $product_id = 0;

    public ?string $search = null;

    public array $filters = [];

    public ?int $hardFilter = null;

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
                ->when($this->hardFilter, function ($query){
                    $query->whereHas('attributes', function ($query)  {
                        $query->where('attribute_product.value_id', $this->hardFilter);
                    });
                })
                ->when($this->search, function ($query){
                    $query
                        ->where('name', $this->search)
                        ->whereTranslation('name', "%$this->search%", 'LIKE')
                        ->orWhere('name', 'LIKE', "%$this->search%")
                        ->orWhere('serial', 'LIKE', "%$this->search%")
                        ->orWhere('detail', 'LIKE', "%$this->search%");

                })
                ->where(function ($query)  {
                    foreach ($this->filters as $column => $value) {
                        $query->when($this->filters[$column], function ($query) use ($column, $value){
                            $query->whereHas('attributes', function ($query) use ($column) {
                                $attribute_id = Attribute::where('key', $column)->first()->getAttribute('id');
                                $query->where('id', $attribute_id)->where('attribute_product.value_id', $this->filters[$column]);
                            });
                        });
                    }
                })
                ->active()
                ->paginate($this->perPage),

            'attributes' => Attribute::query()
                ->onlyFilterable()
                ->active()
                ->get()
                ->unique(),

            'hardFilters' => Value::query()
                ->onlyHardFilterable()
                ->get()
                ->unique(),

        ]);
    }
}
