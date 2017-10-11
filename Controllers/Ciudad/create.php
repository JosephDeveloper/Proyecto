<?php

/**
 *
 */
class Create extends Controllers
{

    function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "") {
            $response = $this->model->getData("*","pais");
            $this->view->render('Ciudad', $this, "create", $response);
        } else {
            header("Location: " . URL);
        }
    }

    function createDatos(){
        if (isset($_POST["descripcion"]) && isset($_POST["pais"])) {
            $ciudad = ucwords($_POST["descripcion"]);
            $response = $this->model->getDataModel('*', "ciudad", "des_ciudad = '" .$ciudad. "'");
            $response = $response[0];
            if ($response == NULL){                
                $array["des_ciudad"] = $_POST["descripcion"];
                $array["id_pais"] = $_POST["pais"];
                $this->model->createModel('ciudad', $array);
                echo 1;
            }
        }
    }
}
