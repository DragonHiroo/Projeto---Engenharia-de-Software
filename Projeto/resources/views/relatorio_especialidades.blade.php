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
                    <th>Especialidade</th>
                    <th>Total de pacientes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($res as $index => $row)
                <tr>
                    <td>{{ $row->nome_especialidade }}</td>
                    <td>{{ $row->count }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).attr("title", "Cirurgia - Relatório");;
    $('#titulo_topo').text("Relatório: Total de pacientes por especialidade")
</script>
@endsection