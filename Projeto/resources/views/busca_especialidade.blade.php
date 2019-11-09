@extends('layouts.layout')

@section('content')
<!--    Busca   -->
<form class="form-inline md-form form-sm active-cyan-2 mt-2" method="GET">
    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Digite o nome da especialidade..." aria-label="Busca" name="busca" id="busca_e">
    <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
    </button>
</form>
<div class="resultados" style="visibility: hidden">
    <h5 class="mt-3">Resultados da busca por "texto":</h5>
    <div class="table-responsive mt-3" id>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Médico</th>
                        <th>Paciente</th>
                        <th>Especialidade</th>
                        <th>Duração</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0001</td>
                        <td>João Carlos Lamborguini</td>
                        <td>José Amaral Ferrari</td>
                        <td>Cardiologia</td>
                        <td>12 Horas</td>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>João Carlos Lamborguini</td>
                        <td>José Amaral Ferrari</td>
                        <td>Cardiologia</td>
                        <td>12 Horas</td>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>João Carlos Lamborguini</td>
                        <td>José Amaral Ferrari</td>
                        <td>Cardiologia</td>
                        <td>12 Horas</td>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>João Carlos Lamborguini</td>
                        <td>José Amaral Ferrari</td>
                        <td>Cardiologia</td>
                        <td>12 Horas</td>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>João Carlos Lamborguini</td>
                        <td>José Amaral Ferrari</td>
                        <td>Cardiologia</td>
                        <td>12 Horas</td>
                    </tr>
                    <tr>
                        <td>0001</td>
                        <td>João Carlos Lamborguini</td>
                        <td>José Amaral Ferrari</td>
                        <td>Cardiologia</td>
                        <td>12 Horas</td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>

<script>
    $(document).attr("title", "Cirurgia - Busca");;
    $('#titulo_topo').text("Busca por especialidade")
</script>

<script type
@endsection