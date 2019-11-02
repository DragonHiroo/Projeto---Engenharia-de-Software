@extends('layouts.layout')

@section('content')
<!--    Busca   -->
<div>
    <form class="form-inline md-form form-sm active-cyan-2 mt-2">
        <input id="campo_busca" class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Digite o nome do(a) médico(a)..." aria-label="Search">
        <button class="btn btn-secondary" type="button">
            <i class="fa fa-search"></i>
        </button>
    </form>
    <div>
        Buscar por:
        <form>
            <select class="form-control" name="op" id="opcoes">
                <option value="nome" selected="selected" id="n">Nome</option>
                <option value="CRM" id="crm">CRM</option>
            </select>
        </form>
    </div>
</div>
</div>
</form>

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