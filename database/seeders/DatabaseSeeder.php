<?php

namespace Database\Seeders;

use App\Models\Date;
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

        Rating::factory()
            ->count(4)
            ->create([
                'user_id' => User::factory(),
                'date_id' => Date::factory(),
            ]);

        Expense::factory()
            ->count(4)
            ->create([
                'date_id' => Date::factory(),
            ]);

        Date::factory()
            ->count(2)
            ->create()
            ->each(function ($date) {
                $users = User::inRandomOrder()->limit(2)->get();
                $date->ratings()->createMany([
                    ['user_id' => $users[0]->id, 'price_rating' => rand(1, 5), 'setting_rating' => rand(1, 5), 'food_rating' => rand(1, 5), 'comments' => 'Random comment'],
                    ['user_id' => $users[1]->id, 'price_rating' => rand(1, 5), 'setting_rating' => rand(1, 5), 'food_rating' => rand(1, 5), 'comments' => 'Another random comment'],
                ]);
                $date->expenses()->create(['amount' => rand(10, 100)]);
            });


        /*
        // Generate specific users
        \App\Models\User::factory()->kellanStevens()->create();
        \App\Models\User::factory()->danielMarais()->create();

        // Generate other data using other factories
        \App\Models\Date::factory()->count(10)->withRatings()->create();
        \App\Models\Rating::factory(20)->create();
        \App\Models\Expense::factory(15)->create();
        \App\Models\Balance::factory(5)->create();

//        \App\Models\Balance::factory()->highBalance()->create();
        */

    }

}
