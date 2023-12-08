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
                'picture' => 'balangan2.jpg',
                'place_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'balangan3.jpg',
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
                'picture' => 'gwk2.jpg',
                'place_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'gwk3.jpeg',
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
                'picture' => 'kedonganan2.jpg',
                'place_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'kedonganan3.jpg',
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
                'picture' => 'uluwatu2.png',
                'place_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'uluwatu3.png',
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
                'picture' => 'nyangnyang2.jpg',
                'place_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'nyangnyang3.jpg',
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
                'picture' => 'nungnung2.jpg',
                'place_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'nungnung3.jpg',
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
                'picture' => 'sangeh2.jpg',
                'place_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'sangeh3.jpg',
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
                'picture' => 'waterboom2.jpg',
                'place_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'waterboom3.jpg',
                'place_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'olds-man.jpeg',
                'place_id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'olds-man2.jpg',
                'place_id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'picture' => 'olds-man3.jpg',
                'place_id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
