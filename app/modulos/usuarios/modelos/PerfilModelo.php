<?php

/**
 * Descripción de PerfilModelo
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 21/06/2018
 * @version 1.0
 * @modificado 21/06/2018
 */

class PerfilModelo extends Modelo
{
    //agrega tu código acá
    protected $_tabla;
    protected $_idCampo;
    Protected $_campos = array();

    public function __construct()
    {
        parent::__construct();
        
        $this->_tabla = 'mod_usuarios';
        $this->_idCampo = 'id';
        $this->_campos = Array("id", "usuario", "nombres", "apellidos", 
            "f_nacimiento", "genero", "email", "clave", "estado", "id_role",
            "codigo", "creado", "modificado"
            );
    }
    
    public function getPerfil() {
        
        $sql  = "SELECT * FROM " . BD_PREF . $this->_tabla;
        $sql .= " WHERE " . $this->_idCampo . " = ?";
        
        $login = $this->_db->prepare($sql);
        $login->bindValue(1, Sesion::getValor('sesion_id_usuario'));
        $login->execute();
        
        $resultado = $login->fetch(PDO::FETCH_ASSOC);
        $login->closeCursor();
        
        return $resultado;
    }
    
    public function actualizarPerfil($nombres, $apellidos, $f_nacimiento, $genero, $email, $clave)
    {
        $sql  = "UPDATE " . $this->_tabla;
        $sql .= " SET ";
        $sql .= $this->_campos[2] . " = '" . $nombres . "', ";
        $sql .= $this->_campos[3] . " = '" . $apellidos . "', ";
        $sql .= $this->_campos[4] . " = '" . $f_nacimiento . "', ";
        $sql .= $this->_campos[5] . " = '" . $genero . "', ";
        $sql .= $this->_campos[6] . " = '" . $email . "', ";
        $sql .= $this->_campos[7] . " = '" . Encriptador::getHash(HASH_MOD, $clave, HASH_KEY) . "', ";
        $sql .= $this->_campos[12] . " = now()";
        $sql .= " WHERE " . $this->_idCampo . " = " . Sesion::getValor('sesion_id_usuario');
        
        $this->_db->query($sql);
        
        return;
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
    
    public function verificarClave($clave) {
        $sql  = "SELECT " . $this->_idCampo . " FROM " . $this->_tabla . " WHERE ";
        $sql .= $this->_idCampo . " = " . Sesion::getValor('sesion_id_usuario');
        $sql .= " AND " . $this->_campos[7] . " = '" . Encriptador::getHash(HASH_MOD, $clave, HASH_KEY) . "'";
        
        $id = $this->_db->query($sql);
        
        if($id->fetch()){
            return TRUE;
        }
        return FALSE;
    }
}
