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

    public function edit($idRol)
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "" && $userName["id_rol"] == 1) {
            $response = $this->model->getDataModel("*", "rol", "id_rol = '" . $idRol . "'");
            $this->view->render('Rol', $this, "edit", $response);
        } else {
            header("Location: " . URL);
        }
    }

    public function editDatos()
    {
        if (isset($_POST["descripcion"])) {
            $id_rol = $_POST["id_rol"];
            $array["des_rol"]   = $_POST["descripcion"];
            $this->model->editModel("rol", $array, "id_rol = '" .$id_rol. "'");
            echo 1;
        }
    }
}
