@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação do Artesão
		</div>
		<div class="card-body">	
			<div>
				<strong>Image:</strong>
                <img src="{{asset('storage/artesaos_image/'.$artesao->image)}}" class="img-post" alt="Imagem">
			</div>	

			<div><strong>Nome:</strong> {{$artesao->nome}} </div>
			<div><strong>Idade:</strong> {{$artesao->idade}} </div>
			<div><strong>Telefone:</strong> {{$artesao->telefone}} </div>
		</div>
	</div>
</div>
@endsection