<?php
class relatorioLicencasController extends controller{
    
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
        $Licencas = new Licencas();

        $dados = array(
            'nomeEntidade' => $Entidades->getNome(),
            'totalLicencas' => $Licencas->getLicencas(),
        );
        
        $this->loadTemplate('relatorioLicencas', $dados);
    }
}