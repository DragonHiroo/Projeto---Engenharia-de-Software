@extends('layouts.layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <form action="">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Médico Responsável</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CRM">
          <small id="emailHelp" class="form-text text-muted">Por favor, digite o código CRM</small>
        </div>
        <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Enferméiro Responsavel</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="COREM">
          <small id="emailHelp" class="form-text text-muted">Por favor, digite o código COREM</small>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Paciente</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Código do Paciente">
          <small id="emailHelp" class="form-text text-muted">Por favor, digite o código do Paciente</small>
        </div>
        <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Especialidade</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Especialidade">
          <small id="emailHelp" class="form-text text-muted">Por favor, digite a Especialidade</small>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Data</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite a Data">
          <small id="emailHelp" class="form-text text-muted">Por favor, digite a Data</small>
        </div>
        <div class="form-group col-md-3">
          <label for="exampleInputPassword1">Hora de Inicio</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Hora de Inicio">
          <small id="emailHelp" class="form-text text-muted">Por favor, digite a Hora de Inicio</small>
        </div>
        <div class="form-group col-md-3">
          <label for="exampleInputPassword1">Hora de Término</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Hora de Termino">
          <small id="emailHelp" class="form-text text-muted">Por favor, digite a Hora de Termino</small>
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