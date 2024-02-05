<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    public function kellanStevens()
    {
        return $this->state(fn (array $attributes) => [
            'id' => 1,
            'name' => 'Kellan Stevens',
            'email' => 'kellan@kellanstevens.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password123'),
            'remember_token' => Str::random(10),
            ]);
    }

    public function danielMarais()
    {
        return $this->state(fn (array $attributes) => [
            'id' => 2,
            'name' => 'Daniel Marais',
            'email' => 'daniel@danielmarais.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password456'),
            'remember_token' => Str::random(10),
        ]);
    }
    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
