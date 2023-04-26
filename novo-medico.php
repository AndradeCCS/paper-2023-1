<h2>Novo Medico</h2>
<form action="?page=med" method="post">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome"  class="form-control">
    </div>

    <div class="mb-3">
        <label>CRM</label>
        <input type="text" name="crm"  class="form-control">
    </div>
       
    <div class="mb-3">
        <label>Especialidade</label>
        <input type="text" name="especialidade"  class="form-control">
    </div>

    <div class="mb-3">
         <button type="submit" class="btn btn-primary">Enviar</button>
    </div>     
</form>