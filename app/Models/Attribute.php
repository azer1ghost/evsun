<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;

class Attribute extends Model
{
    use HasFactory, Translatable, SoftDeletes;

    protected array $translatable = ['name'];
    protected $fillable = ['name'];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeOnlyFilterable($query)
    {
        return $query->where('is_filterable', true);
    }
}
