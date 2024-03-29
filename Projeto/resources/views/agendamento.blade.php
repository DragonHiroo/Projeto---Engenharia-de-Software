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
                    <th>Data</th>
                    <th>Início</th>
                    <th>Término</th>
                    <th>CPF paciente</th>
                    <th>COREM enfermeiro</th>
                    <th>Sala</th>
                    <th>Laudo</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>
                @foreach($res as $row)
                <tr>
                    <td>{{ $row->crm_medico }}</td>
                    <td>{{ $row->data }}</td>
                    <td>{{ $row->hora_inicio }}</td>
                    <td>{{ $row->hora_termino }}</td>
                    <td>{{ $row->cpf_paciente }}</td>
                    <td>{{ $row->corem_enfermeiro }}</td>
                    <td>{{ $row->numero_sala }}</td>
                    <td>{{ $row->laudo }}</td>
                    <td><a href="/Projeto---Engenharia-de-Software/Projeto/public//agendamento/remocao/{{ $row->cpf_paciente }}/{{ $row->data }}">Remover</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

@if ($remocao == 1)
<script type='text/javascript'>alert('Agendamento cancelado com sucesso!');</script>
@elseif ($remocao == -1)
<script type='text/javascript'>alert('Falha ao cancelar agendamento!');</script>
@endif

@if ($alterar == 1)
<script type='text/javascript'>alert('Alteração realizada com sucesso!');</script>
@elseif ($alterar == -1)
<script type='text/javascript'>alert('Falha ao atualizar agendamento!');</script>
@endif

<script>
    $(document).attr("title", "Cirurgia - Agendamentos");;
    $('#titulo_topo').text("Agendamentos")
</script>
@endsection