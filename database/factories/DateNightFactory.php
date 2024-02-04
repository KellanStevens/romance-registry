<?php

namespace Database\Factories;

use App\Models\DateNight;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DateNightFactory extends Factory
{
    protected $model = DateNight::class;

    public function definition()
    {
        return [
            'date' => $this->faker->date,
            'location' => $this->faker->sentence,
            'google_maps_link' => $this->faker->url,
            'description' => $this->faker->sentence,
        ];
    }
}
