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

    public function edit($idInstituto)
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "" && $userName["id_rol"] == 1) {
            $response = $this->model->getDataIns_Ciu_1("*", "instituto", "ciudad", "id_instituto = '" . $idInstituto . "'");
            $response1 = $this->model->getData("*", "ciudad");
            $this->view->render2('Institucion', $this, "edit", $response, $response1);
        } else {
            header("Location: " . URL);
        }
    }

    public function editDatos()
    {
        if (isset($_POST["instituto"]) && isset($_POST["descripcion"]) && isset($_POST["ciudad"]) && isset($_POST["direccion"]) && isset($_POST["barrio"]) && isset($_POST["telefono"])) {
            $id_instituto = $_POST["instituto"];
            $array["nom_instituto"]   = $_POST["descripcion"];
            $array["id_ciudad"]   = $_POST["ciudad"];
            $array["dir_instituto"]   = $_POST["direccion"];
            $array["barrio_instituto"]   = $_POST["barrio"];
            $array["tel_instituto"]   = $_POST["telefono"];
            $this->model->editModel("instituto", $array, "id_instituto = '" .$id_instituto. "'");
            echo 1;
        }
    }
}
