<?php

namespace Database\Seeders;

use App\Models\DateNight;
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
        // Assuming there is a DateNight with ID 1
        $dateNight = DateNight::first();

        if ($dateNight) {
            Expense::create([
                'date_night_id' => $dateNight->id,
                'amount' => 50.00,
            ]);
        }
    }
}
