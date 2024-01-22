<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RatingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Ratings::class;

    public function definition()
    {
        return [
            'DateNightID' => \App\Models\DateNight::factory(),
            'Price' => $this->faker->numberBetween(1, 5),
            'Setting' => $this->faker->numberBetween(1, 5),
            'Food' => $this->faker->numberBetween(1, 5),
            'TextRating' => $this->faker->sentence,
        ];
    }
}
