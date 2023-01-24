<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <!-- CSS only -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <title>Pagina Principal</title>

    {{-- <header>
        <div class="caja-logo">
            <h1 class="logo">LOGO ERC</h1>
        </div>

        <figure id="imagen-inicio">
            <img src="img/candado.jpg" alt="">
        </figure>

        <nav class="menu-nav">
            <ul class="row">
                <li class="col"><a href="">Demo</a></li>
                <li class="col"><a href="">Register</a></li>
                <li class="col"><a href="">Login</a></li>
            </ul>
        </nav>
    </header> --}}

</head>
<body class="pag-principal">

<div>
    <img class="foto-principal" src="/img/imagen2.png" alt="">
    <p class="centrado">ERC</p>
</div>

<div class="tarjetas">
    <div class="tarjeta">
        <div class="titulo">
            <h2>La extorsión del comercio</h2>
        </div>

        <img class="foto-tarjetas" src="/img/extorsion2.png" alt="foto">
        <div class="texto">
            <p>Un misterioso comerciante os ha robado la llave del cofre. Os amenaza con difundir todos vuestros trapos sucios por redes sociales si no jugáis al juego que os propone. </p>
        </div>

        <div class="botones">
            <a href="{{ route ('explicacion', 'lvl=0') }}"><button class="btn">Jugar</button></a>
        </div>
        <p class="nivel nivel-bas">Basico</p>

    </div>


        <div class="tarjeta">
            <div class="titulo">
                <h2>La extorsión del comercio</h2>
            </div>

            <img class="foto-tarjetas" src="/img/extorsion2.png" alt="foto">
            <div class="texto">
                <p>Un misterioso comerciante os ha robado la llave del cofre. Os amenaza con difundir todos vuestros trapos sucios por redes sociales si no jugáis al juego que os propone. </p>
            </div>

            <div class="botones">
                <a href="{{ route ('explicacion', 'lvl=1') }}"><button class="btn">Jugar</button></a>
            </div>
            <p class="nivel nivel-med">Medio</p>
        </div>



        <div class="tarjeta">
            <div class="titulo">
                <h2>La extorsión del comercio</h2>
            </div>

            <img class="foto-tarjetas" src="/img/extorsion2.png" alt="foto">
            <div class="texto">
                <p>Un misterioso comerciante os ha robado la llave del cofre. Os amenaza con difundir todos vuestros trapos sucios por redes sociales si no jugáis al juego que os propone. </p>
            </div>

            <div class="botones">
                <a href="{{ route ('explicacion', 'lvl=2') }}"><button class="btn">Jugar</button></a>
            </div>
            <p class="nivel nivel-avan">Avanzado</p>
        </div>

</div>



</body>


</html>
