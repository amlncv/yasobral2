<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Color extends Model
{
    protected $table = 'colors';

    protected $guarded = [
        'id'
    ];

    public function elements(): HasMany
    {
        return $this->hasMany(Element::class, 'color_id', 'id');
    }
}
