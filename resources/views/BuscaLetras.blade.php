<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/js/buscaLetras.js','resources/css/index.css'])
    <title>Busca la letra</title>
</head>

<body id="pag-buscaletras">
    <div id="candado"></div>
    <h1>Adivina la letra</h1>
    <div class="caja-prueba">
        <p>¿Con qué letra identificarías la siguiente imagen de marketing?</p>
        <figure>
            <img class="foto-buscarLetra" src="/img/MARKETING.jpg" alt="busca letras">
        </figure>
    </div>
    <div class="botones">
            <input type="text" onfocus="limpiar()" id="respuesta" placeholder="Introducir respuesta">
            <button class="btn" onclick="comprobarVacios()">Validar</button>
        </div>
        <div id="contenedor-error">
            <p>Parace que ese no es el digito correcto</p>
        </div>
        <div id="contenedor-resultado">
            <p id="resultado">Correcto, has conseguido un dígito del candado<a id="btnSiguiente"
                    href="{{ route('cuestionario') }}">
                    <button class="btn">Siguiente prueba</button></a></p>
        </div>
    </div>
        <script src="js/validarBuscarLetra.js"></script>
        <script src="https://kit.fontawesome.com/9d49876e0a.js" crossorigin="anonymous"></script>
</body>
</html>
