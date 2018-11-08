<?php
/**
 * Descripción de indexControlador
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 08/10/2018
 * @version 1.0
 * @modificado 08/10/2018
 */

class indexControlador extends noticiasControlador
{
	private $_noticias;

	public function __construct()
	{
		parent::__construct();
		$this->_noticias = $this->cargarModelo('index', 'noticias');
	}

	public function index()
	{

		$noticias = $this->_noticias->getNoticias();
		$this->_vista->assign('mensaje', $noticias);

       	$this->_vista->renderizar('index');
	}
}
