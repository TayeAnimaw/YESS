<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mentorship extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function mentor(): BelongsTo
    {
        return $this->belongsTo(Member::class, 'mentor_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
