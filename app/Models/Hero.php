<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Hero extends Model
{
    use HasFactory;

    public function identities(): HasOne
    {
        return $this->HasOne(Identity::class);
    }
}
