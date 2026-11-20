<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\HeroSection;
use App\Models\Legality;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Admin User for Filament Backoffice
        User::updateOrCreate(
            ['email' => 'admin@kapdssr.com'],
            [
                'name' => 'Administrator KAP DSSR',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Core Seeders
        $this->call([
            SiteSettingSeeder::class,
            OfficeSeeder::class,
            ServiceSeeder::class,
            PartnerSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            StatsMetricSeeder::class,
            LegalitySeeder::class,
        ]);

        // 3. Hero Section
        HeroSection::firstOrCreate(
            ['headline' => 'KAP DRS. SINURAYA DAN REKAN'],
            [
                'badge_text' => 'JLN. PASUNDAN 29A, MEDAN',
                'badge_icon' => 'location-marker',
                'cta_primary_label' => 'Konsultasi Sekarang',
                'cta_primary_url' => '/#contact',
                'cta_primary_active' => true,
                'cta_secondary_label' => 'Lihat Layanan Kami',
                'cta_secondary_url' => '/#services',
                'cta_secondary_active' => true,
                'banner_image_light' => '/images/hero/hero-img.jpg',
                'banner_image_dark' => '/images/hero/hero-img-dark.png',
                'is_active' => true,
            ]
        );

        // 4. Article Categories
        $categories = [
            ['name' => 'Audit & Asurans', 'slug' => 'audit-asurans', 'order_priority' => 1],
            ['name' => 'Audit Manajemen', 'slug' => 'audit-manajemen', 'order_priority' => 2],
            ['name' => 'Akuntansi & Sistem', 'slug' => 'akuntansi-sistem', 'order_priority' => 3],
            ['name' => 'Perpajakan', 'slug' => 'perpajakan', 'order_priority' => 4],
            ['name' => 'Regulasi & SPAP', 'slug' => 'regulasi-spap', 'order_priority' => 5],
        ];

        foreach ($categories as $cat) {
            ArticleCategory::updateOrCreate(['slug' => $cat['slug']], $cat);
        }

        // 5. Featured Articles (Matching Frontend Bento Grid & Standalone News)
        $auditCat = ArticleCategory::where('slug', 'audit-asurans')->first();
        $mgmtCat = ArticleCategory::where('slug', 'audit-manajemen')->first();
        $taxCat = ArticleCategory::where('slug', 'perpajakan')->first();

        $articles = [
            [
                'category_id' => $auditCat?->id,
                'slug' => 'pembaruan-standar-audit-spap-laporan-keuangan',
                'title' => 'Pembaruan Standar Audit SPAP & Kepatuhan Laporan Keuangan',
                'cover_image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Memahami transparansi audit independen dan penerapan SAK/IFRS terkini guna menjamin kredibilitas laporan keuangan bisnis Anda di hadapan regulator, investor, dan perbankan.',
                'content' => 'Standar Profesional Akuntan Publik (SPAP) terus berkembang menyesuaikan konvergensi International Standards on Auditing (ISA). Audit independen tidak hanya berfungsi sebagai pemenuhan kewajiban administratif, melainkan instrumen esensial dalam memberikan jaminan memadai (reasonable assurance) bahwa laporan keuangan bebas dari salah saji material. Melalui penugasan General Audit berstandar tinggi, perusahaan memperoleh evaluasi kritis terhadap kelayakan akun dan kepatuhan penyajian.',
                'author' => 'Published on KAP DSSR',
                'read_time' => '5 min read',
                'is_featured' => true,
                'status' => 'published',
                'published_at' => now()->subDays(2),
            ],
            [
                'category_id' => $mgmtCat?->id,
                'slug' => 'optimalisasi-sistem-pengendalian-internal-spi',
                'title' => 'Optimalisasi Sistem Pengendalian Internal (SPI) & Efisiensi Bisnis',
                'cover_image' => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Evaluasi manajemen dan review alur operasional untuk mencegah risiko kebocoran, meningkatkan efektivitas kinerja, serta memperkuat tata kelola Good Corporate Governance.',
                'content' => 'Sistem Pengendalian Internal (SPI) yang tangguh merupakan benteng utama perusahaan dalam memitigasi risiko operasional, kepatuhan, dan finansial. Audit manajemen memberikan analisis mendalam mengenai pemisahan fungsi tugas, otorisasi transaksi, serta kepatuhan staf terhadap SOP. Rekomendasi perbaikan yang tepat akan meningkatkan efisiensi biaya secara signifikan.',
                'author' => 'Published on KAP DSSR',
                'read_time' => '4 min read',
                'is_featured' => true,
                'status' => 'published',
                'published_at' => now()->subDays(5),
            ],
            [
                'category_id' => $taxCat?->id,
                'slug' => 'strategi-kepatuhan-pajak-badan-mitigasi-risiko-pemeriksaan',
                'title' => 'Strategi Kepatuhan Pajak Badan & Mitigasi Risiko Pemeriksaan',
                'cover_image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Panduan praktis penelaahan laporan keuangan pra-pelaporan SPT Tahunan, kepatuhan bukti potong, dan kesiapan menghadapi proses pemeriksaan pajak sesuai peraturan.',
                'content' => 'Menghadapi penutupan tahun buku, rekonsiliasi fiskal antara laporan keuangan komersial dan peraturan perpajakan menjadi titik kritis bagi setiap Wajib Pajak Badan. Identifikasi dini terhadap beda tetap dan beda waktu serta kepatuhan pemotongan PPh Pasal 21, 23, dan PPN dapat menghindarkan perusahaan dari sanksi administrasi atau denda keterlambatan yang merugikan.',
                'author' => 'Published on KAP DSSR',
                'read_time' => '6 min read',
                'is_featured' => true,
                'status' => 'published',
                'published_at' => now()->subDays(8),
            ],
        ];

        foreach ($articles as $art) {
            Article::updateOrCreate(['slug' => $art['slug']], $art);
        }

        // 6. Legality Documents
        $legalities = [
            [
                'title' => 'Izin Usaha Kantor Akuntan Publik (KAP)',
                'issuer' => 'Kementerian Keuangan Republik Indonesia',
                'license_number' => 'KEP-918/KM.1/2019',
                'description' => 'KAP Drs. Selamat Sinuraya dan Rekan merupakan Kantor Akuntan Publik yang telah memiliki izin usaha resmi dan terdaftar di Pusat Pembinaan Profesi Keuangan (PPPK) Kementerian Keuangan RI.',
                'order_priority' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Registrasi Akuntan Publik (AP)',
                'issuer' => 'Institut Akuntan Publik Indonesia (IAPI)',
                'license_number' => 'Reg. AP IAPI Aktif',
                'description' => 'Partner dan Akuntan Publik kami memegang sertifikasi Certified Public Accountant (CPA) dan Nomor Register Akuntan Publik aktif di bawah naungan IAPI.',
                'order_priority' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Standar Mutu Profesional (SPAP)',
                'issuer' => 'Dewan Standar Profesional Akuntan Publik',
                'license_number' => 'SPAP & ISA Compliant',
                'description' => 'Seluruh perikatan audit dan asurans dilaksanakan secara independen dengan mematuhi Standar Profesional Akuntan Publik (SPAP) dan Kode Etik Profesi Akuntan Publik.',
                'order_priority' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Legalitas Badan Usaha & Perpajakan',
                'issuer' => 'Pemerintah Republik Indonesia (OSS / Ditjen Pajak)',
                'license_number' => 'NIB & NPWP Resmi',
                'description' => 'Memiliki Nomor Induk Berusaha (NIB), Nomor Pokok Wajib Pajak (NPWP) resmi, serta kepatuhan penuh terhadap regulasi perpajakan nasional.',
                'order_priority' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($legalities as $leg) {
            Legality::updateOrCreate(['title' => $leg['title']], $leg);
        }
    }
}
