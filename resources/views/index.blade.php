@extends('layout.master')

@section('title','Home')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">

@endsection

@section('content')

<section id="parte1">
<a href="{{ route('artesaos')}}">
  <div id="artesaos" title="Clique para ver os artesãos">

    <div id="titulo" >Artesãos</div>
    <img src="{{ asset('img/artesaos.jpg')}}" alt="Artesãos" width="400px" id="img">
    <div id="content">Lista de artesãos qualificados, onde também pode verificar quais as suas qualidades e como contactar cada artesão</div>

  </div>
</a>

<a href="{{ route('feira')}}">
  <div id="feiras" title="Clique para ver as feiras">
    <div id="titulo">Feiras</div>
    <img src="{{ asset('img/feiras.jpg')}}" alt="Artesãos" width="400px" id="img">
    <div id="content">Lista de Feiras em que pode ver onde se irá realizar a feira, data da feira, ver os tipos de Produtos e os eventos na feira<br></div>
  </div>
</a>


<a href="{{ route('produtos')}}">
  <div id="produtos" title="Clique para ver os produtos">
    <div id="titulo">Produtos</div>
    <img src="{{ asset('img/produtos.jpeg')}}" alt="Artesãos" width="400px" id="img">
    <div id="content">Lista de Produtos feitos pelos artesãos da plataforma, preço de cada um, onde poderá também aceder á loja online da associação, e consequentemente poderá comprar alguma coisa</div>
  </div>
</a>
</section>

<section id="parte2">
      <h1 id="videoTit">Video Promocial</h1>
  <div id="video">

      <iframe width="1000px" height="500px" src="https://www.youtube.com/embed/OtYo4_O2LQU?autoplay=1" frameborder="0" allowfullscreen style="border-radius:30px"></iframe>
  
  
  </div>
</section>


<section id="parte3">
  <h1 style="margin-bottom:20px; font-family:'itim';">Receba Agora As Novidades</h1>

  <div id="contentSub">Subscreve-te á nosssa plataforma pra que possas receber noticias, novidades e descontos novos em nosso produtos</div>

  <input type="email" name="emailSub" id="inputEmail" placeholder="Insira Seu Email ...">
  <button type="submit" id="confirmarEmail">Subscrever</button>
</section>
@endsection


@section('scripts')

<script src="{{ asset('js/index.js') }}"></script>

@endsection
