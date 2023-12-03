<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destination_categories')->insert([
            [
                'name' => 'Nature',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cultural',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Entertain',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
