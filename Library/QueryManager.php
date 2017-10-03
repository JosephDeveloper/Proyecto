<?php

/**
 *
 */
class QueryManager
{

    private $link;

    function __construct($HOST, $USER, $PASS, $NAME)
    {
        $this->link = new mysqli($HOST, $USER, $PASS, $NAME);
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %\n", mysqli_connect_error());
            exit();
        }
    }

    function select1($attr, $table, $where)
    {
        $query  = "SELECT " . $attr . " FROM " . $table . " WHERE " . $where . ";";
        $result = $this->link->query($query);

        if ($result->num_rows > 0) {
        	while ($row = $result->fetch_assoc()) {
        		$response[] = $row;
        	}
        	return $response;
        }
    }

    function select2($attr, $table)
    {
        $query  = "SELECT " . $attr . " FROM " . $table . ";";
        $result = $this->link->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
            return $response;
        }
    }

    function insert($table, $columns){
        $columnas = null;
        $datos = null;

        foreach ($columns as $key => $value) {
            $columnas .= $key . ',';
            $datos .= '"' .$value. '",';            
        }

        //substr - devuelve parte de una cadena --- quitar coma ,
        $columnas =  substr($columnas, 0, -1);
        $datos = substr($datos, 0, -1);

        $stmt = "INSERT INTO " .$table. "(" .$columnas. ") VALUES (" .$datos. ")";
        $result = $this->link->query($stmt) or die ($this->link->error);
    }

    function update($table, $columns, $where){
        $valores = "";

        foreach ($columns as $key => $value) {
            $valores .= $key . ' = "' . $value . '",';
        }

        $valores = substr($valores, 0, strlen($valores)-1);

        $query = "UPDATE $table SET $valores WHERE $where";
        $result = $this->link->query($query) or die ($this->link->error.__LINE__);

        return true;
    }

    function delete($table, $where){
        $stmt = "DELETE FROM $table WHERE $where";
        $result = $this->link->query($stmt) or die ($this->link->error.__LINE__);

        return true;
    }
}
