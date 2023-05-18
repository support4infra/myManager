<?php
class retiradaEquipamentoController extends controller{

    public function __construct()
    {
        $Usuarios = new Usuarios();
        if ($Usuarios->isLogged() == false) {
            header("Location: ".BASE_URL);
        }
    }
    
    public function index(){

        $dados = array();

        $Usuarios = new Usuarios();
        $Usuarios->setLoggedUsuario();
        $Entidades = new Entidades($Usuarios->getEntidade());
        $Bancada = new Bancada();

        if($Usuarios->hasPermission('Bancada')){
            if (isset($_POST['numeroChamado']) && !empty($_POST['numeroChamado'])) {
                $numeroChamado = addslashes($_POST['numeroChamado']);
                $Bancada->getSpecificBancada($numeroChamado);
            }
            $this->loadTemplate('retiradaEquipamento', $dados);
        }
    }
}