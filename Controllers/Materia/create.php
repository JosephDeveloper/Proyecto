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

    public function asignar()
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "") {
            $response = $this->model->getData("id_persona, nom_persona, nom1_persona, ape_persona, ape1_persona, doc_persona", "persona");
            $response1 = $this->model->getData("*", "materia");
            $this->view->contenido('Materia', $this, "asignar", $response, $response1);
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

    function asignarDatos(){
        if (isset($_POST["id_persona"]) && isset($_POST["id_materia"])) {
            $materia = $_POST["id_materia"];
            $response = $this->model->getDataModel('*', "materia", "id_materia = '" .$materia. "'");
            $response = $response[0];
            $persona = $_POST["id_persona"];
            $response1 = $this->model->getDataModel('*', "persona", "id_persona = '" .$persona. "'");
            $response1 = $response1[0];
            if ($response == NULL){
                echo 0;
            } else if ($response != NULL){
                if ($response1 == NULL) {
                    echo 2;
                }else{
                    $array["id_materia"] = $materia;
                    $array["id_persona"] = $persona;
                    $this->model->createModel('perso_x_materia', $array);
                    echo 1;
                }
            }
        }
    }
}
