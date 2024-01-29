@extends ("layout.admin")


@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Noticias</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-primary" href="{{ route('admin.noticias.create') }}">
                    <i class="fas fa-plus"></i> Nova Noticia
                </a>
            </div>
            <div class="card-body">
                @if (count($noticias))
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Titulo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($noticias as $noticia)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/noticias_image/' . $noticia->image) }}"
                                                class="img-post" alt="Imagem">
                                        </td>

                                        <td>{{ $noticia->titulo }}</td>
                                        <td nowrap>
                                            <a class="btn btn-xs btn-primary btn-p"
                                                href="{{ route('admin.noticias.show', $noticia) }}"><i
                                                    class="fas fa-eye fa-xs"></i></a>
                                            <a class="btn btn-xs btn-warning btn-p"
                                                href="{{ route('admin.noticias.edit', $noticia) }}"><i
                                                    class="fas fa-pen fa-xs"></i></a>
                                            <form method="POST" action="{{ route('admin.noticias.destroy', $noticia) }}"
                                                role="form" class="inline"
                                                onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-xs btn-danger btn-p"><i
                                                        class="fas fa-trash fa-xs"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                @else
                    <h6>Não existem noticias registadas</h6>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#dataTable').dataTable({
            destroy: true,
            "order": [
                [0, 'asc']
            ],
            "columns": [
                null,
                {
                    "orderable": false
                }
            ]
        });
    </script>
@endsection
