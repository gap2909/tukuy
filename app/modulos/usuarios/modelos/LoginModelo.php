<?php
/**
 * Descripción de LoginModelo
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 18/03/2018
 * @version 1.0
 * @modificado 18/03/2018
 */

class LoginModelo extends Modelo {
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
    
    public function getLogin($usuario, $clave) {
        
        $sql  = "SELECT * FROM " . BD_PREF . $this->_tabla;
        $sql .= " WHERE " . $this->_campos[1] . " = ?";
        $sql .= " AND " . $this->_campos{7} . " = ?";
        
        $login = $this->_db->prepare($sql);
        $login->bindValue(1, $usuario);
        $login->bindValue(2, Encriptador::getHash(HASH_MOD, $clave, HASH_KEY));
        $login->execute();
        
        $resultado = $login->fetch(PDO::FETCH_ASSOC);
        $login->closeCursor();
        
        return $resultado;
    }
    
    public function verificarCorreo($correo) {
        $sql  = "SELECT * FROM " . $this->_tabla . " WHERE " . $this->_campos[6];
        $sql .= " = '" . $correo . "'";
        
        $id = $this->_db->query($sql);
        $registro = $id->fetch();
        
        if($registro){
            return $registro;
        }
        return FALSE;
    }
}
