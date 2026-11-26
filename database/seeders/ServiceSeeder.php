<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'slug' => 'general-audit',
                'number' => '01',
                'title' => 'General Audit',
                'subtitle' => 'Jasa Assurance - Pemeriksaan Laporan Keuangan Independen',
                'short_desc' => 'Layanan General Audit kami dirancang untuk memberikan penilaian menyeluruh terhadap sistem dan proses bisnis Anda, memastikan akurasi laporan keuangan sesuai SPAP dan SAK/IFRS.',
                'full_desc' => 'Mengevaluasi suatu entitas (organisasi, perusahaan, atau lembaga) untuk melakukan penilaian kelayakan penyajian laporan keuangan dengan memberikan pernyataan pendapat independen atas laporan keuangannya yang sesuai dengan prinsip akuntansi dan peraturan yang berlaku.',
                'scope' => [
                    'Pemeriksaan laporan keuangan tahunan & interim secara independen',
                    'Penerbitan Laporan Auditor Independen (LAI) resmi untuk perbankan & regulator',
                    'Evaluasi kepatuhan terhadap Standar Profesional Akuntan Publik (SPAP) & SAK/IFRS',
                    'Identifikasi potensi risiko dan rekomendasi perbaikan pengendalian internal',
                ],
                'mascot_image' => '/images/services/mascot-audit.jpg',
                'fallback_image' => '/images/benefits/bn-3.svg',
                'icon_name' => 'general-audit',
                'show_in_core_features' => true,
                'order_priority' => 1,
                'is_active' => true,
            ],
            [
                'slug' => 'reviu-laporan-keuangan',
                'number' => '02',
                'title' => 'Jasa Reviu Laporan Keuangan',
                'subtitle' => 'Jasa Assurance - Prosedur Analitis Laporan Keuangan',
                'short_desc' => 'Kantor kami menyediakan jasa reviu laporan keuangan dengan melakukan prosedur analitis atas data-data keuangan entitas sehingga dapat memberikan keyakinan bahwa laporan keuangan telah disajikan sesuai dengan Standar Akuntansi yang berlaku.',
                'full_desc' => 'Jasa assurance profesional melalui prosedur analitis dan permintaan keterangan kepada manajemen guna menghasilkan laporan keuangan yang berkualitas dan sesuai Standar Akuntansi yang berlaku.',
                'scope' => [
                    'Prosedur analitis mendalam terhadap pos-pos laporan keuangan',
                    'Permintaan keterangan kepada manajemen terkait kebijakan akuntansi',
                    'Penerbitan Laporan Reviu Akuntan Independen sesuai Standar Perikatan Reviu (SPR)',
                    'Evaluasi kesesuaian penyajian laporan keuangan terhadap SAK',
                ],
                'mascot_image' => '/images/services/mascot-audit.jpg',
                'fallback_image' => '/images/benefits/bn-3.svg',
                'icon_name' => 'reviu-laporan-keuangan',
                'show_in_core_features' => false,
                'order_priority' => 2,
                'is_active' => true,
            ],
            [
                'slug' => 'management-audit',
                'number' => '03',
                'title' => 'Management Audit',
                'subtitle' => 'Evaluasi Efisiensi & Kinerja Manajemen',
                'short_desc' => 'Kami menyediakan layanan manajemen audit yang komprehensif dan terpercaya untuk memastikan bisnis Anda berjalan sesuai dengan standar, efisien, dan mematuhi regulasi yang berlaku.',
                'full_desc' => 'Audit manajemen adalah kegiatan menganalisis dan menilai kompetensi serta kemampuan manajemen perusahaan untuk melaksanakan objective perusahaan secara efektif dan ekonomis.',
                'scope' => [
                    'Penilaian efisiensi dan efektivitas alur operasional bisnis',
                    'Evaluasi Sistem Pengendalian Internal (SPI) perusahaan',
                    'Audit kepatuhan terhadap SOP dan kebijakan manajemen',
                    'Rekomendasi strategis perbaikan tata kelola (Good Corporate Governance)',
                ],
                'mascot_image' => '/images/services/mascot-management.jpg',
                'fallback_image' => '/images/benefits/bn-2.svg',
                'icon_name' => 'management-audit',
                'show_in_core_features' => true,
                'order_priority' => 3,
                'is_active' => true,
            ],
            [
                'slug' => 'special-audit',
                'number' => '04',
                'title' => 'Special Audit & Perpajakan',
                'subtitle' => 'Audit Khusus, Tax Planning & Sengketa Pajak',
                'short_desc' => 'Layanan Spesial Audit dan Jasa Perpajakan membantu perusahaan menyusun tax planning yang efisien sesuai peraturan perpajakan serta mendampingi penyelesaian masalah pajak dengan instansi pajak.',
                'full_desc' => 'Pendampingan penugasan Agreed-Upon Procedures (AUP), due diligence, serta layanan konsultasi perpajakan meliputi perencanaan pajak (tax planning) dan penyelesaian sengketa pajak.',
                'scope' => [
                    'Agreed-Upon Procedures (AUP) untuk tujuan khusus & investigasi',
                    'Due diligence finansial untuk merger, akuisisi, dan investasi',
                    'Penyusunan Tax Planning & kepatuhan perpajakan badan maupun pribadi',
                    'Pendampingan pemeriksaan, keberatan, dan penyelesaian sengketa pajak',
                ],
                'mascot_image' => '/images/services/mascot-tax.jpg',
                'fallback_image' => '/images/dashboard/Saly.png',
                'icon_name' => 'special-audit',
                'show_in_core_features' => true,
                'order_priority' => 4,
                'is_active' => true,
            ],
            [
                'slug' => 'accounting-service',
                'number' => '05',
                'title' => 'Kompilasi & Accounting Service',
                'subtitle' => 'Jasa Non-Assurance - Kompilasi Laporan Keuangan',
                'short_desc' => 'Jasa konsultasi kompilasi laporan keuangan berdasarkan data keuangan dan informasi klien untuk membantu manajemen menyusun laporan keuangan sesuai Standar Akuntansi yang berlaku.',
                'full_desc' => 'Membantu perusahaan dalam menyusun dan menyajikan laporan keuangan secara akurat dan transparan sesuai Standar Akuntansi Keuangan (SAK) yang berlaku tanpa memberikan opini audit.',
                'scope' => [
                    'Kompilasi laporan keuangan bulanan & tahunan sesuai SAK',
                    'Pengelolaan dan penelaahan jurnal pembukuan harian bisnis',
                    'Rekonsiliasi akun kas, bank, piutang, persediaan, dan utang',
                    'Penyusunan Chart of Accounts (COA) & implementasi sistem akuntansi',
                ],
                'mascot_image' => '/images/services/mascot-accounting.jpg',
                'fallback_image' => '/images/benefits/bn-1.svg',
                'icon_name' => 'accounting-services',
                'show_in_core_features' => true,
                'order_priority' => 5,
                'is_active' => true,
            ],
            [
                'slug' => 'penyusunan-sop',
                'number' => '06',
                'title' => 'Penyusunan SOP Perusahaan',
                'subtitle' => 'Jasa Non-Assurance - Standard Operating Procedure',
                'short_desc' => 'Membantu klien mempersiapkan implementasi standar operasional yang akurat, berisi metode khusus terstruktur untuk menjamin proses produk dan jasa sesuai tujuan perusahaan.',
                'full_desc' => 'Perancangan Standard Operating Procedure (SOP) perusahaan secara menyeluruh guna memastikan kegiatan operasional dan pelaporan keuangan berjalan tertib, terstruktur, dan terkendali.',
                'scope' => [
                    'Pemetaan alur kerja & proses bisnis lintas departemen',
                    'Perancangan SOP Keuangan, Akuntansi, Kas/Bank, dan Persediaan',
                    'Penyusunan matriks wewenang & pengendalian internal (Internal Control)',
                    'Pendampingan sosialisasi dan implementasi SOP kepada tim operasional',
                ],
                'mascot_image' => '/images/services/mascot-accounting.jpg',
                'fallback_image' => '/images/benefits/bn-1.svg',
                'icon_name' => 'penyusunan-sop',
                'show_in_core_features' => false,
                'order_priority' => 6,
                'is_active' => true,
            ],
            [
                'slug' => 'business-plan',
                'number' => '07',
                'title' => 'Penyusunan Business Plan',
                'subtitle' => 'Jasa Non-Assurance - Kajian & Rencana Kerja Jangka Panjang',
                'short_desc' => 'Membantu manajemen melakukan kajian, analisis, dan pendalaman rencana kerja jangka panjang perusahaan yang lebih efektif, tepat sasaran, dan mengatur sistem keuangan lebih baik.',
                'full_desc' => 'Penyusunan dokumen Business Plan dan studi kelayakan bisnis guna membantu manajemen mengambil keputusan strategis dan merencanakan keuangan jangka panjang secara terukur.',
                'scope' => [
                    'Kajian kelayakan bisnis, analisis pasar, dan pemetaan strategi jangka panjang',
                    'Pemodelan keuangan (Financial Modeling) dan proyeksi laporan keuangan',
                    'Analisis proyeksi arus kas (Cash Flow), BEP, NPV, dan IRR investasi',
                    'Penyusunan dokumen rencana bisnis siap presentasi untuk perbankan & investor',
                ],
                'mascot_image' => '/images/services/mascot-management.jpg',
                'fallback_image' => '/images/benefits/bn-2.svg',
                'icon_name' => 'business-plan',
                'show_in_core_features' => false,
                'order_priority' => 7,
                'is_active' => true,
            ],
            [
                'slug' => 'jasa-pelatihan',
                'number' => '08',
                'title' => 'Jasa Pelatihan Akuntansi & Pajak',
                'subtitle' => 'Jasa Non-Assurance - Pelatihan SAK & Perpajakan Terapan',
                'short_desc' => 'Pelatihan akuntansi, keuangan, dan perpajakan dengan pendekatan terapan untuk menambah kemampuan staf klien menyajikan laporan keuangan sesuai SAK dan memenuhi kewajiban pajak.',
                'full_desc' => 'Program pelatihan praktis di bidang akuntansi (pencatatan, pengklasifikasian, peringkasan transaksi sesuai SAK) dan perpajakan terapan untuk membimbing wajib pajak melaksanakan kewajiban perpajakan secara benar.',
                'scope' => [
                    'Pelatihan akuntansi: pencatatan, pengklasifikasian, dan peringkasan transaksi',
                    'Penyajian laporan keuangan sesuai Standar Akuntansi Keuangan (SAK) berlaku',
                    'Pelatihan perpajakan dengan metode pendekatan terapan (praktik langsung)',
                    'Pembimbingan wajib pajak dalam pelaporan SPT Masa & SPT Tahunan Badan/OP',
                ],
                'mascot_image' => '/images/services/mascot-tax.jpg',
                'fallback_image' => '/images/dashboard/Saly.png',
                'icon_name' => 'jasa-pelatihan',
                'show_in_core_features' => false,
                'order_priority' => 8,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['slug' => $service['slug']], $service);
        }
    }
}
