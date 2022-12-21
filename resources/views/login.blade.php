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
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Registrarse</h1>
                <p id="msgErrorRegister" class="warn"></p>
                <div id="formIkaslea" class="signUpForm">
                    <input type="text" name="nombreIrakaslea" placeholder="Nombre *" id="nombreIrakaslea"/>
                    <input type="text" name="apellidosIrakaslea" placeholder="Apellidos *" id="apellidosIrakaslea"/>
                    <input type="text" name="usuarioIrakaslea" placeholder="Usuario *" id="usuarioIrakaslea"/>
                    <input type="password" name="contraseinaIrakaslea" placeholder="Pasahitza *" id="contraseinaIrakaslea"/>
                    <input type="password" name="contraseina2Irakaslea" placeholder="Errepikatu pasahitza *" id="contraseina2Irakaslea"/>
                    <input type="file" placeholder="Argazkia" id="fotoIrakaslea" name="fotoIrakaslea" accept="image/png, image/jpeg, image/jpg" >

                    <p>Erantzunkisuna sinatu:<input type="checkbox" name="terminos" class="terminos" id="terminosIrakaslea" value="aceptado"></p>
                    <button type="button" id="btnIrakaslea">Sartu</button>
                </div>
            </form>
        </div>
        <div class="form-container sign-in-container" >
            <form action="#">
                <h1>Iniciar sesion</h1>
                <p id="msgError" class="warn"></p>
                <input type="text" placeholder="Usuario" id="usuarioLogin" />
                <input type="password" placeholder="Contraseña" id="contraseinaLogin"/>
                <a href="#">Has olvidado la contraseña?</a>
                <button type="button" id="login">Entrar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left" id="moveToLogin">
                    <h1>Kaixo, aspaldiko!</h1>
                    <p>Introduce usuario y contraseña para entrar en la web.</p>
                    <button type="button" class="ghost" id="signIn" @click="moveLogin()">Saioa hasi</button>
                </div>
                <div class="overlay-panel overlay-right" id="moveToRegistro">
                    <h1>Bienvenido!</h1>
                    <p>Introduce tus datos para navegar en la web.</p>
                    <button type="button" class="ghost" id="signUp" @click="moveRegistrar()">Erregistratu</button>
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