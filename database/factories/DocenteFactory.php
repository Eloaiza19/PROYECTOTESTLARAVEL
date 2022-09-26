<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake()->name(),
            'apellidos' => fake()->firstname(),
            'titulo' => fake()->title(),
            'edad' => fake()->randomElement([10,20,30,40,50,60,70,80,90]),
            'imagen' => fake()->word(),
            'documento' => fake()->word()
        ];
    }
}
