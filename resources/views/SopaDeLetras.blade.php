<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/Index.css">
    {{-- @vite(['resources/js/app.js']) --}}
    <title>Sopa de letras</title>
</head>

<body id="fondo-explicacion">
    <div>
        <h1 class="centrado-pruebas">COMPLETA LA SOPA DE LETRAS</h1>
    </div>
    <div class="contenedor-sopadeletras">
        <div class="contenedor-explicacion">
            <p class="titulo">En esta primera prueba al llegar a la sala hemos encontrado todos nuestros documentos tirados por el
                suelo,tenemos que buscarlos y organizarnos.
            </p>
            <p>
                <br> Tenemos constacia de algunas cosas de las que necesitamos buscar, tenemos algun <b>albaran</b>,
                documentos de <b>contrareembolso</b>, una copia de los archivos del
                <b>googlebot</b>, un pedrive con las <b>keywords</b>, el registro de la
                <b>recepcion</b> de la mercancia y un boceto del <b>producto</b> que vende
                nuestro cliente.
            </p>
        </div>

        <div class="contenedor-prueba">
            <canvas id="canvas"></canvas>

            <div class="boton-clear">
                <button id="clear" class="btn">Limpiar</button>
            </div>
        </div>

        <div class="respuesta-sopadeletras">
            <p>Para conseguir sacar el codigo del candado tenemos que mirar las palablas que estan en vertical y contar
                cuantasveces esta la letra "o".
            </p>
            <input type="text" id="respuesta" onfocus="limpiar()" placeholder="Introducir respuesta">
            <input type="button" value="Introducir" onclick="comprobarVacios()" class="btn">
        </div>

        <div id="contenedor-resultado">
            <p id="resultado"> Correcto, has consegido un digito del candado <a id="btnSiguiente" href="{{ route ('buscarletra') }}"><button class="btn">Siguiente prueba</button></a></p>
            {{-- <a id="btnSiguiente" href="{{ route ('buscarletra') }}"><button class="btn">Siguiente prueba</button></a> --}}
        </div>
    </div>

    <script src="js/pintar.js"></script>
    <script src="js/validarSopaLetras.js"></script>
</body>

</html>
