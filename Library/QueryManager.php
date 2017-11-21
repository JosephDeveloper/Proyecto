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



    function selectUser_Rol($attr, $table, $table1, $where){
        $query  = "SELECT " . $attr . 
                " FROM " . $table . " AS A 
                INNER JOIN " . $table1 . " AS B 
                ON A.id_rol = B.id_rol 
                WHERE " . $where . ";";
        $result = $this->link->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
            return $response;
        }
    }


    function selectCiudad_Pais($attr, $table, $table1){
        $query  = "SELECT " . $attr . 
                " FROM " . $table . " AS A 
                INNER JOIN " . $table1 . " AS B 
                ON A.id_pais = B.id_pais;";
        $result = $this->link->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
            return $response;
        }
    }

    function selectCiudad_Pais_1($attr, $table, $table1, $where){
        $query  = "SELECT " . $attr . 
                " FROM " . $table . " AS A 
                INNER JOIN " . $table1 . " AS B 
                ON A.id_pais = B.id_pais 
                WHERE " .$where. ";";
        $result = $this->link->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
            return $response;
        }
    }

    function selectIns_Ciu($attr, $table, $table1){
        $query  = "SELECT " . $attr . 
                " FROM " . $table . " AS A 
                INNER JOIN " . $table1 . " AS B 
                ON A.id_ciudad = B.id_ciudad;";
        $result = $this->link->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
            return $response;
        }
    }

    function selectIns_Ciu_1($attr, $table, $table1, $where){
        $query  = "SELECT " . $attr . 
                " FROM " . $table . " AS A 
                INNER JOIN " . $table1 . " AS B 
                ON A.id_ciudad = B.id_ciudad 
                WHERE " .$where. ";";
        $result = $this->link->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
            return $response;
        }
    }

    function selectPer_Mat($attr, $table, $table1, $table2){
        $query  = "SELECT " . $attr . 
                " FROM " . $table . " AS A 
                INNER JOIN " . $table1 . " AS B 
                ON A.id_persona = B.id_persona 
                INNER JOIN " . $table2 . " AS C 
                ON C.id_materia = B.id_materia;";
        $result = $this->link->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
            return $response;
        }
    }

    function selectEst_Mat($attr, $table, $table1, $table2, $table3, $table4){
        $query  = "SELECT " . $attr . 
                " FROM " . $table . " AS A 
                INNER JOIN " . $table1 . " AS B 
                ON A.id_estudi = B.id_estudi
                INNER JOIN " . $table2 . " AS C 
                ON B.id_perso_mate = C.id_perso_mate
                INNER JOIN " . $table3 . " AS D
                ON C.id_materia = D.id_materia
                INNER JOIN " . $table4 . " AS E 
                ON C.id_persona = E.id_persona;";
        $result = $this->link->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
            return $response;
        }
    }
}