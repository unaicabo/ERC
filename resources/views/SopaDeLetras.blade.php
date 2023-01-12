<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="././css/SopaDeLetras.css">
    {{-- @vite(['resources/js/app.js']) --}}
    <title>Primera prueba</title>
</head>

<body>
    <div class="contenedor">
        <h1 class="titulo">Primera Prueba</h1>
        <div class="contenedor-explicacion">
            <p>En esta primera prueba al llegar a la sala hemos encontrado todos nuestros documentos tirados por el
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

            <div class="boton">
                <button id="clear" class="btn">Limpiar</button>
            </div>
        </div>

        <div class="contenedor-respuesta">
            <p>Para conseguir sacar el codigo del candado tenemos que mirar las palablas que estan en vertical y contar
                cuantasveces esta la letra "o".
            </p>
            <input type="text" name="respuesta" id="respuesta" onfocus="limpiar()" class="respuesta">
            <input type="button" value="Introducir" onclick="comprobarVacios()" class="btn">
        </div>
    </div>

    <script src="js/pintar.js"></script>
    <script src="js/vacios.js"></script>
</body>

</html>
