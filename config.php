<?php
require 'environment.php';

global $config;
$config = array();
if (ENVIRONMENT == 'dev') {
    $config['dbname'] = 'mymanager';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['pass'] = 'root';
} else {
    $config['dbname'] = '';
    $config['host'] = '';
    $config['dbuser'] = '';
    $config['pass'] = '';
}
?>