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
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 1,
                'place_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
