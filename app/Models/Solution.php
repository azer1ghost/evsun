<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;

/**
 * @method static active()
 */
class Solution extends Model
{
    use Translatable, HasFactory, SoftDeletes;

    protected array $translatable = ['title', 'detail', 'meta_title', 'meta_description', 'meta_keywords'];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
