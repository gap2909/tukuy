<?php
/**
 * Descripción de Basedatos
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 02/08/2018
 * @version 1.0
 * @modificado 02/08/2018
 */

class Basedatos extends PDO {
    public function __construct() {
        parent::__construct(
            'mysql:host=' . BD_HOST .
            ';dbname=' . BD_PREF . BD_NAME,
            BD_USER, BD_PASS, array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . BD_CHAR)
        );
    }
}
