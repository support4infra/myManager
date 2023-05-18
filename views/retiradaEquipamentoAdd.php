<div class="card">
<div class="card-block">
<h4 class="sub-title">Retirada de Equipamento</h4>
    <form>
        <center>
        <div class="col-sm-6">
            <label class="col-form-label">Número do Chamado</label>
            <input type="number" name="numero_chamado" class="form-control" readonly>
        </div>
        <div class="form-group row">
        </div>
        <div class="col-sm-6">
            <label class="col-form-label">Nome do Cliente</label>
            <input type="text" name="nome_cliente" class="form-control" readonly>
        </div>
        <div class="form-group row">
        </div>
        <div class="col-sm-6">
            <label class="col-form-label">E-mail do Cliente</label>
                <input type="text" name="email_cliente" class="form-control" readonly>
        </div>
        <div class="form-group row">
        </div>
        <div class="col-sm-6">
            <label class="col-form-label">Data de Retirada</label>
                <input type="date" type="date" id="data_retirada" name="data_retirada" class="form-control">
            </div>
        <div class="form-group row">
        </div>
        <div class="col-sm-6">
            <label class="col-form-label">Nome da Pessoa que está Retirando (Obrigatório)</label>
                <input type="text" name="nome_resposavel_retirada" class="form-control">
         </div>
         <div class="form-group row">
        </div>
        <div class="col-sm-6">
            <label class="col-form-label">CPF/RG da Pessoa que está Retirando</label>
                <input type="text" id="documento_resposavel_retirada" name="documento_resposavel_retirada" class="form-control">
        </div>
        <div class="form-group row">
        </div>
        <div class="col-sm-6">
            <label class="col-form-label">Telefone da Pessoa que está Retirando</label>
                <input type="text" id="telefone_resposavel_retirada" onkeyup="handlePhone(event)" name="telefone_resposavel_retirada" class="form-control" >
        </div>
        <div class="form-group row">
        </div>
        <div class="col-sm-6">
            <label class="col-form-label">Tecnico Responsável pela Entrega (Obrigatório)</label>
                <input type="text" name="tecnico_resposavel_entrega" class="form-control">
         </div>
        <div class="form-group row">
        </div>
        <div class="col-sm-6">
            <label class="col-form-label">Observação</label>
                <input type="text" class="form-control" name="observacao">
         </div>
        <div class="form-group row">
        </div>
         <div class="col-sm-6">
            <label class="col-form-label">Foto da Ficha da Máquina (Obrigatório)</label><br>
                <input class="form-control" type="file" id="arquivo" name="arquivo" placeholder="" multiple>
         </div>
        <div class="form-group row">
        </div>
        <div class="col-sm-6">
                <input type="submit" class="btn btn-primary" value="Enviar">
        </div>
        </center>
   </form>
    </div>
</div>