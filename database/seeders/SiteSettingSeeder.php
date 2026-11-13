<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            [
                'key' => 'firm_name',
                'value' => 'KAP DRS. SELAMAT SINURAYA DAN REKAN',
                'group' => 'general',
                'type' => 'text',
                'label' => 'Nama Resmi Kantor Akuntan Publik',
            ],
            [
                'key' => 'firm_short_name',
                'value' => 'KAP DSSR',
                'group' => 'general',
                'type' => 'text',
                'label' => 'Singkatan Nama Firma',
            ],
            [
                'key' => 'tagline',
                'value' => 'Independensi, Integritas, Objektivitas, dan Standar Mutu Profesional Tertinggi',
                'group' => 'general',
                'type' => 'text',
                'label' => 'Tagline / Slogan Firma',
            ],
            [
                'key' => 'license_kemenkeu',
                'value' => 'Izin Usaha KAP Kemenkeu RI No. KEP-918/KM.1/2019',
                'group' => 'general',
                'type' => 'text',
                'label' => 'Nomor Izin Kemenkeu RI',
            ],
            [
                'key' => 'iapi_registration',
                'value' => 'Anggota Terdaftar Institut Akuntan Publik Indonesia (IAPI)',
                'group' => 'general',
                'type' => 'text',
                'label' => 'Status Asosiasi IAPI',
            ],
            [
                'key' => 'working_hours',
                'value' => 'Senin - Jumat: 08:30 - 17:00 WIB',
                'group' => 'general',
                'type' => 'text',
                'label' => 'Jam Operasional Kantor',
            ],
            [
                'key' => 'linkedin_url',
                'value' => 'https://www.linkedin.com',
                'group' => 'social',
                'type' => 'text',
                'label' => 'Tautan LinkedIn',
            ],
        ];

        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}

