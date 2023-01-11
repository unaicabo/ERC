<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Cambiar?? -->
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
    <header>
        <div class="row">
            <h1 class="col">ERC</h1>
    <?php
    use Illuminate\Support\Facades\Log;
    use Illuminate\Support\Facades\Session;

    if(Session::has('usuario')){
    ?>
        <div class="col"><a href="{{ route('usuarios.logout') }}"><button> Logout </button></a></div>
    <?php
    } else {
    ?>
        <div class="col"><button>Demo</button></div>
        <div class="col"><button>Register</button></div>
        <div class="col"><button>Login</button></div>
    <?php
    }
?>
            
        </div>
    </header>

    <h1 class="titleEscape">Escape Room</h1>
    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptatibus accusamus sapiente dolores, iure, magnam harum unde hic modi, sunt debitis maiores quis alias molestias facilis itaque a facere similique. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit non voluptatum perferendis numquam! In modi, obcaecati, qui sequi deserunt, dicta illum adipisci aut itaque beatae pariatur repellendus! Assumenda, accusamus dignissimos? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore molestiae impedit, eius temporibus, quo officia neque nulla beatae magnam explicabo ipsam! Soluta dolorum eveniet vitae tempora atque tempore enim illo?</p>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
