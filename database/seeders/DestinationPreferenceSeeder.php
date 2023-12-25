<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationPreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destination_preferences')->insert([
            [
                'name' => 'Beach',
                'score' => 50,
                'destination_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cliff',
                'score' => 25,
                'destination_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mountain',
                'score' => 24,
                'destination_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'History',
                'score' => 12,
                'destination_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Religi',
                'score' => 5,
                'destination_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Culinary',
                'score' => 7,
                'destination_category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Watersport',
                'score' => 71,
                'destination_category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Souvenirs',
                'score' => 21,
                'destination_category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
