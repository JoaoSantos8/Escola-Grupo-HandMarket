
@extends('layout.master')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/feiras.css') }}">
@endsection

@section('content')


<h1 id="titFeiras">Lista de Feiras</h1>

    <table id="dadosFeira">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Imagem</th>
                <th>Localização</th>
                <th>Data de Início</th>
                <th>Data de Fim</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feiras as $feira)
                <tr>
                    <td>{{ $feira->feiraNome }}</td>
                    <td>{{ $feira->feiraDescricao }}</td>
                    <td>{{ $feira->feiraImagemURL }}</td>
                    <td>{{ $feira->feiraLocalizacao }}</td>
                    <td>{{ $feira->feiraDataInicio }}</td>
                    <td>{{ $feira->feiraDataFim }}</td>
                    <td>{{ $feira->feiraPreco }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


<a href="{{ route('feira') }}">Adicionar Feiras</a>

@endsection

@section('scripts')
@endsection
