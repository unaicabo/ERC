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
        $usuario = Auth::user()->id;
        $grupo = Auth::user()->grupo_id;
        $hora = date_create();

        session(['userId' => $usuario, 'tiempo' => $hora->getTimestamp(), 'grupo' => $grupo]);


        if (session('lvl') == "Basico")
        {
            return view('acertijo');
        }if(session('lvl') == "Avanzado"){
            return view('IVA');
        }

    }

    public function acabarPartida()
    {
        $partida = new partida();
        
        $partida->grupo_id = session('grupo');
        $partida->user_id = session('userId');
        $partida->dificultad = session('lvl');
        

        $s = date_create()->getTimestamp() - session('tiempo');
        if($s > 59) {
            $m = floor($s/60);
            $s = $s%60;
            $tiempo = $m . 'min ' . $s . 's';
        } else {
            $tiempo = $s . 's';
        }

        $partida->tiempo = $tiempo;
        $partida->save();

        session(['tiempoFinal' => $tiempo]);

        return redirect(route('finalScape'));
    }

    public function partidasByUserId($id)
    {
        $partidas = Partida::all();
        $partidasReturn = [];

        foreach ($partidas as $key => $value) {
            if($value->user_id == $id){
                array_push($partidasReturn, $value);
            }
        }

        return $partidasReturn;
    }
}
