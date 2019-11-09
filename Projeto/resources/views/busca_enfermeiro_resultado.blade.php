@extends('layouts.layout')

@section('content')
<!--    Busca   -->
<form class="form-inline md-form form-sm active-cyan-2 mt-2" method="GET">
    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Digite o nome da especialidade..." aria-label="Busca" name="busca" id="busca_e">
    <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
    </button>
</form>
<script>
    $(document).attr("title", "Cirurgia - Busca");;
    $('#titulo_topo').text("Busca por enfermeiros")
</script>

<div class="mt-2 md-2">
        <h5>Resultados da busca por: {{$busca}}</h5>
    </div>
    <div class="resultado">
        <!-- Exibe os resultados ou mensagem "resultado não encontrado" dependendo do valor enviado pelo controller -->
    <?php if ($res == 'n_enc') { ?>
        Resultado não encontrado!
    <?php } else if ($res == 'enc') { ?>
        Resultado encontrado!
    <?php } ?>
</div>

@endsection