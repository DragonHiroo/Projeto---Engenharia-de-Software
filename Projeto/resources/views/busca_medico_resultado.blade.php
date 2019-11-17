@extends('layouts.layout')

@section('content')
<!--    Busca   -->
<div>
    <form class="form-block md-form form-sm active-cyan-2 mt-2">
        <div class="form-inline">
            <input id="campo_busca" class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Digite o nome do(a) médico(a)..." aria-label="Busca" name="busca" required="required">
            <button class="btn btn-secondary" type="submit">
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
    @if (!$res)
        Nenhum resultado encontrado!
    @else
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>CRM</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach($res as $row)
                <tr>
                    <td><a href="/Projeto---Engenharia-de-Software/Projeto/public/busca/medico/{{ $row->crm }}">{{ $row->crm }}</a></td>
                    <td><a href="/Projeto---Engenharia-de-Software/Projeto/public/busca/medico/{{ $row->crm }}">{{ $row->nome }}</a></td>
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