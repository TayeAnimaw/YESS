<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function resources(): HasMany
    {
        return $this->hasMany(Resource::class);
    }

    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }
}
