<?php
require 'environment.php';

global $config;
$config = array();
if (ENVIRONMENT == 'dev') {
    $config['dbname'] = 'sgu';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'sgu';
    $config['pass'] = '6Q7caaQi3x';
} else {
    $config['dbname'] = 'sgu';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'sgu';
    $config['pass'] = '6Q7caaQi3x';
}

global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['pass']);
} catch (PDOException $e) {
    echo "Erro: ".$e->getMessage();
    exit;
}
?>
