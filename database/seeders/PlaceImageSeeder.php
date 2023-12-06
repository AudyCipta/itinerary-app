<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('place_images')->insert([
            [
                'picture' => 'balangan.jpg',
                'place_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'gwk.jpg',
                'place_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'kedonganan.jpeg',
                'place_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'uluwatu.jpg',
                'place_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'nyangnyang.jpeg',
                'place_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'nungnung.jpg',
                'place_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'sangeh.jpeg',
                'place_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'waterboom.jpeg',
                'place_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'olds-man.jpeg',
                'place_id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
