<?php
/**
 * Descripción de Autoload
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 25/05/2018
 * @version 1.0
 * @modificado 25/05/2018
*/

function autoLoadCore($class) {
    if(file_exists( R_CORE . ucfirst(strtolower($class)) . '.php')){
        include_once R_CORE . ucfirst(strtolower($class)) . '.php';
    }
}

function autoLoadLibs($class) {
    if(file_exists( R_LIBS . $class . '.php')){
        include_once R_LIBS . $class . '.php';
    }
}

spl_autoload_register('autoLoadCore');
spl_autoload_register('autoLoadLibs');
