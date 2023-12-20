<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $primaryKey = 'campaign_id';
    protected $fillable =
    ['title',
     'description',
      'target_audience',
      'start_date',
      'end_date',
      'goal',
      'raised_amount',
    ];

    public function donors()
    {
        return $this->hasMany(Donor::class);
    }
}
