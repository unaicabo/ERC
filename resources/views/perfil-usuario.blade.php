<?php 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mi perfil</title>
    </head>
    <body>

        <div class="card-body">
            <h4>Bienvenido . {{ auth()->usuario()->nombre }} </h4>
        </div>

    </body>
</html>


