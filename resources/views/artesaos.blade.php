@extends('layout.master')

@section('title', 'Artesaos')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/artesaos.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection

@section('content')
    <div class="w-100 d-flex flex-wrap align-items-center">
        @foreach ($artesaos as $artesao)
            <div class="w-25" id="caixaArtesao">
                <div id="nomeArtesao" class="p-5">{{ $artesao->Nome }}</div>

                <form action="{{ route('produtos', ['artesao_id' => $artesao->id]) }}" method="get">
                    <div id="imagemArtesao" class="w-100 p-5">
                        <button type="submit" class="btn btn-link p-0">
                            <img class="w-100 mx-auto" style="border-top: 2px solid gray; border-bottom: 2px solid gray" src="{{ asset('storage/artesaos_image/'.$artesao->image) }}" alt="Foto Artesao">
                        </button>
                    </div>
                </form>

                <div id="idadeArtesao" class="p-5">Idade:<br>{{ $artesao->idade }}</div>
                <div id="telefoneArtesao" class="p-5">Contacto:<br>{{ $artesao->telefone }}</div>
                <div id="registoArtesao" class="p-5">Registo<br>{{ $artesao->dataRegisto }}</div>
            </div>
        @endforeach
    </div>
@endsection

@section('scripts')
@endsection