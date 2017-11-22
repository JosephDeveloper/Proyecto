<?php

/**
 *
 */
class Delete extends Controllers
{

    function __construct()
    {
        parent::__construct();
    }

    public function deleteDatos()
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "" && $userName["id_rol"] == 3){
            if (isset($_POST["id_subActividad"])){
                $where = "id_subActividad = " . $_POST["id_subActividad"];
                $this->model->deleteModel("subActividad", $where);
                echo 1;
            }
        }else{
            header("Location: " . URL);
        }        
    }
}
