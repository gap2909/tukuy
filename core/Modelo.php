<?php
/**
 * Descripción de Modelo
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 02/08/2018
 * @version 1.0
 * @modificado 02/08/2018
 */

class Modelo {
    protected $_db;
    
    public function __construct() {
        $this->_db = new Basedatos();
    }
}
