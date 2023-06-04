<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"]; 
            $datanascimento = $_POST["datanascimento"];           
            $cep = $_POST["cep"];
            $uf = $_POST["uf"];
            $cidade = $_POST["cidade"];
            $bairro = $_POST["bairro"];
            $rua = $_POST["rua"];
            $numero = $_POST["numero"];
           

            $sql = "INSERT INTO pacientes (cpf, nomepaciente, datanascimento, cep, uf, cidade, bairro, rua, numero) 
            VALUES ('{$cpf}','{$nome}','{$datanascimento}','{$cep}','{$uf}','{$cidade}','{$bairro}','{$rua}','{$numero}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Paciente cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
              }else{
                
              }

        break;    
    }
?>    