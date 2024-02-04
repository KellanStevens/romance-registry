<?php

namespace Database\Seeders;

use App\Models\DateNight;
use App\Models\Expense;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::factory()->kellanStevens()->create();
        User::factory()->danielMarais()->create();

        DateNight::factory()
            ->count(4)
            ->create()
            ->each(function ($date) {
                $users = User::inRandomOrder()->limit(2)->get();
                $date->ratings()->createMany([
                    ['user_id' => $users[0]->id, 'price_rating' => rand(1, 5), 'setting_rating' => rand(1, 5), 'food_rating' => rand(1, 5), 'comments' => 'Random comment'],
                    ['user_id' => $users[1]->id, 'price_rating' => rand(1, 5), 'setting_rating' => rand(1, 5), 'food_rating' => rand(1, 5), 'comments' => 'Another random comment'],
                ]);
                $date->expenses()->create(['amount' => rand(10, 100)]);
            });
    }

}
