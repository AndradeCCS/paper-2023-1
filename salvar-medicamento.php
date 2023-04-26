<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
           
            $medicamento = $_POST["medicamento"];
            $conteudo = $_POST["conteudo"];
            $validade = $_POST["validade"];
            $descricao = $_POST["descricao"];
        
            $sql = "INSERT INTO medicamentos (medicamento, conteudo, validade, descricao) VALUES ('{$medicamento}', '{$conteudo}', '{$validade}',
             '{$descricao}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Medicamento cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar-medicamento';</script>";
              }else{
                
              }

        break;    
    }
?>    