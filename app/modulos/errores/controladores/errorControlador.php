<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Descripción de errorControlador
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 01/06/2018
 * @version 1.0
 * @modificado 01/06/2018
 */
class errorControlador extends Controlador {
    
    private $_error = array();


    //agrega tu código acá
    public function __construct() {
        parent::__construct();
        
        $inicio = $this->cargarModelo('error', 'errores');
        
        $errores = new errorModelo();
        $this->_error = $errores->getErrores();
        
    }
    
    public function index() {
        $this->_vista->assign('titulo', 'Error');
        $this->_vista->assign('mensaje', $this->_getError());
        $this->_vista->renderizar('error');
    }
    
    private function _getError($codigo = FALSE) {
        if($codigo){
            $codigo = $this->filtrarInt($codigo);
            if(is_int($codigo)){
                $codigo = $codigo;
            }
        }else{
            $codigo = 1000;
        }
        
        if(array_key_exists($codigo, $this->_error)){
            return $this->_error[$codigo];
        }
        else{
            return $this->_error[1000];
        }
    }
    
    public function acceso($codigo = FALSE) {
        $this->_vista->assign('titulo', 'Error de Acceso');
        $this->_vista->assign('logeo', 'autenticado');
            
        $codigo = (int) $codigo;
        
        if(is_int($codigo) || $codigo > 0){
            if(array_key_exists($codigo, $this->_error)){
                $this->_vista->assign('mensaje', $this->_getError($codigo));
            }
            else{
                $this->_vista->assign('mensaje', $this->_getError(1000));
            }
        }
        
        $this->_vista->renderizar('acceso');
        
    }
}
