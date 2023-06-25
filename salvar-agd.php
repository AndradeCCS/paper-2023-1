<pre>
  <?php
    switch ($_REQUEST["acao"]) {
      case 'cadastrar':
          $paciente = $_POST["paciente"];
          $medico = $_POST["medico"];
          $datahora = $_POST["datahora"];
  
          $sql = "INSERT INTO agendamentos(idpaciente,idmedico,datahora) VALUES ('{$paciente}','{$medico}','{$datahora}')";
  
          $res = $conn->query($sql);
  
          if($res==true){
              print "<script>alert('Agendamento cadastrado com sucesso!');</script>";
              print "<script>location.href='?page=listar-agendamento';</script>";
            }else{
              print "<script>alert('Não foi possível cadastrar o agendamento!');</script>";
            }
  
        break;
  
        case 'editar-agd':
          $paciente = $_POST["paciente"];
          $medico = $_POST["medico"];
          $datahora = $_POST["datahora"];
          $id = $_REQUEST['id'];
  
          $sql = "UPDATE agendamentos SET
            idpaciente = '{$paciente}',
            idmedico = '{$medico}',
            datahora = '{$datahora}'
          WHERE id=".$id;

          var_dump($sql);
          $res = $conn->query($sql);
          
          if($res==true){
              print "<script>alert('Agendamento cadastrado com sucesso!');</script>";
              print "<script>location.href='?page=listar-agendamento';</script>";
            }else{
              print "<script>alert('Não foi possível cadastrar o agendamento!');</script>";
            }
  
        break;

        case 'excluir':
          $sql = "DELETE FROM agendamentos WHERE id=".$_REQUEST["id"];

          $res = $conn->query($sql);

          if($res==true){
              print "<script>alert('Agendamento EXCLUÍDO com sucesso!');</script>";
              print "<script>location.href='?page=listar-agendamentos';</script>";
              }else{
              print "<script>alert('Não foi possível EXCLUIR agendamento!');</script>";
              print "<script>location.href='?page=listar-agendamentos';</script>";
              }
      break;
      }
     ?>
</pre>