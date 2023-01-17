
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
    <div id="appForm" class="tarjeta-explicacion"></div>

    <select name="categories[]" multiple>
        @foreach ($usuarios as $usuario)
            <option value="$usuario->id">$usuario->nombre $usuario->apellido</option>
        @endforeach
      </select>





</body>
</html>
