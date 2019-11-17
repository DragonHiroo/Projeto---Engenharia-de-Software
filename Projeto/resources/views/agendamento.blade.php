@extends('layouts.layout')

@section('content')
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Código</th>
                <th>Médico</th>
                <th>Paciente</th>
                <th>Especialidade</th>
                <th>Duração</th>
                <th>Alterar</th>
                <th>Remover</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0001</td>
                <td>João Carlos Lamborguini</td>
                <td>José Amaral Ferrari</td>
                <td>Cardiologia</td>
                <td>12 Horas</td>
                <td>
                    <a href="#" id="#">
                    Alterar
                    </a>
                </td>
                <td>
                    <a href="#" id="#">
                    Remover
                    </a>
                </td>
            </tr>
            <tr>
                <td>0001</td>
                <td>João Carlos Lamborguini</td>
                <td>José Amaral Ferrari</td>
                <td>Cardiologia</td>
                <td>12 Horas</td>
                <td>
                    <a href="#" id="#">
                    Alterar
                    </a>
                </td>
                <td>
                    <a href="#" id="#">
                    Remover
                    </a>
                </td>
            </tr>
            <tr>
                <td>0001</td>
                <td>João Carlos Lamborguini</td>
                <td>José Amaral Ferrari</td>
                <td>Cardiologia</td>
                <td>12 Horas</td>
                <td>
                    <a href="#" id="#">
                    Alterar
                    </a>
                </td>
                <td>
                    <a href="#" id="#">
                    Remover
                    </a>
                </td>
            </tr>
            <tr>
                <td>0001</td>
                <td>João Carlos Lamborguini</td>
                <td>José Amaral Ferrari</td>
                <td>Cardiologia</td>
                <td>12 Horas</td>
                <td>
                    <a href="#" id="#">
                    Alterar
                    </a>
                </td>
                <td>
                    <a href="#" id="#">
                    Remover
                    </a>
                </td>
            </tr>
            <tr>
                <td>0001</td>
                <td>João Carlos Lamborguini</td>
                <td>José Amaral Ferrari</td>
                <td>Cardiologia</td>
                <td>12 Horas</td>
                <td>
                    <a href="#" id="#">
                    Alterar
                    </a>
                </td>
                <td>
                    <a href="#" id="#">
                    Remover
                    </a>
                </td>
            </tr>
            <tr>
                <td>0001</td>
                <td>João Carlos Lamborguini</td>
                <td>José Amaral Ferrari</td>
                <td>Cardiologia</td>
                <td>12 Horas</td>
                <td>
                    <a href="#" id="#">
                    Alterar
                    </a>
                </td>
                <td>
                    <a href="#" id="#">
                    Remover
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    $(document).attr("title", "Agendamentos");;
    $('#titulo_topo').text("Agendamentos")
</script>
@endsection