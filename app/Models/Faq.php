<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
        'category_tag',
        'order_priority',
        'is_active',
    ];

    protected $casts = [
        'order_priority' => 'integer',
        'is_active' => 'boolean',
    ];
}

