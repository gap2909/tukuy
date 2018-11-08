<?php
/**
 * Descripción de Ruteo
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 16/03/2018
 * @version 1.0
 * @modificado 16/03/2018
 */

class Ruteo {
    public static function run(Lanzador $peticion) {
        
        $modulo = $peticion->getModulo();
        $controladores = $peticion->getControlador().'Controlador';
        $metodo = $peticion->getMetodo();
        $args = $peticion->getArgs();

        //-- Se verifica si se esta trabajando en base a un modulo
        //   o de un controlador
        if ($modulo) {
            
            $rutaModulo = R_CONTROLADORES . $modulo . 'Controlador.php';
            if (is_readable($rutaModulo)) {
                require_once $rutaModulo;
                $rutaControlador = R_MODULOS .  $modulo . DS . 'controladores' . DS . $controladores . '.php';
            }
            else{
                throw new Exception('Error de base del modulo');
            }
        }
        else{
            $rutaControlador = R_CONTROLADORES .  $controladores . '.php';
        }

        //-- Se verifica si se puede leer la ruta del controlador
        if(is_readable($rutaControlador)) {
            //-- Se requiere el controlador
            require_once $rutaControlador;
            //-- Se instancia un objeto del controlador
            $controlador = new $controladores;
            
            //-- Se verifica si es acesible el metodo en el controlador
            if(is_callable(array($controlador, $metodo))) {
                $metodo = $metodo;
            }
            else {
                $metodo = DEFAULT_METODO;
            }
            
            if(isset($args)) {
                call_user_func_array(array($controlador, $metodo), $args);
            }
            else {
                call_user_func(array($controlador, $metodo));
            }
        }
        else {
            throw new Exception('No Encontrado');
        }
    }
}
