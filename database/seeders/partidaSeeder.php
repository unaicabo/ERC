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
        $partida-> user_id = 2;
        $partida-> dificultad = "Basico";
        $partida->tiempo = "3,56";
        $partida-> grupo_id = 1;
        $partida->save();

        $partida = new partida();
        $partida-> user_id = 3;
        $partida-> dificultad = "Avanzado";
        $partida->tiempo = "10,30";
        $partida-> grupo_id = null;
        $partida->save();
    }
}
