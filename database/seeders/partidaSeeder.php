<?php

namespace Database\Seeders;

use App\Models\partida;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class partidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $partida = new partida();
        $partida-> puntuacion = "8";
        $partida-> participante_id = 2;
        $partida-> dificultad = "Facil";
        $partida-> grupo_id = null;
        $partida->save();

        $partida = new partida();
        $partida-> puntuacion = "5";
        $partida-> participante_id = 2;
        $partida-> dificultad = "Media";
        $partida-> grupo_id = null;
        $partida->save();
    }
}
