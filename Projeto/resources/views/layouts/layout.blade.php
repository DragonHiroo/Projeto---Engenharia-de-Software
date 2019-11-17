<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Guilherme Rodrigues, Matheus Santana, Matheus, Wilson">

    <meta name="_token" content="{{ csrf_token() }}">

    <title>Cirurgia</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS dashboard -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #067F6E;">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">Hospital - Cirurgias</a>

        <ul class="navbar-nav px-3">
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Cadastro</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="/Projeto---Engenharia-de-Software/Projeto/public/cadastro/paciente" id="cadastro_paciente">
                                <!-- span data-feather="file-text"></span-->
                                Cadastrar paciente
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Projeto---Engenharia-de-Software/Projeto/public/cadastro/cirurgia" id="cadastro_cirurgia">
                                <!-- span data-feather="file-text"></span-->
                                Cadastrar cirurgia
                            </a>
                        </li>
                        </h6>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Buscas</span>
                        <a class="d-flex align-items-center text-muted">
                            <!--span data-feather="plus-circle"></span-->
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="/Projeto---Engenharia-de-Software/Projeto/public/busca/medico">
                                <!-- span data-feather="file-text"></span-->
                                Buscar por médicos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Projeto---Engenharia-de-Software/Projeto/public/busca/enfermeiro">
                                <!-- span data-feather="file-text"></span-->
                                Buscar por enfermeiros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Projeto---Engenharia-de-Software/Projeto/public/busca/paciente">
                                <!-- span data-feather="file-text"></span-->
                                Buscar por pacientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Projeto---Engenharia-de-Software/Projeto/public/busca/especialidade">
                                <!-- span data-feather="file-text"></span-->
                                Buscar por especialidades
                            </a>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Relatórios</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="/Projeto---Engenharia-de-Software/Projeto/public/relatorio/cirurgias" id="relatorio_geral">
                                <!-- span data-feather="file-text"></span-->
                                Resumo geral de cirurgias
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Projeto---Engenharia-de-Software/Projeto/public/relatorio/pacientes" id="relatorio_pacientes">
                                <!-- span data-feather="file-text"></span-->
                                Histórico de pacientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Projeto---Engenharia-de-Software/Projeto/public/relatorio/especialidades" id="relatorio_especialidades">
                                <!-- span data-feather="file-text"></span-->
                                Histórico de cirurgias por especialidade
                            </a>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Agendamento</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="/Projeto---Engenharia-de-Software/Projeto/public/agendamento/" id="agendamentos">
                                <!-- span data-feather="file-text"></span-->
                                Visualizar agendamentos
                            </a>
                        </li>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2" id="titulo_topo">Cirurgias realizadas neste mês</h1>
                </div>
                @yield('content')

        </div>
        </main>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>