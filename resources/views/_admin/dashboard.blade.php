@extends('layout.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_artesaos }} </h1>
                        <h3 style="display:inline;"> Artesãos </h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_produtos }} </h1>
                        <h3 style="display:inline;"> Produtos </h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_noticias }} </h1>
                        <h3 style="display:inline;"> Noticias </h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_feiras }} </h1>
                        <h3 style="display:inline;"> Feiras </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
