<?php
class dashboardController extends controller{
    
    public function index(){

        $dados = array();

        $this->loadTemplate('dashboard', $dados);
    }

}