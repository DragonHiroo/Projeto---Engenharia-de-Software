@extends('layouts.layout')

@section('content')
<div class="resultado">
    <!-- Exibe os resultados ou mensagem "resultado não encontrado" dependendo do valor enviado pelo controller -->
    @if (!$total || !$media || !$pacientes)
        Nenhuma cirurgia encontrada!
    @else
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>CRM</th>
                    <th>Nome</th>
                    <th>Total de cirurgias</th>
                    <th>Total de pacientes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($total as $index => $row)
                <tr>
                    <td>{{ $row->crm }}</td>
                    <td>{{ $row->nome }}</td>
                    <td>{{ $row->count }}</td>
                    <td>{{ $pacientes[$index]->count }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    Média de cirurgias: {{ $media[0]->avg }} cirurgias por médico.
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).attr("title", "Cirurgia - Relatório");;
    $('#titulo_topo').text("Relatório: Resumo geral de cirurgias")
</script>
@endsection