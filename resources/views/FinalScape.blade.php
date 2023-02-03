<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finalizado</title>
    @routes
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @if(session('lvl') == 'Basico')
        @vite(['resources/js/FinalScapeBasico.js','resources/css/index.css'])
    @else
        @vite(['resources/js/FinalScapeAvanzado.js','resources/css/index.css'])
    @endif
</head>
<body id="pag-finalScape">
    <div id="app"></div>
    <div id="tiempo">
        <i class="fa-solid fa-clock"></i> {{ session('tiempoFinal') }}
    </div>
<script src="https://kit.fontawesome.com/9d49876e0a.js" crossorigin="anonymous"></script>
</body>
</html>