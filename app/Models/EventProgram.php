<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventProgram extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'event_id';

    public function eventSponsors()
    {
        return $this->hasMany(EventSponsor::class, 'event_id');
    }
}
