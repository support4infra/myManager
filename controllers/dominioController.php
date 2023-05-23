<?php
class dominioController extends controller{
    
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
        $Dominio = new Dominio();

        if ($Usuarios->hasPermission('Comercial')) { 
            $dados= array(
                'nomeEntidade' => $Entidades->getNome(),
                'getListDominio' => $Dominio->getListDominio(),
            );       
            $this->loadTemplate('dominio', $dados);
        } else {
            header("Location: ".BASE_URL);
        }        
    }

    public function add(){
        $Usuarios = new Usuarios();
        $Usuarios->setLoggedUsuario();
        $Entidades = new Entidades($Usuarios->getEntidade());

        if ($Usuarios->hasPermission('Comercial')) { 
            if (isset($_POST['dominio']) && !empty($_POST['dominio'])) {
                $nomeDominio = addslashes($_POST['dominio']);
                $nomeCliente = addslashes($_POST['cliente']);
                header("Location: ".BASE_URL."dominio");
            }
            $dados= array(
                'nomeEntidade' => $Entidades->getNome(),
            );       
            $this->loadTemplate('dominioAdd', $dados);
        } else {
            header("Location: ".BASE_URL);
        }
    }
}