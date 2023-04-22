<h1>Novo Paciente</h1>
<form action="?page=pac" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome"  class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf"  class="form-control">
    </div>
        <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco"  class="form-control">
    </div>
        <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="datanascimento"  class="form-control">
    </div>
        <div class="mb-3">
        <label>Leito</label>
        <input type="text" name="leito"  class="form-control"> 
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>     
</form>