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
            if (isset($_POST['nome']) && !empty($_POST['nome'])) {
                $nomePerfil = addslashes($_POST['nome']);
                $listaPerfil = $_POST['permissoes'];
                $Perfil->addPerfil($nomePerfil, $listaPerfil, $Usuarios->getEntidade());
                header("Location: ".BASE_URL."perfil");
            }

            $dados= array(
                'nomeEntidade' => $Entidades->getNome(),
                'getListPerfil' => $Perfil->getListPerfil($Usuarios->getEntidade()),
                'getListPermissao' => $Perfil->getListPermissao($Usuarios->getEntidade()),
            );       
            $this->loadTemplate('perfilAdd', $dados);
        } else {
            header("Location: ".BASE_URL);
        }
    }
}