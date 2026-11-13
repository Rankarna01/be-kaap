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
                'role' => 'Pimpinan KAP',
                'is_leader' => true,
                'avatar_image' => null,
                'license_number' => 'AP.0812 / Kemenkeu RI',
                'linkedin_url' => 'https://www.linkedin.com',
                'portfolio_url' => '/#about',
                'email' => 'Kapdrsselamatsinurayadanrekan@gmail.com',
                'order_priority' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Drs.Sucipto, MM, CPA, CPI',
                'role' => 'Partner KAP',
                'is_leader' => false,
                'avatar_image' => null,
                'license_number' => 'AP.0645 / Kemenkeu RI',
                'linkedin_url' => 'https://www.linkedin.com',
                'portfolio_url' => '/#about',
                'email' => 'Kapdrsselamatsinurayadanrekan@gmail.com',
                'order_priority' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Volta Diyanto, S.E, M.Si, Ak, CA, CPA',
                'role' => 'Partner KAP',
                'is_leader' => false,
                'avatar_image' => null,
                'license_number' => 'AP.1023 / Kemenkeu RI',
                'linkedin_url' => 'https://www.linkedin.com',
                'portfolio_url' => '/#about',
                'email' => 'selamatsinurayapku@gmail.com',
                'order_priority' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Rizki Syahputra S.E., M.Si., CPA, CRA, CRP, CERA',
                'role' => 'Partner KAP',
                'is_leader' => false,
                'avatar_image' => null,
                'license_number' => 'AP.1154 / Kemenkeu RI',
                'linkedin_url' => 'https://www.linkedin.com',
                'portfolio_url' => '/#about',
                'email' => 'Kapdrsselamatsinurayadanrekan@gmail.com',
                'order_priority' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($partners as $partner) {
            Partner::updateOrCreate(['name' => $partner['name']], $partner);
        }
    }
}

