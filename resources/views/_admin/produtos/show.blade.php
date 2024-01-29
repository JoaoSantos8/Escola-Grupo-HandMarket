@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Informação do produto
		</div>
		<div class="card-body">	
			<div>
				<strong>Image:</strong>
                <img src="{{asset('storage/produtos_image/'.$produto->image)}}" class="img-post" alt="Imagem">
			</div>	

			<div><strong>nome:</strong> {{$produto->nome}} </div>
			<div><strong>descricao:</strong> {{$produto->descricao}} </div>
			<div><strong>Artesão:</strong> {{$produto->artesaos->Nome}} </div>
		</div>
	</div>
</div>
@endsection