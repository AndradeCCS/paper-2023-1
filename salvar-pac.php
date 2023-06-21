<pre>
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
                    print "<script>alert('Não foi possível cadastrar paciente!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                    }
            break;
    
            case 'editar':
                $nome = $_POST["nome"];
                $cpf = $_POST["cpf"];
                $datanascimento = $_POST["datanascimento"];
                $cep = $_POST["cep"];
                $uf = $_POST["uf"];
                $cidade = $_POST["cidade"];
                $bairro = $_POST["bairro"];
                $rua = $_POST["rua"];
                $numero = $_POST["numero"];
    
                $sql = "UPDATE pacientes SET
                    cpf = '{$cpf}', 
                    nomepaciente = '{$nome}',
                    datanascimento = '{$datanascimento}',
                    cep = '{$cep}',
                    uf = '{$uf}',
                    cidade = '{$cidade}',
                    bairro = '{$bairro}',
                    rua = '{$rua}',
                    numero = '{$numero}'
                WHERE
                    id=".$_REQUEST["id"];
    
                $res = $conn->query($sql);
                   
                if($res==true){
                    print "<script>alert('Paciente EDITADO com sucesso!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                    }else{
                    print "<script>alert('Não foi possível EDITAR!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                    }
            break;
    
            case 'excluir':
                $sql = "DELETE FROM pacientes WHERE id=".$_REQUEST["id"];
    
                $res = $conn->query($sql);
    
                if($res==true){
                    print "<script>alert('Paciente EXCLUÍDO com sucesso!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                    }else{
                    print "<script>alert('Não foi possível EXCLUIR!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                    }
            break;
        }
    ?>
</pre>
