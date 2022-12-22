<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class grupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $grupo = new grupo();
        $grupo -> nombre = 'Grupo 4';
        $grupo -> puntuacion = '8';
        $grupo->save();
    }
}
