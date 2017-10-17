<?php

/**
 *
 */
class Edit extends Controllers
{

    function __construct()
    {
        parent::__construct();
    }

    public function edit($idMateria)
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "") {
            $response = $this->model->getDataModel("*", "Materia", "id_materia = '" . $idMateria . "'");
            echo json_encode($response);
            //$this->view->render('Pais', $this, "edit", $response);
        } else {
            header("Location: " . URL);
        }
    }

    public function editDatos()
    {
        if (isset($_POST["id_materia"]) && isset($_POST["descripcion"])) {
            $materia = ucwords($_POST["descripcion"]);
            $response = $this->model->getDataModel('*', "materia", "des_materia = '" .$materia. "'");
            $response = $response[0];
            if ($response == NULL){
                $id_materia = $_POST["id_materia"];
                $array["des_materia"]   = $_POST["descripcion"];
                $this->model->editModel("materia", $array, "id_materia = '" .$id_materia. "'");
                echo 1;
            }
        }
    }
}
