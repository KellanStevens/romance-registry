<?php

namespace Database\Factories;

use App\Models\Date;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    protected $model = Rating::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'date_id' => Date::factory(),
            'price_rating' => $this->faker->numberBetween(1, 5),
            'setting_rating' => $this->faker->numberBetween(1, 5),
            'food_rating' => $this->faker->numberBetween(1, 5),
            'comments' => $this->faker->paragraph,
        ];
    }
}
