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
            $response = $this->model->getData("*","ciudad");
            $this->view->render('Institucion', $this, "create", $response);
        } else {
            header("Location: " . URL);
        }
    }

    function createDatos(){
        if (isset($_POST["descripcion"]) && isset($_POST["ciudad"]) && isset($_POST["direccion"]) && isset($_POST["barrio"]) && isset($_POST["telefono"])) {
            $instituto = ucwords($_POST["descripcion"]);
            $response = $this->model->getDataModel('*', "instituto", "nom_instituto = '" .$instituto. "'");
            $response = $response[0];
            if ($response == NULL){                
                $array["nom_instituto"] = $_POST["descripcion"];
                $array["id_ciudad"] = $_POST["ciudad"];
                $array["dir_instituto"] = $_POST["direccion"];
                $array["barrio_instituto"] = $_POST["barrio"];
                $array["tel_instituto"] = $_POST["telefono"];
                $this->model->createModel('instituto', $array);
                echo 1;
            }
        }
    }
}
