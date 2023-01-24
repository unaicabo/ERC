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
        <h1 class="centrado-explicacion">COMO JUGAR</h1>
    <div id="pag-explicacion">
            <h1>Como jugar</h1>
        <div class="caja-prueba">
            <div>
                <div class="titulo">
                    <h2>Extorsión del comercio</h2>
                </div>

                <div class="texto">
                    <p>El juego consiste en encontrar todas las llaves solucionando rompecabezas como puzzles, sopas de letras y preguntas para poder abrir un cofre y encontrar el tesoro oculto en el y proclamarse vencedor.</p>
                </div>
                <div class="texto">
                    <p>Un misterioso comerciante os ha robado la llave del cofre. Os amenaza con difundir todos vuestros trapos sucios por redes sociales si no jugáis al juego que os propone llevando vuestra empresa a pique. </p>
                </div>

                <div class="botones">
                    <a href="{{ route ('iniciarBasica') }}"><button class="btn">Empezar a jugar</button></a>
                </div>
                <p class="nivel">Básico</p>

            </div>
    </div>
</body>
</html>
