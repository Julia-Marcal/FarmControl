<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Farm_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userFarmRelations = [
            [
                'user_id' => 1,
                'farm_id' => 1,
            ],
        ];

        DB::table('farm_user')->insert($userFarmRelations);
    }
}
