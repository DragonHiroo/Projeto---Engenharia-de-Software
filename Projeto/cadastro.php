<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Guilherme Rodrigues, Matheus Santana, Matheus, Wilson">
  <title>Cirurgia</title>

  <!-- Bootstrap core CSS -->
  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS dashboard -->
  <link href="dashboard.css" rel="stylesheet">
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
              <a class="nav-link" href="cadastro_paciente.php">
                <!-- span data-feather="file-text"></span-->
                Cadastrar paciente
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" style="background-color: #067F6E; href="cadastro.php">
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
                <a class="nav-link" href="busca_medico.php">
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
          <h1 class="h2">Cirurgias</h1>
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

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <form action="">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Médico Responsável</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CRM">
                <small id="emailHelp" class="form-text text-muted">Por favor, digite o código CRM</small>
              </div>
              <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Enferméiro Responsavel</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="COREM">
                <small id="emailHelp" class="form-text text-muted">Por favor, digite o código COREM</small>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Paciente</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Código do Paciente">
                <small id="emailHelp" class="form-text text-muted">Por favor, digite o código do Paciente</small>
              </div>
              <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Especialidade</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Especialidade">
                <small id="emailHelp" class="form-text text-muted">Por favor, digite a Especialidade</small>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Data</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite a Data">
                <small id="emailHelp" class="form-text text-muted">Por favor, digite a Data</small>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleInputPassword1">Hora de Inicio</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Hora de Inicio">
                <small id="emailHelp" class="form-text text-muted">Por favor, digite a Hora de Inicio</small>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleInputPassword1">Hora de Término</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Hora de Termino">
                <small id="emailHelp" class="form-text text-muted">Por favor, digite a Hora de Termino</small>
              </div>
            </div>
            <button type="submit" class="btn text-light" style="background-color: #41CCA5;">Enviar</button>
          </form>
        </div>




        <!--canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas-->



      </main>
    </div>
  </div>
  <script src="node_modules/jquery/dist/jquery.slim.min"></script>
  <script src="node_modules/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>