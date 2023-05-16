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
            if (isset($_POST['email']) && !empty($_POST['email'])) {
                $email = addslashes($_POST['email']);
                $nome = addslashes($_POST['nome']);
                $password = addslashes(md5($_POST['senha']));
                $grupo = addslashes($_POST['grupo']);
                $Usuarios->addUsuario($email, $nome, $password, $grupo, $Usuarios->getEntidade());
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


    public function edit($id){
        $Usuarios = new Usuarios();
        $Usuarios->setLoggedUsuario();
        $Entidades = new Entidades($Usuarios->getEntidade());
        $Perfil = new Perfil();

        if ($Usuarios->hasPermission('Administração')) { 

                if (isset($_POST['email']) && !empty($_POST['email'])) {
                    $email = addslashes($_POST['email']);
                    $nome = addslashes($_POST['nome']);
                    $password =  addslashes(md5($_POST['senha']));
                    $grupo = addslashes($_POST['grupo']);
                    $Usuarios->editUsuario($email, $nome, $password, $grupo, $id, $Usuarios->getEntidade());
                    header("Location: ".BASE_URL."usuarios");
                }

            $dados= array(
                'nomeEntidade' => $Entidades->getNome(),
                'getUsuario' => $Usuarios->getUsuario($id, $Usuarios->getEntidade()),
                'getListPerfil' => $Perfil->getListPerfil($Usuarios->getEntidade()),
                'getListPermissao' => $Perfil->getListPermissao($Usuarios->getEntidade()),
                'perfilInfo' => $Perfil->getPerfil($id, $Usuarios->getEntidade()),
            );       
            $this->loadTemplate('usuariosEdit', $dados);
        } else {
            header("Location: ".BASE_URL);
        }
    }

    public function delet($id){
        $Usuarios = new Usuarios();
        $Usuarios->setLoggedUsuario();

        if ($Usuarios->hasPermission('Administração')) {
            if ($id != 1) {
                $Usuarios->deletUsuario($id);
                header("Location: ".BASE_URL."usuarios");
            } else {
                header("Location: ".BASE_URL."usuarios");
            }
        } else {
            header("Location: ".BASE_URL."usuarios");
        }
    }

}