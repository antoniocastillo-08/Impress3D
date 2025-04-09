<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Printers>
 */
class PrintersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "model" => $this->faker->name(),
            "type" => $this->faker->name(),
            "marca" => $this->faker->name(),
            "description" => $this->faker->paragraph(),
        ];
    }
}
