
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <title>Crear Grupo</title>
    @vite(['resources/js/Grupo.js'])
</head>

<body id="fondo-explicacion">
    {{-- <div>
        <h1 class="centrado-pruebas">CREAR GRUPO</h1>
    </div> --}}
    <div id="appForm" class="tarjeta-explicacion">
        <p id="integrantes"></p>
    <select id="usuarios">
        @foreach ($usuarios as $usuario)
            <option value="{{$usuario->id}}-{{$usuario->nombre}} {{$usuario->apellido}}">{{$usuario->nombre}} {{$usuario->apellido}}</option>
        @endforeach
      </select>
      <button onclick="aniadirIntegranteArray()">+</button>

    </body>
    <script>
        let idUsuarios = []
        let nombreUsuarios = []
         function aniadirIntegranteArray(){
                var usuario = document.getElementById('usuarios').value;
                var miUsuario = usuario.split("-");

                idUsuarios.push(miUsuario[0]);
                nombreUsuarios.push(miUsuario[1]);

                console.log(idUsuarios);
                console.log(nombreUsuarios);
                document.getElementByName('integrantes')[0].value = nombreUsuarios;
        }

    </script>
</html>

