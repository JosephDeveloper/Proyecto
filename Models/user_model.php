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

    function userLogin($fields, $table, $where){
    	return $this->db->select1($fields, $table, $where);
    }
}
