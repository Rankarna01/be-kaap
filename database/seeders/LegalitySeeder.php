<?php

namespace Database\Seeders;

use App\Models\Legality;
use Illuminate\Database\Seeder;

class LegalitySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => 'Akta Pendirian & Perubahan Akta',
                'issuer' => 'Notaris',
                'license_number' => 'Akta No. 2 Tgl. 24 Nov 2009',
                'description' => 'Akta pendirian KAP (Notaris Maizar, SH), dengan perubahan Akta Pertama No. 8/2023 (Notaris Cipto Soenaryo, S.H) dan Perubahan Akta Kedua No. 04/2024 (Notaris Ratna Beru Karo, SH).',
                'logo' => null,
                'order_priority' => 1,
            ],
            [
                'title' => 'Izin Usaha KAP',
                'issuer' => 'Kementerian Keuangan Republik Indonesia',
                'license_number' => 'Kep-939/KM.17/1998',
                'description' => 'Izin usaha Kantor Akuntan Publik yang diterbitkan oleh Menteri Keuangan RI.',
                'logo' => 'legalities/kemenkeu.png',
                'order_priority' => 2,
            ],
            [
                'title' => 'Izin Usaha KAP Cabang Pekanbaru',
                'issuer' => 'Kementerian Keuangan Republik Indonesia',
                'license_number' => '303/KM.1/2023',
                'description' => 'Izin usaha untuk kantor cabang KAP di Pekanbaru yang diterbitkan oleh Menteri Keuangan RI.',
                'logo' => 'legalities/kemenkeu.png',
                'order_priority' => 3,
            ],
            [
                'title' => 'Terdaftar di Badan Pemeriksa Keuangan (BPK)',
                'issuer' => 'Badan Pemeriksa Keuangan Republik Indonesia',
                'license_number' => 'No. 545/STT/X/2024 (17 Oktober 2024)',
                'description' => 'Terdaftar sebagai penyedia jasa pemeriksaan pada Badan Pemeriksa Keuangan.',
                'logo' => 'legalities/bpk.png',
                'order_priority' => 4,
            ],
            [
                'title' => 'Terdaftar di Otoritas Jasa Keuangan (OJK)',
                'issuer' => 'Otoritas Jasa Keuangan',
                'license_number' => 'STTD.AP-86/PB.022/2024',
                'description' => 'Terdaftar sebagai Akuntan Publik di Otoritas Jasa Keuangan.',
                'logo' => 'legalities/ojk.png',
                'order_priority' => 5,
            ],
            [
                'title' => 'Terdaftar di Bank Rakyat Indonesia (BRI)',
                'issuer' => 'Bank Rakyat Indonesia (BRI)',
                'license_number' => 'B.184-RO-PKU/COP/02/2025',
                'description' => 'Terdaftar sebagai mitra penyedia jasa profesional pada Bank Rakyat Indonesia.',
                'logo' => 'legalities/bri.png',
                'order_priority' => 6,
            ],
        ];

        foreach ($items as $item) {
            Legality::updateOrCreate(['title' => $item['title']], $item);
        }
    }
}
