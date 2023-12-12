@extends('layout.admin')

@section('content')
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Nova Feira
		</div>
		<div class="card-body">

			<form method="POST" action="{{ route('admin.feiras.store') }}" class="form-group">
				@csrf
				@include('_admin.feiras.partials.add-edit')

				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>
					<a href="{{ route('admin.feiras.index') }}" class="btn btn-default">Cancelar</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
