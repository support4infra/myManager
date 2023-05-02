<?php
class configuracoesController extends controller{
    
    public function index(){

        $dados = array();

        $this->loadTemplate('configuracoes', $dados);
    }

}