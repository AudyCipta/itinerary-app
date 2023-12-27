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
            // Itinerary 1
            // day 1
            [
                'itinerary_id' => 1,
                'place_id' => 34,
                'day_to' => 1,
                'time' => '13:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 1,
                'place_id' => 35,
                'day_to' => 1,
                'time' => '16:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 1,
                'place_id' => 10,
                'day_to' => 1,
                'time' => '19:00',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // day 2
            [
                'itinerary_id' => 1,
                'place_id' => 4,
                'day_to' => 2,
                'time' => '08:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 1,
                'place_id' => 11,
                'day_to' => 2,
                'time' => '13:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 1,
                'place_id' => 2,
                'day_to' => 2,
                'time' => '15:30',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 1,
                'place_id' => 3,
                'day_to' => 2,
                'time' => '19:30',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // day 3
            [
                'itinerary_id' => 1,
                'place_id' => 12,
                'day_to' => 3,
                'time' => '09:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 1,
                'place_id' => 7,
                'day_to' => 3,
                'time' => '14:00',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Itinerary 2
            // day 1
            [
                'itinerary_id' => 2,
                'place_id' => 13,
                'day_to' => 1,
                'time' => '08:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 2,
                'place_id' => 6,
                'day_to' => 1,
                'time' => '10:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 2,
                'place_id' => 14,
                'day_to' => 1,
                'time' => '14:30',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 2,
                'place_id' => 15,
                'day_to' => 1,
                'time' => '18:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 2,
                'place_id' => 16,
                'day_to' => 1,
                'time' => '19:30',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // day 2
            [
                'itinerary_id' => 2,
                'place_id' => 17,
                'day_to' => 2,
                'time' => '09:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 2,
                'place_id' => 18,
                'day_to' => 2,
                'time' => '11:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 2,
                'place_id' => 19,
                'day_to' => 2,
                'time' => '17:00',
                'created_at' => now(),
                'updated_at' => now()
            ],


            // Itinerary 3
            // day 1
            [
                'itinerary_id' => 3,
                'place_id' => 14,
                'day_to' => 1,
                'time' => '09:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 3,
                'place_id' => 20,
                'day_to' => 1,
                'time' => '11:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 3,
                'place_id' => 21,
                'day_to' => 1,
                'time' => '13:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 3,
                'place_id' => 22,
                'day_to' => 1,
                'time' => '15:00',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // day 2
            [
                'itinerary_id' => 3,
                'place_id' => 33,
                'day_to' => 2,
                'time' => '10:00',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // day 3
            [
                'itinerary_id' => 3,
                'place_id' => 2,
                'day_to' => 3,
                'time' => '09:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 3,
                'place_id' => 1,
                'day_to' => 3,
                'time' => '13:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 3,
                'place_id' => 4,
                'day_to' => 3,
                'time' => '15:00',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // day 4
            [
                'itinerary_id' => 3,
                'place_id' => 23,
                'day_to' => 4,
                'time' => '09:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 3,
                'place_id' => 24,
                'day_to' => 4,
                'time' => '13:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 3,
                'place_id' => 25,
                'day_to' => 4,
                'time' => '15:00',
                'created_at' => now(),
                'updated_at' => now()
            ],


            // Itinerary 4
            [
                'itinerary_id' => 4,
                'place_id' => 14,
                'day_to' => 1,
                'time' => '09:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 4,
                'place_id' => 7,
                'day_to' => 1,
                'time' => '11:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 4,
                'place_id' => 3,
                'day_to' => 1,
                'time' => '13:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 4,
                'place_id' => 34,
                'day_to' => 1,
                'time' => '16:30',
                'created_at' => now(),
                'updated_at' => now()
            ],


            // Itinerary 5
            [
                'itinerary_id' => 5,
                'place_id' => 5,
                'day_to' => 1,
                'time' => '08:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 5,
                'place_id' => 26,
                'day_to' => 1,
                'time' => '13:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 5,
                'place_id' => 4,
                'day_to' => 1,
                'time' => '15:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 5,
                'place_id' => 3,
                'day_to' => 1,
                'time' => '19:30
                ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            //day2
            [
                'itinerary_id' => 5,
                'place_id' => 8,
                'day_to' => 2,
                'time' => '10:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 5,
                'place_id' => 9,
                'day_to' => 2,
                'time' => '14:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 5,
                'place_id' => 27,
                'day_to' => 2,
                'time' => '16:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 5,
                'place_id' => 28,
                'day_to' => 2,
                'time' => '19:00',
                'created_at' => now(),
                'updated_at' => now()
            ],


            // Itinerary 6
            [
                'itinerary_id' => 6,
                'place_id' => 29,
                'day_to' => 3,
                'time' => '09:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 6,
                'place_id' => 1,
                'day_to' => 3,
                'time' => '12:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 6,
                'place_id' => 30,
                'day_to' => 3,
                'time' => '16:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            //day 2
            [
                'itinerary_id' => 6,
                'place_id' => 6,
                'day_to' => 1,
                'time' => '10:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 6,
                'place_id' => 31,
                'day_to' => 1,
                'time' => '11:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'itinerary_id' => 6,
                'place_id' => 32,
                'day_to' => 1,
                'time' => '18:00',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
