<header>
    <div class="row">
        <div class="caja-logo">
            <h1 class="logo">ERC</h1>
        </div>
        <nav id="menu-nav">
            <ul id="menu-principal">
            @auth
                <li class="col"><a href="{{ route('principal') }}">Inicio</a></li>
                <li class="col"><a href="{{ route('perfil') }}">Perfil</a></li>
                <li class="col"><a href="{{ route('usuarios.logout') }}">Salir<i class="fas fa-sign-out-alt"></i></a></li>
            @else
                <li class="col"><a href="{{ route('acertijo') }}">Demo</a></li>
                <li class="col"><a href="{{ route ('usuarios.login') }}">Login / Register</a></li>
            @endauth
            </ul>
        </nav>
    </div>
</header>
