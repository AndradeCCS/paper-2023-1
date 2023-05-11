<?php 
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php';</script>";
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Sistema de Controle Hospitalar</title> 
  </head>
  <body>
  
        
  <main>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <h2>Sistema de Gestão</h2>
                <div class="alinhamento-direita">        
                        <?php
                        print "Usuário: ". $_SESSION['usuario']. " ";
                        print "<a href='logout.php' class='btn btn-danger'>SAIR</a>";
                        ?>
                </div>
        </div>
    </nav>
    <!--Menus de navegação-->
    <section>
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
              </li>
              <li class="nav-item-medico">
                <a class="nav-link" href="?page=novom">Cadastrar Medico</a>
              </li>
              <li class="nav-item-paciente">
                <a class="nav-link" href="?page=novop">Cadastrar paciente</a>
              </li>
              <li class="nav-item-listar-paciente">
                <a class="nav-link" href="?page=listar">Listar Pacientes</a>
              </li>
              <li class="nav-item-listar-medicos">
                <a class="nav-link" href="?page=listar-medicos">Listar Médicos</a>
              </li>
              <li class="nav-item-agendar-consulta">
                <a class="nav-link" href="?page=novoagendamento">Agendar</a>
              </li>
              <li class="nav-item-listar-agendamentos">
                <a class="nav-link" href="?page=listar-agendamentos">Agendamentos</a>
              </li>
            </div>
            
        </div>

    <!-- Estrutura que direciona para as ações conforme switch -->
    </section>    
      <div class="container">
        <div class="row">
          <div class="col mt-5">
            <?php
              include("config.php");
              switch(@$_REQUEST["page"]) {
                case"novom":
                  include("novo-medico.php");
                break;
                case"novop":
                  include("novo-paciente.php");
                break;
                case"novoagendamento":
                  include("novo-agendar-consulta.php");
                break;
                case"listar":
                  include("listar-pacientes.php");
                break;
                case"listar-medicos":
                  include("listar-medicos.php");
                break;
                case"listar-agendamentos":
                  include("listar-agendamentos.php");
                break;
                case"med":
                  include("salvar-med.php");
                break;
                case"pac":
                  include("salvar-pac.php");
                break;
                case"agendamentos-salvo":
                  include("salvar-agd.php");
                break;
               
                }
            ?>
          </div>
        </div>
      </div>
    
  </main> 
      <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
