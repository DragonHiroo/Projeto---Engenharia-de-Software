@extends('layouts.layout')

@section('content')
<div class="resultado">
    <!-- Exibe os resultados ou mensagem "resultado não encontrado" dependendo do valor enviado pelo controller -->
    @if (!$realizadas)
    Nenhuma cirurgia encontrada!
    @else
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Início</th>
                    <th>Duração</th>
                    <th>Laudo</th>
                    <th>CPF paciente</th>
                    <th>CRM</th>
                    <th>Sala</th>
                </tr>
            </thead>
            <tbody>
                @foreach($realizadas as $row)
                <tr>
                    <td>{{ $row->data }}</td>
                    <td>{{ $row->hora_inicio }}</td>
                    <td>{{ $row->duracao }}</td>
                    <td>{{ $row->laudo }}</td>
                    <td>{{ $row->cpf_paciente }}</td>
                    <td>{{ $row->crm_medico }}</td>
                    <td>{{ $row->numero_sala }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2" id="titulo_topo">Cirurgias agendadas para este mês</h1>
</div>
<div class="resultado">
    <!-- Exibe os resultados ou mensagem "resultado não encontrado" dependendo do valor enviado pelo controller -->
    @if (!$agendadas)
    Nenhuma cirurgia encontrada!
    @else
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Início</th>
                    <th>Duração</th>
                    <th>Laudo</th>
                    <th>CPF paciente</th>
                    <th>CRM</th>
                    <th>Sala</th>
                </tr>
            </thead>
            <tbody>
                @foreach($realizadas as $row)
                <tr>
                    <td>{{ $row->data }}</td>
                    <td>{{ $row->hora_inicio }}</td>
                    <td>{{ $row->duracao }}</td>
                    <td>{{ $row->laudo }}</td>
                    <td>{{ $row->cpf_paciente }}</td>
                    <td>{{ $row->crm_medico }}</td>
                    <td>{{ $row->numero_sala }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

@endsection