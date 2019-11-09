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