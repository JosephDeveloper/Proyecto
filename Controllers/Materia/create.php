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
            $this->view->render('Materia', $this, "create", '');
        } else {
            header("Location: " . URL);
        }
    }

    function createDatos(){
        if (isset($_POST["descripcion"])) {
            $materia = ucwords($_POST["descripcion"]);
            $response = $this->model->getDataModel('*', "materia", "des_materia = '" .$materia. "'");
            $response = $response[0];
            if ($response == NULL){
                $array["des_materia"] = $_POST["descripcion"];
                $this->model->createModel('materia', $array);
                echo 1;
            }
        }
    }
}
