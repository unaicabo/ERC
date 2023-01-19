<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use SplFileInfo;

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
    public function create(Request $request)
    {
        //Validar los datos
        $user = new User();

        $user->name = $request->nombre;
        $user->apellido = $request->apellido;
        $user->email = $request->email;
        $user->imagen = $request->usuario . '.' . pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
        $user->username = $request->usuario;
        $user->password = Hash::make($request->contraseña);
        $user->rol = 'Alumno';

        $user->save();
        move_uploaded_file($request->imagen, './img/usersImg/' . $request->usuario . '.' . (pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION)));

        Auth::login($user);

        return redirect(route('index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function login(Request $request) {

        $credentials = [
            "username" => $request->usuario,
            "password" => $request->contraseina,
        ];

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect(route('principal'));
        } else {
            return redirect(route('usuarios.login'));
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('index'));
    }
}
