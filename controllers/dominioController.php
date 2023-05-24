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
                'getListDominio' => $Dominio->getListDominio($Usuarios->getEntidade()),
            );       
            $this->loadTemplate('dominio', $dados);
        } else {
            header("Location: ".BASE_URL);
        }        
    }

    public function add(){
        $Usuarios = new Usuarios();
        $Usuarios->setLoggedUsuario();
        $Dominios = new Dominio();
        $dados = array( );    
        if ($Usuarios->hasPermission('Comercial')) { 
            if (isset($_POST['nomeDominio']) && !empty($_POST['nomeDominio'])) {
                $nomeDominio = addslashes($_POST['nomeDominio']);
                $nomeCliente = addslashes($_POST['nomeCliente']);
                $retorno = $Dominios->addDominio($nomeDominio, $nomeCliente, $Usuarios->getEntidade());
                if ($retorno == "1") {
                    header("Location: ".BASE_URL."dominio");
                }else {
                    $dados['alerta'] = "Domínio já se encontra cadastrado!";
                }
                
            }
   
            $this->loadTemplate('dominioAdd', $dados);
        } else {
            header("Location: ".BASE_URL);
        }
    }
}