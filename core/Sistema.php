<?php
/**
 * Descripción de Sistema
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 16/03/2018
 * @version 1.0
 * @modificado 16/03/2018
 */

class Sistema {
    protected $_bd;
    
    public function __construct() {
        $this->_bd = new Basedatos();
    }

    // Método que obtiene los menús de la BD
    public function getMenus($visible = TRUE) {
        $visible = (int) $visible;
        if($visible == FALSE){
            $sql = "SELECT * FROM " . BD_PREF . "menus WHERE " . 
                    "visible = 0";
            $menus = $this->_bd->query($sql);
            return $menus->fetchAll();
        }else{
            $sql = "SELECT * FROM " . BD_PREF . "menus WHERE " . 
                    "visible = 1";
            $menus = $this->_bd->query($sql);
            return $menus->fetchAll();
        }
    }
    
    // Método que obtiene las categorías de los menús de la BD
    public function getMenusCategorias() {
        $sql = "SELECT * FROM " . BD_PREF . "menus_categorias";
        $menus = $this->_bd->query($sql);
        return $menus->fetchAll();
    }
    
    // Método que obtiene los parámetros de configuración del sistema de la BD
    public function getSistemas() {
        $sql = "SELECT * FROM " . BD_PREF . "sistemas";
        $sistema = $this->_bd->query($sql);
        return $sistema->fetch();
    }
    
    // Método que obtiene los menús de la BD
    public function getSistemaLenguaje() {
        $sql = "SELECT * FROM " . BD_PREF . "sistemas_lenguajes";
        $sistema = $this->_bd->query($sql);
        return $sistema->fetchAll();
    }
    
    // Método que obtiene los menús de la BD
    public function getModulos() {
        $sql = "SELECT * FROM " . BD_PREF . "modulos";
        $sistema = $this->_bd->query($sql);
        return $sistema->fetchAll();
    }

    // Método que obtiene las categorías de los menús de la BD
    public function getModulosCategorias() {
        $sql = "SELECT * FROM " . BD_PREF . "modulos_categorias";
        $sistema = $this->_bd->query($sql);
        return $sistema->fetchAll();
    }
    
    
}