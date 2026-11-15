<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            [
                'company_name' => 'PT Sawit Makmur Perkasa',
                'slug' => 'pt-sawit-makmur-perkasa',
                'industry_sector' => 'Perkebunan & Kelapa Sawit',
                'service_provided' => 'General Audit (Audit Umum)',
                'pic_name' => 'Hendrik Gunawan, S.E.',
                'pic_position' => 'Direktur Keuangan',
                'pic_phone' => '+62 812-7561-2290',
                'pic_email' => 'hendrik@sawitmakmur.co.id',
                'website_url' => 'https://sawitmakmur.co.id',
                'year_engaged' => 2019,
                'order_priority' => 1,
                'show_in_homepage' => true,
                'is_active' => true,
            ],
            [
                'company_name' => 'PT Medan Industri Manufaktur',
                'slug' => 'pt-medan-industri-manufaktur',
                'industry_sector' => 'Manufaktur & Pabrik',
                'service_provided' => 'General Audit (Audit Umum)',
                'pic_name' => 'Ir. Bambang Sugiarto',
                'pic_position' => 'Direktur Utama',
                'pic_phone' => '+62 813-6190-3341',
                'pic_email' => 'bambang@medanmanufaktur.com',
                'website_url' => 'https://medanmanufaktur.com',
                'year_engaged' => 2018,
                'order_priority' => 2,
                'show_in_homepage' => true,
                'is_active' => true,
            ],
            [
                'company_name' => 'Yayasan Rumah Sakit Insan Medika',
                'slug' => 'yayasan-rs-insan-medika',
                'industry_sector' => 'Kesehatan & Rumah Sakit',
                'service_provided' => 'Special Audit & Investigasi',
                'pic_name' => 'Dr. H. Ahmad Fauzi, Sp.A',
                'pic_position' => 'Ketua Dewan Pembina',
                'pic_phone' => '+62 811-6540-112',
                'pic_email' => 'ahmad.fauzi@insanmedika.org',
                'website_url' => 'https://insanmedika.org',
                'year_engaged' => 2020,
                'order_priority' => 3,
                'show_in_homepage' => true,
                'is_active' => true,
            ],
            [
                'company_name' => 'PT Niaga Logistik Nusantara',
                'slug' => 'pt-niaga-logistik-nusantara',
                'industry_sector' => 'Jasa & Logistik',
                'service_provided' => 'Konsultasi & Kepatuhan Perpajakan',
                'pic_name' => 'Siti Rahmawati, M.M., BKP',
                'pic_position' => 'Head of Tax & Finance',
                'pic_phone' => '+62 812-8877-6655',
                'pic_email' => 'siti.rahmawati@niagalogistik.com',
                'website_url' => 'https://niagalogistik.com',
                'year_engaged' => 2021,
                'order_priority' => 4,
                'show_in_homepage' => true,
                'is_active' => true,
            ],
            [
                'company_name' => 'PT Riau Prima Distribusi',
                'slug' => 'pt-riau-prima-distribusi',
                'industry_sector' => 'Perdagangan & Distribusi',
                'service_provided' => 'Management Audit',
                'pic_name' => 'Nurul Hidayah, S.E., Ak.',
                'pic_position' => 'Corporate Controller',
                'pic_phone' => '+62 811-7654-321',
                'pic_email' => 'nurul.h@riauprima.co.id',
                'website_url' => 'https://riauprima.co.id',
                'year_engaged' => 2022,
                'order_priority' => 5,
                'show_in_homepage' => true,
                'is_active' => true,
            ],
        ];

        foreach ($clients as $client) {
            Client::updateOrCreate(['slug' => $client['slug']], $client);
        }
    }
}

