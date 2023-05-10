<h2>Agendar</h2>
<form action="?page=agendar" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="col-md-12">
        <label>Paciente</label>
        <select class="inputOSel">
            <option selected></option>
            <?php 
           mysqli_set_charset($conn,'utf8') or die(mysqli_error($conn));
           $sql = mysqli_query($conn,"SELECT cpf,nome FROM pacientes");
           while($row = mysqli_fetch_assoc($sql)) {
            echo "<option value=".$row['cpf'].">".$row['nome']."</>option";
           }
            ?>
        </select>
    </div>
    <div class="col-md-12">
        <label>Medico</label>
        <select class="inputOSel">
            <option selected></option>
            <?php 
           mysqli_set_charset($conn,'utf8') or die(mysqli_error($conn));
           $sql = mysqli_query($conn,"SELECT crm,nome FROM medicos");
           while($row = mysqli_fetch_assoc($sql)) {
            echo "<option value=".$row['crm'].">".$row['nome']."</>option";
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