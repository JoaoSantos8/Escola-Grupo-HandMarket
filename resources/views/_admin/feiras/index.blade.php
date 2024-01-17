@extends ("layout.admin")


@section("content")


<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Feiras</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{ route('admin.feiras.create') }}">
        <i class="fas fa-plus"></i> Nova Feira
      </a>
    </div>
    <div class="card-body">
      @if (count($feiras))
      <div class="table-responsive">
        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th style="width: 20%">Imagem</th>
              <th>Nome</th>
              <th>Descição</th>
              <th>Data - Inicio</th>
              <th>Data - Fim</th>
              <th>Preço</th>
              <th>Opções</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($feiras as $feira)
            <tr>
                <td><img class="w-100" src="{{asset('storage/feiras_image/'.$feira->feiraImagemURL)}}" alt="Feira img"></td>
              <td class="align-middle text-center">{{ $feira->feiraNome }}</td>
              <td class="align-middle text-center p-5">{{ $feira->feiraDescricao }}</td>
              <td class="align-middle text-center p-5">{{ $feira->feiraDataInicio }}</td>
              <td class="align-middle text-center p-5">{{ $feira->feiraDataFim }}</td>
              <td class="align-middle text-center p-5">@if ($feira->feiraPreco == 0)
                Grátis
            @else
                {{ $feira->feiraPreco }}€
            @endif</td>
              <td nowrap class="align-middle text-center">
                <a class="btn btn-xs btn-primary btn-p" href="{{ route('admin.feiras.show', $feira) }}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{ route('admin.feiras.edit', $feira) }}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{ route('admin.feiras.destroy', $feira) }}" role="form" class="inline" onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @else
      <h6>Não existem feiras registadas</h6>
      @endif
    </div>
  </div>
</div>
@endsection

@section("scripts")
<script>
  $('#dataTable').DataTable({
    destroy: true,
    "order": [[1, 'asc']],
    "columns": [
        { "orderable": false },
      null,
      { "orderable": false }
    ]
  });
</script>
@endsection
