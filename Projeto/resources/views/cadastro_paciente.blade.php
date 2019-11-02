@extends('layouts.layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <form action="">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Laudo Médico</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Laudo Médico">
          <small id="emailHelp" class="form-text text-muted">Por favor, digite seu laudo médico</small>
        </div>
        <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Nome</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nome do Paciente">
          <small id="emailHelp" class="form-text text-muted">Por favor, digite seu nome</small>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Telefone</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Telefone do Paciente">
          <small id="emailHelp" class="form-text text-muted">Por favor, digite seu número de telefone</small>
        </div>
        <div class="form-group col-md-6">
          <label for="exampleInputPassword1">CPF</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="CPF do Paciente">
          <small id="emailHelp" class="form-text text-muted">Por favor, digite seu CPF</small>
        </div>
      </div>
      <button type="submit" class="btn text-light" style="background-color: #41CCA5;">Enviar</button>
    </form>
  </div>
  
  <script>
      $(document).attr("title", "Cirurgia - Cadastro de paciente");;
      $('#titulo_topo').text("Cadastro de paciente")
  </script>
@endsection