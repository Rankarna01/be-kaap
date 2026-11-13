<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'group',
        'type',
        'label',
    ];

    public static function get(string $key, $default = null)
    {
        $setting = static::where('key', $key)->first();
        if (!$setting) {
            return $default;
        }

        if ($setting->type === 'json' || $setting->type === 'array') {
            return json_decode($setting->value, true) ?: $default;
        }

        if ($setting->type === 'boolean') {
            return filter_var($setting->value, FILTER_VALIDATE_BOOLEAN);
        }

        return $setting->value ?? $default;
    }

    public static function set(string $key, $value, string $group = 'general', string $type = 'text', ?string $label = null): self
    {
        $val = is_array($value) ? json_encode($value) : $value;
        return static::updateOrCreate(
            ['key' => $key],
            [
                'value' => $val,
                'group' => $group,
                'type' => $type,
                'label' => $label,
            ]
        );
    }
}

