
@extends('layout.master')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/feiras.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@endsection

@section('content')

<h1 style="text-align: center; font-family:'itim'; padding:50px;">AS NOSSAS FEIRAS AGENDADAS OU ABERTAS</h1>

<div class="w-100 d-flex flex-wrap align-items-center">
@foreach ($feiras as $feira)
    <div class="w-25" id="caixaFeira">
        <div id="tituloFeira" class="p-5"> {{ $feira->feiraNome }}</div>

        <div id="descricaoFeira"class="p-5">{{ $feira->feiraDescricao }}</div>

        <div id="imagemFeira" class="w-100 p-5">
            <img class="w-100 mx-auto" style="border-top: 2px solid gray; border-bottom: 2px solid gray" src="{{ asset('storage/feiras_image/'.$feira->feiraImagemURL) }}" alt="Imagem do Produto">
        </div>

        <div id="localizacaoFeira" class="p-5">Localização<br>{{ $feira->feiraLocalizacao }}</div>


        <div id="datasFeira">

            <div class="float-left p-5" id="dadosD">Primeiro Dia<br>{{ $feira->feiraDataInicio }}</div>
            <div class="float-right p-5" id="dadosD">Ultimo Dia<br>{{ $feira->feiraDataFim }}</div>

        </div>

        <div id="precoFeira" class="p-5">Preço - Entrada<br>@if ($feira->feiraPreco == 0)
            Grátis
        @else
            {{ $feira->feiraPreco }}€
        @endif</div>
    </div>
@endforeach
</div>


    <a class="btn btn-primary m-5" id="botaoFeiras" href="{{ route('feiras') }}">
        <i class="fas fa-plus"></i> Adicionar Feiras
      </a>
@endsection

@section('scripts')
@endsection
