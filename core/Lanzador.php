<?php

/**
 * Descripción de Lanzador
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 16/03/2018
 * @version 1.0
 * @modificado 03/10/2018
 */

class Lanzador {
    private $_modulo;
    private $_controlador;
    private $_metodo;
    private $_argumentos;
    private $_modulos;
    
    public function __construct() {
        //-- Matriz que contiene los Modulos del framework
        $this->_modulos = $this->getModulos();
        
        //-- Se verifica si existe una variable url enviada por el metodo GET
        if (isset($_GET['url'])) {
            
            //-- Filtrar el parametro $url
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            
            //-- Divide la URL tomando el / como divisor y lo covierte en
            //-- elementos del arreglo $url
            $url = explode('/', $url);
            $url = array_filter($url);
            
            //-- Se asigna el 1er elemento de $url al atributo $_modulo
            $this->_modulo = strtolower(array_shift($url));

            //-- Se verifica si se envió un dato por la URL
            if (!$this->_modulo) {
                $this->_modulo = false;
            }
            else {
                if (!in_array($this->_modulo, $this->_modulos)) {
                    $this->_controlador = $this->_modulo;
                    $this->_modulo = false;
                }
                else {
                    $this->_controlador = strtolower(array_shift($url));
                    if (!$this->_controlador) {
                        $this->_controlador = DEFAULT_CONTROLADOR;
                    }
                }
            }

            $this->_metodo = strtolower(array_shift($url));
            $this->_argumentos = $url;
        }

        //-- Si no se envia controlador se asigna uno por defecto
        if (!$this->_controlador) {
            $this->_controlador = DEFAULT_CONTROLADOR;
        }   
            
        //-- Si no se envia metodo se asigna uno por defecto
        if (!$this->_metodo) {
            $this->_metodo = DEFAULT_METODO;
        }

        //-- Si no se envia argumentos se asigna un array vacio
        if (!isset($this->_argumentos)) {
            $this->_argumentos = array();
        }
    }

    public function getModulos() {
        
        $modulos = new Modulos();
        return $modulos->getModulos();
    }
    
    //-- Retorna el modulo
    public function getModulo() {
        return $this->_modulo;
    }
    
    //-- Retorna el controlador
    public function getControlador() {
        return $this->_controlador;
    }
    
    //-- Retorna el metodo
    public function getMetodo() {
        return $this->_metodo;
    }
    
    //-- Retorna los argumentos
    public function getArgs() {
        return $this->_argumentos;
    }
}