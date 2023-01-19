<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\partida;
use App\Models\Grupo;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class PruebasController extends Controller
{



    //
    public function iniciarBasica()
    {
        $partida = new partida();

        $usuario = session ('id');
        $hora = date('H:i:s');
        $grupo = session('grupo');


        $partida->hora_inicio = $hora;

        echo ($grupo);
        // return view('acertijo');
    }


}
