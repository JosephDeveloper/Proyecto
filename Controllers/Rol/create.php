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
}
