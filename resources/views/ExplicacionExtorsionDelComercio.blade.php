<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <title>Explicación</title>
</head>

<body id="fondo-explicacion">
    <?php
        session(['lvl' => $_GET['lvl']]);
    ?>
    <div>

    <div id="pag-explicacion">
            <h1>Extorsión del comercio</h1>
        <div class="caja-prueba">
                <div class="titulo">
                    <h2>Cómo jugar</h2>
                </div>

                <div class="texto">
                    <p>Encuentra todas las llaves solucionando rompecabezas como puzzles, sopas de letras y preguntas para poder abrir el cofre.</p>
                    <p>¡Hazte con el tesoro oculto y proclamate vencedor!</p>
                    <p>Un misterioso comerciante os ha robado la llave del cofre. Os amenaza con difundir todos vuestros trapos sucios por redes sociales si no jugáis al juego que os propone, llevando vuestra empresa a pique. </p>
                </div>
                
                <p class="nivel">Básico</p>

            </div>
            <div class="botones">
                    <a href="{{ route ('iniciarPrueba') }}"><button class="btn">Empezar a jugar</button></a>
            </div>
    </div>
</body>
</html>
