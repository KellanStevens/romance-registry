<?php

namespace Database\Seeders;

use App\Models\DateNight;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Assuming there is a DateNight with ID 1 and a User with ID 1
        $dateNight = DateNight::first();
        $user = User::find(1);

        if ($dateNight && $user) {
            Rating::create([
                'user_id' => $user->id,
                'date_night_id' => $dateNight->id,
                'price_rating' => 4,
                'setting_rating' => 5,
                'food_rating' => 4,
                'comments' => 'Sample rating comments',
            ]);
        }
    }
}
