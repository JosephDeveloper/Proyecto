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

	function getDataModel($columns, $table, $where){
		return $this->db->select1($columns, $table, $where);
	}

	function createModel($table, $array){
		return $this->db->insert($table, $array);
	}
}

?>