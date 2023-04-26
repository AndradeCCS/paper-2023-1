<h2>Medicamentos</h2>

<?php
      $sql = "SELECT * FROM medicamentos";

      $res = $conn->query($sql);

      $qtd = $res->num_rows;

      if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>Medicamento</th>";
        print "<th>Conteúdo</th>";
        print "<th>Validade</th>";
        print "<th>Opções</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->medicamento."</td>";
            print "<td>".$row->conteudo."</td>";
            print "<td>".$row->validade."</td>";
            print "<td>
                       <button class='btn btn-success'>Editar</button>
                       <button class='btn btn-danger'>Excluir</button></td>";
            print "</tr>";        
        }
      }      