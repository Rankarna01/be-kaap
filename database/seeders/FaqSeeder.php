<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Apakah KAP Drs. Selamat Sinuraya dan Rekan memiliki izin resmi dari regulator?',
                'answer' => 'Ya. KAP Drs. Selamat Sinuraya dan Rekan beroperasi dengan Izin Usaha resmi dari Kementerian Keuangan Republik Indonesia. Seluruh partner kami terdaftar aktif sebagai anggota Institut Akuntan Publik Indonesia (IAPI) dan memegang sertifikasi Certified Public Accountant (CPA) serta Chartered Accountant (CA) yang sah dan berkekuatan hukum.',
                'category_tag' => 'Perizinan & Legalitas',
                'order_priority' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Berapa lama estimasi waktu pengerjaan General Audit laporan keuangan tahunan?',
                'answer' => 'Durasi perikatan audit umum berkisar antara 2 hingga 4 minggu kerja setelah seluruh data pembukuan dan dokumen pendukung dinyatakan lengkap oleh tim auditor lapangan. Jadwal penyelesaian dapat diselaraskan dengan kebutuhan tenggat waktu klien untuk RUPS tahunan, perbankan, maupun batas akhir pelaporan SPT Tahunan.',
                'category_tag' => 'Prosedur & Durasi',
                'order_priority' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'Dokumen dan data apa saja yang wajib disiapkan sebelum proses audit dimulai?',
                'answer' => 'Dokumen awal yang dibutuhkan meliputi Laporan Keuangan Neraca & Laba Rugi periode berjalan beserta komparatif tahun sebelumnya, Buku Besar (General Ledger), Rekening Koran bank, SPT Masa dan Tahunan, berita acara stock opname fisik persediaan/kas, serta akta pendirian dan perizinan legalitas perusahaan terkini.',
                'category_tag' => 'Kelengkapan Dokumen',
                'order_priority' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Apakah KAP DSSR melayani penugasan audit di luar kota Medan dan Pekanbaru?',
                'answer' => 'Tentu. Meskipun kantor operasional utama kami berkedudukan di Medan (Sumatera Utara) dan Pekanbaru (Riau), tim auditor kami berpengalaman melakukan penugasan lapangan (field audit) dan audit komprehensif untuk berbagai korporasi di seluruh pulau Sumatera, Jawa, dan wilayah provinsi lainnya di Indonesia.',
                'category_tag' => 'Jangkauan Layanan',
                'order_priority' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Apakah laporan audit independen dari KAP DSSR diakui oleh pihak perbankan?',
                'answer' => 'Ya. Laporan Auditor Independen (LAI) resmi yang kami terbitkan disusun dengan berpedoman pada Standar Profesional Akuntan Publik (SPAP) dan SAK/IFRS. Laporan kami diakui penuh oleh lembaga perbankan nasional/swasta untuk pengajuan kredit, pemegang saham, investor, serta instansi regulator perpajakan.',
                'category_tag' => 'Kredibilitas & Bank',
                'order_priority' => 5,
                'is_active' => true,
            ],
            [
                'question' => 'Bagaimana cara meminta surat penawaran (proposal audit) dan estimasi biaya?',
                'answer' => 'Anda dapat mengajukan permohonan proposal audit dengan menghubungi kontak resmi kami di +62 852-7665-3453 atau mengisi formulir konsultasi di website ini. Tim kami akan mempelajari profil entitas dan mengirimkan surat penawaran perikatan dengan struktur audit fee yang transparan dan kompetitif.',
                'category_tag' => 'Penawaran & Audit Fee',
                'order_priority' => 6,
                'is_active' => true,
            ],
            [
                'question' => 'Selain audit laporan keuangan, layanan apa saja yang dapat disediakan oleh KAP DSSR?',
                'answer' => 'Selain General Audit, kami juga menyediakan layanan Audit Manajemen (evaluasi efisiensi & sistem pengendalian internal), Special Audit (Due Diligence, AUP, Likuidasi), Jasa Kompilasi Pembukuan & SOP Akuntansi, serta telaah kepatuhan perpajakan perusahaan.',
                'category_tag' => 'Layanan Lengkap',
                'order_priority' => 7,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $f) {
            Faq::updateOrCreate(['question' => $f['question']], $f);
        }
    }
}

