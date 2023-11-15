@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Categorias</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="#">
        <i class="fas fa-plus"></i> Nova Categoria
      </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nome</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1º Ano</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="#"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="#"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="#" role="form" class="inline">
                  <button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
                </form>
              </td>
            </tr>
            <tr>
              <td>2º Ano</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="#"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="#"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="#" role="form" class="inline">
                  <button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section("scripts")
<script>
  $('#dataTable').dataTable( {
  destroy: true,
    "order": [[ 0, 'asc' ]],  
	"columns": [
    null,
    { "orderable": false }
  ]
} );

</script>
@endsection