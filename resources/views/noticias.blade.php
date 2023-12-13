@extends('layout.master')

@section('title', 'Noticias')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/noticias.css') }}">
@endsection

@section('content')

    <div class="container">
        <h2>Lista de Notícias</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>descricao</th>
                    <!-- Adicione outras colunas conforme necessário -->
                </tr>
            </thead>
            <tbody>
                @if (count($noticias) > 0)
                    @foreach ($noticias as $noticia)
                        <tr>
                            <td>{{ $noticia->id }}</td>
                            <td>{{ $noticia->titulo }}</td>
                            <td>{{ $noticia->descricao }}</td>
                            <!-- Adicione outras colunas conforme necessário -->
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">Não há notícias disponíveis.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
@endsection
