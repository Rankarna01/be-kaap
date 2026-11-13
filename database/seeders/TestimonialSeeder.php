<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            // Row 1
            [
                'client_name' => 'Hendrik Gunawan, S.E.',
                'role' => 'Direktur Keuangan',
                'company' => 'PT Sawit Makmur Perkasa (Pekanbaru)',
                'avatar_image' => '/images/users/user-1.png',
                'service_category' => 'General Audit & Asurans',
                'quote' => 'Proses audit laporan keuangan tahunan berjalan sangat objektif, komunikatif, dan tepat waktu. Auditor KAP DSSR sangat memahami dinamika industri kelapa sawit dan memberikan masukan konstruktif atas sistem pengendalian internal kami.',
                'marquee_row' => 'row1',
                'rating' => 5,
                'order_priority' => 1,
                'is_active' => true,
            ],
            [
                'client_name' => 'Ir. Bambang Sugiarto',
                'role' => 'Direktur Utama',
                'company' => 'PT Medan Industri Manufaktur',
                'avatar_image' => '/images/users/user-2.png',
                'service_category' => 'Audit Tahunan & LAI',
                'quote' => 'KAP Drs. Selamat Sinuraya dan Rekan telah menjadi mitra audit independen kami lebih dari 5 tahun. Laporan Auditor Independen (LAI) mereka diakui penuh oleh pihak perbankan sindikasi dan mempercepat proses restrukturisasi fasilitas kredit kami.',
                'marquee_row' => 'row1',
                'rating' => 5,
                'order_priority' => 2,
                'is_active' => true,
            ],
            [
                'client_name' => 'Siti Rahmawati, M.M., BKP',
                'role' => 'Head of Tax & Finance',
                'company' => 'PT Niaga Logistik Nusantara',
                'avatar_image' => '/images/users/user-3.png',
                'service_category' => 'Perpajakan & Ekualisasi',
                'quote' => 'Ketelitian tim konsultan KAP DSSR dalam menelaah kepatuhan perpajakan dan rekonsiliasi fiskal sangat mendalam. Kami dapat memitigasi risiko sanksi administrasi secara terukur dengan kepatuhan regulasi yang solid.',
                'marquee_row' => 'row1',
                'rating' => 5,
                'order_priority' => 3,
                'is_active' => true,
            ],
            [
                'client_name' => 'Dr. H. Ahmad Fauzi, Sp.A',
                'role' => 'Ketua Dewan Pembina',
                'company' => 'Yayasan Rumah Sakit Insan Medika',
                'avatar_image' => '/images/users/user-4.png',
                'service_category' => 'Audit Khusus & Transparansi',
                'quote' => 'Audit kepatuhan dan evaluasi tata kelola dari KAP DSSR membantu rumah sakit kami menjaga akuntabilitas publik. Pendekatan para partner sangat profesional, independen, dan berintegritas tinggi.',
                'marquee_row' => 'row1',
                'rating' => 5,
                'order_priority' => 4,
                'is_active' => true,
            ],

            // Row 2
            [
                'client_name' => 'Kevin Tanuwijaya, B.Bus',
                'role' => 'Managing Director',
                'company' => 'PT Agro Mandiri Sukses',
                'avatar_image' => '/images/users/user-1.png',
                'service_category' => 'Audit Laporan Keuangan',
                'quote' => 'Sangat mengapresiasi kecepatan respons dan komunikasi terbuka para partner. Setiap isu akuntansi PSAK/IFRS dibahas secara konstruktif sehingga seluruh tahapan audit rampung sebelum tenggat pelaporan.',
                'marquee_row' => 'row2',
                'rating' => 5,
                'order_priority' => 5,
                'is_active' => true,
            ],
            [
                'client_name' => 'Nurul Hidayah, S.E., Ak.',
                'role' => 'Corporate Controller',
                'company' => 'PT Riau Prima Distribusi',
                'avatar_image' => '/images/users/user-2.png',
                'service_category' => 'Audit Manajemen & SPI',
                'quote' => 'Layanan audit manajemen dari KAP DSSR berhasil mengidentifikasi inefisiensi alur rantai pasok dan persediaan. Rekomendasi perbaikan SOP operasional membuat efisiensi biaya tercapai secara nyata.',
                'marquee_row' => 'row2',
                'rating' => 5,
                'order_priority' => 6,
                'is_active' => true,
            ],
            [
                'client_name' => 'Wijaya Kusuma, CPA',
                'role' => 'Komisaris Independen',
                'company' => 'PT Bahtera Energi Terbarukan',
                'avatar_image' => '/images/users/user-3.png',
                'service_category' => 'Supervisi Independensi',
                'quote' => 'Sebagai pengawas, independensi akuntan publik adalah prioritas utama. KAP DSSR konsisten menjunjung standar etika profesi SPAP tertinggi tanpa kompromi, memberikan keyakinan memadai bagi seluruh pemegang saham.',
                'marquee_row' => 'row2',
                'rating' => 5,
                'order_priority' => 7,
                'is_active' => true,
            ],
            [
                'client_name' => 'Dian Prasetyo, S.E.',
                'role' => 'Manager Akuntansi',
                'company' => 'PT Prima Graha Properti',
                'avatar_image' => '/images/users/user-4.png',
                'service_category' => 'SOP & Chart of Accounts',
                'quote' => 'Pendampingan perancangan Chart of Accounts dan SOP akuntansi dari KAP DSSR membuat pembukuan harian kami jauh lebih rapi dan mempercepat penyusunan neraca konsolidasi bulanan.',
                'marquee_row' => 'row2',
                'rating' => 5,
                'order_priority' => 8,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(
                ['client_name' => $t['client_name'], 'company' => $t['company']],
                $t
            );
        }
    }
}

