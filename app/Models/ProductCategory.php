<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;

class ProductCategory extends Model
{
    use HasFactory, Translatable, SoftDeletes;

    protected array $translatable = ['name'];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(__CLASS__);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
