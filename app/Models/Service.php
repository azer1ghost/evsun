<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;

/**
 * @method static active()
 */
class Service extends Model
{
    use Translatable, HasFactory, SoftDeletes;

    protected array $translatable = [
            'title',
            'detail',
            'meta_title',
            'meta_description',
            'meta_keywords',
            'btn_text',
            'heading',
        ];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeMain($query)
    {
        return $query->where('advanced', true);
    }

    public function subServices(): HasMany
    {
        return $this->hasMany(__CLASS__);
    }

    public function parentService(): BelongsTo
    {
        return $this->belongsTo(__CLASS__,'service_id');
    }
}
