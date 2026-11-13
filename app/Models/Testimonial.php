<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'role',
        'company',
        'avatar_image',
        'service_category',
        'quote',
        'marquee_row',
        'rating',
        'order_priority',
        'is_active',
    ];

    protected $casts = [
        'rating' => 'integer',
        'order_priority' => 'integer',
        'is_active' => 'boolean',
    ];
}

