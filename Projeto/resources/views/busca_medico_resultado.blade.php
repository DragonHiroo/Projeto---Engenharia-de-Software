@extends('layouts.layout')

@section('content')
<!--    Busca   -->
<div>
    <form class="form-block md-form form-sm active-cyan-2 mt-2">
        <div class="form-inline">
            <input id="campo_busca" class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Digite o nome do(a) médico(a)..." aria-label="Busca" name="busca">
            <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
        </div>
        </button>
        <div class="d-block">
            Buscar por:
            <select class="form-control" name="op" id="opcoes">
                <option value="nome" selected="selected" id="n">Nome</option>
                <option value="CRM" id="crm">CRM</option>
            </select>
        </div>
    </form>
</div>
<div class="mt-2 md-2">
    <h5>Resultados da busca por: {{$busca}}</h5>
</div>
<div class="resultado">
    <!-- Exibe os resultados ou mensagem "resultado não encontrado" dependendo do valor enviado pelo controller -->
    @if (empty($res))
        Resultado não encontrado!
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

<!-- Trocando placeholder -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $('#opcoes').on('change', function() {
        var opcao = $(this).find('option:selected').val()
        $('#campo_busca').attr('placeholder', 'Digite o ' + opcao + ' do(a) médico(a)...')
    })

    $(document).attr("title", "Cirurgia - Busca");;
    $('#titulo_topo').text("Busca por médicos")
</script>
@endsection