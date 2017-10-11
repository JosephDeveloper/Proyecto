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

	function getDataCiudad_Pais($columns, $table, $table1){
		return $this->db->selectCiudad_Pais($columns, $table, $table1);		
	}

	function getDataIns_Ciu($columns, $table, $table1){
		return $this->db->selectIns_Ciu($columns, $table, $table1);		
	}

	function getDataPer_Mat($columns, $table, $table1, $table2){
		return $this->db->selectPer_Mat($columns, $table, $table1, $table2);		
	}
		
}


?>