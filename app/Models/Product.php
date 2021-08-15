<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class)->withPivot('value');
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
