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
                'title' => 'Akta Pendirian & Perubahan Akta KAP',
                'issuer' => 'Notaris Maizar, S.H. & Notaris Cipto Soenaryo, S.H.',
                'license_number' => 'Akta No. 13/2026 (13 Maret 2026)',
                'description' => 'Akta Pendirian No. 2 tanggal 24 November 2009 (Notaris Maizar, S.H.), Perubahan Akta Pertama No. 8/2023 tanggal 21 Juni 2023, dan Perubahan Akta Terakhir No. 13/2026 tanggal 13 Maret 2026 (Notaris Cipto Soenaryo, S.H.) mengenai susunan 5 rekan aktif.',
                'logo' => null,
                'order_priority' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Izin Usaha KAP Kantor Pusat Medan',
                'issuer' => 'Kementerian Keuangan Republik Indonesia',
                'license_number' => 'Kep-939/KM.17/1998',
                'description' => 'Keputusan Menteri Keuangan RI tanggal 23 Oktober 1998 tentang Pemberian Izin Usaha kepada KAP Drs. Selamat Sinuraya & Rekan (Nomor Izin Usaha: 98.2.0158, NPWP: 4.150.830.0-111).',
                'logo' => 'legalities/kemenkeu.png',
                'order_priority' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Izin Pendirian Cabang KAP Pekanbaru',
                'issuer' => 'Kementerian Keuangan Republik Indonesia',
                'license_number' => '303/KM.1/2023',
                'description' => 'Keputusan Menteri Keuangan RI tanggal 12 Juli 2023 tentang Izin Pendirian Cabang Kantor Akuntan Publik Drs. Selamat Sinuraya & Rekan di Pekanbaru.',
                'logo' => 'legalities/kemenkeu.png',
                'order_priority' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Perubahan Susunan Rekan KAP (PPPK Kemenkeu)',
                'issuer' => 'Kementerian Keuangan RI (PPPK)',
                'license_number' => 'S-609/SK.5/2026 (1 April 2026)',
                'description' => 'Surat Direktorat Pembinaan dan Pengawasan Profesi Keuangan perihal pengesahan susunan 5 Rekan Akuntan Publik aktif: Bahtera Sinuraya, Volta Diyanto, Sucipto, Rizky Syahputra, dan Muhammad Yusuf.',
                'logo' => 'legalities/kemenkeu.png',
                'order_priority' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Nomor Induk Berusaha (NIB) OSS Berbasis Risiko',
                'issuer' => 'Pemerintah Republik Indonesia / BKPM',
                'license_number' => 'NIB: 0407230054518',
                'description' => 'Perizinan Berusaha Berbasis Risiko untuk Persekutuan dan Perkumpulan Kantor Akuntan Publik Drs. Selamat Sinuraya dan Rekan yang diterbitkan pada 4 Juli 2023.',
                'logo' => null,
                'order_priority' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Terdaftar di Badan Pemeriksa Keuangan (BPK RI)',
                'issuer' => 'Badan Pemeriksa Keuangan Republik Indonesia',
                'license_number' => 'No. 545/STT/X/2024 (17 Okt 2024)',
                'description' => 'Surat Tanda Terdaftar Kantor Akuntan Publik di Badan Pemeriksa Keuangan RI untuk melakukan pemeriksaan pengelolaan dan tanggung jawab keuangan negara.',
                'logo' => 'legalities/bpk.png',
                'order_priority' => 6,
                'is_active' => true,
            ],
            [
                'title' => 'Terdaftar di Otoritas Jasa Keuangan (OJK)',
                'issuer' => 'Otoritas Jasa Keuangan Republik Indonesia',
                'license_number' => 'STTD.KAP-16/PM.223/2020 & STTD.AP-86/PB.022/2024',
                'description' => 'Surat Tanda Terdaftar KAP Sektor Pasar Modal (STTD.KAP-16/PM.223/2020) serta STTD Profesi Penunjang Perbankan untuk Akuntan Publik Bahtera Sinuraya (STTD.AP-12/PB.122/2020) dan Volta Diyanto (STTD.AP-86/PB.022/2024).',
                'logo' => 'legalities/ojk.png',
                'order_priority' => 7,
                'is_active' => true,
            ],
            [
                'title' => 'Terdaftar di Kementerian Koperasi RI (Kemenkop)',
                'issuer' => 'Kementerian Koperasi Republik Indonesia',
                'license_number' => 'B-325/D.1.KOP/HK.01.01/2025',
                'description' => 'Surat Keterangan Terdaftar tanggal 28 Desember 2025 dalam Sistem Pendaftaran Akuntan Publik dan KAP Kementerian Koperasi RI (Konvensional & Syariah) atas nama AP Volta Diyanto.',
                'logo' => null,
                'order_priority' => 8,
                'is_active' => true,
            ],
            [
                'title' => 'Rekanan Resmi Bank Rakyat Indonesia (BRI)',
                'issuer' => 'PT Bank Rakyat Indonesia (Persero) Tbk',
                'license_number' => 'B.517-RO-PKU/COP/04/2026',
                'description' => 'Surat Keterangan Rekanan BRI Regional Office Pekanbaru (Nomor Rekanan 01, wilayah kerja Riau dan Kepulauan Riau), berlaku sampai dengan 31 Desember 2026.',
                'logo' => 'legalities/bri.png',
                'order_priority' => 9,
                'is_active' => true,
            ],
            [
                'title' => 'SK Izin Akuntan Publik (5 Rekan Aktif)',
                'issuer' => 'Kementerian Keuangan RI & IAPI',
                'license_number' => 'AP.0282 | AP.0826 | AP.1916 | AP.1996 | AP.2160',
                'description' => 'SK Menkeu Izin AP: Bahtera Sinuraya (445/MK/SK/2026), Drs. Sucipto (1476/KM.1/2021), Volta Diyanto (239/KM.1/2023), Rizki Syahputra (23/KM.1/2024), dan Muhammad Yusuf (304/MK/SK/2025).',
                'logo' => 'legalities/iapi.png',
                'order_priority' => 10,
                'is_active' => true,
            ],
        ];

        Legality::truncate();

        foreach ($items as $item) {
            Legality::create($item);
        }
    }
}
