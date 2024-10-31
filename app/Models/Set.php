<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Set extends Model
{
    protected $table = 'sets';

    protected $guarded = [
        'id'
    ];

    public function setElements(): HasMany
    {
        return $this->hasMany(SetElement::class, 'element_id', 'id');
    }
}
