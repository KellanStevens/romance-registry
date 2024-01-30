<?php

namespace Database\Factories;

use App\Models\Date;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DateFactory extends Factory
{
    protected $model = Date::class;

    public function definition()
    {
        return [
            'date' => $this->faker->date,
            'location' => $this->faker->sentence,
            'google_maps_link' => $this->faker->url,
            'description' => $this->faker->sentence,
        ];
    }

//    public function configure()
//    {
//        return $this->afterCreating(function (Date $date) {
//            $users = User::inRandomOrder()->limit(2)->get();
//            $date->ratings()->createMany([
//                ['user_id' => $users[0]->id, 'price_rating' => rand(1, 5), 'setting_rating' => rand(1, 5), 'food_rating' => rand(1, 5), 'comments' => 'Random comment'],
//                ['user_id' => $users[1]->id, 'price_rating' => rand(1, 5), 'setting_rating' => rand(1, 5), 'food_rating' => rand(1, 5), 'comments' => 'Another random comment'],
//            ]);
//            $date->expenses()->create(['amount' => rand(10, 100)]);
//        });
//    }
}
