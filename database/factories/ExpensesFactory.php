<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ExpensesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Expenses::class;

    public function definition()
    {
        return [
            'DateNightID' => \App\Models\DateNight::factory(),
            'ExpenseDate' => $this->faker->date,
            'ExpenseDescription' => $this->faker->sentence,
            'Amount' => $this->faker->randomFloat(2, -100, 100),
        ];
    }
}
