<?php

/**
 * Descripción de Controlador
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 02/08/2018
 * @version 1.0
 * @modificado 02/08/2018
 */

abstract class Controlador {
    protected $_vista;
    protected $_lanzador;
    
    public function __construct() {
        $this->_vista = new Vista(new Lanzador);
        $this->_lanzador = new Lanzador();
    }
    
    //-- Metodo que obliga a que todas las clases que hereden
    //-- deben tener un metodo 'index'
    abstract public function index(); 
    
    //-- Metodo que permite cargar el modelo
    protected function cargarModelo($modelo, $modulo = false) {
        $modelo = $modelo . 'Modelo';
        $rutaModelo = R_MODELOS . $modelo . '.php';
        
        if (!$modulo) {
            $modulo = $this->_lanzador->getModulo();
        }

        if ($modulo) {
            if ($modulo != 'default') {
                $rutaModelo = R_MODULOS . $modulo . DS . 'modelos' . DS . $modelo . '.php';
            }
        }

        if(is_readable($rutaModelo)){
            require_once $rutaModelo;
            $modelo = new $modelo;
            return $modelo;
        }
        else{
            throw new Exception('Error de Modelo');
        }
    }
    
    //-- Metodo que permite cargar una libreria indicando el nombre de directorio
    protected function cargarLibreria($directorio, $libreria) {
        $rutaLibreria = R_LIBS . $directorio . DS . $libreria . '.php';
        
        if(is_readable($rutaLibreria)) {
            require_once $rutaLibreria;
        }
        else {
            throw new Exception('Error de Libreria');
        }
    }
    
    //-- Metodo que permite limpiar campos de textos enviados por metodo POST
    protected function getTexto($clave) {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])) {
            $_POST[$clave] =  htmlspecialchars($_POST[$clave], ENT_QUOTES);
            return $_POST[$clave];
        }
        else{
            return '';
        }
    }
    
    //-- Metodo que permite limpiar los campos de tipo entero enviados por metodo POST
    protected function getInt($clave) {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])) {
            $_POST[$clave] = filter_input(INPUT_POST, $clave, FILTER_VALIDATE_INT);
            return $_POST[$clave];
        }
        else{
            return 0;
        }
    }
    
    //-- Metodo que limpia variables de tipo numeros enteros
    protected function filtrarInt($int)
    {
        $int = (int) $int;
        
        if(is_int($int)){
            return $int;
        }
        else{
            return 0;
        }
    }
    
    //-- Metodo que permite redireccionar a una ruta que se indique
    protected function redireccionar($ruta = false) {
        if($ruta){
            header('location:' . U_RAIZ . $ruta);
            exit;
        }
        else{
            header('location:' . U_RAIZ);
            exit;
        }
    }
    
    //-- Metodo que permite obtener un dato del la variables enviada por metodo POST
    protected function getPostParam($clave) {
        if(isset($_POST[$clave])){
            return $_POST[$clave];
        }
    }
    
    //-- Metodo que limpia los campos enviados por POST para evitar inyeccion sql
    protected function getSql($clave) {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = strip_tags($_POST[$clave]);
            }
            return trim($_POST[$clave]);
    }
    
    //-- Metodo que permite validar campos de textos
    protected function getAlphaNum($clave) {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = (string) preg_replace('/[^A-Z0-9_]/i', '', $_POST[$clave]);
            return trim($_POST[$clave]);
        }
    }
    
    /*
     * *****************************************************************
    //-- Metodo para validar correos electronicos
     * *****************************************************************
    */
    public function validarEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        }
        return true;
    }
    
    /*
     * *****************************************************************
    -- Metodo que permite enviar E-mail por medio de la clase PHPMAILER
     * *****************************************************************
    -- El parametro $correo es un array asociativo con las siguientes clave:
    -- host = A la direccion del servidor de correo
    -- html = Booleano TRUE para enviar el mensaje con etiquetas html
    -- desde = Direccion desde donde se envia el mensaje
    -- remitente = Nombre del usuario quien envia el correo
    -- asunto = Titulo del mensaje
    -- cuerpo = Cuerpo del mensaje
    -- destinatario = Direccion de Correo destino
    -- para = Nombre del destinatario
    */
    public function enviarCorreo($correo = array()) {
        $this->cargarLibreria('phpmailer', 'class.phpmailer');
        
        $mail = new PHPMailer();
        
        $mail->Host = $correo['host'];
        $mail->isHTML($correo['html']);
        $mail->From = $correo['desde'];
        $mail->FromName = $correo['remitente'];
        $mail->Subject = $correo['asunto'];
        $mail->Body = $correo['cuerpo'];
        $mail->WordWrap = 50;
        $mail->addAddress($correo['destinatario'], $correo['para']);
        $mail->send();
        
        return;
    }
    
    /*
     * ************************************************************************
    //-- Metodo que permite comparar dos campos de textos para los formularios
     * ************************************************************************
     */
    public function compararCampos($campo1, $campo2)
    {
        if ($campo1 === $campo2) {
            return TRUE;
        }
        return FALSE;
    }
    
    /*
     * *****************************************************************
    -- Metodo que permite subir archivos desde la clase uPLOAD
     * *****************************************************************
    -- Parametros; $archivo es un array con los siguientes indices asociativos
    -- nombre = Nombre del archivo que se subira; 
    -- ruta = Ruta donde se guardara el archivo
    -- tipo = Tipo MIME del archivo
    -- prefijo = prefijo para el nombre del archivo
    -- lenguaje = Codigo del lenguaje para los errores de la libreria
    */
    public function subirArchivos($archivo = array())
    {
        $this->cargarLibreria('upload', 'class.upload');
        
        $subirArchivo = new upload($archivo['nombre'], $archivo['lenguaje']);
        $subirArchivo->allowed = $archivo['tipo'];
        $subirArchivo->file_new_name_body = $archivo['prefijo'] . '_' . uniqid();
        $subirArchivo->process($archivo['ruta']);
        
        if ($subirArchivo->processed) {
            return array(TRUE, $subirArchivo->file_dst_name);
        }
        return array(FALSE, $subirArchivo->error);
    }
    
    /*
     * *********************************************************************
    -- Metodo que permite crear imagenes en miniatura desde la clase uPLOAD
     * *********************************************************************
    -- Parametros; $miniatura es un array con los siguientes indices asociativos
    -- Nombre = Nombre del archivo que se creara la miniatura; 
    -- ruta = Ruta donde se guardara el archivo miniatura; 
    -- prefijo = prefijo para el nombre del archivo
    -- redimensionar = Booleano que determina si se redimensiona o no la imagen por defecto en FALSE
    -- tx = tamaño en x de la imagen unidades pixeles por defecto en FALSE
    -- ty = tamaño en y de la imagen unidades pixeles por defecto en FALSE
    -- lenguaje = Codigo del lenguaje para los errores de la libreria
    */
    public function crearMiniaturas($miniatura = array())
    {
        $this->cargarLibreria('upload', 'class.upload');
        
        $crearMiniatura = new upload($miniatura['nombre'], $miniatura['lenguaje']);
        $crearMiniatura->image_resize = $miniatura['redimensionar'];
        if ($crearMiniatura->image_resize == TRUE)
        {
            $crearMiniatura->image_x = $miniatura['tx'];
            $crearMiniatura->image_y = $miniatura['ty'];
        }
        
        $crearMiniatura->file_name_body_pre = $miniatura['prefijo'] . '_';
        
        $crearMiniatura->process($miniatura['ruta']);
        
        if ($crearMiniatura->processed) {
            return array(TRUE, $crearMiniatura->file_dst_name);
        }
        return array(FALSE, $crearMiniatura->error);
    }
}