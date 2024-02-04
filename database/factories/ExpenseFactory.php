<?php

namespace Database\Factories;

use App\Models\DateNight;
use App\Models\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    protected $model = Expense::class;

    public function definition()
    {
        return [
            'date_night_id' => DateNight::factory(),
            'amount' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
