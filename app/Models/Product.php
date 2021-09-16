<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;

class Product extends Model
{
    use HasFactory, Translatable, SoftDeletes;

    protected array $translatable = [
        'name',
        'detail',
        'meta_description',
        'meta_keywords',
    ];

    protected $with = ['attributes'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class)->using(AttributeValue::class)->withPivot(['value', 'value_id']);
    }

    public function availableAttributes()
    {
        return Attribute::active()->pluck('name', 'id');
    }

    public function availableValues()
    {
        return Value::pluck('content', 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeOrderByView($query)
    {
        return $query->orderByDesc('view_count');
    }
}
