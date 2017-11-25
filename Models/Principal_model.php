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

	function getDataModelWhere($columns, $table, $where){
		return $this->db->select1($columns, $table, $where);		
	}

	function getDataModelWhere_4($columns, $table, $table1, $table2, $table3, $where){
		return $this->db->select3($columns, $table, $table1, $table2, $table3, $where);		
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

	function getDataPer_Mat_1($columns, $table, $table1, $table2, $where){
		return $this->db->selectPer_Mat_1($columns, $table, $table1, $table2, $where);		
	}

	function getDataEst_Mat($columns, $table, $table1, $table2, $table3, $table4){
		return $this->db->selectEst_Mat($columns, $table, $table1, $table2, $table3, $table4);		
	}

	function getDataEst_Mat_1($columns, $table, $table1, $table2, $table3, $table4, $table5, $where, $and){
		return $this->db->selectEst_Mat_1($columns, $table, $table1, $table2, $table3, $table4, $table5, $where, $and);		
	}

	function getDataEva_Act($columns, $table, $table1, $where){
		return $this->db->selectEva_Act($columns, $table, $table1, $where);		
	}

	function getDataSub_Mat($columns, $table, $table1, $table2, $where, $and){
		return $this->db->selectSub_Mat($columns, $table, $table1, $table2, $where, $and);		
	}
		
}


?>