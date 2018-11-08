<?php
/**
 * Descripción de Vista
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 02/08/2018
 * @version 1.0
 * @modificado 08/10/2018
 */

require_once R_LIBS . 'smarty' . DS . 'libs' . DS . 'Smarty.class.php';

class Vista extends Smarty {
    //agrega tu código acá
    private $_lanzador;
    private $_sistema;
    private $_js;
    private $_publicoCss;
    private $_publicoJs;
    private $_posicion;
    private $_rutas;
    private $_menuLogin;
    public $datos;


    public function __construct(Lanzador $peticion) {
        parent::__construct();
        $this->_lanzador = $peticion;
        $this->_js = array();
        $this->_sistema = new Sistema();
        $this->_publicoCss = array();
        $this->_publicoJs = array();
        $this->_rutas = array();
        $this->_menuLogin = array();
        $this->datos = array();
        
        Sesion::init();
        $modulo = $this->_lanzador->getModulo();
        $controlador = $this->_lanzador->getControlador();

        if ($modulo) {
            $this->_rutas['vistas'] = R_MODULOS . $modulo . DS . 'vistas' . DS . $controlador . DS;
            $this->_rutas['js'] = U_RAIZ . 'modulos/' . $modulo . '/vistas/' . $controlador . '/js/';
        } else {
            $this->_rutas['vistas'] = R_VISTAS . $controlador . DS;
            $this->_rutas['js'] = U_RAIZ . 'vistas/' . $controlador . '/js/';
        }             

        
        
        //-- Posiciones de la plantilla
        $this->_posicion[0] = 'Seleccione';
        $this->_posicion[1] = 'Cabecera';
        $this->_posicion[2] = 'Pi&eacute; de p&aacute;gina';
        $this->_posicion[3] = 'Lateral Izquierdo';
        $this->_posicion[4] = 'Lateral Derecho';
        $this->_posicion[5] = 'Centro';
    }
    
    public function renderizar($vista, $item = false) {
        //-- asignacion de las rutas de trabajo Smarty
        $this->template_dir = R_VISTAS . 'plantillas' . DS . DEFAULT_PLANTILLA . DS;
        $this->config_dir = R_VISTAS . 'plantillas' . DS . DEFAULT_PLANTILLA . DS . 'configs';
        $this->cache_dir = R_TEMP . 'cache' . DS;
        $this->compile_dir = R_TEMP . 'template_c' . DS;
        
        
        //-- Matriz con los item de barra de navegacion
        $menus = $this->_sistema->getMenus();
        $sistema = $this->_sistema->getSistemas();
        
        if(Sesion::getValor('sesion_autenticado'))
        {
            $this->_menuLogin = array(
                    array(
                      'id' => 10002,
                      'menu_titulo' => Sesion::getValor('sesion_nombre'),
                      'menu_url' => 'perfil'
                    ),
                    array(
                      'id' => 10003,
                      'menu_titulo' => 'Cerrar',
                      'menu_url' => 'usuarios/login/cerrar'
                    )
                    );
        }
        else
        {
            $this->_menuLogin = array(
                    array(
                      'id' => 10000,
                      'menu_titulo' => 'Login',
                      'menu_url' => 'usuarios/login'
                    ),
                    array(
                      'id' => 10001,
                      'menu_titulo' => 'Registro',
                      'menu_url' => 'usuarios/registro'
                    ));
        }
        
        //--Parametros para configurar la plantilla
        $_paramPlantilla = array(
            'bootstrap_js' => U_RAIZ . 'libs/bootstrap/js/bootstrap.min.js',
            'bootstrap_css' => U_RAIZ . 'libs/bootstrap/css/bootstrap.min.css',
            'bootstrap_theme' => U_RAIZ . 'libs/bootstrap/css/bootstrap-theme.min.css',
            'bootstrap_fonts' => U_RAIZ . 'libs/bootstrap/fonts/',
            'jq' => U_RAIZ . 'libs/bootstrap/js/jquery-3.2.1.min.js',
            'ruta_css' => U_RAIZ . 'app/vistas/plantillas/' . DEFAULT_PLANTILLA . '/css/',
            'ruta_img' => U_RAIZ . 'app/vistas/plantillas/' . DEFAULT_PLANTILLA . '/img/',
            'ruta_js' => U_RAIZ . 'app/vistas/plantillas/' . DEFAULT_PLANTILLA . '/js/',
            'ruta_configs' => R_VISTAS . 'plantillas' . DS . DEFAULT_PLANTILLA . DS . 'configs' . DS,
            'menu' => $menus,
            'menuLogin' => $this->_menuLogin,
            'descrip' => FRMW_VERSION,
            'autor' => FRMW_AUTOR,
            'admin' => APP_ADMIN_NAME,
            'app' => APP_NAME,
            'sistema' => $sistema,
            'url' => U_RAIZ
            
        );
        
        //-- Se prepara la ruta a la vista
        $rutaVista = $this->_rutas['vistas'] . $vista . '.tpl';
        
        //-- Se verifica si es accesible el archivo de la vista
        if(is_readable($rutaVista)){
            $this->assign('_contenido', $rutaVista);
        }
        else{
            throw new Exception('Error de vista');
        }
        
        
        //-- Se envia a Smarty los parametros de la plantilla
        $this->assign('_pPlant', $_paramPlantilla);
        $this->assign('datos', $this->datos);
        $this->display('template.tpl');
        
    }
    
    public function setMenu($menu) {
        //-- Se prepara la ruta al menu
        $rutaMenu = R_VISTAS . 'plantillas' . DS . PLANTILLA_DEFAULT . DS . $menu . 'Menu.tpl';
        
        //-- aca se comprueba se existe la ruta al archivo menu
        if(is_readable($rutaMenu)){
            $this->assign('_menu', $rutaMenu);
        }
        else{
            throw new Exception('Error de men&uacute; en la vista');
        }
    }
    
    public function setJs(array $js) {
        if(is_array($js) && count($js)){
            for($i = 0; $i < count($js); $i++){
                $this->_js[] = $this->_rutas['js'] . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error de Js');
        }
    }
    
    public function setPublicaJs(array $publicaJs) {
        if(is_array($publicaJs) && count($publicaJs)){
            for($i = 0; $i < count($publicaJs); $i++){
                $this->_publicaJs[] = PUBLICA_URL . 'js/' . $publicaJs[$i] . '.js';
            }
        } else {
            throw new Exception('Error de Js');
        }
    }
    
    public function setPublicaCss(array $publicaCss) {
        if(is_array($publicaCss) && count($publicaCss)){
            for($i = 0; $i < count($publicaCss); $i++){
                $this->_publicaCss[] = PUBLICA_URL . 'css/' . $publicaCss[$i] . '.css';
            }
        } else {
            throw new Exception('Error de Css');
        }
    }
    
    public function setModal($modal) {
        
        $rutaModal = R_VISTAS . $this->_controlador . DS . $modal . 'Modal.tpl';
        
        if(is_readable($rutaModal)){
            $this->assign('_modal', $rutaModal);
        }
        else{
            throw new Exception('Error de Modal');
        }
    }
}
