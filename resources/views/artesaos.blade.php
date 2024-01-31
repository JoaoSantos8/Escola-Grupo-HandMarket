@extends('layout.master')

@section('title', 'Noticias')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/noticias.css') }}">
@endsection

@section('content')

<div class="container">
    <div class="noticias-container">
        @if (count($artesaos) > 0)
            @foreach ($artesaos as $artesao)
                <div class="noticia-box">
                    <h2>{{ $artesao->titulo }}</h2>
				<img class="image" alt="Noticia Image" src="{{ asset('storage/noticias_image/' .$artesao->image)}}">
                    <p>{{ $artesao->descricao }}</p>
                    <p>Data: {{ $artesao->data }}</p>
                    <!-- Adicione outras informações conforme necessário -->
                </div>
            @endforeach
        @else
            <p>Não há artesãos disponíveis.</p>
        @endif
    </div>
</div>
@endsection

@section('scripts')
@endsection
