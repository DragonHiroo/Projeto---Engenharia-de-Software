@extends('layouts.layout')

@section('content')
<!--    Busca   -->
<form class="form-inline md-form form-sm active-cyan-2 mt-2" method="GET">
    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Digite o COREM do enfermeiro..." aria-label="Busca" name="busca" id="busca_e">
    <button class="btn btn-secondary" type="submit" >
        <i class="fa fa-search"></i>
    </button>
</form>

<div class="mt-2 md-2">
    <h5>Exibindo resultados de busca por {{ $busca }}:</h5>
</div>
<div class="resultado">
    <!-- Exibe os resultados ou mensagem "resultado não encontrado" dependendo do valor enviado pelo controller -->
    @if (!$res)
        Nenhum enfermeiro encontrado!
    @else
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>COREM</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach($res as $row)
                <tr>
                    <td><a href="/Projeto---Engenharia-de-Software/Projeto/public/busca/enfermeiro/{{ $row->corem }}">{{ $row->corem }}</a></td>
                    <td><a href="/Projeto---Engenharia-de-Software/Projeto/public/busca/enfermeiro/{{ $row->corem }}">{{ $row->nome }}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

<script>
    $(document).attr("title", "Cirurgia - Busca");;
    $('#titulo_topo').text("Busca por enfermeiros")
</script>
@endsection