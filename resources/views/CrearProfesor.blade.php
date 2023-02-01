<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Profesor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/css/crearProfesor.scss','resources/css/index.css'])
</head>
<body id="pag-crearprofesor">
    @include('header')
    <div id="formNewProfe">
    <h1>Añadir un nuevo profesor</h1>
        <form action="{{ route('crearProfesor') }}" id="formRegister" method="post" enctype="multipart/form-data">
            @csrf
            <p id="msgErrorRegister" class="warn"></p>
            <div class="row cajaInput">
                <label for="nombre" class="col">Nombre</label><input class="col" type="text" name="nombre" id="nombre" v-model="nombre" class="col"><br>
            </div>
            <div class="row cajaInput">
                <label for="apellido" class="col">Apellidos</label><input type="text" name="apellido" id="apellido" v-model="apellidos" class="col"><br>
            </div>
            <div class="row cajaInput">
                <label for="email" class="col">Email</label><input type="mail" name="email" id="email" v-model="email" class="col"><br>
            </div>
            <div class="row cajaInput">
                <label for="usuario" class="col">Usuario</label><input type="text" name="usuario" id="usuario" v-model="usuario" class="col"><br>
            </div>
            <div class="row cajaInput">
                <label for="password" class="col">Crea una contraseña</label><input type="password" name="password" id="password" v-model="contraseina" class="col"><br>
            </div>
            <div class="row cajaInput">
                <label for="passwordR" class="col">Repite la contraseña</label><input type="password" name="passwordR" id="passwordR" v-model="contraseina2" class="col"><br>
            </div>
            <div class="row cajaInput">
                <label for="imagen" class="col">Añade una foto de perfil</label><input type="file" accept="image/png,image/jpeg,imagen/jpg" placeholder="Imagen" name="imagen" id="imagen" class="col"><br>
            </div>
        </form>
        <div id="btnSubmit">
            <input type="submit" value="Registrar" @click="register">
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="./js/loginRegistro.js"></script>
</body>
</html>