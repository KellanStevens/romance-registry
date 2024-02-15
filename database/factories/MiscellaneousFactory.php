<?php

namespace Database\Factories;

use App\Models\Miscellaneous;
use Illuminate\Database\Eloquent\Factories\Factory;

class MiscellaneousFactory extends Factory
{
    protected $model = Miscellaneous::class;

    public function definition(): array
    {
        return [
            'item_name' => $this->faker->word,
            'item_value' => $this->faker->text,
        ];
    }
}
