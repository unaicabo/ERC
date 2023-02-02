<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <title>Crear Grupo</title>
    @vite(['resources/js/Grupo.js','resources/css/crearGrupos.css'])
</head>

<body id="fondo-explicacion">

    <form action="{{ route('principal') }}" method="GET" id="formCrearGrupos">
        <h1>Crear nuevo grupo</h1>
        <input type="text" name="nombre" placeholder="Nombre del grupo *" id="nombreGrupo"/>
        <input type="submit" id="btnCrearGrupo" value="Crear Grupo">
        <h2>INTEGRANTES</h2>
        <div id="cajaIntegrantes"></div>

        <select id="usuarios" class="desplegable">
            @foreach ($users as $usuario)
                <option value="{{$usuario->id}}-{{$usuario->name}} {{$usuario->apellido}}">{{$usuario->name}} {{$usuario->apellido}}</option>
            @endforeach
        </select>
        <input type="button" id="aniadirIntegrante" value="+">
    </form>
</body>

