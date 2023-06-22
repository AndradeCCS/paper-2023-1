<h2>Listar Agendamentos</h2>

<?php
     $sql = "SELECT ag.id as id, pa.nomepaciente, me.nomemedico, me.especialidade, ag.datahora FROM 
     agendamentos ag join pacientes pa join medicos me on ag.idpaciente = pa.id and ag.idmedico = me.id";
   
      
      $res = $conn->query($sql);  

      $qtd = $res->num_rows;
     

      if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>Paciente</th>";
        print "<th>Médico</th>";
        print "<th>Especialidade</th>";
        print "<th>Horário</th>";   
        print "<th>Opções</th>";  
        print "</tr>";         

        while($row = $res->fetch_object()){                           
                  

          print "<tr>";
          print "<td>".$row->nomepaciente."</td>";
          print "<td>".$row->nomemedico."</td>";
          print "<td>".$row->especialidade."</td>";
          print "<td>".$row->datahora."</td>";
    
          print " <td>
                    <button class='btn btn-success' onclick=\"location.href='?page=editar-agd&id=".$row->id."';\">Editar</button>
                    <a href='excluir.php?id=".$row->id."' class='btn btn-danger'>Deletar</a>
                  </td>";
          print "</tr>";          
            
        }
      } 
  ?>


