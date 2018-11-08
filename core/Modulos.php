<?php
/**
 * Descripción de Modulos
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 01/06/2018
 * @version 1.0
 * @modificado 01/06/2018
 */
class Modulos extends Modelo
{
    //agrega tu código acá
    protected $_tabla;
    protected $_campo;
    protected $_modulos;
    
    public function __construct() {
        $this->_tabla = 'modulos';
        $this->_campo = 'modulo_directorio';
        $this->_modulos = array();
        
        $consulta = new Modelo();
        
        $sql = "SELECT $this->_campo FROM $this->_tabla";
        
        $modulos = $consulta->_db->query($sql);
        
        $this->_modulos = $modulos->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($this->_modulos as $value) {
            $matriz[] = $value['modulo_directorio'];
        }
        
        $this->_modulos = $matriz;
    }
    
    public function getModulos() {
        return $this->_modulos;
    }
    
}
