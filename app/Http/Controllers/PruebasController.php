<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\partida;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class PruebasController extends Controller
{



    //
    public function iniciarBasica()
    {
        //date_default_timezone_set("Europa/España");
        $partida = new partida();

        $hora = date('H:i:s');

        $NuevaFecha = strtotime ( '+1 hour' , strtotime ($hora) ) ;

        $partida->hora_inicio = $hora;

        echo ($partida);
        // return view('acertijo');
    }


}
