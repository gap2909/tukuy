<?php
/**
 * Descripción de Sesion
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 02/08/2018
 * @version 1.0
 * @modificado 02/08/2018
 */

class Sesion {
    //-- Inicia la matriz de sesiones --
    public static function init(){
        @session_start();
    }

    //-- Destruye la matriz de sesiones --
    public static function destroy(){
        session_destroy();
    }

    //-- Borra una clave de sesion o de una matriz --
    public static function unsetClave($clave){
        if ($clave) {
            if (is_array($clave)) {
                for ($i = 0; $i < count($clave); $i++) {
                    if (isset($_SESSION[$clave[$i]])) {
                        unset($_SESSION[$clave[$i]]);
                    }
                }
            } else{
                if(isset($_SESSION[$clave])){
                    unset($_SESSION[$clave]);
                }
            }
        }
        
    }

    //-- Obtiene el valor de una clave de sesion --
    public static function getValor($clave){
        if (isset($_SESSION[$clave])) {
            return $_SESSION[$clave];
        }
        
    }

    //-- Asigna un valor a una clave de sesion --
    public static function setValor($clave, $valor){
        if (!empty($clave)) {
           $_SESSION[$clave] = $valor; 
        }
    }

    
    //-- Verifica se ha iniciado sesion --
    public static function exist(){
        if(size_of($_SESSION) > 0){
            return true;
        }
        else{
            return false;
        }
    }
    
    //-- Verifica si no tiene sesion iniciada con nivel autenticado
    public static function accesoNivel($nivel) {
        if (!Sesion::getValor('sesion_autenticado')) {
            header('location:' . BASE_URL . 'error/acceso/1010');
            exit;
        }
        
        Sesion::tiempo();
        
        if (Sesion::getNivel($nivel) < Sesion::getNivel(Sesion::getValor('nivel'))) {
            header('location:' . BASE_URL . 'error/acceso/1010');
            exit;
        }
    }
    
    public static function tiempo() {
        if (!Sesion::getValor('tiempo') || !defined('SESSION_TIME')) {
            throw new Exception('No se ha establecido el tiempo de sesi&oacute;n');
        }
        
        if (SESSION_TIME == 0) {
            return;
        }
        
        if (time() - Sesion::getValor('tiempo') > (SESSION_TIME * 60)) {
            Sesion::destroy();
            header('location:' . BASE_URL . 'error/acceso/8080');
            exit;
        }
        
        else {
            Sesion::setValor('tiempo', time());
        }
    }
    
    public static function getNivel($nivel) {
        $role['admin'] = 0;
        $role['editor'] = 1;
        $role['especial'] = 2;
        $role['usuario'] = 3;
        $role['visitante'] = 4;
        
        if (!array_key_exists($nivel, $role)) {
            throw new Exception('Error de acceso');
        }
        else {
            return $role[$nivel];
        }
        
    }
    
    public static function accesoVista($nivel) {
        if (!Sesion::getValor('sesion_autenticado')) {
            return false;
        }
        
        if (Sesion::getNivel($nivel) < Sesion::getNivel(Sesion::getValor('nivel'))) {
            return false;
        }
        
        return true;
    }
    
    public static function accesoEstricto(array $nivel, $noAdmin = false) {
        if (!Sesion::getNivel('sesion_autenticado')) {
            header('location:' . BASE_URL . 'error/acceso/5050');
            exit;
        }
        
        Sesion::tiempo();
        
        if ($noAdmin == FALSE) {
            if (Sesion::getValor('nivel') == 'admin') {
                return;
            }
        }
        
        if (count($nivel)) {
            if (in_array(Sesion::getValor('nivel'), $nivel)) {
                return;
            }
        }
        
        header('location:' . BASE_URL . 'error/acceso/5050');
    }
    
    public Static function accesoVistaEstricto(array $nivel, $noAdmin = false) {
        if (!Sesion::getValor('sesion_autenticado')) {
            return false;
        }
        
        if ($noAdmin == FALSE) {
            if (Sesion::getNivel('nivel') == 'admin') {
                return true;
            }
        }
        
        if (count($nivel)) {
            if (in_array(Sesion::getValor('nivel'), $nivel)) {
                return true;
            }
        }
        
        return false;
    }
}
