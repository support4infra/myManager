<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>LEADS E-MAIL</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="<?php echo BASE_URL;?>email"> <i class="fa fa-envelope"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Leads
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>email">email</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <a href="<?php echo BASE_URL ;?>dominio/add" class="btn btn-primary sweet-1 m-b-10">Adicionar Novo Domínio</a>
    </div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DOMINIO</th>
                        <th>HOST</th>
                        <th>MX</th>
                        <th>PRIORIDADE</th>
                        <th>AÇÃO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($getListDominio as $dominio):?>
                    <tr>
                        <th scope="row"><?php echo $dominio['id'];?></th>                      
                        <td class="tabledit-view-mode">
                            <span class="tabledit-span"><?php echo $dominio['dominio'];?></span>
                        </td>
                        <td class="tabledit-view-mode">
                            <span class="tabledit-span"><?php echo $dominio['host'];?></span>
                        </td>
                        <td class="tabledit-view-mode">
                            <span class="tabledit-span"><?php echo $dominio['target'];?></span>
                        </td>
                        <td class="tabledit-view-mode">
                            <span class="tabledit-span"><?php echo $dominio['pri'];?></span>
                        </td>
                        <td style="white-space: nowrap; width: 1%;">
                            <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                <div class="btn-group btn-group-sm" style="float: none;">
                                    <a href="<?php echo BASE_URL ;?>dominio/edit/<?php echo $dominio['id'];?>" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;">                  
                                        <span class="icofont icofont-ui-edit"></span>
                                    </a>
                                    <a href="<?php echo BASE_URL ;?>dominio/delet/<?php echo $dominio['id'];?>" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;">
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