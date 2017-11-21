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

    public function delete($idRol)
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "" && $userName["id_rol"] == 1) {
            $response = $this->model->getDataModel("*", "rol", "id_rol = '" . $idRol . "'");
            if ($response != null) {
                $response = $this->model->getDataModel("*", "rol", "id_rol = '" . $idRol . "'");
                $this->view->render('Rol', $this, "delete", $response);
            } else {
                header("Location: " . URL);    
            }
        } else {
            header("Location: " . URL);
        }
    }

    public function deleteDatos()
    {
        $userName = Session::getSession("Usuario");
        if ($userName != ""){
            if (isset($_POST["id_rol"])){
                $where = "id_rol = " . $_POST["id_rol"];
                $this->model->deleteModel("rol", $where);
                echo 1;
            }
        }else{
            header("Location: " . URL);
        }        
    }
}
