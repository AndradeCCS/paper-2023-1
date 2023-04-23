<h1>Medicamento</h1>
<form action="?page=listar-medicamento" method="post">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Medicamento</label>
        <input type="text" name="medicamento"  class="form-control">
    </div>

    <div class="mb-3">
        <label>Conteúdo</label>
        <input type="text" name="conteudo"  class="form-control">
    </div>
       
    <div class="mb-3">
        <label>Validade</label>
        <input type="date" name="validade"  class="form-control">
    </div>

    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao"  class="form-control">
    </div>

    <div class="mb-3">
         <button type="submit" class="btn btn-primary">Enviar</button>
    </div>     
</form>