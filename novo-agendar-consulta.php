<h2>Agendar</h2>
<form action="?page=agendamentos-salvo" method="post">
    <input type="hidden" name="acao" value="cadastrar">
  
    <div class="mb-3">
        <label>Paciente</label>            
        <select class="inputOSel" name="paciente" id="paciente">
            <option selected></option>
            <?php 
            
           mysqli_set_charset($conn,'utf8') or die(mysqli_error($conn));
           $sql = mysqli_query($conn,"SELECT id,cpf,nomepaciente FROM pacientes");
           while($row = mysqli_fetch_assoc($sql)) {
            $paciente = $row['nome']." - ".$row['cpf'];
            echo "<option value=".$row['id'].">".$row['nomepaciente']."</option>";
           }           
            ?>
        </select>
    </div>
    <div class="col-md-12">
        <label>Medico</label>
        <select class="inputOSel" name="medico" id="medico">
            <option selected ></option>
         
           <?php           
                mysqli_set_charset($conn,'utf8') or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id,crm,nomemedico,especialidade FROM medicos");
                while($row = mysqli_fetch_assoc($sql)) {
                    $medicos = $row['nome']." CRM: ".$row['crm']." - ".$row['especialidade'];
                    echo "<option value=".$row['id'].">".$row['nomemedico']."</option>";
                }            
            ?>            
        </select>
    </div>
    <div class="form-group">
        <label for="datahora">Data e Hora:</label>
        <input type="datetime-local" class="form-control" id="datahora" name="datahora" required>
    </div> 
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>   
     
</form>