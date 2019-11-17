@extends('layouts.layout')

@section('content')
<!--    Busca   -->
Exibe todas as cirurgias da especialidade buscada no período determinado.
<!--    Busca   -->
<form class="form-inline md-form form-sm active-cyan-2 mt-2" method="GET">
    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Digite o nome da especialidade..." aria-label="Busca" name="busca" id="busca_e">
    <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
    </button>
    <div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-3 border-bottom">
    <form action="" method="GET">
    <div class="form-group col-md-3">
    <label for="data_inicio">Data de início</label>
        <input type="date" class="form-control" placeholder="Data de início" name="data_i" required="required">
        </div>
    <div class="form-group col-md-5">
    <label for="data_fim">Data de fim</label>
        <input type="date" class="form-control" placeholder="Data de fim" name="data_f" required="required">
        </div>
        </div>
    </form>
</div>

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

<script>
    $(document).attr("title", "Cirurgia - Busca");;
    $('#titulo_topo').text("Busca por especialidade")
</script>

<script type
@endsection