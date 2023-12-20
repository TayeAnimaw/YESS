<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventSponsor extends Model
{
    use HasFactory;
    protected $primaryKey = 'sponsor_id';
    protected $guarded = [];

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'partner_id');
    }

    public function eventProgram()
    {
        return $this->belongsTo(EventProgram::class, 'event_id');
    }
}
