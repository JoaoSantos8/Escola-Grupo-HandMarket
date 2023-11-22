@extends('layout.master')

@section('title')

<div id="titulo">

    CRIE SEU PERFIL

</div>

@endsection

@section('styles')
@endsection

@section('content')

<section id="hero" class="d-flex align-items-center">

    <form action="#" id="form" method="get">

    <div id="ladoEsq">
    <label for="inputNome" id="labelNome">Nome de Utilizador</label>
    <input type="text" name="nome" id="inputNome">
    <label for="inputNome" id="labelPass">Password</label>

    <div id="divPass">
    <input type="password" name="password" id="inputPass">
    <input type="button" value="MOSTRAR" id="mostrarPass">
</div>

    </div>

    <div id="ladoDir">
    <label for="inputTelefone" id="labelTelefone">Telefone</label>
    <input type="number" name="telefone" id="inputTelefone">
    <label for="inputEmail" id="labelEmail">Email</label>
    <input type="email" name="email" id="inputEmail">
    </div>

    <input type="button" value="CONFIRMAR" id="confirmar">

    </form>
  </section><!-- End Hero -->

@endsection

@section('scripts')

<script src="{{ asset('js/script.js') }}"></script>
@endsection

