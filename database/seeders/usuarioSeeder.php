<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Usuarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $usuario = new User();
        $usuario->name = "Asier";
        $usuario->apellido = "Velarde";
        $usuario->email = "asierv@gmail.com";
        $usuario->username = "asierv";
        $usuario->rol = "administrador";
        $usuario->password = Hash::make("asierv");
        $usuario->grupo_id = 1;
        $usuario->save();

        $usuario = new User();
        $usuario->name = "Unai";
        $usuario->apellido = "Cabo";
        $usuario->email = "unaic@gmail.com";
        $usuario->username = "unaic";
        $usuario->rol = "administrador";
        $usuario->password = Hash::make("unaic");
        $usuario->grupo_id = 2;
        $usuario->save();

        $usuario = new User();
        $usuario->name = "Xabi";
        $usuario->apellido = "Carnero";
        $usuario->email = "xabic@gmail.com";
        $usuario->username = "xabic";
        $usuario->rol = "Profesor";
        $usuario->password = Hash::make("xabic");
        $usuario->grupo_id = 1;
        $usuario->save();

        $usuario = new User();
        $usuario->name = "Clara";
        $usuario->apellido = "Gutierrez";
        $usuario->email = "clarag@gmail.com";
        $usuario->username = "clarag";
        $usuario->rol = "administrador";
        $usuario->password = Hash::make("clarag");
        $usuario->grupo_id = 2;
        $usuario->save();
    }
}
