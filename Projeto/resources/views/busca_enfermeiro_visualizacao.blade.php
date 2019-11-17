@extends('layouts.layout')

@section('content')
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
                    <th>COREM do enfermeiro</th>
                    <th>Nome do enfermeiro</th>
                    <th>Data</th>
                    <th>CPF do paciente</th>
                    <th>Início</th>
                    <th>Duração</th>
                </tr>
            </thead>
            <tbody>
                @foreach($res as $row)
                <tr>
                    <td>{{ $row->corem }}</td>
                    <td>{{ $row->nome }}</td>
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
    $('#titulo_topo').text("Busca por enfermeiros")
</script>
@endsection