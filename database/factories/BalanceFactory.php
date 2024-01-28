<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Balance;
use App\Models\User;
class BalanceFactory extends Factory
{
    protected $model = Balance::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'balance' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }

    public function highBalance()
    {
        return $this->state(function (array $attributes) {
            return [
                'balance' => $this->faker->randomFloat(2, 1000, 5000),
            ];
        });
    }
}
