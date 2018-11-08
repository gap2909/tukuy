<?php
/**
 * Descripción de LoginControlador
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 18/03/2018
 * @version 1.0
 * @modificado 18/03/2018
 */

class LoginControlador extends Controlador {
    //agrega tu código acá
    private $_login;
    private $datos;
    
    public function __construct() {
        parent::__construct();
        $this->_login = $this->cargarModelo('login', 'usuarios');
        $this->_vista->assign('_error', '');
        $this->_vista->assign('campoUsuario', '');
        
        
    }
    
    public function index() {
        if(Sesion::getValor('sesion_autenticado')){
            $this->redireccionar();
        }
        
        $this->_vista->assign('titulo', 'Iniciar Sesi&oacute;n');
        
        if($this->getInt('enviar') == 1){
            
            $this->_vista->datos = $_POST;
            
            if (!$this->getAlphaNum('usuario')) {
                $this->_vista->assign('_error', 'Debe ingresar el nombre de usuario');
                $this->_vista->renderizar('login');
                exit();
            }
            
            if (!$this->getSql('clave')) {
                $this->_vista->assign('_error', 'Debe ingresar la clave');
                $this->_vista->renderizar('login');
                exit();
            }
            
            $fila = $this->_login->getLogin(
                    $this->getAlphaNum('usuario'),
                    $this->getSql('clave')
                    );
            
            if(!$fila)
            {
                $this->_vista->assign('_error', 'Error al ingresar el usuario y/o la clave');
                $this->_vista->renderizar('login');
                exit();
            }
            
            if($fila['estado'] != 1)
            {
                $this->_vista->assign('_error', 'Usuario no ha validado el correo electr&oacute;nico');
                $this->_vista->renderizar('login');
                exit();
            }
            
            Sesion::setValor('sesion_autenticado', TRUE);
            Sesion::setValor('sesion_nivel', $fila['id_role']);
            Sesion::setValor('sesion_id_usuario', $fila['id']);
            Sesion::setValor('sesion_nombre', $fila['nombres']);
            Sesion::setValor('sesion_correo', $fila['email']);
            Sesion::setValor('sesion_usuario', $fila['usuario']);
            Sesion::setValor('sesion_genero', $fila['genero']);
            Sesion::setValor('sesion_tiempo', time());
            
            $this->redireccionar();
        }        
        
        $this->_vista->datos = (array(
            'usuario' => ''
        ));
        
        $this->_vista->renderizar('login');
    }
    
    public function cerrar() {
        if(Sesion::getValor('sesion_autenticado'))
        {
            Sesion::destroy();
            
            $this->_vista->assign('titulo', 'Sesi&oacute;n Finalizada');
            $this->redireccionar('');
        }
    }
    
    public function reset() {
        if(Sesion::getValor('sesion_autenticado')){
            $this->redireccionar();
        }
        
        $this->_vista->assign('titulo', 'Reiniciar Clave');
        
        if($this->getInt('enviar') == 1){
            $this->_vista->datos = $_POST;
            
            if (!$this->validarEmail($this->getPostParam('correo'))) {
                $this->_vista->assign('_error', 'Debe indicar un correo electr&oacute;nico');
                $this->_vista->renderizar('reset');
                exit;
            }
            
            $correo = $this->_login->verificarCorreo($this->getPostParam('correo'));
            
            if ($correo == FALSE) {
                $this->_vista->assign('_error', 'Direcci&oacute;n de correo <b>' . $this->validarEmail('email'). '</b> no est&aacute; registrado');
                $this->_vista->renderizar('reset');
                exit;
            }
            
        }
        
        $this->_vista->datos = (array(
            'correo' => ''
            ));
        $this->_vista->renderizar('reset');
    }
}