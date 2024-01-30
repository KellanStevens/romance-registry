<?php

namespace Database\Factories;

use App\Models\Date;
use App\Models\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    protected $model = Expense::class;

    public function definition()
    {
        return [
            'date_id' => Date::factory(),
            'amount' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
