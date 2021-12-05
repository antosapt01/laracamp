<?php

namespace Database\Seeders;

use App\Models\camp;
use Illuminate\Database\Seeder;

class CampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        camp::insert([
            [
                "title" => "GILA BELAJAR",
                "slug"  => "gila-belajar",
                "tag"  => "Take This Plan",
                "price" => 280,
            ],
            [
                "title" => "BARU MULAI",
                "slug"  => "baru-mulai",
                "tag"  => "Start With This Plan",
                "price" => 100,
            ]
        ]);
    }
}
