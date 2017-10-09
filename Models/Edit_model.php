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

	function getDataUser_Rol($columns, $table, $table1, $where){
		return $this->db->selectUser_Rol($columns, $table, $table1, $where);
	}

	function getDataRol($columns, $table){
		return $this->db->select2($columns, $table);
	}
}

?>