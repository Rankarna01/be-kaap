<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legality extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'issuer',
        'license_number',
        'description',
        'file_path',
        'order_priority',
        'is_active',
    ];

    protected $casts = [
        'order_priority' => 'integer',
        'is_active' => 'boolean',
    ];
}

