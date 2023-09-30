<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class);
    }

    public function series(): HasMany
    {
        return $this->hasMany(Serie::class);
    }
}
