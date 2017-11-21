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

    public function delete($id_pais)
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "" && $userName["id_rol"] == 2) {
            $response = $this->model->getDataModel("*", "pais", "id_pais = '" . $id_pais . "'");
            if ($response != null) {
                $response = $this->model->getDataModel("*", "pais", "id_pais = '" . $id_pais . "'");
                $this->view->render('Pais', $this, "delete", $response);
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
        if ($userName != "" && $userName["id_rol"] == 2){
            if (isset($_POST["id_materia"])){
                $where = "id_materia = " . $_POST["id_materia"];
                $this->model->deleteModel("materia", $where);
                echo 1;
            }
        }else{
            header("Location: " . URL);
        }        
    }

    public function deleteAsignado()
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "" && $userName["id_rol"] == 2){
            if (isset($_POST["id_perso_mate"])){
                $where = "id_perso_mate = " . $_POST["id_perso_mate"];
                $this->model->deleteModel("perso_x_materia", $where);
                echo 1;
            }
        }else{
            header("Location: " . URL);
        }        
    }
}
