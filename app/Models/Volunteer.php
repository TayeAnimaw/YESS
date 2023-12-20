<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Volunteer extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function applications(): HasMany
    {
        return $this->hasMany(VolunteerApplication::class);
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Member::class, 'partner_id');
    }
}
