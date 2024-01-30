<?php

namespace Database\Factories;

use App\Models\Date;
use App\Models\Rating;
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
            'description' => $this->faker->paragraph,
        ];
    }

    public function withRatings()
    {
        return $this->afterCreating(function (Date $date) {
            // Create three Rating records for each Date
            Rating::factory(1)->create(['date_id' => $date->id]);
        });
    }
}
