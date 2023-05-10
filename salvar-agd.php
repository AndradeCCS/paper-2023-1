<?php
  switch ($_REQUEST["acao"]) {
    case 'cadastrar':
       
        $id = $_POST["id"];
        $cpf_pacientes = $_POST["Paciente"];
        $crm_medicos = $_POST["Medico"];
        $datahora = $_POST["datahora"];
    
        $sql = "INSERT INTO agendamentos (id, Paciente, Medico, datahora) VALUES ('{$id}', '{$cpf_pacientes}', '{$crm_medicos}',
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