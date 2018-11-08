<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Descripción de errorModelo
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 11/06/2018
 * @version 1.0
 * @modificado 11/06/2018
 */
class errorModelo extends Modelo
{
    protected $_tabla1;
    protected $_tabla2;
    protected $_campo_tabla1;
    protected $_campo_tabla2;
    protected $_errores = array();


    public function __construct()
    {
        parent::__construct();
        $this->_tabla1 = 'mod_errores';
        $this->_tabla2 = 'mod_errores_categorias';
        $this->_campo_tabla1 = array(
            'codigo', 'categoria_error', 'error'
            );
        $this->_campo_tabla2 = array(
            'id_categoria_error', 'categoria', 'descripcion'
            );
    }
    
    public function getErrores()
    {
        $consulta = new Modelo();
        
        $sql = "SELECT * FROM " . $this->_tabla1;
        
        $resultado = $consulta->_db->query($sql);
        
        $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
        
        while (list($key, $value) = each($resultado))
        {
            $this->_errores[$value[$this->_campo_tabla1[0]]] = $value[$this->_campo_tabla1[2]];
        }
        reset($resultado);
        
        return $this->_errores;
        
    }
}
