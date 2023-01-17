
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <title>Acertijo</title>
</head>

<body id="fondo-explicacion">
    <div>
        <h1 class="centrado-pruebas">COMPLETA EL ACERTIJO</h1>
    </div>
    <div class="tarjetas-explicacion">
        <div class="tarjeta-explicacion">


            <div class="titulo">
                <p>EL JUEGO CONSISTE EN LEER EL ACERTIJO Y PENSAR LA RESPUESTA CORRECTA.</p>
            </div>
            <div class="texto">
                Desde el lunes hasta el viernes, soy la ultima en llegar, el sabado soy la primera, y el domingo a descansar. ¿Quien soy?
            </div>
                <img class="img-acertijo" src="/img/dias-semana.png" alt="dias de la semana">
            <div class="botones">
                <input type="text" onfocus="limpiar()" id="respuesta" placeholder="Introducir respuesta">
                <button class="btn" onclick="comprobarVacios()">Validar</button>
            </div>
            <div class="contenedor-resultado">
                <p id="resultado"></p> <a id="btnSiguiente" href="{{ route ('sopadeletras') }}"><button class="btn">Siguiente prueba</button></a>
            </div>

        </div>
        <script src="js/validarAcertijo.js"></script>
</body>
</html>
