<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'image_path',
        'description',
        'activity_date',
        'order_priority',
        'is_active',
    ];

    protected $casts = [
        'activity_date' => 'date',
        'order_priority' => 'integer',
        'is_active' => 'boolean',
    ];
}

