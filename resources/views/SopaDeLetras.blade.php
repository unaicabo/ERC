<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/js/sopaDeLetras.js','resources/css/index.css'])
    <title>Sopa de letras</title>
</head>

<body id="pag-sopaletras">
    <div id="candado"></div>
    <h1>Completa la sopa de letras</h1>
    <div class="caja-prueba">
        <div class="enunciado">
            <p>Para conseguir sacar el código del candado tenemos que mirar las palablas que están en vertical y contar
                cuántas veces está la letra "o".
            </p>
        </div>
        <p>Necesitamos buscar un <b>albarán</b>, facturas de <b>contrareembolso</b>, una copia de los archivos del
            <b>googlebot</b>, un pedrive con <b>keywords</b>, el registro de la <b>recepción</b> del almacen y
            un boceto del <b>producto</b> que vende nuestro cliente.
        </p>

        <div class="contenedor-prueba">
            <canvas id="canvas"></canvas>

            <div class="boton-clear">
                <button id="clear" class="btn">Limpiar</button>
            </div>
        </div>
    </div>
    <div class="respuesta-sopadeletras">
        <div class="botones">
            <input type="text" id="respuesta" onfocus="limpiar()" placeholder="Introducir respuesta">
            <input type="button" value="Validar" onclick="comprobarVacios()" class="btn">
        </div>
    </div>

    <div id="contenedor-error">
        <p>Parace que ese no es el digito correcto</p>
    </div>

    <div id="contenedor-resultado">
        <p id="resultado">Correcto, has conseguido un dígito del candado <a id="btnSiguiente"
                href="{{ route('buscarletra') }}"><button class="btn">Siguiente prueba</button></a></p>
    </div>

    <script src="js/pintar.js"></script>
    <script src="js/validarSopaLetras.js"></script>
</body>

</html>
