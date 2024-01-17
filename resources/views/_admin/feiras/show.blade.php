@extends('layout.admin')

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
       <div class="card-header py-3">
           Informação da Feira
       </div>
       <div class="card-body">

           <div><strong>Titulo:</strong>  {{$feira->feiraNome}} </div>
           <img class="w-50 b" src="{{asset('storage/feiras_image/'.$feira->feiraImagemURL)}}" alt="Feira img">
           <div><strong>Descrição:</strong>  {{$feira->feiraDescricao}} </div>
           <div><strong>Data Inicio:</strong>  {{$feira->feiraDataInicio}} </div>
           <div><strong>Data Fim:</strong>  {{$feira->feiraDataFim}} </div>
           <div><strong>Preço:</strong>  {{$feira->feiraPreco}} </div>
       </div>
   </div>
</div>
@endsection
