@extends('layouts.layout')

@section('content')
<!--    Busca   -->
<div>
    <form class="form-block md-form form-sm active-cyan-2 mt-2">
        <div class="form-inline">
            <input id="campo_busca" class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Digite o nome do(a) médico(a)..." aria-label="Busca" name="busca">
            <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
        </div>
        </button>
            <div class="d-block">
                Buscar por:
                    <select class="form-control" name="op" id="opcoes">
                        <option value="nome" selected="selected" id="n">Nome</option>
                        <option value="CRM" id="crm">CRM</option>
                    </select>
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