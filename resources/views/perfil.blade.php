<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Perfil | {{ Auth::user()->name }}</title>
    <link href="css/index.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/perfil.scss" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/css/perfil.scss','resources/css/index.css','resources/js/perfil.js'])
</head>

<body id="pag-perfil">
<?php
function obtenerMejorTiempo(){
    $minMejorTiempo = 999999;
    $sMejorTiempo = 99;
    $mejorTiempo = '';
    foreach (Auth::user()->partidas as $key => $partida) {
        $tiempo = $partida['tiempo'];
        if(strpos($tiempo, 'min') ==! false){
            $min = Str::substr($tiempo, 0, strpos($tiempo, 'm'));
            $s = Str::substr($tiempo, strpos($tiempo, ' '), (strpos($tiempo, 's') - strpos($tiempo, ' ')));

            if($minMejorTiempo > $min) {
                $mejorTiempo = $tiempo;
            } else if($minMejorTiempo == $min && $sMejorTiempo > $s) {
                $mejorTiempo = $tiempo;
            }
        } else {
            $minMejorTiempo = 0;
            $s = Str::substr($tiempo, strpos($tiempo, ' '), (strpos($tiempo, 's') - strpos($tiempo, ' ')));
            if($sMejorTiempo > $s){
                $mejorTiempo = $tiempo;
            }
        }
    }

    return $mejorTiempo;
}
?>
@include('header')
    <main class="contenido">
        <div class="caja-usuario">
            <div class="caja-foto-usuario">
                <figure id="img-usuario">
                    <img src="./img/usersImg/{{ Auth::user()->imagen }}" alt="Foto Perfil">
                </figure>
                <form action="{{ route('eliminar') }}" method="GET" id="formEliminarCuenta">
                    <input type="submit" id="btnEliminarCuenta" value="Eliminar cuenta">
                </form>
                <p class="usuario-nombre">{{ Auth::user()->name }} {{ Auth::user()->apellido }}</p>
            </div>

            <dl class="datos-usuario">
                <div>
                    <div class="usuario-icono"><i class="fas fa-user"></i></div>
                    <dt>Usuario</dt>
                    <dd>{{ Auth::user()->username }}</dd>
                </div>

                <div>
                    <div class="usuario-icono"><i class="fas fa-users"></i></div>
                    <dt>Grupo</dt>
                    @if(Auth::user()->grupo_id != '')
                    <dd>{{ Auth::user()->grupo->nombre }}</dd>
                    @endif
                </div>

                <div>
                    <div class="usuario-icono"><i class="fas fa-star-half-alt"></i></div>
                    <dt>Mejor tiempo</dt>
                    <dd><?php echo(obtenerMejorTiempo()); ?></dd>
                </div>
            </dl>
        </div>

        <div id="partidas">
            <h2>Mis partidas</h2>
            <?php
                use App\Http\Controllers\PruebasController;

                $partidaController = new PruebasController;
                $partidas = $partidaController->partidasByUserId(Auth::user()->id);
                foreach ($partidas as $key => $value) {
                    ?>
                    <div class="partida">
                        <h4>La extorsión del comercio</h4>
                        <div id="cajaPuntDifi">
                            <div class="d-flex" id="cajaDifGrupo">
                                <h5>Dificultad: <?php echo($value->dificultad) ?></h5>
                                @if(Auth::user()->grupo_id != '')
                                <h5>Grupo: {{ Auth::user()->grupo->nombre }}</h5>
                                @endif
                            </div>
                            <div class="d-flex">
                                <i class="fa-solid fa-clock"></i>
                                <h3><?php echo($value->tiempo) ?></h3>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/9d49876e0a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
