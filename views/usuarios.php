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
                        <a href="<?php echo BASE_URL;?>dashboard"> <i class="fa fa-dashboard"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Administração
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>usuarios">Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header"><h5>Cadastrar Novo Usuário</h5></div>
        <div class="card-block">
            <form method="POST">
                <div class="form-group row has-error">
                    <label class="col-sm-1 col-form-label">Nome Usuário</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Usuário Primeiro">
                    </div>
                    <label class="col-sm-1 col-form-label">Login Usuário</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" name="login" id="login" placeholder="usuario.primeiro@empresa.com.br">
                    </div>
                </div>
                <div class="form-group row has-error">
                    <label class="col-sm-1 col-form-label">Senha</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="******">
                    </div>
                    <label class="col-sm-1 col-form-label">Repetir Senha</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="validaSenha" name="validaSenha" placeholder="******">
                    </div>
                </div>
                <div class="form-group row has-error">
                    <label class="col-sm-1 col-form-label">Senha</label>
                    <div class="col-sm-5">
                        <select name="perfil" class="form-control">
                            <option disabled selected>Selecione Perfil</option>
                            <?php foreach($getListPerfil as $perfil):?>
                            <option value="<?php echo $perfil['nome']?>"><?php echo $perfil['nome']?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12"></label>
                    <div class="col-sm-12">
                        <a href="<?php echo BASE_URL ;?>usuarios/add" class="btn btn-primary m-b-0">Cadastrar</a>
                        <a href="<?php echo BASE_URL ;?>usuarios" class="btn btn-danger m-b-0">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header"><h5>Consultar Usuário</h5></div>
    <div class="card-block">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>PERFIL</th>
                        <th>AÇÃO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($getListUsuario as $usuario):?>
                    <tr>
                        <th scope="row"><?php echo $usuario['id'];?></th>                      
                        <td class="tabledit-view-mode">
                            <span class="tabledit-span"><?php echo $usuario['nome'];?></span>
                        </td>
                        <td class="tabledit-view-mode">
                            <span class="tabledit-span"><?php echo $usuario['grupo'];?></span>
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





