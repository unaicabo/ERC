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
        $partida->participante_id = $usuario;
        $partida->dificultad = "Basica";
        $partida->puntuacion = "0";

        $partida->save();
        return view('acertijo');
    }

    public function acabarPartida()
    {
        $id = session('IdPartida');
        $partida = partida::FindOrFail($id);

        $s = date_create()->getTimestamp() - session('tiempo');
        if($s > 59) {
            $m = floor($s/60);
            $s = $s%60;
            $tiempo = $m . 'min ' . $s . 's';
        } else {
            $tiempo = '0,' .$s;
        }

        Log::alert($tiempo);
        $partida->tiempo = $tiempo;

        $partida->save();

        return redirect(route('perfil'));
    }
}
