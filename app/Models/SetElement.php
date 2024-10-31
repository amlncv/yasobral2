<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SetElement extends Model
{
    protected $table = 'set_elements';

    protected $guarded = [
        'id'
    ];

    public function sets(): BelongsTo
    {
        return $this->belongsTo(Set::class, 'set_id', 'id');
    }

    public function elements(): BelongsTo
    {
        return $this->belongsTo(Element::class, 'element_id', 'id');
    }
}
