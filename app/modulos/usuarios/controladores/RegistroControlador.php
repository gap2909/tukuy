<?php

/**
 * Descripción de RegistroControlador
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 18/03/2018
 * @version 1.0
 * @modificado 18/03/2018
 */

class RegistroControlador extends Controlador {
    //agrega tu código acá
    private $_registro;
    
    public function __construct() {
        parent::__construct();
        $this->_registro = $this->cargarModelo('registro');
        $this->_vista->assign('_error', '');
    }
    
    public function index() {
        if(Sesion::getValor('sesion_autenticado')){
            $this->redireccionar();
        }
        
        $this->_vista->assign('titulo', 'Registro');
        
        if ($this->getInt('enviar') == 1) {
            
            $this->_vista->datos = $_POST;
            
            if (!$this->getAlphaNum('usuario')) {
                $this->_vista->assign('_error', 'Debe introducir un nombre de usuario');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            if ($this->_registro->verificarUsuario($this->getAlphaNum('usuario'))) {
                $this->_vista->assign('_error', 'Nombre de usuario <b>' . $this->getAlphaNum('usuario'). '</b> ya est&aacute; registrado');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            if (!$this->getSql('nombres')) {
                $this->_vista->assign('_error', 'Debe introducir su nombre');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            if (!$this->getSql('apellidos')) {
                $this->_vista->assign('_error', 'Debe introducir su apellido');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            if (!$this->getPostParam('nacimiento')) {
                $this->_vista->assign('_error', 'Debe indicar su fecha de nacimiento');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            if (!$this->getInt('genero')) {
                $this->_vista->assign('_error', 'Debe indicar su g&eacute;nero');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            if (!$this->validarEmail($this->getPostParam('email'))) {
                $this->_vista->assign('_error', 'Debe indicar un correo electr&oacute;nico');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            if ($this->_registro->verificarCorreo($this->getPostParam('email'))) {
                $this->_vista->assign('_error', 'Direcci&oacute;n de correo <b>' . $this->validarEmail('email'). '</b> ya est&aacute; registrado');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            if (!$this->validarEmail($this->getPostParam('email2'))) {
                $this->_vista->assign('_error', 'Debe repetir el correo electr&oacute;nico');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            if ($this->compararCampos($this->validarEmail($this->getPostParam('email')), $this->validarEmail($this->getPostParam('email2'))) == FALSE) {
                $this->_vista->assign('_error', 'Los campos de correos electr&oacute;nicos no coinciden');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            if (!$this->getPostParam('clave')) {
                $this->_vista->assign('_error', 'Debe indicar una clave de seguridad');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            if (!$this->getPostParam('clave2')) {
                $this->_vista->assign('_error', 'Debe repetir la clave de seguridad');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            if ($this->compararCampos($this->getPostParam('clave'), $this->getPostParam('clave2')) == FALSE) {
                $this->_vista->assign('_error', 'Los campos de clave de seguridad no coinciden');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            $this->_registro->setRegistro(
                    $this->getAlphaNum('usuario'),
                    $this->getSql('nombres'),
                    $this->getSql('apellidos'),
                    $this->getPostParam('nacimiento'),
                    $this->getInt('genero'),
                    $this->getPostParam('email'),
                    $this->getPostParam('clave')
                    );
            
            $usuario = $this->_registro->verificarCodigo($this->getAlphaNum('usuario'));
            
            if (!$usuario) {
                $this->_vista->assign('_error', 'Lo sentimos. Hubo un error en el registro');
                $this->_vista->renderizar('registro');
                exit;
            }
            
            $correo = array(
                'host'          => APP_HOST_EMAIL,
                'html'          => TRUE,
                'desde'         => APP_ADMIN_EMAIL,
                'remitente'     => APP_ADMIN_NAME,
                'asunto'        => "Activacion de cuenta de usuario",
                'cuerpo'        => "Hola <strong>" . $this->getSql('nombres') . " " . $this->getSql('apellidos') . "</strong><br>"
                                   . "<p>Se ha registrado en: <strong>'" . APP_NAME . "'</strong>.  "
                                   . "Para activar su cuenta, haga click en el siguiente enlace:<br>"
                                   . "<a href='" . U_RAIZ . "usuarios/registro/activar/" . $usuario['id'] . "/" . $usuario['codigo'] . "'>"
                                   . U_RAIZ . "usuarios/registro/activar/" . $usuario['id'] . "/" . $usuario['codigo'] . "</a></p>",
                'para'          => $this->getSql('nombres') . " " . $this->getSql('apellidos'),
//                'textoAlt'      => "Hola " . $this->getSql('nombres') . " " . $this->getSql('apellidos') . " "
//                                   . "Se ha registrado en: '" . APP_NAME . "'.  "
//                                   . "Para activar su cuenta, copie y pegue en la barra de direccion de su navegador el siguiente enlace:"
//                                   . " '" . U_RAIZ . "usuarios/registro/activar/" . $usuario['id'] . "/" . $usuario['codigo'] . "' ",
                'destinatario'  => $this->getPostParam('email')
            );
            
            $this->enviarCorreo($correo);
            
            $this->_vista->assign('_mensaje', '¡Felicitaciones! Ha completado la primera fase del registro. Verifique'
                                  . ' su correo electr&oacute;nico para terminar con la segunda parte de Activaci&oacute;n de la Cuenta');
            $this->_vista->assign('titulo', 'Registro Completado');
            $this->_vista->renderizar('completo');
            exit;
        }
        
        $this->_vista->datos = array(
            'usuario'       => '',
            'nombres'       => '',
            'apellidos'     => '',
            'nacimiento'    => '',
            'genero'        => '',
            'email'         => '',
            'email2'        => '',
            'clave'         => '',
            'clave2'        => ''
        );
        
        $this->_vista->renderizar('registro');
    }
    
    public function activar($id, $codigo)
    {
        if(Sesion::getValor('sesion_autenticado') == TRUE)
        {
            $this->redireccionar();
        }
        
        $this->_vista->assign('titulo','Activar Cuenta');
        $this->_vista->assign('_error','');
        $this->_vista->assign('_mensaje','');
        
        if(!$this->filtrarInt($id) || !$this->filtrarInt($codigo))
        {
            $this->_vista->assign('_error', 'Esta cuenta no existe');
            $this->_vista->renderizar('activar');
            exit;
        }
        
        $fila = $this->_registro->getCodigo(
                $this->filtrarInt($id),
                $this->filtrarInt($codigo)
                );
        
        if (!$fila)
        {
            $this->_vista->assign('_error', 'Esta cuenta no existe');
            $this->_vista->renderizar('activar');
            exit;
        }
        
        if ($fila['estado'] == 1)
        {
            $this->_vista->assign('_error', 'Esta cuenta ya ha sido activada');
            $this->_vista->renderizar('activar');
            exit;
        }
        
        $this->_registro->activarCodigo($this->filtrarInt($id), $this->filtrarInt($codigo));
        
        $fila = $this->_registro->getCodigo(
                $this->filtrarInt($id),
                $this->filtrarInt($codigo)
                );
        
        if ($fila['estado'] == 0)
        {
            $this->_vista->assign('_error', 'Error al activar la cuenta. Por favor intente mas tarde');
            $this->_vista->renderizar('activar');
            exit;
        }
        
        $this->_vista->assign('_mensaje','Su cuenta ha sido activada');
        $this->_vista->renderizar('activar');
    }
}