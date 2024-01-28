@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Novo artesao
            </div>
            <div class="card-body">

                <form method="POST" action="{{ route('admin.artesaos.store') }}" class="form-group"  enctype="multipart/form-data">
                    @csrf
                    @include('_admin.artesaos.partials.add-edit')
					

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="ok">Guardar</button>
                        <a href="{{ route('admin.artesaos.index') }}" class="btn btn-default">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
