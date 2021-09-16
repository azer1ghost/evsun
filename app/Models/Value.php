<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;

class Value extends Model
{
    use HasFactory, Translatable ;// , SoftDeletes ;
// TODO soft deletes
    protected array $translatable = ['content'];
}
