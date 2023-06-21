<h2>Editar Pacientes</h2>
<?php 
    $sql = "SELECT * FROM pacientes where id =".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=pac" method="post" class="row g-1">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    
    <div class="col-md-12">
        <label>Nome</label>
        <input type="text" name="nome"  class="form-control" value="<?php print $row->nomepaciente; ?>">
    </div>
    <div class="col-md-7">
        <label>CPF</label>
        <input type="int" name="cpf"  class="form-control" maxlength="11" minlength="11" value="<?php print $row->cpf; ?>">
    </div>   
    <div class="col-md-5">
        <label>Data de Nascimento</label>
        <input type="date" name="datanascimento"  class="form-control" value="<?php print $row->datanascimento; ?>">
    </div>
    <div class="col-md-5">
        <label class="form-label">CEP</label>
        <input type="int" name="cep"  class="form-control" maxlength="8" minlength="8" value="<?php print $row->cep; ?>">
    </div>
    <div class="col-md-2">
        <label class="form-label">Estado(UF)</label>
        <input type="text" name="uf"  class="form-control" value="<?php print $row->uf; ?>">
    </div>
    <div class="col-md-5">
        <label class="form-label">Cidade</label>
        <input type="text" name="cidade"  class="form-control" value="<?php print $row->cidade; ?>">
    </div>
    <div class="col-md-5">
        <label class="form-label">Bairro</label>
        <input type="text" name="bairro"  class="form-control" value="<?php print $row->bairro; ?>">
    </div>
    <div class="col-md-5">
        <label class="form-label">Endereço</label>
        <input type="text" name="rua"  class="form-control" value="<?php print $row->rua; ?>">
    </div>
    <div class="col-md-2">
        <label class="form-label">Número</label>
        <input type="text" name="numero"  class="form-control" value="<?php print $row->numero;?>">
    </div>   
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>     
</form>

      