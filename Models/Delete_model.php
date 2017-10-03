<?php 

/**
* 
*/
class Delete_model extends Conexion
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getDataModel($columns, $table, $where){
		return $this->db->select1($columns, $table, $where);
	}

	function deleteModel($table, $where){
		return $this->db->delete($table, $where);
	}
}

?>