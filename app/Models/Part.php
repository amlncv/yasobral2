<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Part extends Model
{
    protected $table = 'parts';

    protected $guarded = [
        'id'
    ];

    public function categories(): BelongsTo
    {
        return $this->BelongsTo(Category::class, 'id', 'category_id');
    }
}
