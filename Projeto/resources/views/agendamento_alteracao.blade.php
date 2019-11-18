@extends('layouts.layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <form action="" method="POST">
    @csrf
    <div class="form-row">
       <div class="form-group col-md-6">
        <label for="sala">Sala</label>
        <input type="number" name="sala" class="form-control" placeholder="Sala da cirurgia" required="required">
        <small id="sala" class="form-text text-muted">Digite o numero da sala</small>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md">
        <label for="medico">Laudo</label>
        <input type="text" name="laudo" class="form-control" placeholder="Laudo">
        <small id="laudo" class="form-text text-muted">Caso necessário, digite uma descrição do laudo</small>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Data">Data</label>
        <input type="date" name="data" class="form-control" placeholder="Digite a Data" required="required">
      </div>
      <div class="form-group col-md-3">
        <label for="hora_inicio">Hora de início</label>
        <input type="text" name="hora_inicio" class="form-control" placeholder="Hora de Inicio" required="required">
      </div>
      <div class="form-group col-md-3">
        <label for="hora_termino">Hora de término</label>
        <input type="text" name="hora_termino" class="form-control" placeholder="Hora de Termino" required="required">
      </div>
    </div>
</div>
<button type="submit" class="btn text-light" style="background-color: #41CCA5;">Enviar</button>


<script>
  $(document).attr("title", "Cirurgia - Cadastro de cirurgia");;
  $('#titulo_topo').text("Editar agendamento")
</script>

@endsection