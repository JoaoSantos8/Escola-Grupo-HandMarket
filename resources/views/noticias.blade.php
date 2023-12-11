@extends('layout.master')

@section('title','Noticias')

@section('styles')
<link rel="stylesheet" href="{{asset('css/noticias.css')}}">
@endsection

@section('content')

<div id="container">
    <div id="esq">
        <h1>Patrocinadores</h1>
        <p>Os patrocinadores são a força vital por trás do sucesso, tornando possíveis os eventos que amamos.
            Com seu apoio generoso, criam conexões duradouras e impulsionam realizações notáveis.</p>
    </div>
</div>
<br>
<div class="patrocinadores">
    <div class="item">
        <img src="{{asset('fotos/1.png')}}" alt="">
        <p>Cerâmica Do Liz, S.A.</p>
    </div>
    <div class="item">
        <img src="{{asset('fotos/2.png')}}" alt="">
        <p>Manuel Orfão & Filhos Lda.</p>
    </div>
    <div class="item">
        <img src="{{asset('fotos/3.png')}}" alt="">
        <p>Reciclaureano - Gestão de Residuos, Lda.</p>
    </div>
    <div class="item">
        <img src="{{asset('fotos/4.jpg')}}" alt="">
        <p>Tintas CIN</p>
    </div>
    <div class="item">
        <img src="{{asset('fotos/5.jpg')}}" alt="">
        <p>Americana - Big Shop</p>
    </div>
</div>

@endsection

@section('scripts')
@endsection
