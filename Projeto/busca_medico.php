<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Guilherme Rodrigues, Matheus Santana, Matheus, Wilson">
    <title>Cirurgia - Busca por enfermeiros</title>

    <!-- Bootstrap core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS dashboard -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #067F6E;">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">Hospital - Cirurgias</a>

        <!--input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"-->
        <ul class="navbar-nav px-3">
            <!-- 
            <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
            </li>
            -->
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
                            <a class="nav-link" href="#">
                                <!-- span data-feather="file-text"></span-->
                                Cadastrar paciente
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastro.php">
                                <!-- span data-feather="file-text"></span-->
                                Cadastrar cirurgia
                            </a>
                        </li>
                        </h6>
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Buscas</span>
                            <a class="d-flex align-items-center text-muted">
                                <!--span data-feather="plus-circle"></span-->
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link active text-white" style="background-color: #067F6E;" href="busca_medico.php">
                                    <!-- span data-feather="file-text"></span-->
                                    Buscar por médicos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="busca_enfermeiros.php">
                                    <!-- span data-feather="file-text"></span-->
                                    Buscar por enfermeiros
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="busca_paciente.php">
                                    <!-- span data-feather="file-text"></span-->
                                    Buscar por pacientes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="busca_especialidade.php">
                                    <!-- span data-feather="file-text"></span-->
                                    Busca por especialidades
                                </a>
                            </li>
                        </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Busca por médico</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <!--button type="button" class="btn btn-sm btn-outline-secondary">Share</button-->
                            <!--button type="button" class="btn btn-sm btn-outline-secondary">Export</button-->
                        </div>
                        <!--button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button-->
                    </div>
                </div>

                <!--    Busca   -->
                <div>
                    <form class="form-inline md-form form-sm active-cyan-2 mt-2">
                        <input id="campo_busca" class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Digite o nome do(a) médico(a)..." aria-label="Search">
                        <button class="btn btn-secondary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                    <div>
                        Buscar por:
                        <form>
                            <select class="form-control" name="op" id="opcoes">
                                <option value="nome" selected="selected" id="n">Nome</option>
                                <option value="CRM" id="crm">CRM</option>
                            </select>
                        </form>
                    </div>
                </div>
        </div>
        </form>

        <!-- Trocando placeholder -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $('#opcoes').on('change', function() {
                var opcao = $(this).find('option:selected').val()
                $('#campo_busca').attr('placeholder', 'Digite o ' + opcao + ' do(a) médico(a)...')
            })
        </script>

        </main>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>