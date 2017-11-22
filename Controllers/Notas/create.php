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
        if ($userName != "" && $userName["id_rol"] == 1) {
            $this->view->render('Rol', $this, "create", '');
        } else {
            header("Location: " . URL);
        }
    }

    function createDatos(){
        if (isset($_POST["descripcion"])) {
            $rol = ucwords($_POST["descripcion"]);
            $response = $this->model->getDataModel('*', "rol", "des_rol = '" .$rol. "'");
            $response = $response[0];
            if ($response == NULL){
                $array["des_rol"] = $_POST["descripcion"];
                $this->model->createModel('rol', $array);
                echo 1;
            }
        }
    }
    
    //OJOO
    function configurar(){
        $userName = Session::getSession("Usuario");
        if (isset($_POST["descripcion"]) && isset($_POST["fecha"])) {
            if ($userName != "" && $userName["id_rol"] == 3) {
                $descripcion = ucwords($_POST["descripcion"]);
                $response = $this->model->getDataModel('*', "subActividad", "des_subActividad = '" .$descripcion. "'");
                $response = $response[0];
                if ($response == NULL){
                    $array["des_subActividad"] = $_POST["descripcion"];
                    $array["id_actividad"] = $_POST["id_actividad"];
                    $array["fec_actividad"] = $_POST["fecha"];
                    $array["id_perso_mate"] = $_POST["id_materia"];
                    $this->model->createModel('subActividad', $array);
                    echo 1;
                }
            }
        }
    }
}
