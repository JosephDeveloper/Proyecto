<?php 

/**
* 
*/
class Principal_model extends Conexion
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getDataModel($columns, $table){
		return $this->db->select2($columns, $table);		
	}
}


?>