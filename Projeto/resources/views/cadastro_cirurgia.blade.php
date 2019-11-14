@extends('layouts.layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <form action="" method="POST">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="medico">Médico Responsável</label>
          <input type="number" class="form-control" placeholder="CRM" required="required">
          <small id="emailHelp" class="form-text text-muted">Por favor, digite o código CRM do médico responsável</small>
        </div>
        <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Enfermeiro Responsavel</label>
          <input type="number" class="form-control" placeholder="COREM" required="required">
          <small id="emailHelp" class="form-text text-muted">Por favor, digite o código COREM</small>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="paciente">Paciente</label>
          <input type="text" class="form-control" placeholder="CPF do Paciente" required="required">
        </div>
        <div class="form-group col-md-6">
          <label for="especialidade">Especialidade</label>
          <input type="text" class="form-control" placeholder="Especialidade" required="required">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Data">Data</label>
          <input type="text" class="form-control" placeholder="Digite a Data" required="required">
        </div>
        <div class="form-group col-md-3">
          <label for="hora_inicio">Hora de Inicio</label>
          <input type="number" class="form-control" placeholder="Hora de Inicio" required="required">
        </div>
        <div class="form-group col-md-3">
          <label for="hora_termino">Hora de Término</label>
          <input type="number" class="form-control" placeholder="Hora de Termino" required="required">
        </div>
        <div class="form-group col-md">
            <label for="medico">Laudo</label>
            <input type="text" class="form-control" placeholder="laudo">
            <small id="laudo" class="form-text text-muted">Caso necessário, digite uma descrição do laudo</small>
        </div>
      </div>
      <button type="submit" class="btn text-light" style="background-color: #41CCA5;">Enviar</button>
    </form>
</div>
  
<script>
    $(document).attr("title", "Cirurgia - Cadastro de cirurgia");;
    $('#titulo_topo').text("Cadastro de nova cirurgia")
</script>
@endsection