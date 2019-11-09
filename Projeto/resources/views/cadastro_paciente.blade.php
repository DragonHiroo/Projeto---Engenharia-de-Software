@extends('layouts.layout')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <form action="" method="POST">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="laudo">Laudo Médico</label>
          <input type="text" name="laudo" class="form-control" aria-describedby="emailHelp" placeholder="Laudo Médico">
        </div>
        <div class="form-group col-md-6">
          <label for="nome">Nome</label>
          <input type="text" name="nome" class="form-control" placeholder="Nome do Paciente" >       
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="telefone">Telefone</label>
          <input type="number" name="telefone" class="form-control" placeholder="Telefone do Paciente" required="required">
        </div>
        <div class="form-group col-md-6">
          <label for="cpf">CPF</label>
          <input type="number" name="cpf" class="form-control" placeholder="CPF do Paciente" required="required">
        </div>
      </div>
      <button type="submit" class="btn text-light" style="background-color: #41CCA5;">Enviar</button>
    </form>
  </div>

  <script>
      $(document).attr("title", "Cirurgia - Cadastro de paciente")
      $('#titulo_topo').text("Cadastro de paciente")
  </script>
@endsection