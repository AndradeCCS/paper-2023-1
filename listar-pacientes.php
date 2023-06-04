<h2>Listar Pacientes</h2>

<?php
      $sql = "SELECT * FROM pacientes";

      $res = $conn->query($sql);

      $qtd = $res->num_rows;
     

      if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>Nome</th>";
        print "<th>CPF</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Endereco</th>";
        print "<th>Opções</th>";
        print "</tr>";         

        while($row = $res->fetch_object()){                           
          $rua = $row->rua;
          $numero= $row->numero;        
          $bairro = $row->bairro;
          $cidade = $row->cidade;
          $uf = $row->uf;
          $endereco = "$rua n°$numero, Bairro: $bairro, Cidade: $cidade, $uf." ;          

          print "<tr>";
          print "<td>".$row->nomepaciente."</td>";
          print "<td>".$row->cpf."</td>";
          print "<td>".$row->datanascimento."</td>";
          print "<td>".$endereco."</td>";
          print "<td>
                    <button class='btn btn-success'>Editar </button>
                    <button class='btn btn-danger'>Excluir</button>
                  </td>";
          print "</tr>";          
            
        }
      } 
  ?>

      