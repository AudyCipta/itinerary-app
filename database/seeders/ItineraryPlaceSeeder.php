<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItineraryPlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('itinerary_places')->insert([
            [
                'itinerary_id' => 1,
                'place_id' => 1,
                'day_to' => 1,
                'time' => '10:30',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 1,
                'place_id' => 2,
                'day_to' => 2,
                'time' => '20:30',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 1,
                'place_id' => 3,
                'day_to' => 2,
                'time' => '14:30',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 1,
                'place_id' => 4,
                'day_to' => 3,
                'time' => '16:30',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 1,
                'place_id' => 5,
                'day_to' => 3,
                'time' => '09:30',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 1,
                'place_id' => 6,
                'day_to' => 3,
                'time' => '09:31',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
