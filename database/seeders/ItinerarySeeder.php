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
                'name' => 'Beach Bliss and Cultural Exploration',
                'slug' => Str::slug('Beach Bliss and Cultural Exploration'),
                'total_day' => 3,
                'thumbnail' => 'kutabeach.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dynamic Duo in Badung',
                'slug' => Str::slug('Dynamic Duo in Badung'),
                'total_day' => 2,
                'thumbnail' => 'nungnung.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Badung Discovery: Culture, History, Nature, and Coastal Charms',
                'slug' => Str::slug('Badung Discovery: Culture, History, Nature, and Coastal Charms'),
                'total_day' => 4,
                'thumbnail' => 'cemagibeach.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Badung Discovery Day',
                'slug' => Str::slug('Badung Discovery Day'),
                'total_day' => 1,
                'thumbnail' => 'sangeh.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Coastal Harmony: Surfing and Serenity',
                'slug' => Str::slug('Coastal Harmony: Surfing and Serenity'),
                'total_day' => 2,
                'thumbnail' => 'nyangnyang.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Holiyeay in Badung',
                'slug' => Str::slug('Holiyeay in Badung'),
                'total_day' => 3,
                'thumbnail' => 'balangan.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
