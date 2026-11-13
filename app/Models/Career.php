<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'role',
        'location',
        'job_type',
        'requirements',
        'responsibilities',
        'application_email',
        'deadline_date',
        'is_open',
        'order_priority',
    ];

    protected $casts = [
        'deadline_date' => 'date',
        'is_open' => 'boolean',
        'order_priority' => 'integer',
    ];
}

