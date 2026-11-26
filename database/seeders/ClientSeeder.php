<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $realClients = [
            // Sektor 1: Industri Pengolahan / Manufaktur
            [
                'company_name' => 'PT Jaya Gemilang Sukses',
                'industry_sector' => 'Industri Pengolahan / Manufaktur',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Polykencana Raya',
                'industry_sector' => 'Industri Pengolahan / Manufaktur',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Merlung Inti Lestari',
                'industry_sector' => 'Industri Pengolahan / Manufaktur',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Union Confectionery',
                'industry_sector' => 'Industri Pengolahan / Manufaktur',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Runding Putra Persada',
                'industry_sector' => 'Industri Pengolahan / Manufaktur',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Riau Kampar Sahabat Sejati',
                'industry_sector' => 'Industri Pengolahan / Manufaktur',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Agro Jaya Perdana',
                'industry_sector' => 'Industri Pengolahan / Manufaktur',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Ino Alam Nusa',
                'industry_sector' => 'Industri Pengolahan / Manufaktur',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],

            // Sektor 2: Informasi, Komunikasi & Transportasi
            [
                'company_name' => 'PT Kietrans Marina Shipping',
                'industry_sector' => 'Informasi, Komunikasi & Transportasi',
                'service_provided' => 'Audit Laporan Keuangan & Konsultasi',
            ],
            [
                'company_name' => 'PT Pelayaran Nasional Kietrans Star Marine',
                'industry_sector' => 'Informasi, Komunikasi & Transportasi',
                'service_provided' => 'Audit Laporan Keuangan & Konsultasi',
            ],

            // Sektor 3: Pemerintahan, Badan Internasional & Organisasi Non-Profit
            [
                'company_name' => 'Universitas Lancang Kuning',
                'industry_sector' => 'Pemerintahan, Pendidikan & Non-Profit',
                'service_provided' => 'Audit Laporan Keuangan Institusi Pendidikan',
            ],
            [
                'company_name' => 'Yayasan Dana Paramita Buddha Maitreya Indonesia',
                'industry_sector' => 'Pemerintahan, Pendidikan & Non-Profit',
                'service_provided' => 'Audit Laporan Keuangan Yayasan Sosial (ISAK 35)',
            ],
            [
                'company_name' => 'BAZNAS Provinsi Sumatera Utara',
                'industry_sector' => 'Pemerintahan, Pendidikan & Non-Profit',
                'service_provided' => 'Audit Kepatuhan & Laporan Keuangan Lembaga Zakat',
            ],
            [
                'company_name' => 'Badan Amil Zakat Nasional (BAZNAS) Kabupaten Asahan',
                'industry_sector' => 'Pemerintahan, Pendidikan & Non-Profit',
                'service_provided' => 'Audit Kepatuhan & Laporan Keuangan Lembaga Zakat',
            ],
            [
                'company_name' => 'Universitas Sari Mutiara Indonesia',
                'industry_sector' => 'Pemerintahan, Pendidikan & Non-Profit',
                'service_provided' => 'Audit Laporan Keuangan Institusi Pendidikan',
            ],
            [
                'company_name' => 'STIKes Senior Medan',
                'industry_sector' => 'Pemerintahan, Pendidikan & Non-Profit',
                'service_provided' => 'Audit Laporan Keuangan Institusi Pendidikan',
            ],
            [
                'company_name' => 'Yayasan Universitas Asahan',
                'industry_sector' => 'Pemerintahan, Pendidikan & Non-Profit',
                'service_provided' => 'Audit Laporan Keuangan Yayasan Pendidikan',
            ],

            // Sektor 4: Perdagangan dan Jasa
            [
                'company_name' => 'PT Citra Bina Niaga',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit & Konsultasi Perpajakan',
            ],
            [
                'company_name' => 'PT Bangun Sejahtera Bersama',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Pola Pelumas Jaya Sakti',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Wahana Tirtasari',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Riodi Jaya',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Bintijaya Baja',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Bilah Baja Makmur Abadi',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Pansiba Jaya Sinergi',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Tri Satya Pratama',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Tapanuli Selatan Membangun',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit & Tata Kelola Perusahaan',
            ],
            [
                'company_name' => 'PT Cipta Multi Listrik Nasional',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Citra Pulau Putri',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Laju Prima Nusantara',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Hitakara',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Sentana Multi Makmur',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Astro Pratama Nusa dan Entitas Anak',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'Audit Konsolidasi Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Berkat Oktima Sejahtera dan Entitas Anak',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'Audit Konsolidasi Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Mugent Development',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Berastagi Bintang Asia',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit (Pemeriksaan Laporan Keuangan)',
            ],
            [
                'company_name' => 'PT Al Falah Tour and Travel',
                'industry_sector' => 'Perdagangan dan Jasa',
                'service_provided' => 'General Audit & Kepatuhan Keuangan',
            ],

            // Sektor 5: Sektor Keuangan & Koperasi
            [
                'company_name' => 'Koperasi Karyawan PT Angkasa Pura II (Persero)',
                'industry_sector' => 'Sektor Keuangan & Koperasi',
                'service_provided' => 'Pemeriksaan Laporan Keuangan Koperasi (Kemenkop)',
            ],
            [
                'company_name' => 'Primkoppol Restabes Medan',
                'industry_sector' => 'Sektor Keuangan & Koperasi',
                'service_provided' => 'Audit Laporan Keuangan Koperasi Kepolisian',
            ],
            [
                'company_name' => 'Koperasi Konsumen Surya Abadi Mandiri',
                'industry_sector' => 'Sektor Keuangan & Koperasi',
                'service_provided' => 'Pemeriksaan Laporan Keuangan Koperasi Konsumen',
            ],
            [
                'company_name' => 'Koperasi Karyawan PT Angkasa Pura 11',
                'industry_sector' => 'Sektor Keuangan & Koperasi',
                'service_provided' => 'Pemeriksaan Laporan Keuangan Koperasi',
            ],
            [
                'company_name' => 'Koperasi Karyawan Naga Putri',
                'industry_sector' => 'Sektor Keuangan & Koperasi',
                'service_provided' => 'Pemeriksaan Laporan Keuangan Koperasi Karyawan',
            ],
            [
                'company_name' => 'Koperasi Setia Jasa Kawan',
                'industry_sector' => 'Sektor Keuangan & Koperasi',
                'service_provided' => 'Pemeriksaan Laporan Keuangan Koperasi Jasa',
            ],
            [
                'company_name' => 'Koperasi Jasa Karyawan PT PLN (Persero) UIW Sumut',
                'industry_sector' => 'Sektor Keuangan & Koperasi',
                'service_provided' => 'Audit Laporan Keuangan Koperasi Karyawan BUMN',
            ],

            // Sektor 6: Pertanian, Perkebunan, Kehutanan & Kelautan
            [
                'company_name' => 'PT Sumatera Dinamika Utama',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit & Evaluasi Biaya Kebun',
            ],
            [
                'company_name' => 'PT Sumatera Riang Lestari',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan Perkebunan/HTI',
            ],
            [
                'company_name' => 'PT Sumatera Sylva Lestari',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan Perkebunan/HTI',
            ],
            [
                'company_name' => 'PT Dunia Karya Sejati',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Cahayamas Lestari Jaya',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Wananugraha Bima Lestari',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Nusantara Sentosa Raya',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Bukit Raya Mudisa',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Sinar Belantara Indah',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Madukoro Lestari',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Harapanjaya Makmur Lestari',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Nusa Wana Raya',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Sawit Anugrah Sejahtera',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Pabrik Kelapa Sawit (PKS)',
            ],
            [
                'company_name' => 'PT Tian Tujuhpuluh Utama',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Globalindo Alam Perkasa',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan Perkebunan',
            ],
            [
                'company_name' => 'PT Kedaton Mulia Primas',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Mustika Agung Sawit Sejahtera',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Industri Kelapa Sawit',
            ],
            [
                'company_name' => 'PT Mustika Agung Sarana Sejahtera',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Industri Kelapa Sawit',
            ],
            [
                'company_name' => 'PT Mustika Agung Sawit Gemilang',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Industri Kelapa Sawit',
            ],
            [
                'company_name' => 'PT Setia Agrindo Jaya',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Pupuk Agro Nusantara',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Industri Pupuk & Sarana Pertanian',
            ],
            [
                'company_name' => 'PT Mulia Indah',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Mentari Pratama',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Permata Citra Rangau',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Industri Kelapa Sawit',
            ],
            [
                'company_name' => 'PT Lestari Abadi Perkasa',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan Perkebunan',
            ],
            [
                'company_name' => 'PT Sarana Esa Cita',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'PT Siringo - Ringo',
                'industry_sector' => 'Pertanian, Perkebunan & Kehutanan',
                'service_provided' => 'General Audit Perkebunan & Pabrik Sawit',
            ],

            // Sektor 7: Properti dan Konstruksi
            [
                'company_name' => 'Waskita Adhi As KSO',
                'industry_sector' => 'Properti dan Konstruksi',
                'service_provided' => 'Audit Laporan Keuangan Konsorsium Proyek BUMN',
            ],
            [
                'company_name' => 'CV Dongan Saroha',
                'industry_sector' => 'Properti dan Konstruksi',
                'service_provided' => 'Pemeriksaan Laporan Keuangan Konstruksi',
            ],
            [
                'company_name' => 'CV Noel Simamora',
                'industry_sector' => 'Properti dan Konstruksi',
                'service_provided' => 'Pemeriksaan Laporan Keuangan Konstruksi',
            ],
            [
                'company_name' => 'PT Wahana Jaya Prima',
                'industry_sector' => 'Properti dan Konstruksi',
                'service_provided' => 'General Audit Perusahaan Konstruksi & Alat Berat',
            ],
            [
                'company_name' => 'PT Wahana Prima Sejati',
                'industry_sector' => 'Properti dan Konstruksi',
                'service_provided' => 'General Audit Perusahaan Konstruksi',
            ],
            [
                'company_name' => 'PT Multi Sinergi Rekayasa',
                'industry_sector' => 'Properti dan Konstruksi',
                'service_provided' => 'General Audit Engineering & Konstruksi',
            ],
            [
                'company_name' => 'PT Oriental Prima Sinergi Engineering',
                'industry_sector' => 'Properti dan Konstruksi',
                'service_provided' => 'General Audit Engineering & Proyek',
            ],
            [
                'company_name' => 'PT Asrindo Citra Seni Satria',
                'industry_sector' => 'Properti dan Konstruksi',
                'service_provided' => 'General Audit Jasa Konstruksi & Arsitektur',
            ],
            [
                'company_name' => 'PT Mitra Sukses Konstruksi',
                'industry_sector' => 'Properti dan Konstruksi',
                'service_provided' => 'General Audit Perusahaan Konstruksi',
            ],
            [
                'company_name' => 'PT Malibu Bumi Lestari dan Entitas Anak',
                'industry_sector' => 'Properti dan Konstruksi',
                'service_provided' => 'Audit Konsolidasi Laporan Keuangan Properti',
            ],
            [
                'company_name' => 'PT Tunas Harapan Baru',
                'industry_sector' => 'Properti dan Konstruksi',
                'service_provided' => 'General Audit Laporan Keuangan',
            ],
            [
                'company_name' => 'Adhi-Mak KSO (Proyek Penanganan Jalan dan Jembatan)',
                'industry_sector' => 'Properti dan Konstruksi',
                'service_provided' => 'Audit Laporan Keuangan Proyek Jalan & Jembatan BUMN',
            ],
            [
                'company_name' => 'Adhi-Mak KSO (Proyek Bandar Udara)',
                'industry_sector' => 'Properti dan Konstruksi',
                'service_provided' => 'Audit Laporan Keuangan Proyek Bandar Udara BUMN',
            ],

            // Sektor 8: Pertambangan dan Energi
            [
                'company_name' => 'PT Artha Nugraha Agung',
                'industry_sector' => 'Pertambangan dan Energi',
                'service_provided' => 'General Audit Sektor Pertambangan & Energi',
            ],
            [
                'company_name' => 'PT Pengembangan Investasi Riau',
                'industry_sector' => 'Pertambangan dan Energi',
                'service_provided' => 'General Audit Sektor Investasi & Energi Daerah',
            ],
        ];

        Client::truncate();

        $priority = 1;
        foreach ($realClients as $idx => $clientData) {
            $baseSlug = Str::slug($clientData['company_name']);
            $uniqueSlug = $baseSlug . '-' . ($idx + 1);

            Client::create([
                'company_name' => $clientData['company_name'],
                'slug' => $uniqueSlug,
                'logo' => null,
                'industry_sector' => $clientData['industry_sector'],
                'service_provided' => $clientData['service_provided'],
                'order_priority' => $priority++,
                'show_in_homepage' => true,
                'is_active' => true,
            ]);
        }
    }
}
