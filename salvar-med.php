<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
          $crm = $_POST["crm"];
          $ufcrm = $_POST["ufcrm"];
          $nome = $_POST["nome"];
          $especialidade = $_POST["especialidade"];
          
          $sql = "INSERT INTO medicos (nomemedico, crm, ufcrm, especialidade) VALUES ('{$nome}', '{$crm}', '{$ufcrm}', '{$especialidade}')";
          
          $res = $conn->query($sql);

          if($res==true){
            print "<script>alert('Médico cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
          }else{
            print "<script>alert('Não foi possível cadastrar novo médico');</script>";
          }
          
        break;
            
    }
?>    