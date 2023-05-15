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

    public function add(){
        $Usuarios = new Usuarios();
        $Usuarios->setLoggedUsuario();
        $Entidades = new Entidades($Usuarios->getEntidade());
        $Perfil = new Perfil();

        if ($Usuarios->hasPermission('Administração')) { 
            if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {
                $usuario = addslashes($_POST['usuario']);
                $nome = addslashes($_POST['nome']);
                $senha = addslashes(md5($_POST['senha']));
                $perfil = addslashes($_POST['perfil']);
                $Perfil->addPerfil($usuario, $nome, $senha, $perfil, $Usuarios->getEntidade());
                header("Location: ".BASE_URL."usuarios");
            }

            $dados= array(
                'nomeEntidade' => $Entidades->getNome(),
                'getListPerfil' => $Perfil->getListPerfil($Usuarios->getEntidade()),
            );       
            $this->loadTemplate('usuariosAdd', $dados);
        } else {
            header("Location: ".BASE_URL);
        }
    }
}