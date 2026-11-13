<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    public function run(): void
    {
        $offices = [
            [
                'slug' => 'medan',
                'city' => 'Medan',
                'name' => 'Kantor Pusat Medan',
                'address' => 'Jl. Pasundan No. 29A, Sei Putih Tim. II, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20118',
                'phone' => '+62 852-7665-3453 / +62 813-6124-6093',
                'email' => 'Kapdrsselamatsinurayadanrekan@gmail.com',
                'whatsapp_number' => '6285276653453',
                'map_embed_url' => 'https://maps.google.com/maps?q=Jl.+Pasundan+No.+29A,+Medan+Petisah,+Kota+Medan,+Sumatera+Utara&t=&z=16&ie=UTF8&iwloc=&output=embed',
                'direct_map_link' => 'https://maps.google.com/?q=Jl.+Pasundan+No.+29A,+Medan',
                'is_headquarters' => true,
                'order_priority' => 1,
                'is_active' => true,
            ],
            [
                'slug' => 'pekanbaru',
                'city' => 'Pekanbaru',
                'name' => 'Kantor Cabang Pekanbaru',
                'address' => 'Jl. Paus No. 43 C, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28125',
                'phone' => '+62 811-6907-799',
                'email' => 'selamatsinurayapku@gmail.com',
                'whatsapp_number' => '628116907799',
                'map_embed_url' => 'https://maps.google.com/maps?q=Jl.+Paus+No.+43C,+Wonorejo,+Marpoyan+Damai,+Pekanbaru,+Riau&t=&z=16&ie=UTF8&iwloc=&output=embed',
                'direct_map_link' => 'https://maps.google.com/?q=Jl.+Paus+No.+43C,+Pekanbaru',
                'is_headquarters' => false,
                'order_priority' => 2,
                'is_active' => true,
            ],
        ];

        foreach ($offices as $office) {
            Office::updateOrCreate(['slug' => $office['slug']], $office);
        }
    }
}

