<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
        $users = User::all();

        foreach ($users as $key => $user) {
            if($user['username'] == $request->usuario) {
                session(['errorRegister' => 'El nombre de usuario ya está en uso']);
                return view('login');
            } else if($user['email'] == $request->email){
                session(['errorRegister' => 'El email ya está en uso']);
                return view('login');
            }
        }

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

        return redirect(route('principal'));
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
    public function destroy()
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->partidas->each->delete();
        //$user->grupos->each->delete();
        $user->delete();

        session()->invalidate();
        session()->regenerateToken();

        return redirect(route('principal'));
    }

    public function login(Request $request)
    {

        $credentials = [
            "username" => $request->usuario,
            "password" => $request->contraseina,
        ];

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect(route('principal'));
        } else {
            session(['errorLogin' => 'Usuario o Contraseña incorrectas']);
            return redirect(route('usuarios.login'));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('principal'));
    }

    public function crearProfesor(Request $request)
    {
        $user = new User();

        $user->name = $request->nombre;
        $user->apellido = $request->apellido;
        $user->email = $request->email;
        $user->imagen = $request->usuario . '.' . pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
        $user->username = $request->usuario;
        $user->password = Hash::make($request->contraseña);
        $user->rol = 'Profesor';

        $user->save();
        move_uploaded_file($request->imagen, './img/usersImg/' . $request->usuario . '.'
            . (pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION)));

        Auth::login($user);

        return redirect(route('principal'));
    }
    public function listarUsuarios()
    {

        $users = User::all();

        return view('CrearGrupo', compact('users'));
    }

    public function validarPaginaCrearProfesor()
    {
        if(Auth::user()->rol == 'Profesor'){
            return view('CrearProfesor');
        } else {
            return redirect(route('principal'));
        }

        return redirect(route('principal'));
    }

    public function crearGrupo()
    {
        $data = json_decode(file_get_contents("php://input"), true);

        $grupo = new Grupo();
        $grupo->nombre = $data['groupName'];
        $grupo->save();

        foreach ($data['usersId'] as $key => $value) {
            $user = User::findOrFail($value);
            $user->grupo_id = $grupo->id;
            $user->save();
        }
    }
}
