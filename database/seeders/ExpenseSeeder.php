<?php

namespace Database\Seeders;

use App\Models\Date;
use App\Models\Expense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create expenses and associate them with dates
//        Expense::factory()
//            ->count(15)
//            ->create([
//                'date_id' => Date::factory(),
//            ]);
    }
}
