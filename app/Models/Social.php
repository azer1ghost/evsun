<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static select(string[] $array)
 * @method static active()
 */
class Social extends Model
{
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function getNameAttribute($value): string
    {
        return strtolower($value);
    }
}
