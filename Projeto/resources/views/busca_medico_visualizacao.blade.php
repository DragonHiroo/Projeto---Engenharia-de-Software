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
        if (opcao == 'CRM')
            $('#campo_busca').attr('type', 'number');
        else
            $('#campo_busca').attr('type', 'text');
    })

    $(document).attr("title", "Cirurgia - Busca");;
    $('#titulo_topo').text("Busca por médicos")
</script>
@endsection