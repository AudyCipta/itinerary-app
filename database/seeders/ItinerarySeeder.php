<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItinerarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('itineraries')->insert([
            [
                'name' => 'test',
                'total_day' => 2,
                'start_day' => '2023-12-12',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
