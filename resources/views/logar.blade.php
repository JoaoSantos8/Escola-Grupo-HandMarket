@extends('layout.master')


@section('title','Login - HandMarket ')


@section('titulo')

<div id="titulo">

    Login

</div>

@endsection

@section('styles')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')

<style>

    section{
        background: inherit !important;
    }
</style>

<section id="hero" class="d-flex align-items-center"  style="text-decoration: none !important">

    
    <form method="POST" action="{{ route('login') }}" id="form">
    @csrf

    <div id="divCentro">
    <label for="inputEmail" id="labelNome">Email</label>
    <input type="text" name="email" id="inputEmail">
    <label for="inputPass" id="labelPass">Password</label>

    <div id="divPass">
    <input type="password" name="password" id="inputPass">
    <input type="button" value="MOSTRAR" id="mostrarPass">
</div>

    </div>

    <input type="button" value="CONFIRMAR" id="confirmarL">

    </form>
  </section><!-- End Hero -->

@endsection

@section('scripts')

<script src="{{ asset('js/script.js') }}"></script>
@endsection

