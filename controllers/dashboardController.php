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

        $Clientes = new Clientes();
        $Usuarios = new Usuarios();
        $Usuarios->setLoggedUsuario();
        $Entidades = new Entidades($Usuarios->getEntidade());
        $Licencas = new Licencas();

        $dados = array(
            'quantidadeClientes' => $Clientes->getQuantidade(),
            'quantidadeUsuarios' => $Usuarios->getQuantidade(),
            'quantidadeLicencas' => $Licencas->getQuantidade(),
            'quantidadeLicencasVencidas' => $Licencas->getQuantidadeLicencaVencida(),
            'nomeEntidade' => $Entidades->getNome(),
        );

        $this->loadTemplate('dashboard', $dados);
    }

}