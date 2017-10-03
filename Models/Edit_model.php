<?php 

/**
* 
*/
class Edit_model extends Conexion
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getDataModel($columns, $where){
		return $this->db->select1($columns, "persona", $where);
	}

	function editModel($array, $where){
		return $this->db->update('persona', $array, $where);
	}
}

?>