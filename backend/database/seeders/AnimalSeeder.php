<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pigs')->insert([
            'farm_id' => 1,
            'total_of_pigs' => 100,
            'child_pigs' => 30,
            'adult_pigs' => 70,
            'expenses_adults_pigs' => 5000,
            'expenses_child_pigs' => 2000,
            'total_expenses_pigs' => 7000,
        ]);

        DB::table('cows')->insert([
            'farm_id' => 1,
            'total_of_cows' => 50,
            'child_cows' => 10,
            'adult_cows' => 40,
            'expenses_adults_cow' => 6000,
            'expenses_child_cows' => 1500,
            'total_expenses_cows' => 7500,
        ]);

        DB::table('sheep')->insert([
            'farm_id' => 1,
            'total_sheep' => 80,
            'child_sheep' => 20,
            'adult_sheep' => 60,
            'expenses_adults_sheep' => 4000,
            'expenses_child_sheep' => 1000,
            'total_expenses_sheep' => 5000,
        ]);

        DB::table('chicken')->insert([
            'farm_id' => 1,
            'total_of_chickens' => 200,
            'child_chickens' => 50,
            'adult_chickens' => 150,
            'expenses_adults_chickens' => 2500,
            'expenses_child_chickens' => 500,
            'total_expenses_chickens' => 3000,
        ]);
    }
}
