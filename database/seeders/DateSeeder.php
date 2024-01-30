<?php

namespace Database\Seeders;

use App\Models\Date;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create dates and associate them with random users
//        Date::factory()
//            ->count(10)
//            ->create()
//            ->each(function ($date) {
//                $users = User::inRandomOrder()->limit(2)->get();
//                $date->ratings()->createMany([
//                    ['user_id' => $users[0]->id, 'price_rating' => rand(1, 5), 'setting_rating' => rand(1, 5), 'food_rating' => rand(1, 5), 'comments' => 'Random comment'],
//                    ['user_id' => $users[1]->id, 'price_rating' => rand(1, 5), 'setting_rating' => rand(1, 5), 'food_rating' => rand(1, 5), 'comments' => 'Another random comment'],
//                ]);
//                $date->expenses()->create(['amount' => rand(10, 100)]);
//            });
    }
}
