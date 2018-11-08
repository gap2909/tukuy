<?php

/**
 * Descripción de index
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 16/03/2018
 * @version 1.0
 * @modificado 16/03/2018
*/
try{
    
define('DS', DIRECTORY_SEPARATOR);
define('RAIZ', realpath(dirname(__FILE__)).DS);
require_once RAIZ . 'core' . DS . 'Config.ini';
require_once R_CORE . 'BD.php';
require_once R_CORE . 'Autoload.php';

Sesion::init();

Ruteo::run(new Lanzador);
} catch (Exception $ex) {
    echo $ex->getMessage();
}