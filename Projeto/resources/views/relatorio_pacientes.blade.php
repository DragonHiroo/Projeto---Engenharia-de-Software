@extends('layouts.layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <form action="" method="POST">
  <div class="form-row">
  <div class="form-group col-md-6">
        <label for="Data inicial">Data inicial</label>
        <input type="date" class="form-control" placeholder="Digite a Data inicial" required="required">
      </div>
      <div class="form-group col-md-6">
        <label for="Data final">Data final</label>
        <input type="date" class="form-control" placeholder="Digite a Data final" required="required">
      </div>
    </div>
    <button type="button" class="btn text-light" style="background-color: #41CCA5;">Consultar</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).attr("title", "Cirurgia - Relatório");;
    $('#titulo_topo').text("Relatório: Histórico de pacientes por cirurgia")
</script>
@endsection