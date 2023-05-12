<?php
class usuariosController extends controller{
    
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
        $Perfil = new Perfil();

        if ($Usuarios->hasPermission('Administração')) { 
            $dados= array(
                'nomeEntidade' => $Entidades->getNome(),
                'getListPerfil' => $Perfil->getListPerfil($Usuarios->getEntidade()),
                'getListUsuario' => $Usuarios->getListUsuario($Usuarios->getEntidade()),
            );       
            $this->loadTemplate('usuarios', $dados);
        } else {
            header("Location: ".BASE_URL);
        }
        
    }
}