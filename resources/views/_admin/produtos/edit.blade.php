@extends('layout.admin')

@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Editar produto
		</div>
		<div class="card-body">

			<form method="POST" action="{{ route('admin.produtos.update',$produto)}}" class="form-group">
				@csrf
				@method("PUT")
				@if ($produto->image)
				<img alt="User photo" src="{{ asset('storage/produtos_image/' .$produto->image)}}" width="100"
					class="mt-1 mb-3">
				@endif
				@include('_admin.produtos.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>

					<a href="{{route('admin.produtos.index')}}" class="btn btn-default">Cancelar</a>

				</div>

			</form>

		</div>
	</div>
</div>


@endsection