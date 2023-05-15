<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Perfil</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="<?php echo BASE_URL;?>dashboard"> <i class="fa fa-street-view"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Administração
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>perfil">Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4 >Editar Perfil</h4>
    </div>
    <div class="card-block">
        <form method="POST">
            <div class="col-sm-4">
                <div class="alert alert-warning">
                    Para selecionar mais que uma persmissão ao Perfil, pressione <strong>"Ctrl"</strong>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="nome" value="<?php echo $perfilInfo['nome'];?>" placeholder="Nome do Perfil">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <select name="permissoes[]" class="form-control" multiple>
                            <option disabled>Selecione as Permissões</option>
                            <?php foreach($getListPermissao as $permissao):?>
                            <option value="<?php echo $permissao['id'];?>" <?php echo (in_array($permissao['id'],$perfilInfo['parametros']))?'selected':'' ;?>><?php echo $permissao['nome'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
            </div>        
            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <a href="<?php echo BASE_URL?>perfil" class="btn btn-danger mobtn">Cancelar</a>
                        <input type="submit" class="btn btn-primary" value="Salvar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>