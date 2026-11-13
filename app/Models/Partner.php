<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'role',
        'is_leader',
        'avatar_image',
        'license_number',
        'linkedin_url',
        'portfolio_url',
        'email',
        'order_priority',
        'is_active',
    ];

    protected $casts = [
        'is_leader' => 'boolean',
        'is_active' => 'boolean',
        'order_priority' => 'integer',
    ];
}

