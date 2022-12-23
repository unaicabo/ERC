<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = Usuario::all();
        $existe = false;
        
        foreach ($usuarios as $key => $value) {
            if($value['usuario'] == $request['usuario']){
                Session::put('error', 'ErrorUsExistRegis');
                return view('login');
                break;
            };
        }

        $request['rol'] = 'Alumno';
        $usuario = new Usuario($request->all());
        $usuario->save();

        session_start();
        $_SESSION['usuario'] = $usuario['usuario'];
        session_write_close();

        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ventanaLogin() {
        session_start();
        if($_SESSION['usuario'] == null){
            session_write_close();
            return view('login');
        } else {
            session_write_close();
            return view('index');
        }
    }

    public function login(Request $request) {
        $usuarios = Usuario::all();

        foreach ($usuarios as $key => $value) {
            if($value['usuario'] == $request['usuario'] && $value['contraseña'] == $request['contraseina']){
                session_start();
                $_SESSION['usuario'] = $request['usuario'];
                session_write_close();

                return view('index');
                break;
            };
        }

        Session::put('error', 'ErrorUsContLogin');
        return view('login');
    }

    public function logout(){
        session_start();
        $_SESSION['usuario'] = null;
        session_write_close();

        return view('index');
    }
}
