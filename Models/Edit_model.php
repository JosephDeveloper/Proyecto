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

	function getData($columns, $table){
		return $this->db->select2($columns, $table);
	}

	function getDataUser_Rol($columns, $table, $table1, $where){
		return $this->db->selectUser_Rol($columns, $table, $table1, $where);
	}

	function getDataCiudad_Pais_1($columns, $table, $table1, $where){
		return $this->db->selectCiudad_Pais_1($columns, $table, $table1, $where);
	}

	function getDataIns_Ciu_1($columns, $table, $table1, $where){
		return $this->db->selectIns_Ciu_1($columns, $table, $table1, $where);
	}
}

?>