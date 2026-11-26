<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            [
                'name' => 'Bahtera Sinuraya, SE, MM, AK, CPA',
                'role' => 'Managing Partner & Pimpinan Kantor Medan',
                'is_leader' => true,
                'avatar_image' => null,
                'license_number' => 'AP.0282 / IAPI No. 1132',
                'linkedin_url' => 'https://www.linkedin.com',
                'portfolio_url' => '/#about',
                'email' => 'Kap_sinuraya@yahoo.com',
                'order_priority' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Drs. Sucipto, MM, CPA',
                'role' => 'Partner Kantor Medan',
                'is_leader' => false,
                'avatar_image' => null,
                'license_number' => 'AP.0826 / CPA No. C-000065',
                'linkedin_url' => 'https://www.linkedin.com',
                'portfolio_url' => '/#about',
                'email' => 'Kap_sinuraya@yahoo.com',
                'order_priority' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Volta Diyanto, SE, M.Si, Ak, CA, CPA, ASEAN CPA, CTA, CBV, QIA',
                'role' => 'Pimpinan Kantor Cabang Pekanbaru',
                'is_leader' => false,
                'avatar_image' => null,
                'license_number' => 'AP.1916 / Reg Akuntan D-50.617',
                'linkedin_url' => 'https://www.linkedin.com',
                'portfolio_url' => '/#about',
                'email' => 'admin@kapselamatsinuraya-pku.com',
                'order_priority' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Rizky Syahputra, SE, M.Si, CPA, CBV, CRP',
                'role' => 'Partner Kantor Medan',
                'is_leader' => false,
                'avatar_image' => null,
                'license_number' => 'AP.1996 / IAPI No. 1996',
                'linkedin_url' => 'https://www.linkedin.com',
                'portfolio_url' => '/#about',
                'email' => 'Kap_sinuraya@yahoo.com',
                'order_priority' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Muhammad Yusuf, SE, CPA',
                'role' => 'Partner Kantor Medan',
                'is_leader' => false,
                'avatar_image' => null,
                'license_number' => 'AP.2160 / IAPI No. 3726',
                'linkedin_url' => 'https://www.linkedin.com',
                'portfolio_url' => '/#about',
                'email' => 'Kap_sinuraya@yahoo.com',
                'order_priority' => 5,
                'is_active' => true,
            ],
        ];

        Partner::truncate();

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
