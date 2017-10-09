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
        if ($userName != "") {
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
        if ($userName != ""){
            if (isset($_POST["id_pais"])){
                $where = "id_pais = " . $_POST["id_pais"];
                $this->model->deleteModel("pais", $where);
                echo 1;
            }
        }else{
            header("Location: " . URL);
        }        
    }
}
