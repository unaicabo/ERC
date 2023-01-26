<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- CSS only -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <title>Pagina Principal</title>
</head>
<body class="pag-principal">
@include('header')
<!-- <div>
    <img class="foto-principal" src="/img/imagen2.png" alt="">
</div> -->

<div class="tarjetas">
    <div class="caja-tarjeta">
        <h2>La extorsión del comercio</h2>
        <div class="tarjeta">
            <img class="foto-tarjetas" src="/img/extorsion2.png" alt="foto">
            <div class="texto">
                <p>Un misterioso comerciante os ha robado la llave del cofre. Os amenaza con difundir todos vuestros trapos sucios por redes sociales si no jugáis al juego que os propone. </p>
            </div>
            <p class="nivel nivel-bas">Basico</p>
        </div>
        <div class="botones">
                <a href="{{ route ('explicacion', 'lvl=Basico') }}"><button class="btn"><i class="fas fa-play"></i></button></a>
        </div>
    </div>
    <!-- <div class="caja-tarjeta">
        <h2>La extorsión del comercio</h2>
        <div class="tarjeta">

            <img class="foto-tarjetas" src="/img/extorsion2.png" alt="foto">
            <div class="texto">
                <p>Un misterioso comerciante os ha robado la llave del cofre. Os amenaza con difundir todos vuestros trapos sucios por redes sociales si no jugáis al juego que os propone. </p>
            </div>
            <p class="nivel nivel-med">Medio</p>
        </div>
        <div class="botones">
            <a href="{{ route ('explicacion', 'lvl=Medio') }}"><button class="btn"><i class="fas fa-play"></i></button></a>
        </div>
    </div> -->
    <div class="caja-tarjeta">
        <h2>La extorsión del comercio</h2>
        <div class="tarjeta">

            <img class="foto-tarjetas" src="/img/extorsion2.png" alt="foto">
            <div class="texto">
                <p>Un misterioso comerciante os ha robado la llave del cofre. Os amenaza con difundir todos vuestros trapos sucios por redes sociales si no jugáis al juego que os propone. </p>
            </div>
            <p class="nivel nivel-avan">Avanzado</p>
        </div>
        <div class="botones">
            <a href="{{ route ('explicacion', 'lvl=Avanzado') }}"><button class="btn"><i class="fas fa-play"></i></button></a>
        </div>
    </div>

</div>



</body>


</html>
