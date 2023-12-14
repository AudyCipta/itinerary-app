<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
                'slug' => Str::slug('test'),
                'total_day' => 4,
                'start_day' => '2023-12-15',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
