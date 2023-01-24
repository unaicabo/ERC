<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <title>Busca la letra</title>
</head>

<body id="fondo-explicacion">
    <div>
        <h1 class="centrado-pruebas">ADIVINA LA LETRA</h1>
    </div>
    <div class="tarjetas-explicacion">
        <div class="tarjeta-explicacion">


            <div class="texto">
                <p>¿Con qué letra identificarías la siguiente imagen de marketing?</p>
            </div>

            <img class="foto-buscarLetra" src="/img/MARKETING.jpg" alt="busca letras">


            <div class="botones">
                <input type="text" onfocus="limpiar()" id="respuesta" placeholder="Introducir respuesta">
                <button class="btn" onclick="comprobarVacios()">Validar</button>
            </div>
            <div id="contenedor-resultado">
                <p id="resultado"> Correcto, has conseguido un digito del candado <a id="btnSiguiente"
                        href="{{ route('cuestionario') }}"><button class="btn">Siguiente prueba</button></a></p>
            </div>
        </div>
        <script src="js/validarBuscarLetra.js"></script>
</body>
</html>
