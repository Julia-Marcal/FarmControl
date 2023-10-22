<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Sample data for seeding
        $farms = [
            [
                'owners' => json_encode(['user_id' => 1]),
                'total_of_animals' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('farms')->insert($farms);
    }
}



