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



        $dados = array();
        $this->loadTemplate('perfil', $dados);
    }
}