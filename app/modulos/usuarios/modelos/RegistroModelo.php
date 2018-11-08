<?php

/**
 * Descripción de RegistroModelo
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 18/03/2018
 * @version 1.0
 * @modificado 29/10/2018
 */

class RegistroModelo extends Modelo {
    //agrega tu código acá
    protected $_tabla;
    protected $_idCampo;
    Protected $_campos = array();
    
    public function __construct() {
        parent::__construct();
        $this->_tabla = "mod_usuarios";
        $this->_idCampo = "id";
        $this->_campos = Array("id", "usuario", "nombres", "apellidos", 
            "f_nacimiento", "genero", "email", "clave", "estado", "id_role",
            "codigo", "creado", "modificado"
            );
    }
    
    public function setRegistro($usuario, $nombres, $apellidos, $f_nacimiento, $genero, $email, $clave) {
        
        $codigoAleatorio = rand(1221122343, 9999999999);
        
        $sql = "INSERT INTO " . BD_PREF . $this->_tabla;
        $sql .= " VALUES(null, '$usuario', '$nombres', '$apellidos', '$f_nacimiento', ";
        $sql .= "$genero, '$email', '";
        $sql .= Encriptador::getHash(HASH_MOD, $clave, HASH_KEY) . "', 0, 4, ";
        $sql .= $codigoAleatorio . ", now(), now())";
        
        $this->_db->query($sql);
        
        return;
    }
    
    public function verificarUsuario($usuario) {
        $sql  = "SELECT ". $this->_idCampo . ", " . $this->_campos[10] ." FROM " . $this->_tabla . " WHERE " . $this->_campos[1];
        $sql .= " = '" . $usuario . "'";
        
        $id = $this->_db->query($sql);
        
        if($id->fetch()){
            return TRUE;
        }
        return FALSE;
    }
    
    public function verificarCodigo($usuario) {
        $sql  = "SELECT ". $this->_idCampo . ", " . $this->_campos[10] . " FROM " . $this->_tabla . " WHERE " . $this->_campos[1];
        $sql .= " = '" . $usuario . "'";
        
        $codigo = $this->_db->query($sql);
        return $codigo->fetch();
    }
    
    public function getCodigo($id, $codigo) {

        $id = (int) $id;
        $codigo = (int) $codigo;
        
        $sql  = "SELECT * FROM " . $this->_tabla . " WHERE " . $this->_idCampo;
        $sql .= " = " . $id . " AND " . $this->_campos[10] . " = " . $codigo;
        
        $resultado = $this->_db->query($sql);
        return $resultado->fetch();
    }
    
    public function verificarCorreo($correo) {
        $sql  = "SELECT " . $this->_idCampo . " FROM " . $this->_tabla . " WHERE " . $this->_campos[6];
        $sql .= " = '" . $correo . "'";
        
        $id = $this->_db->query($sql);
        
        if($id->fetch()){
            return TRUE;
        }
        return FALSE;
    }
    
    public function activarCodigo($id, $codigo) {
        
        $id = (int) $id;
        $codigo = (int) $codigo;
        
        $sql  = "UPDATE " . $this->_tabla . " SET " . $this->_campos[8] . " = 1 ";
        $sql .= " WHERE " . $this->_idCampo . " = " . $id . " AND " . $this->_campos[10] . " = " . $codigo;
        $this->_db->query($sql);
        
    }    
}