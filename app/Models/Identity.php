<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Identity extends Model
{
    use HasFactory;

    public function hero(): BelongsTo
    {
        return $this->belongsTo(Hero::class);
    }
}
