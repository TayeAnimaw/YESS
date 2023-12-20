<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $primaryKey = 'partner_id';
    protected $guarded = [];

    public function eventSponsors()
    {
        return $this->hasMany(EventSponsor::class, 'partner_id');
    }

}
