<h2>Novo Paciente</h2>
<form action="?page=pac" method="post" class="row g-1">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="col-md-12">
        <label>Nome</label>
        <input type="text" name="nome"  class="form-control">
    </div>
    <div class="col-md-7">
        <label>CPF</label>
        <input type="int" name="cpf"  class="form-control" maxlength="11" minlength="11">
    </div>   
    <div class="col-md-5">
        <label>Data de Nascimento</label>
        <input type="date" name="datanascimento"  class="form-control">
    </div>
    <div class="col-md-5">
        <label class="form-label">CEP</label>
        <input type="int" name="cep"  class="form-control" maxlength="8" minlength="8">
    </div>
    <div class="col-md-2">
        <label class="form-label">Estado(UF)</label>
        <input type="text" name="uf"  class="form-control">
    </div>
    <div class="col-md-5">
        <label class="form-label">Cidade</label>
        <input type="text" name="cidade"  class="form-control">
    </div>
    <div class="col-md-5">
        <label class="form-label">Bairro</label>
        <input type="text" name="bairro"  class="form-control">
    </div>
    <div class="col-md-5">
        <label class="form-label">Endereço</label>
        <input type="text" name="rua"  class="form-control">
    </div>
    <div class="col-md-2">
        <label class="form-label">Número</label>
        <input type="text" name="numero"  class="form-control">
    </div>   
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>     
</form>