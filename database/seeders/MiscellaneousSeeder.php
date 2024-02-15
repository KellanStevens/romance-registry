<?php

namespace Database\Seeders;

use App\Models\Miscellaneous;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MiscellaneousSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Miscellaneous::create([
            'item_name' => 'First Date Anniversary',
            'item_value' => '2023-04-21',
        ]);
    }
}
