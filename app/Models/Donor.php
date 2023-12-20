<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;
    protected $primaryKey = 'donor_id';
    protected $fillable =
    ['name',
     'name',
      'name',
      'name',
      'total_amount',
      'country',
      'country',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
