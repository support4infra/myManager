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
                        <a href="<?php echo BASE_URL;?>dashboard"> <i class="fa fa-dashboard"></i> </a>
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
    <div class="card-block">
        <button type="button" class="btn btn-primary sweet-1 m-b-10" data-toggle="modal" data-target="#myModal">Adicionar Perfil</button>
        </br></br>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>AÇÃO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($getListPerfil as $perfil):?>
                    <tr>
                        <th scope="row"><?php echo $perfil['id'];?></th>                      
                        <td class="tabledit-view-mode">
                            <span class="tabledit-span"><?php echo $perfil['nome'];?></span>
                        </td>
                        <td style="white-space: nowrap; width: 1%;">
                            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                <div class="btn-group btn-group-sm" style="float: none;">
                                    <a href="<?php echo BASE_URL ;?>perfil/edit/<?php echo $perfil['id'];?>" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;">                  
                                        <span class="icofont icofont-ui-edit"></span>
                                    </a>
                                    <a href="<?php echo BASE_URL ;?>perfil/delet/<?php echo $perfil['id'];?>" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;">
                                        <span class="icofont icofont-ui-delete"></span>
                                    </a>
                                </div>    
                            </div>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Criar Novo Perfil</h4>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form method="POST">
                        <div class="col-sm-12">
                            <div class="alert alert-warning">
                                Para selecionar mais que uma persmissão ao Perfil, pressione <strong>"SHIFT"</strong>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Nome do Perfil" require="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="col-sm-12">
                                    <select name="perfil" class="form-control" multiple>
                                        <option disabled selected>Selecione as Permissões</option>
                                        <option value="Super-Admin">Super-Admin</option>
                                        <option value="Super-Admin">Analista-Bancada</option>
                                    </select>
                                </div>
                            </div>
                        </div>        
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-secondary mobtn" data-dismiss="modal">Cancelar</button>
                                    <a href="<?php echo BASE_URL ;?>perfil/add" class="btn btn-primary">Salvar</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>            
            </div>
        </div>
    </div>
</div>







