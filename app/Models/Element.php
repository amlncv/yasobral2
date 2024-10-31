<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Element extends Model
{
    protected $table = 'elements';

    protected $guarded = [
        'id'
    ];

    public function colors(): BelongsTo
    {
        return $this->BelongsTo(Color::class, 'color_id', 'id');
    }

    public function parts(): BelongsTo
    {
        return $this->BelongsTo(Part::class, 'part_id', 'id');
    }
}
