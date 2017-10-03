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

	function getDataModel($columns, $table, $where){
		return $this->db->select1($columns, $table, $where);
	}

	function editModel($table, $array, $where){
		return $this->db->update($table, $array, $where);
	}
}

?>