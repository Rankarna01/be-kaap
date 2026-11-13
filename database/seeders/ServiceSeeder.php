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
                'subtitle' => 'Pemeriksaan Laporan Keuangan Independen',
                'short_desc' => 'Layanan General Audit kami dirancang untuk memberikan penilaian menyeluruh terhadap sistem dan proses bisnis Anda, memastikan akurasi laporan keuangan sesuai SPAP dan SAK/IFRS.',
                'full_desc' => 'Menurut Sukrisno Agoes (2004), audit merupakan pemeriksaan yang dilakukan oleh pihak independen secara kritis dan sistematis terhadap laporan keuangan, catatan pembukuan, serta bukti pendukung yang disusun oleh manajemen perusahaan dalam rangka memberikan pendapat atas kewajaran laporan keuangan.',
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
                'slug' => 'management-audit',
                'number' => '02',
                'title' => 'Management Audit and Service',
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
                'order_priority' => 2,
                'is_active' => true,
            ],
            [
                'slug' => 'accounting-service',
                'number' => '03',
                'title' => 'Accounting Service and system',
                'subtitle' => 'Pengelolaan Pembukuan & Desain SOP',
                'short_desc' => 'Solusi komprehensif untuk kebutuhan akuntansi bisnis Anda guna meningkatkan efisiensi, akurasi, dan transparansi laporan keuangan harian dan bulanan.',
                'full_desc' => 'Merupakan jasa untuk membantu perusahaan Anda dalam menjalankan pembukuan harian berupa kompilasi atau menelaah laporan keuangan, serta merancang SOP Akuntansi yang rapi dan terukur.',
                'scope' => [
                    'Pengelolaan dan penelaahan jurnal pembukuan harian bisnis',
                    'Kompilasi dan rekonsiliasi laporan keuangan bulanan & tahunan',
                    'Perancangan Standar Operasional Prosedur (SOP) Akuntansi terstruktur',
                    'Penyusunan Chart of Accounts (COA) & implementasi sistem akuntansi',
                ],
                'mascot_image' => '/images/services/mascot-accounting.jpg',
                'fallback_image' => '/images/benefits/bn-1.svg',
                'icon_name' => 'accounting-services',
                'show_in_core_features' => true,
                'order_priority' => 3,
                'is_active' => true,
            ],
            [
                'slug' => 'special-audit',
                'number' => '04',
                'title' => 'Special Audit',
                'subtitle' => 'Audit Khusus & Konsultasi Perpajakan',
                'short_desc' => 'Layanan Spesial Audit dan kepatuhan perpajakan untuk menangani kebutuhan spesifik dan mendalam seperti due diligence, penelaahan pajak, hingga investigasi.',
                'full_desc' => 'Konsultan pajak dan auditor khusus memberikan pendampingan penugasan Agreed-Upon Procedures (AUP) serta membantu wajib pajak dalam memenuhi hak dan kewajiban sesuai undang-undang perpajakan.',
                'scope' => [
                    'Agreed-Upon Procedures (AUP) untuk tujuan khusus investigasi',
                    'Due diligence finansial untuk merger, akuisisi, dan investasi',
                    'Audit kepatuhan perpajakan badan serta orang pribadi',
                    'Pendampingan likuidasi perusahaan dan penelusuran transaksi khusus',
                ],
                'mascot_image' => '/images/services/mascot-tax.jpg',
                'fallback_image' => '/images/dashboard/Saly.png',
                'icon_name' => 'special-audit',
                'show_in_core_features' => true,
                'order_priority' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['slug' => $service['slug']], $service);
        }
    }
}

