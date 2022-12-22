<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Grupo;
use App\Models\Usuarios;
use App\Models\partida;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Grupo::factory(10)->create();
        //Usuarios::factory(20)->create();
        //partida::factory(10)->create();
        $this->call(grupoSeeder::class);
        $this->call(usuarioSeeder::class);
        $this->call(partidaSeeder::class);

    }
}
