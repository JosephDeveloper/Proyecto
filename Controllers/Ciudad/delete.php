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

    public function delete($idCiudad = 0)
    {
        if (trim($idCiudad) != 0):
            $userName = Session::getSession("Usuario");
            if ($userName != "" && $userName["id_rol"] == 1) {
                $response = $this->model->getDataCiudad_Pais_1("*", "ciudad", "pais", "id_ciudad = '" . $idCiudad . "'");
                if ($response != null) {
                    $response = $this->model->getDataCiudad_Pais_1("*", "ciudad", "pais", "id_ciudad = '" . $idCiudad . "'");
                    $this->view->render('Ciudad', $this, "delete", $response);
                } else {
                    header("Location: " . URL);    
                }
            } else {
                header("Location: " . URL);
            }
        else:
            header("Location: " . URL);
        endif;
    }

    public function deleteDatos()
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "" && $userName["id_rol"] == 1){
            if (isset($_POST["id_ciudad"])){
                $where = "id_ciudad = " . $_POST["id_ciudad"];
                $this->model->deleteModel("ciudad", $where);
                echo 1;
            }
        }else{
            header("Location: " . URL);
        }        
    }
}
