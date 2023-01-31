<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\partida;
use App\Models\Grupo;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PruebasController extends Controller
{



    //
    public function iniciarPrueba()
    {
        $partida = new partida();

        $usuario = Auth::user()->id;
        $grupo = Auth::user()->grupo_id;
        $hora = date_create();

        //$partida->tiempo = $hora;
        $partida->grupo_id = $grupo;
        $partida->participante_id = $usuario;
        $partida->dificultad = session('lvl');
        $partida->puntuacion = "0";

        $partida->save();

        session(['IdPartida' => $partida->id, 'tiempo' => $hora->getTimestamp()]);

        if($partida->dificultad == 'Basico')
            return redirect(route('acertijo'));
        else
            return redirect(route('IVA'));
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
