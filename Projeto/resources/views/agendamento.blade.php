@extends('layouts.layout')

@section('content')

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
    $(document).attr("title", "Agendamentos");;
    $('#titulo_topo').text("Agendamentos")
</script>
@endsection