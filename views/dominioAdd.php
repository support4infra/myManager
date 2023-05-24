<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Domínio</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="<?php echo BASE_URL;?>dominio"> <i class="fa fa-envelope"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Leads
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>dominio">Domínio</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php if (isset($alerta) && !empty($alerta)):?>
    <div class="alert alert-warning background-warning">
        <strong><?php echo $alerta;?></strong>
    </div>
<?php endif;?>
                                                                
<div class="card">
    <div class="card-header">
        <h4 >Cadastrar Novo Domínio</h4>
    </div>
    <div class="card-block">
        <form method="POST">
            <div class="form-group row">
                <label class="col-sm-1 col-form-label">Cliente</label>
                <div class="col-sm-5">
                    <input type="text" name="nomeCliente" class="form-control" placeholder="Nome do Cliente">
                </div>
                <label class="col-sm-1 col-form-label">Domínio</label>
                <div class="col-sm-5">
                    <input type="text" name="nomeDominio" class="form-control" placeholder="dominio.com.br">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <a href="<?php echo BASE_URL?>dominio" class="btn btn-danger mobtn">Cancelar</a>
                        <input type="submit" class="btn btn-primary" value="Salvar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>