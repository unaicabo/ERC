
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <title>Acertijo</title>
</head>

<body>
    <div id="pag-acertijo">
        <div id="caja-candado">
            <figure id="img-candado">
                    <img src="img/candado.png" alt="candado">
                    <div id="codigo-candado">
                        <p>*</p>
                        <p>*</p>
                        <p>*</p>
                    </div>
            </figure>
        </div>
        <h2>Completa el acertijo</h2>
        <div class="caja-prueba">
            <div class="enunciado">
                <p>Lee el acertijo e introduce la respuesta correcta</p>
            </div>
            <div class="contenido-prueba">
                <p>Desde el lunes hasta el viernes, soy la última en llegar, el sábado soy la primera, y el domingo a descansar.</p>
                <p>¿Quién soy?</p>
            </div>
        </div>
        <div class="contenedor-dias">
            <div class="dia"><p>Lunes</p></div>
            <div class="dia"><p>Martes</p></div>
            <div class="dia"><p>Miércoles</p></div>
            <div class="dia"><p>Jueves</p></div>
            <div class="dia"><p>Viernes</p></div>
            <div class="dia"><p>Sábado</p></div>
            <div class="dia"><p>Domingo</p></div>
        </div>
        <div class="botones">
                <input type="text" onfocus="limpiar()" id="respuesta" placeholder="Introducir respuesta">
                <button class="btn" onclick="comprobarVacios()">Validar</button>
            </div>
            <div id="contenedor-error">
                <p>Parace que ese no es el digito correcto</p>
            </div>
            <div id="contenedor-resultado">
                <p id="resultado">Correcto, has conseguido un dígito del candado<a id="btnSiguiente" href="{{ route ('sopadeletras') }}">
                <button class="btn">Siguiente prueba</button></a></p>
            </div>
        </div>
        <script src="js/validarAcertijo.js"></script>
</body>
</html>
