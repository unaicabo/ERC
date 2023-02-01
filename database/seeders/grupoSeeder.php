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
        $grupo = new grupo();
        $grupo -> nombre = 'Grupo 1';
        $grupo->save();

        $grupo = new grupo();
        $grupo -> nombre = 'Grupo 2';
        $grupo->save();
    }
}
