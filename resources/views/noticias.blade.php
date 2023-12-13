@extends('layout.master')

@section('title', 'Noticias')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/noticias.css') }}">
@endsection

@section('content')

<div class="container">
    <h1>Lista de Notícias</h1>
    <div class="noticias-container">
        @if (count($noticias) > 0)
            @foreach ($noticias as $noticia)
                <div class="noticia-box">
                    <h2>{{ $noticia->titulo }}</h2>
                    <p>{{ $noticia->descricao }}</p>
                    <p>Data: {{ $noticia->data }}</p>
                    <!-- Adicione outras informações conforme necessário -->
                </div>
            @endforeach
        @else
            <p>Não há notícias disponíveis.</p>
        @endif
    </div>
</div>
@endsection

@section('scripts')
@endsection
