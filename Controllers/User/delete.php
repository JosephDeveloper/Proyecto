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

    public function delete($idUser)
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "") {
            $response = $this->model->getDataModel("*", "id_persona = '" . $idUser . "'");
            if ($response != null) {
                $response = $this->model->getDataModel("*", "id_persona = '" . $idUser . "'");
                $this->view->render('Usuario', $this, "delete", $response);
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
            if (isset($_POST["id_persona"])){
                $where = "id_persona = " . $_POST["id_persona"];
                $this->model->deleteModel($where);
                echo 1;
            }
        }else{
            header("Location: " . URL);
        }        
    }
}
