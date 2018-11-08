<?php

/**
 * 
 */
class indexModelo extends Modelo
{
	protected $_tabla;
    protected $_idCampo;
    Protected $_campos = array();

    public function __construct() {
        parent::__construct();
        $this->_tabla = "mod_noticias";
        $this->_idCampo = "id";
        $this->_campos = Array("id", "titulo", "cuerpo", "palabras_claves", 
            "id_categoria", "id_autor", "creado", "modificado"
            );	
	}

	public function getNoticias()
	{
		$sql = "SELECT * FROM " . BD_PREF . $this->_tabla;

		$resultados = $this->_db->query($sql);
		$noticias = $resultados->fetchAll();
		return $noticias;
	}

	public function getNoticia($id)
	{

	}

	public function crearNoticia($titulo, $cuerpo, $autor, $palabrasClaves)
	{

	}

	public function actualizarNoticia($id, $titulo, $cuerpo, $autor, $palabrasClaves)
	{

	}

	public function borrarNoticia($id)
	{

	}

	

}