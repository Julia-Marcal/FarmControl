<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
                'owner_id' => 1,
                'total_of_animals'  => 100,
                'child_animals'     => 30,
                'adult_animals'     => 70,
                'total_expenses'    => 5000,
                'expenses_adults'   => 3500,
                'expenses_child'    => 1500,
            ],
        ];

        DB::table('farms')->insert($farms);
    }
}



