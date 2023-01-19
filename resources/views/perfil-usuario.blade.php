
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <!-- Cambiar?? -->
        <link rel="stylesheet" type="text/css" href="./css/index.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Mi perfil</title>
    </head>

    <body>
        <div id="pag-perfil">
            <header>
                <div class="caja-logo">
                    <h1 class="logo">LOGO ERC</h1>
                </div>
                    
            <?php
            use Illuminate\Support\Facades\Log;
            use Illuminate\Support\Facades\Session;

            if(Session::has('usuario')){
            ?>
                <div class="col"><a href="{{ route('usuarios.logout') }}"><button>Logout</button></a></div>
            <?php
            } else {
            ?>
                <nav class="menu-nav">
                    <ul class="row">
                        <li class="col"><a class="mi-perfil" href=""><div class="caja-icono-perfil"><i class="fas fa-play"></i></div>Nueva partida</a></li>
                        <li class="col"><a class="mi-perfil" href=""><div class="caja-icono-perfil"><i class="fas fa-user"></i></div>Mi perfil</a></li>
                    </ul>
                </nav>
            <?php
            }
            ?>
            </header>

            <main class="contenido">
                <div class="caja-usuario">
                    <div class="caja-foto-usuario">
                        <figure id="img-usuario">
                            <img src="img/img-usuario-default.jpg" alt="">
                        </figure>
                        <p class="usuario-nombre">Pepe Rodriguez</p>
                    </div>
                    <dl class="datos-usuario">
                        <div>
                            <div class="usuario-icono"><i class="fas fa-user"></i></div>
                            <dt>Usuario</dt>
                            <dd>Pepito</dd>
                        </div>

                        <div>
                            <div class="usuario-icono"><i class="fas fa-users"></i></div>
                            <dt>Grupo</dt>
                            <dd>2</dd>
                        </div>

                        <div>
                            <div class="usuario-icono"><i class="fas fa-star-half-alt"></i></div>
                            <dt>Puntuación</dt>
                            <dd>120</dd>
                        </div>
                    </dl>
                </div>
            </main>

        
        </body>
    </div>

    <style>

        html{
            font-size: 0.625em;
        }
        #pag-perfil .logo{
            border-bottom: 1px solid white;
        }

        #pag-perfil .contenido{
            margin-top: 220px;
            font-size: 2rem;
            padding-bottom: 200px;
            display: flex;
            justify-content: center;
        }

        #pag-perfil .menu-nav{
            padding: 15px;
        }

        #pag-perfil .menu-nav a{
            letter-spacing: 0em;
            padding: 0;
        }

        #pag-perfil .mi-perfil{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .caja-icono-perfil{
            border-radius: 50%;
            padding: 14px 15px;
            border: 2px solid white;
            width: 60px;
            display: flex;
            justify-content: center;
            margin-bottom: 5px;
        }

        .caja-icono-perfil i{
            font-size: 2.5rem;
            width: auto;
            margin: 0;
            text-align: center;
            display: flex;
            justify-content: center;
        }

        .caja-usuario{
            border-radius: 10px;
            color: black;
            background-color: whitesmoke;
            display: flex;
            flex-direction: column;
            width: 80%;
            max-width: 800px;
        }

        .caja-foto-usuario{
            width: 100%;
            padding: 40px;
            padding-bottom: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .usuario-nombre{
            text-align: center;
            font-size: 3rem;
            font-weight: bold;
            color: grey;
            padding-bottom: 15px;
            border-bottom: 1px solid lightgrey;
        }

        .datos-usuario{
            padding: 40px;
            display: flex;
            justify-content: space-around;
            text-align: center;
        }

        #img-usuario{
            width: 40%;
            max-width: 250px;
        }

        #img-usuario img{
            padding-top: 1px;
            width: 100%;
        }

        .usuario-icono{
            border-radius: 50%;
            color: grey;
            padding: 20px 35px;
            font-size: 3rem;
            border: 2px solid grey;
            width: 50px;
            display: flex;
            justify-content: center;
            margin-bottom: 5px;
        }

        .usuario-icono i{
            color: grey;
        }


        @media (min-width: 1200px){
            
        }

    </style>
</html>


