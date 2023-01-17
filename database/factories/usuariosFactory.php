<?php

namespace Database\Factories;

use App\Models\Grupo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class usuariosFactory extends Factory
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
            "nombre"=>$this->faker->firstName(),
            "apellido"=>$this->faker->lastName(),
            "rol"=>$this->faker->randomElement(['profesor', 'alumno', 'administrador']),
            "usuario"=>$this->faker->userName(),
            "contraseña"=>$this->faker->password(),
            "grupo_id"=> Grupo::all()->random()->id
        ];
    }
}
