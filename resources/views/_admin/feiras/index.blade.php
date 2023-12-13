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
      @if ($feiras && count($feiras) > 0)
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nome</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($feiras as $feira)
            <tr>
              <td>{{ $feira->feiraNome }}</td>
              <td nowrap>
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
    "order": [[0, 'asc']],
    "columns": [
      null,
      { "orderable": false }
    ]
  });
</script>
@endsection
