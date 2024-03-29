<?php

namespace Database\Factories;

use App\Models\Progetto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attivita>
 */
class AttivitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'progetto_id' => Progetto::get()->random()->id,
            'nome' => fake()->text(),
            'descrizione' => fake()->text(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
