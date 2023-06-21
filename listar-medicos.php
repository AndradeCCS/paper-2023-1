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
          print " <td>
                    <button class='btn btn-success' onclick=\"location.href='?page=editar-med&id=".$row->id."';\">Editar</button>
                    <button class='btn btn-danger' onclick=\"if(comfirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\">Excluir</button>
                  </td>";
          print "</tr>";          
            
        }
      } 
  ?>

      