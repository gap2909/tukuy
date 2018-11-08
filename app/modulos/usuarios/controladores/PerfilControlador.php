<?php

/**
 * Descripción de PerfilControlador
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 21/06/2018
 * @version 1.0
 * @modificado 21/06/2018
 */
class PerfilControlador extends Controlador
{
    //agrega tu código acá
    private $_perfil;
    
    public function __construct()
    {
        parent::__construct();
        $this->_perfil = $this->cargarModelo('perfil');
        $this->_vista->datos = $this->_perfil->getPerfil();
        $this->_vista->assign('_error', '');
        $this->_vista->assign('_mensaje', '');
    }
    
    
    public function index()
    {
        if(!Sesion::getValor('sesion_autenticado'))
        {
            $this->redireccionar();
            exit;
        }
        
        $this->_vista->assign('titulo','Perfil de Usuario');
        $this->_vista->assign('datos', $this->_vista->datos);
        $this->_vista->assign('usuario', Sesion::getValor('sesion_usuario'));
        $this->_vista->assign('nombre', Sesion::getValor('sesion_nombre'));
        
        $this->_vista->renderizar('perfil');
    }
    
    public function editar()
    {
        if(!Sesion::getValor('sesion_autenticado'))
        {
            $this->redireccionar();
            exit;
        }
        $this->_vista->assign('_error', '');
        $this->_vista->assign('titulo','Editar Perfil de Usuario');
        $this->_vista->assign('usuario',Sesion::getValor('sesion_usuario'));
        
        if ($this->getInt('enviar') == 1)
        {
            $this->_vista->datos = $_POST;
            
            if (!$this->getSql('nombres')) {
                $this->_vista->assign('_error', 'Debe introducir su nombre');
                $this->_vista->renderizar('editar');
                exit;
            }
            
            if (!$this->getSql('apellidos')) {
                $this->_vista->assign('_error', 'Debe introducir su apellido');
                $this->_vista->renderizar('editar');
                exit;
            }
            
            if (!$this->getPostParam('f_nacimiento')) {
                $this->_vista->assign('_error', 'Debe indicar su fecha de nacimiento');
                $this->_vista->renderizar('editar');
                exit;
            }
            
            if (!$this->getInt('genero')) {
                $this->_vista->assign('_error', 'Debe indicar su g&eacute;nero');
                $this->_vista->renderizar('editar');
                exit;
            }
            
            if (!$this->validarEmail($this->getPostParam('email'))) {
                $this->_vista->assign('_error', 'Debe indicar un correo electr&oacute;nico');
                $this->_vista->renderizar('editar');
                exit;
            }
            
            if (Sesion::getValor('sesion_correo') != $this->getPostParam('email'))
            {
                if ($this->_perfil->verificarCorreo($this->getPostParam('email')))
                {
                    $this->_vista->assign('_error', 'Direcci&oacute;n de correo <b>' . $this->getPostParam('email') . '</b> ya est&aacute; registrado');
                    $this->_vista->renderizar('editar');
                    exit;
                }
            }
            
            if (!$this->getPostParam('clave')) {
                $this->_vista->assign('_error', 'Debe indicar clave secreta actual');
                $this->_vista->renderizar('editar');
                exit;
            }
            
            if(!$this->_perfil->verificarClave($this->getPostParam('clave'))){
                $this->_vista->assign('_error', 'Clave secreta incorrecta');
                $this->_vista->renderizar('editar');
                exit;
            }
            
            $this->_perfil->actualizarPerfil(
                    $this->getSql('nombres'),
                    $this->getSql('apellidos'),
                    $this->getPostParam('f_nacimiento'),
                    $this->getInt('genero'),
                    $this->getPostParam('email'),
                    $this->getPostParam('clave')
                    );
            
            $this->_vista->datos = $this->_perfil->getPerfil();
            
            Sesion::setValor('sesion_nombre', $this->_vista->datos['nombres']);
            Sesion::setValor('sesion_correo', $this->_vista->datos['email']);
            Sesion::setValor('sesion_genero', $this->_vista->datos['genero']);
            Sesion::setValor('sesion_tiempo', time());
            
//            echo '<pre>';var_dump($fila);exit;
            $this->_vista->assign('titulo','Perfil de Usuario');
            $this->_vista->assign('usuario',Sesion::getValor('sesion_usuario'));
            $this->_vista->assign('_mensaje', 'Se ha actualizado el Perfil');
            $this->_vista->renderizar('perfil');
            exit;
        }
        
        $this->_vista->renderizar('editar');
    }
    
    
    
}
