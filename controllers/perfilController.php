<?php
class perfilController extends controller{
    
    public function __construct()
    {
        $Usuarios = new Usuarios();
        if ($Usuarios->isLogged() == false) {
            header("Location: ".BASE_URL."login");
        }
    }

    public function index(){

        $Usuarios = new Usuarios();
        $Usuarios->setLoggedUsuario();
        $Entidades = new Entidades($Usuarios->getEntidade());

        $dados = array(
            'nomeEntidade' => $Entidades->getNome(),
        );

        if ($Usuarios->hasPermission('Administração')) {
            $this->loadTemplate('perfil', $dados);
        } else {
            header("Location: ".BASE_URL);
        }
    }
}