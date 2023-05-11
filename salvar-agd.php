<?php
  switch ($_REQUEST["acao"]) {
    case 'cadastrar':
       
        $idpacientes = $_POST["paciente"];
        $idmedicos = $_POST["medico"];
        $datahora = $_POST["datahora"];
    
        $sql = "INSERT INTO agendamentos (idpacientes, idmedicos, datahora) VALUES ('{$idpacientes}', '{$idmedicos}',
         '{$datahora}')";

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Agendamento cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar-agendamento';</script>";
          }else{
            print "<script>alert('Não foi possível cadastrar o agendamento!');</script>";
          }

    break;    
}
   ?>