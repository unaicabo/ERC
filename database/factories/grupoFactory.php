<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Grupo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\grupo>
 */
class grupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            "nombre"=>$this->faker->numerify('grupo ###'),
            "puntuacion"=>$this->faker->randomDigitNotNull
        ];
    }
}
