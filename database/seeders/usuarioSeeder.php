<?php

namespace Database\Seeders;

use App\Models\Usuarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        $usuario = new  Usuarios();
        $usuario->nombre = "Asier";
        $usuario-> apellido = "Velarde";
        $usuario-> rol = "administrador";
        $usuario->usuario = "asierv";
        $usuario-> contraseña = "asierv";
        $usuario-> grupo_id = 11;
        $usuario->save();

        $usuario = new  Usuarios();
        $usuario->nombre = "Unai";
        $usuario-> apellido = "Cabo";
        $usuario-> rol = "administrador";
        $usuario->usuario = "unaic";
        $usuario-> contraseña = "unaic";
        $usuario-> grupo_id = 11;
        $usuario->save();

        $usuario = new  Usuarios();
        $usuario->nombre = "Xabi";
        $usuario-> apellido = "Carnero";
        $usuario-> rol = "administrador";
        $usuario->usuario = "xabic";
        $usuario-> contraseña = "xabic";
        $usuario-> grupo_id = 11;
        $usuario->save();

        $usuario = new  Usuarios();
        $usuario->nombre = "Clara";
        $usuario-> apellido = "Gutierrez";
        $usuario-> rol = "administrador";
        $usuario->usuario = "clarag";
        $usuario-> contraseña = "clarag";
        $usuario-> grupo_id = 11;
        $usuario->save();
    }
}
