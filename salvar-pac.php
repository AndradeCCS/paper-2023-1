<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $cpf = $_POST["cpf"];
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $datanascimento = $_POST["datanascimento"];
            $leito = $_POST["leito"];

            $sql = "INSERT INTO pacientes (cpf, nome, endereco, datanascimento, leito) VALUES ('{$cpf}', '{$nome}', '{$endereco}',
             '{$datanascimento}', '{$leito}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Paciente cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
              }else{
                
              }


        break;    
    }
?>    