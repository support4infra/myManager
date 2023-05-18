<div class="card">
                                                <div class="card-block">
                                                    <h4 class="sub-title">Retirada de Equipamento</h4>
                                                    <form>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Número do Ticket</label>
                                                            <div class="col-sm-10">
                                                                <input type="number" name="numero_chamado" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nome do Cliente</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="nome_cliente" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">E-mail do Cliente</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="email_cliente" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Data de Retirada</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" type="date" id="data_retirada" name="data_retirada" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nome da Pessoa que está Retirando (Obrigatório)</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="nome_resposavel_retirada" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">CPF/RG da Pessoa que está Retirando</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="documento_resposavel_retirada" name="documento_resposavel_retirada" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Telefone da Pessoa que está Retirando</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" id="telefone_resposavel_retirada" onkeyup="handlePhone(event)" name="telefone_resposavel_retirada" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Tecnico Responsável pela Entrega (Obrigatório)</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="tecnico_resposavel_entrega" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Observação</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="observacao">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Foto da Ficha da Máquina (Obrigatório)</label>
                                                            <div class="col-sm-10">
                                                                <input class="input100" type="file" id="arquivo" name="arquivo" placeholder="" multiple>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>