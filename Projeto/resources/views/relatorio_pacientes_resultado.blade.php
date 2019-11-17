@extends('layouts.layout')

@section('content')
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Paciente</th>
                <th>CPF</th>
                <th>Cirurgia realizada</th>
                <th>Médico</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>pacien</td>
                <td>cpf</td>
                <td>cirurg</td>
                <td>medi</td>
            </tr>
            <tr>
                <td>pacien</td>
                <td>cpf</td>
                <td><a href="#" id="#"> cirurg</td>
                <td><a href="#" id="#"> medi</td>
            </tr>
            <tr>
                <td>pacien</td>
                <td>cpf</td>
                <td>cirurg</td>
                <td>medi</td>
            </tr>
            <tr>
                <td>pacien</td>
                <td>cpf</td>
                <td>cirurg</td>
                <td>medi</td>
            </tr>
            <tr>
                <td>pacien</td>
                <td>cpf</td>
                <td>cirurg</td>
                <td>medi</td>
            </tr>
            <tr>
                <td>pacien</td>
                <td>cpf</td>
                <td>cirurg</td>
                <td>medi</td>
            </tr>
        </tbody>
    </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    

    $(document).attr("title", "Cirurgia - Relatório");;
    $('#titulo_topo').text("Relatório: Histórico de pacientes por cirurgia")
</script>
@endsection