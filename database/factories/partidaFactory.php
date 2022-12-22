<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Grupo;
use App\Models\Usuarios;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class partidaFactory extends Factory
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
            "puntuacion"=>$this->faker->randomDigitNotNull(),
            "participante_id"=> Usuarios::all()->random()->id,
            "grupo_id"=> Grupo::all()->random()->id
        ];
    }
}
