<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Terrain>
 */
class TerrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'longueur' => $this->faker->randomFloat(2, 10, 100),
            'largeur' => $this->faker->randomFloat(2, 10, 100),
            'type_de_papier' => $this->faker->randomElement(['bail', 'titre foncier']),
        ];
    }

}
