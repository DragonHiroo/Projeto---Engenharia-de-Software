@extends('layouts.layout')

@section('content')
<!--    Busca   -->
<form class="form-inline md-form form-sm active-cyan-2 mt-2" method="GET">
    <input class="form-control form-control-sm mr-3 w-75" type="number" placeholder="Digite o COREM do enfermeiro..." aria-label="Busca" name="busca" id="busca_e">
    <button class="btn btn-secondary" type="submit" >
        <i class="fa fa-search"></i>
    </button>
</form>

<script>
    $(document).attr("title", "Cirurgia - Busca");;
    $('#titulo_topo').text("Busca por enfermeiros")
</script>
@endsection