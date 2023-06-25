<h2>Novo Medico</h2>
<?php 
    $sql = "SELECT * FROM medicos where id =".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>
<form action="?page=med" method="post">
    <input type="hidden" name="acao" value="editar-med">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome"  class="form-control" value="<?php print $row->nomemedico; ?>">
    </div>

    <div class="mb-3">
        <label>CRM</label>
        <input type="text" name="crm"  class="form-control" maxlength="6" minlength="6" value="<?php print $row->crm; ?>">
    </div>

    <div class="mb-3">
        <label>UF CRM</label>
        <input type="text" name="ufcrm"  class="form-control" maxlength="2" minlength="2" value="<?php print $row->ufcrm; ?>">
    </div>
       
    <div class="mb-3">
        <label>Especialidade</label>
        <input type="text" name="especialidade"  class="form-control" value="<?php print $row->especialidade?>">
    </div>

    <div class="mb-3">
         <button type="submit" class="btn btn-primary">Enviar</button>
    </div>     
</form>