<h2>Listar Pacientes</h2>

<?php
      $sql = "SELECT * FROM medicos";

      $res = $conn->query($sql);

      $qtd = $res->num_rows;
     

      if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>Nome</th>";
        print "<th>CRM</th>";
        print "<th>UF CRM</th>";
        print "<th>Especialidade</th>";
        print "<th>Opções</th>";
        print "</tr>";         

        while($row = $res->fetch_object()){                                

          print "<tr>";
          print "<td>".$row->nomemedico."</td>";
          print "<td>".$row->crm."</td>";
          print "<td>".$row->ufcrm."</td>";
          print "<td>".$row->especialidade."</td>";
          print "<td>
                    <button class='btn btn-success'>Editar </button>
                    <button class='btn btn-danger'>Excluir</button>
                  </td>";
          print "</tr>";          
            
        }
      } 
  ?>

      