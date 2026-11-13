<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatsMetric extends Model
{
    use HasFactory;

    protected $fillable = [
        'metric_key',
        'count_value',
        'count_suffix',
        'highlight_title',
        'description',
        'icon_type',
        'order_priority',
        'is_active',
    ];

    protected $casts = [
        'count_value' => 'integer',
        'order_priority' => 'integer',
        'is_active' => 'boolean',
    ];
}

