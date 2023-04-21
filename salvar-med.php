<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $crm = $_POST["crm"];
            $nome = $_POST["nome"];
            $especialidade = $_POST["especialidade"];
            
            $sql = "INSERT INTO medicos (nome, crm, especialidade) VALUES ('{$crm}', '{$nome}', '{$especialidade}')";
            
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