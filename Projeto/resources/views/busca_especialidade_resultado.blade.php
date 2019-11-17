@extends('layouts.layout')

@section('content')
<!--    Busca   -->
Exibe todas as cirurgias da especialidade buscada no período determinado. Para ver o histórico completo,
deixe os campos "Data de início" e "Data de fim" em branco.
<!--    Busca   -->
<form class="form-inline md-form form-sm active-cyan-2 mt-2" method="GET">
    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Digite o nome da especialidade..." aria-label="Busca" name="busca" id="busca_e">
    <button class="btn btn-secondary" type="submit" >
        <i class="fa fa-search"></i>
    </button>
    <div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-3 border-bottom">
    <form action="" method="GET">
    <div class="form-group col-md-3">
    <label for="data_inicio">Data de início</label>
        <input type="date" class="form-control" placeholder="Data de início" name="data_i">
        </div>
    <div class="form-group col-md-5">
    <label for="data_fim">Data de fim</label>
        <input type="date" class="form-control" placeholder="Data de fim" name="data_f">
        </div>
        </div>
    </form>
</div>

<div class="mt-2 md-2">
    <h5>Exibindo cirurgias:</h5>
</div>
<div class="resultado">
    <!-- Exibe os resultados ou mensagem "resultado não encontrado" dependendo do valor enviado pelo controller -->
    @if (!$res)
        Nenhuma cirurgia encontrada!
    @else
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>CRM</th>
                    <th>Nome</th>
                    <th>Especialidade</th>
                    <th>Data</th>
                    <th>CPF</th>
                    <th>Início</th>
                    <th>Duração</th>
                </tr>
            </thead>
            <tbody>
                @foreach($res as $row)
                <tr>
                    <td>{{ $row->crm }}</td>
                    <td>{{ $row->nome }}</td>
                    <td>{{ $row->nome_especialidade }}</td>
                    <td>{{ $row->data }}</td>
                    <td>{{ $row->cpf_paciente }}</td>
                    <td>{{ $row->hora_inicio }}</td>
                    <td>{{ $row->duracao }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

<script>
    $(document).attr("title", "Cirurgia - Busca");;
    $('#titulo_topo').text("Busca por especialidade")
</script>

<script type
@endsection