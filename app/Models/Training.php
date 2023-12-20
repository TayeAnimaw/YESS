<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Training extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function enrollments(): HasMany
    {
        return $this->hasMany(TrainingEnrollment::class);
    }
}
