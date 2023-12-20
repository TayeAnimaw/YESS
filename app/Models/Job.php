<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $primaryKey = 'job_id';

    protected $fillable = [
        'title',
        'description',
        'join_type',
        'employment_type',
        'industry',
        'salary_range',
        'app_deadline',
        'app_process',
        'experience',
        'company_website',
        'link',
        'resource',
    ];
}
