<?php
class controller {

    public function loadView($viewName, $viewDados = array()) {
        extract($viewDados);
        require 'views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewDados = array()) {
        require 'views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewDados = array()) {
        extract($viewDados);
        require 'views/'.$viewName.'.php';
    }

}