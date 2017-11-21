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
        if ($userName != "" && $userName["id_rol"] == 2) {
            $this->view->render('Estudiante', $this, "create", '');
        } else {
            header("Location: " . URL);
        }
    }

    public function asignar()
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "" && $userName["id_rol"] == 2) {
            $response = $this->model->getData("id_estudi, nom_estudi, ape_estudi, doc_estudi", "estudiante");
            $response1 = $this->model->getDataPer_Mat("*", "persona", "perso_x_materia", "materia");
            $this->view->contenido('Estudiante', $this, "asignar", $response, $response1);
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
        if (isset($_POST["id_estudi"]) && isset($_POST["id_perso_mate"])) {
            $materia = $_POST["id_perso_mate"];
            $response = $this->model->getDataModel('*', "perso_x_materia", "id_perso_mate = '" .$materia. "'");
            $response = $response[0];
            $estudiante = $_POST["id_estudi"];
            $response1 = $this->model->getDataModel('*', "estudiante", "id_estudi = '" .$estudiante. "'");
            $response1 = $response1[0];
            if ($response == NULL){
                echo 0;
            } else if ($response != NULL){
                if ($response1 == NULL) {
                    echo 2;
                }else{
                    $array["id_estudi"] = $estudiante;
                    $array["id_perso_mate"] = $materia;
                    $this->model->createModel('eva_x_act', $array);
                    echo 1;
                }
            }
        }
    }
}
