<nav id="navbar" class="navbare">
    <div id="menuCima">

    <div id="logimg">
    <a href="{{ asset('index') }}" class="logo me-auto"><img src="{{ asset('img/logoHorizontalBranco.png') }}" alt="" class="img-fluid" id="logtipo"></a>
    </div>

    <div id="menuEsq">

    <a href="{{ asset('feiras')}}" id="artigo">Feiras</a>
    <a href="#" id="artigo">Artesãos</a>
    <a href="{{ asset('patrocinadores')}}" id="artigo">Patrocinadores</a>
    <a href="{{ asset('noticias')}}" id="artigo">Noticias</a>
    <a href="{{ asset('singup')}}" id="artigo">SignUp</a>
    <a href="#" id="artigo">Loja</a>

    </div>

    
    @yield('titulo')

    </div>
</nav><!-- .navbar -->