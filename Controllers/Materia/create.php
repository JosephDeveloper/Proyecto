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
            $this->view->render('Pais', $this, "create", '');
        } else {
            header("Location: " . URL);
        }
    }

    function createDatos(){
        if (isset($_POST["iso"]) && isset($_POST["descripcion"])) {
            $pais = ucwords($_POST["descripcion"]);
            $response = $this->model->getDataModel('*', "pais", "des_pais = '" .$pais. "'");
            $response = $response[0];
            if ($response == NULL){
                $array["iso"] = $_POST["iso"];
                $array["des_pais"] = $_POST["descripcion"];
                $this->model->createModel('pais', $array);
                echo 1;
            }
        }
    }
}
