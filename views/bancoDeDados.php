<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Usuários</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="<?php echo BASE_URL;?>bancoDeDados"> <i class="fa fa-database"></i> </a>
                    </li>
                    <li class="breadcrumb-item">API
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>bancoDeDados">Banco de Dados</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <a href="<?php echo BASE_URL ;?>usuarios/add" class="btn btn-primary sweet-1 m-b-10">Criar Novo Usuário</a>
    </div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>HOST</th>
                        <th>DBNAME</th>
                        <th>DBUSER</th>
                        <th>AÇÃO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($getListBanco as $banco):?>
                    <tr>
                        <th scope="row"><?php echo $banco['id'];?></th>          
                        <td class="tabledit-view-mode">
                            <span class="tabledit-span"><?php echo $banco['nome'];?></span>
                        </td>            
                        <td class="tabledit-view-mode">
                            <span class="tabledit-span"><?php echo $banco['host'];?></span>
                        </td>
                        <td class="tabledit-view-mode">
                            <span class="tabledit-span"><?php echo $banco['dbname'];?></span>
                        </td>
                        <td class="tabledit-view-mode">
                            <span class="tabledit-span"><?php echo $banco['dbuser'];?></span>
                        </td>
                        <td style="white-space: nowrap; width: 1%;">
                            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                <div class="btn-group btn-group-sm" style="float: none;">
                                    <a href="<?php echo BASE_URL ;?>usuarios/edit/<?php echo $usuario['id'];?>" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;">                  
                                        <span class="icofont icofont-ui-edit"></span>
                                    </a>
                                    <a href="<?php echo BASE_URL ;?>usuarios/delet/<?php echo $usuario['id'];?>" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;">
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





