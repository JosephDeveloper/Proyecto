<?php 

/**
* 
*/
class Create_model extends Conexion
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getDataModel($columns, $where){
		return $this->db->select1($columns, "persona", $where);
	}

	function createModel($array){
		return $this->db->insert('persona', $array);
	}
}

?>