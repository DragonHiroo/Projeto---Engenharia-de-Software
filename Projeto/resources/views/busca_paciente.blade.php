@extends('layouts.layout')

@section('content')
<!--    Busca   -->
<form class="form-inline md-form form-sm active-cyan-2 mt-2">
    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Digite o nome do(a) paciente..." aria-label="Search">
    <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
    </button>
</form>
</div>
</form>

<script>
    $(document).attr("title", "Cirurgia - Busca por paciente");;
    $('#titulo_topo').text("Busca por paciente")
</script>
@endsection