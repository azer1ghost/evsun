<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;

class Value extends Model
{
    use HasFactory, Translatable ;
    protected array $translatable = ['content'];

    public function scopeOnlyHardFilterable($query)
    {
        return $query->where('is_hard', true);
    }
}
