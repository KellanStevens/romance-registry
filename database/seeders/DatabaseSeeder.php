<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\DateNight::factory(5)->create();
        \App\Models\Expenses::factory(4)->create();
        \App\Models\Ratings::factory(10)->create();
        \App\Models\BankAccount::factory(2)->create();
    }
}
