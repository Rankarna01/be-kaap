<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'number',
        'title',
        'subtitle',
        'short_desc',
        'full_desc',
        'scope',
        'mascot_image',
        'fallback_image',
        'icon_name',
        'show_in_core_features',
        'order_priority',
        'is_active',
    ];

    protected $casts = [
        'scope' => 'array',
        'show_in_core_features' => 'boolean',
        'is_active' => 'boolean',
        'order_priority' => 'integer',
    ];
}

