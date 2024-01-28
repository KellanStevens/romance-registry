<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Generate specific users
        \App\Models\User::factory()->kellanStevens()->create();
        \App\Models\User::factory()->danielMarais()->create();

        // Generate other data using other factories
        \App\Models\Date::factory(10)->create();
        \App\Models\Ratings::factory(20)->create();
        \App\Models\Expense::factory(15)->create();
        \App\Models\Balance::factory(5)->create();

//        \App\Models\Balance::factory()->highBalance()->create();

    }

}
