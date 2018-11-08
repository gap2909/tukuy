<?php

/**
 * Descripción
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 16/03/2018
 * @version 1.0
 * @modificado 16/03/2018
*/

class indexControlador extends Controlador {
    
    private $_inicio;

    public function __construct() {
        parent::__construct();
        $this->_inicio = $this->cargarModelo('index');
    }
    
    public function index() {
       
       if(Sesion::getValor('sesion_autenticado'))
       {
           if($_SESSION['sesion_nombre'])
           {
               $this->_vista->assign('nombre_usuario', Sesion::getValor('sesion_nombre'));
           }

           if($_SESSION['sesion_genero'] == 1)
           {
               $this->_vista->assign('titulo', 'Bienvenido');
           }
           else
           {
               $this->_vista->assign('titulo', 'Bienvenida');
           }

       }
       else
           {
               $this->_vista->assign('nombre_usuario', '');
               $this->_vista->assign('titulo', 'Bienvenid@');

           }

       $this->_vista->assign('boton', 'Leer m&aacute;s');
       $this->_vista->assign('mensaje', 'Hola desde el Index');

       $this->_vista->renderizar('index');
    }
    
}
