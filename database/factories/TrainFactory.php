<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake()->sentence(3),
            'stazione_partenza' => fake()->sentence(3),
            'stazione_arrivo' => fake()->sentence(3),
            'orario_partenza' => fake()->time,
            'orario_arrivo' => fake()->time,
            'codice_treno' => fake()->numerify('###########'), 
            'numero_carrozze' => fake()->numberBetween(5, 10),
            'in_orario' => fake()->boolean(),
            'cancellato' => fake()->boolean(),
        ];
    }
}
