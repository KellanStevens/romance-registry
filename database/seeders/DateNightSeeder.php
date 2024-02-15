<?php

namespace Database\Seeders;

use App\Models\DateNight;
use App\Models\User;
use Illuminate\Database\Seeder;

class DateNightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DateNight::create([
            'date' => date('Y-m-d'),
            'location' => 'Sample Location',
            'google_maps_link' => 'https://maps.google.com/sample',
            'description' => 'Sample Date Night Description',
        ]);
    }
}
