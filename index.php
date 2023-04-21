<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Sistema de Controle Hospitalar</title> 
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema de Controle Hospitalar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                  case"listar":
                    include("listar-pacientes.php");
                  break;
                  case"med":
                    include("salvar-med.php");
                  break;
                  case"pac":
                    include("salvar-pac.php");
                  break;
                  
                   }
              ?>
            
            </div>
           </div>
          </div>
        </nav>  
         

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>