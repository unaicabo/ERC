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
    public function iniciarPrueba()
    {
        $partida = new partida();

        $usuario = Auth::user()->id;
        $hora = now();
        $grupo = Auth::user()->grupo_id;


        $partida->tiempo = $hora;
        $partida->grupo_id = $grupo;
        $partida->participante_id = $usuario;
        $partida->dificultad = session('lvl');
        $partida->puntuacion = "0";

        $partida->save();

        session(['IdPartida' => $partida->id]);

        echo("--" . $partida->id);

        //return view($partida->Id);
        return view('acertijo');

    }

    public function acabarPartida()
    {
        $id = session('IdPartida');
        $partida = partida::FindOrFail($id);
        $tiempo = (now())-($partida->tiempo);

        //$partida->tiempo = "2023-01-24 09:25:10";

        //$partida->save();

        echo("--".$tiempo);

        //return view('perfil');
    }

}
