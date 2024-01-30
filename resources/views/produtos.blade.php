@extends('layout.master')

@section('title', 'Produtos')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/produtos.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@endsection

@section('content')


<div class="w-100 d-flex flex-wrap align-items-center">
@foreach ($produtos as $produto)
    <div class="w-25" id="caixaProduto">
        <div id="nomeProduto" class="p-5"> {{ $produto->nome }}</div>


        <div id="imagemProduto" class="w-100 p-5">
            <img class="w-100 mx-auto" style="border-top: 2px solid gray; border-bottom: 2px solid gray" src="{{ asset('storage/produtos_image/'.$produto->image) }}" alt="Foto Produto">
        </div>

        <div id="descricaoProduto" class="p-5">Idade:<br>{{ $produto->descricao }}</div>

    </div>
    @endforeach
</div>
@endsection

@section('scripts')
@endsection