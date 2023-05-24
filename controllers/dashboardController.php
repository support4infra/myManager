<?php
class dashboardController extends controller{

    public function __construct()
    {
        $Usuarios = new Usuarios();
        if ($Usuarios->isLogged() == false) {
            header("Location: ".BASE_URL."login");
        }
    }
    
    public function index(){
        $Usuarios = new Usuarios();
        $Dominios = new Dominio();
        $Usuarios->setLoggedUsuario();
        $Entidades = new Entidades($Usuarios->getEntidade());

        $dados = array(
            'quantidadeUsuarios' => $Usuarios->getQuantidade(),
            'quantidadeDominios' => $Dominios->getQuantidade(),
            'nomeEntidade' => $Entidades->getNome(),
        );

        $this->loadTemplate('dashboard', $dados);
    }

}