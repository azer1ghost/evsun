<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


/**
 * @method static where(string $string, mixed|string $int)
 */
class StaticText extends Model
{
    use Translatable;

    protected array $translatable = ['text'];
}
