<?php

namespace Database\Seeders;

use App\Models\StatsMetric;
use Illuminate\Database\Seeder;

class StatsMetricSeeder extends Seeder
{
    public function run(): void
    {
        $metrics = [
            [
                'metric_key' => 'clients',
                'count_value' => 90,
                'count_suffix' => null,
                'highlight_title' => 'Jumlah client',
                'description' => 'KAP Drs.Sinuraya dan rekan',
                'icon_type' => 'clients',
                'order_priority' => 1,
                'is_active' => true,
            ],
            [
                'metric_key' => 'partners',
                'count_value' => 4,
                'count_suffix' => null,
                'highlight_title' => 'Jumlah partner',
                'description' => 'KAP Drs.Sinuraya dan Rekan',
                'icon_type' => 'partners',
                'order_priority' => 2,
                'is_active' => true,
            ],
            [
                'metric_key' => 'workers',
                'count_value' => 33,
                'count_suffix' => null,
                'highlight_title' => 'Pekerja',
                'description' => 'KAP Drs.Sinuraya dan Rekan',
                'icon_type' => 'workers',
                'order_priority' => 3,
                'is_active' => true,
            ],
            [
                'metric_key' => 'experience',
                'count_value' => 15,
                'count_suffix' => '+',
                'highlight_title' => 'Tahun Pengalaman',
                'description' => 'Dedikasi Layanan Audit Profesional',
                'icon_type' => 'experience',
                'order_priority' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($metrics as $m) {
            StatsMetric::updateOrCreate(['metric_key' => $m['metric_key']], $m);
        }
    }
}

