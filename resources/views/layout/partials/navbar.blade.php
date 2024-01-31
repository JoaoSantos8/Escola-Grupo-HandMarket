<nav class="navbar">
    <a href="{{ route('index') }}"><img class="nav-logo" src="{{ asset('fotos/logo.png') }}" alt="Logo"></a>
    <ul class="nav-menu">
        <li class="nav-item">
            <a href="{{ route('index') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('feira') }}" class="nav-link">Feiras</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('artesaos') }}" class="nav-link">Artesãos</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('patrocinadores') }}" class="nav-link">Patrocinadores</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('noticia') }}" class="nav-link">Noticias</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Loja</a>
        </li>
        @auth
            <li class="nav-item">
                <a class="nav-link">{{ auth()->user()->name }}</a>
            </li>
        @endauth
        @guest
            <li class="nav-item">
                <a href="{{ route('signup') }}" class="nav-link">Signup</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logar') }}" class="nav-link">Login</a>
            </li>
        @endguest
    </ul>
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</nav>
