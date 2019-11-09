@extends('layouts.layout')

@section('content')
<!--    Busca   -->
<form class="form-inline md-form form-sm active-cyan-2 mt-2">
    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Digite o nome do(a) paciente..." aria-label="Search" name="busca">
    <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
    </button>
</form>

<div class="mt-2 md-2">
        <h5>Resultados da busca por: {{$busca}}</h5>
    </div>
    <div class="resultado">
        <!-- Exibe os resultados ou mensagem "resultado não encontrado" dependendo do valor enviado pelo controller -->
    <?php if ($res == 'n_enc') { ?>
        Resultado não encontrado!
    <?php } else if ($res == 'enc') { ?>
        Resultado encontrado!
        <div class="table-responsive">
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
    <?php } ?>
    </div>

<script>
    $(document).attr("title", "Cirurgia - Busca por paciente");;
    $('#titulo_topo').text("Busca por paciente")
</script>
@endsection