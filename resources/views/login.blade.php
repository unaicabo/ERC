<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ERC</title>
    <!--link rel="stylesheet" href="./view/css/generalStyles.css"-->
    <link rel="stylesheet" href="./css/loginRegistro.css">

    <script src="https://kit.fontawesome.com/9d49876e0a.js" crossorigin="anonymous"></script>

</head>
<body id="pag-login">

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ route ('usuarios.store') }}" method="POST" id="formRegister"  enctype="multipart/form-data">
                @csrf
                <h1>Registrarse</h1>
                <?php
                    if(Session::has('error')){
                        if((session('error')) == 'ErrorUsExistRegis'){
                            echo('<p id="msgErrorRegister" class="warn"><i class="fa-solid fa-triangle-exclamation"></i> El Usuario ya existe</p>');
                            Session::put('error', null);
                        } else {
                            echo('<p id="msgErrorRegister" class="warn"></p>');
                        }
                    } else {
                        echo('<p id="msgErrorRegister" class="warn"></p>');
                    }
                ?>
                <div id="formIkaslea" class="signUpForm">
                    <input type="text" name="nombre" placeholder="Nombre *" id="nombreIrakaslea" value="{{ old('nombre') }}" v-model="nombre"/>
                    <input type="text" name="apellido" placeholder="Apellidos *" id="apellidosIrakaslea" value="{{ old('apellido') }}" v-model="apellidos"/>
                    <input type="email" name="email"  placeholder="Email *" id="emailIrakaslea" v-model="email">
                    <input type="text" name="usuario" placeholder="Usuario *" id="usuarioIrakaslea" value="{{ old('usuario') }}" v-model="usuario"/>
                    <input type="password" name="contraseña" placeholder="Pasahitza *" id="contraseinaIrakaslea" value="{{ old('contraseña') }}" v-model="contraseina"/>
                    <input type="password" name="contraseina2Irakaslea" placeholder="Errepikatu pasahitza *" id="contraseina2Irakaslea" value="{{ old('contraseina2Irakaslea') }}" v-model="contraseina2"/>
                    <input type="file" accept="image/png,image/jpeg,imagen/jpg" placeholder="Imagen" name="imagen" id="imagenIrakaslea" v-model="imagen">
                    <!--input type="file" placeholder="Argazkia" id="fotoIrakaslea" name="fotoIrakaslea" accept="image/png, image/jpeg, image/jpg" -->

                    
                </div>
                <button type="submit" id="btnIrakaslea" @click="register">Sartu</button>
            </form>
        </div>
        <div class="form-container sign-in-container" >
            <form action="{{ route ('usuarios.login') }}" method="POST" id="formLogin">
                @csrf
                <h1>Iniciar sesión</h1>
                <?php
                    if(session()->has('errorLogin')){
                        echo('<p id="msgError" class="warn"><i class="fa-solid fa-triangle-exclamation"></i> Usuario o Contraseña incorrectos</p>');
                    }
                ?>
                <input type="text" placeholder="Usuario" name="usuario" id="usuarioLogin" v-model="usuario"/>
                <input type="password" placeholder="Contraseña" name="contraseina" id="contraseinaLogin" v-model="contraseina"/>
                <a href="#">¿Has olvidado la contraseña?</a>
                <button type="submit" value="login" id="login" @click="login">Entrar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left" id="moveToLogin">
                    <h1>Kaixo, aspaldiko!</h1>
                    <p>Introduce usuario y contraseña para entrar en la web.</p>
                    <button type="button" class="ghost" id="signIn" @click="moveLogin()">Iniciar Sesion</button>
                </div>
                <div class="overlay-panel overlay-right" id="moveToRegistro">
                    <h1>Bienvenido!</h1>
                    <p>Introduce tus datos para navegar en la web.</p>
                    <button type="button" class="ghost" id="signUp" @click="moveRegistrar()">Registrarse</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/generalScripts.js"></script>
    <script src="./js/loginRegistro.js"></script>
</body>
</html>