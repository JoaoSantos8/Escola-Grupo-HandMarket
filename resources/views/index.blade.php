@extends('layout.master')

@section('title','Home')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">

@endsection

@section('content')
<style>


    box-sizing: none !important;

</style>
<div class="rotate-slider">
    <ul class="slides">
      <li>
        <div class="inner">
          <h1>Feiras</h1>
          <p style="font-size: 13pt">Onde pode ver quais feiras estam disponiveis no momento, localização, dia que começa, dia que acaba e se é preciso pagar para entrar</p>
          <button id="button"><a href="{{ route('feiras')}}">Ver Feiras</a></button>
          </div>
      </li>
      <li>
        <div class="inner"></div>
      </li>
      <li>
        <div class="inner">
          <h1>Artesãos</h1>
          <p style="font-size: 13pt">Temos a página Artesãos para poder ver quais artesãos fazem parte da nossa instituição, os produtos feitos por eles e contactos</p>
          </div>
      </li>
      <li>
        <div class="inner">
        </div>
      </li>
      <li>
        <div class="inner">
          <h1>Produtos</h1>
          <p style="font-size: 13pt">Produtos que vendemos relacionados com a associação, uma loja virtual onde pode comprar vários tipos de produtos.</p>
        </div>
      </li>
      <li>
        <div class="inner">
        </div>
      </li>
    </ul>
  </div>
  <svg>
    <defs>
      <clipPath id="slideClip">
        <path />
      </clipPath>
    </defs>
  </svg>

@endsection

@section('scripts')

<script src="{{ asset('js/index.js') }}"></script>

@endsection
