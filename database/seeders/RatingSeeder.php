<?php

namespace Database\Seeders;

use App\Models\Date;
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
        // Create ratings and associate them with users and dates
//        Rating::factory()
//            ->count(20)
//            ->create([
//                'user_id' => User::factory(),
//                'date_id' => Date::factory(),
//            ]);
    }
}
