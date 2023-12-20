<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function location(): HasOne
    {
        return $this->hasOne(Location::class);
    }

    public function education(): HasOne
    {
        return $this->hasOne(Education::class);
    }

    public function mentorships(): HasMany
    {
        return $this->hasMany(Mentorship::class, 'mentor_id');
    }

    public function volunteerApplications(): HasMany
    {
        return $this->hasMany(VolunteerApplication::class);
    }

    public function promotions(): HasMany
    {
        return $this->hasMany(Promotion::class);
    }

    public function feedback(): HasMany
    {
        return $this->hasMany(Feedback::class);
    }

    public function trainingEnrollments(): HasMany
    {
        return $this->hasMany(TrainingEnrollment::class);
    }

    public function fundingRequests(): HasMany
    {
        return $this->hasMany(FundingRequest::class);
    }
}
