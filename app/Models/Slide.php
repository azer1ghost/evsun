<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

/**
 * @method static active()
 */
class Slide extends Model
{
    use HasFactory;

    use Translatable;

    protected $translatable = ['title', 'text', 'btnText'];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
