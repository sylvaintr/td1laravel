<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Numeroclient' => $this->faker->unique()->randomNumber(5),
            'nom' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'cartebancaire' => $this->faker->creditCardNumber,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
