<?php

/**
 *
 */
class user_model extends Conexion
{

    function __construct()
    {
    	parent::__construct();
    }

    function userLogin($fields, $where){
    	return $this->db->select1($fields, "persona", $where);
    }

    function sigInModel($array){
    	return $this->db->insert("persona", $array);
    }
}
