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
    {{-- <div>
        <h1 class="centrado-pruebas">CREAR GRUPO</h1>
    </div> --}}
    <div id="appForm" class="tarjeta-explicacion">
        {{-- <p id="integrantes"></p>
    <select id="usuarios">
        @foreach ($users as $usuario)
            <option value="{{$usuario->id}}-{{$usuario->name}} {{$usuario->apellido}}">{{$usuario->name}} {{$usuario->apellido}}</option>
        @endforeach
      </select>
        <button id="enviar" type="button" class="">enviar </button>
      <button onclick="aniadirIntegranteArray()">+</button> --}}
    </div>
    <div  class="tarjeta-explicacion">
        <p id="integrantes"></p>

    <form action="{{ route('principal') }}" method="GET" id="formCrearGrupos">
        <h1>Crear nuevo grupo</h1>
        <input type="text" name="nombre" placeholder="Nombre del grupo *" id="nombreGrupo"/>
        <input type="submit" id="btnCrearGrupo" value="Crear Grupo">
        <h2>INTEGRANTES</h2>
        <div id="cajaIntegrantes"></div>

        <select id="usuarios">
            @foreach ($users as $usuario)
                <option value="{{$usuario->id}}-{{$usuario->name}} {{$usuario->apellido}}">{{$usuario->name}} {{$usuario->apellido}}</option>
            @endforeach
          </select>
            <button id="enviar" type="button" class="">enviar </button>
          <button onclick="aniadirIntegranteArray()">+</button>
    </div>
    </body>
    <script>
        let idUsuarios = []
        let nombreUsuarios = []
         function aniadirIntegranteArray(){
                var usuario = document.getElementById('usuarios').value;
                var miUsuario = usuario.split("-");

                if (idUsuarios)
                idUsuarios.push(miUsuario[0]);
                nombreUsuarios.push(miUsuario[1]);

                console.log(idUsuarios);
                console.log(nombreUsuarios);
                document.getElementById('integrantes').innerHTML = nombreUsuarios;
        }

    </script>
</html>

