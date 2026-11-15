<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'slug',
        'logo',
        'industry_sector',
        'service_provided',
        'pic_name',
        'pic_position',
        'pic_phone',
        'pic_email',
        'website_url',
        'year_engaged',
        'order_priority',
        'show_in_homepage',
        'is_active',
    ];

    protected $casts = [
        'year_engaged' => 'integer',
        'order_priority' => 'integer',
        'show_in_homepage' => 'boolean',
        'is_active' => 'boolean',
    ];
}

