<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DateNightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\DateNight::class;

    public function definition()
    {
        return [
            'Date' => $this->faker->date,
            'Location' => $this->faker->address,
            'GoogleMapsLink' => $this->faker->url,
            'Description' => $this->faker->paragraph,
        ];
    }
}
