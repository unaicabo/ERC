<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Perfil | {{ Auth::user()->name }}</title>
    <link href="css/index.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/css/perfil.scss','resources/css/index.css'])
</head>
<body id="pag-perfil">

    <header>
        <div class="caja-logo">
            <h1 class="logo">LOGO ERC</h1>
        </div>
        <nav class="menu-nav">
            <ul class="row">
                <li class="col"><a class="mi-perfil" href=""><div class="caja-icono-perfil"><i class="fas fa-play"></i></div>Nueva partida</a></li>
                <li class="col"><a class="mi-perfil" href=""><div class="caja-icono-perfil"><i class="fas fa-user"></i></div>Mi perfil</a></li>
            </ul>
        </nav>
    </header>
    <main class="contenido">
        <div class="caja-usuario">
            <div class="caja-foto-usuario">
                <figure id="img-usuario">
                    <img src="./img/usersImg/{{ Auth::user()->imagen }}" alt="Foto Perfil">
                </figure>
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
                    <dd>{{ Auth::user()->grupo_id }}</dd>
                </div>

                <div>
                    <div class="usuario-icono"><i class="fas fa-star-half-alt"></i></div>
                    <dt>Puntuación</dt>
                    <dd>120</dd>
                </div>
            </dl>
        </div>

        <div id="partidas">
            <h2>Mis partidas</h2>
            <?php
                use App\Http\Controllers\PartidaController;
                
                $partidaController = new PartidaController;
                $partidas = $partidaController->partidasByUserId(Auth::user()->id);
                foreach ($partidas as $key => $value) {
                    ?>
                    <div class="partida">
                        <h4>La extorsión del comercio</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio recusandae accusantium voluptatem soluta explicabo pariatur, eum unde aperiam tenetur officia assumenda fuga aspernatur, sunt, praesentium totam voluptatum autem at nesciunt.</p>
                        <div id="cajaPuntDifi">
                            <h5>Dificultad: <?php echo($value->dificultad) ?></h5>
                            <div class="d-flex">
                                <h3><?php echo($value->puntuacion) ?></h3>
                                <i class="fa-solid fa-star"></i>
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
</body>
</html>