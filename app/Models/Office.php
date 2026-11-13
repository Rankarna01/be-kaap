<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'city',
        'name',
        'address',
        'phone',
        'email',
        'whatsapp_number',
        'map_embed_url',
        'direct_map_link',
        'is_headquarters',
        'order_priority',
        'is_active',
    ];

    protected $casts = [
        'is_headquarters' => 'boolean',
        'is_active' => 'boolean',
        'order_priority' => 'integer',
    ];
}

