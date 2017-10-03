<?php 

/**
* 
*/
class Conexion extends Controllers
{
	
	function __construct()
	{
		$this->db = new QueryManager("localhost", "root", "", "institucion");
	}
}

?>