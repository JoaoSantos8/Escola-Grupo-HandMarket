
@extends('layout.master')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/feiras.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@endsection

@section('content')


<div class="w-100 d-flex flex-wrap align-items-center">
@foreach ($feiras as $feira)
    <div class="w-25" id="caixaFeira">
        <div id="tituloFeira"> {{ $feira->feiraNome }}</div>

        <div id="descricaoFeira">{{ $feira->feiraDescricao }}</div>

        <div></div>

        <div id="localizacaoFeira">Localização<br>{{ $feira->feiraDataInicio }}</div>


        <div id="datasFeira">

            <div class="float-left">Primeiro Dia<br>{{ $feira->feiraDataInicio }}</div>
            <div class="float-right">Ultimo Dia<br>{{ $feira->feiraDataFim }}</div>

        </div>

        <div id="precoFeira">Preço - Entrada<br>@if ($feira->feiraPreco == 0)
            Grátis
        @else
            {{ $feira->feiraPreco }}€
        @endif</div>
    </div>
@endforeach
</div>


    <a class="btn btn-primary" href="{{ route('feiras') }}">
        <i class="fas fa-plus"></i> Adicionar Feiras
      </a>
@endsection

@section('scripts')
@endsection
