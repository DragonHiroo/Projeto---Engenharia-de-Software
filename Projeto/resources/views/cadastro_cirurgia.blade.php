@extends('layouts.layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <form action="" method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="medico">Médico cirurgião</label>
        <input type="number" class="form-control" placeholder="CRM" required="required">
        <small id="emailHelp" class="form-text text-muted">Por favor, digite o código CRM do cirurgião responsável</small>
      </div>
      <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Enfermeiro responsável</label>
        <input type="number" class="form-control" placeholder="COREM" required="required">
        <small id="emailHelp" class="form-text text-muted">Por favor, digite o código COREM do enfermeiro</small>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="paciente">Paciente</label>
        <input type="text" class="form-control" placeholder="CPF do paciente" required="required">
      </div>
      <div class="form-group col-md-6">
        <label for="especialidade">Especialidade</label>
        <input type="text" class="form-control" placeholder="Especialidade" required="required">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="sala">Sala</label>
        <input type="number" class="form-control" placeholder="Sala da cirurgia" required="required">
      </div>
      <div class="form-group col-md">
        <label for="medico">Laudo</label>
        <input type="text" class="form-control" placeholder="Laudo">
        <small id="laudo" class="form-text text-muted">Caso necessário, digite uma descrição do laudo</small>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Data">Data</label>
        <input type="text" class="form-control" placeholder="Digite a Data" required="required">
      </div>
      <div class="form-group col-md-3">
        <label for="hora_inicio">Hora de inicio</label>
        <input type="number" class="form-control" placeholder="Hora de Inicio" required="required">
      </div>
      <div class="form-group col-md-3">
        <label for="hora_termino">Hora de término</label>
        <input type="number" class="form-control" placeholder="Hora de Termino" required="required">
      </div>
    </div>
</div>
<button type="submit" class="btn text-light" style="background-color: #41CCA5;">Enviar</button>
</form>
</div>

@if(res==1)
<div class="alert alert-success">
  <strong>Cirurgia cadastrada com sucesso!</strong>
</div>

@elseif(res==-1)
<div class="alert alert-danger">
  <strong>Erro ao cadastrar cirurgia!
</div>

@elseif(res==23505)
<div class="alert alert-danger">
  <strong>Erro!</strong>Já existe uma cirurgia com esta data, horário e/ou paciente!
</div>

@elseif(res==42830)
<div class="alert alert-danger">
  <strong>Erro!</strong>Certifique-se de que CPF, CRM, COREM e número de sala são existentes!
</div>

<script>
  $(document).attr("title", "Cirurgia - Cadastro de cirurgia");;
  $('#titulo_topo').text("Cadastrar Cirurgia")
</script>
@endsection