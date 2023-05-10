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
    <header></header> 
        
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
              <li class="nav-item-medicamento">
                <a class="nav-link" href="?page=novomedicamento">Cadastrar Medicamento</a>
              </li>
              <li class="nav-item-listar-paciente">
                <a class="nav-link" href="?page=listar">Listar Pacientes</a>
              </li>
              <li class="nav-item-listar-medicamento">
                <a class="nav-link" href="?page=listar-medicamento">Listar Medicamentos</a>
              </li>
              <li class="nav-item-agendar-consulta">
                <a class="nav-link" href="?page=agendar">Agendar</a>
              </li>
              <li class="nav-item-agendamentos">
                <a class="nav-link" href="?page=agendamentos">Agendamentos</a>
              </li>
            </div>
            
        </div>
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
                case"novomedicamento":
                  include("novo-medicamento.php");
                break;
                case"listar":
                  include("listar-pacientes.php");
                break;
                case"listar-medicamento":
                  include("listar-medicamento.php");
                break;
                case"med":
                  include("salvar-med.php");
                break;
                case"pac":
                  include("salvar-pac.php");
                break;
                case"medicamento":
                  include("salvar-medicamento.php");
                break;
                case"agendar":
                  include("agendar-consulta.php");
                  break;
                case"agendamentos":
                include("agendamentos.php");
                break;
                }
            ?>
          </div>
        </div>
      </div>
    
  </main> 
      <script src="js/bootstrap.bundle.min.js"></>
</html>