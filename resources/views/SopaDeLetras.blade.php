<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    {{-- @vite(['resources/js/app.js']) --}}
    <title>Sopa de letras</title>
</head>

<body id="pag-sopaletras">
    <h1>Completa la sopa de letras</h1>
    <div class="caja-prueba">
        <p>En esta primera prueba al llegar a la sala hemos encontrado todos nuestros documentos tirados por el
            suelo, tenemos que buscarlos y organizarnos.</p>
        <p>Necesitamos buscar algún <b>albarán</b>, documentos de <b>contrareembolso</b>, una copia de los archivos del
            <b>googlebot</b>, un pedrive con las <b>keywords</b>, el registro de la <b>recepción</b> de la mercancía y un boceto del <b>producto</b> que vende nuestro cliente.
        </p>

        <div class="contenedor-prueba">
            <canvas id="canvas"></canvas>

            <div class="boton-clear">
                <button id="clear" class="btn">Limpiar</button>
            </div>
        </div>
    </div>
    <div class="respuesta-sopadeletras">
        <p>Para conseguir sacar el código del candado tenemos que mirar las palablas que están en vertical y contar
            cuántas veces está la letra <b>"o"</b>.
        </p>
        <div class="botones">
            <input type="text" id="respuesta" onfocus="limpiar()" placeholder="Introducir respuesta">
            <input type="button" value="Validar" onclick="comprobarVacios()" class="btn">
        </div>
    </div>

    <div id="contenedor-resultado">
        <p id="resultado">Correcto, has conseguido un dígito del candado <a id="btnSiguiente" href="{{ route ('buscarletra') }}"><button class="btn">Siguiente prueba</button></a></p>
    </div>

    <script src="js/pintar.js"></script>
    <script src="js/validarSopaLetras.js"></script>
</body>

</html>
