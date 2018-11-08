<?php
/**
 * Descripción de Registro
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 22/07/2018
 * @version 1.0
 * @modificado 22/07/2018
 */

class Registro {
    //agrega tu código acá
    private $_data;
    private static $_instancia;
    
    private function __construct(){}
    
    //--Metodo Singleton
    public static function getInstancia()
    {
        if (!self::$_instancia instanceof self) {
            self::$_instancia = new Registro();
        }
        
        return self::$_instancia;
    }
    
    public function __set($indice, $valor)
    {
        $this->_data[$indice] = $valor;
    }
    
    public function __get($indice)
    {
        if (isset($this->_data[$indice])) {
            return $this->_data[$indice];
        }
        
        return FALSE;
    }
}
