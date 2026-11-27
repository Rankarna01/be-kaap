<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $kegiatanKantorId = GalleryCategory::where('slug', 'kegiatan-kantor')->value('id') ?? 3;

        $items = [
            [
                'category_id' => $kegiatanKantorId,
                'title' => 'Tim Auditor Kantor Cabang Pekanbaru (Formasi Formal)',
                'image_path' => 'galleries/tim-auditor-pekanbaru-formal.jpg',
                'description' => 'Dokumentasi resmi Tim Auditor Kantor Akuntan Publik Drs. Selamat Sinuraya & Rekan Cabang Pekanbaru dalam balutan busana formal.',
                'activity_date' => '2026-04-01',
                'order_priority' => 1,
                'is_active' => true,
            ],
            [
                'category_id' => $kegiatanKantorId,
                'title' => 'Tim Auditor Kantor Cabang Pekanbaru (Kebersamaan Batik)',
                'image_path' => 'galleries/tim-auditor-pekanbaru-batik.jpg',
                'description' => 'Dokumentasi kekompakan dan kebersamaan Tim Auditor Kantor Cabang Pekanbaru mengenakan busana batik resmi.',
                'activity_date' => '2026-04-01',
                'order_priority' => 2,
                'is_active' => true,
            ],
        ];

        Gallery::truncate();

        foreach ($items as $item) {
            Gallery::create($item);
        }
    }
}
