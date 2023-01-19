<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\partida;
use App\Models\Grupo;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PruebasController extends Controller
{



    //
    public function iniciarBasica()
    {
        $partida = new partida();

        $usuario = Auth::user()->id;
        $hora = date('H:i:s');
        $grupo = Auth::user()->grupo_id;


        $partida->hora_inicio = $hora;
        $partida->grupo_id = $grupo;

        echo ($grupo);
        // return view('acertijo');
    }


}
