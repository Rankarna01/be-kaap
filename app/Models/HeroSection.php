<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'headline',
        'badge_text',
        'badge_icon',
        'cta_primary_label',
        'cta_primary_url',
        'cta_primary_active',
        'cta_secondary_label',
        'cta_secondary_url',
        'cta_secondary_active',
        'banner_image_light',
        'banner_image_dark',
        'is_active',
    ];

    protected $casts = [
        'cta_primary_active' => 'boolean',
        'cta_secondary_active' => 'boolean',
        'is_active' => 'boolean',
    ];
}

