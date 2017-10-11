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

    public function edit($idCiudad)
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "") {
            $response = $this->model->getDataCiudad_Pais_1("*", "ciudad", "pais", "id_ciudad = '" . $idCiudad . "'");
            $response1 = $this->model->getData("*", "pais");
            $this->view->render2('Ciudad', $this, "edit", $response, $response1);
        } else {
            header("Location: " . URL);
        }
    }

    public function editDatos()
    {
        if (isset($_POST["id_ciudad"]) && isset($_POST["descripcion"]) && isset($_POST["pais"])) {
            $id_ciudad = $_POST["id_ciudad"];
            $array["des_ciudad"]   = $_POST["descripcion"];
            $array["id_pais"]   = $_POST["pais"];
            $this->model->editModel("ciudad", $array, "id_ciudad = '" .$id_ciudad. "'");
            echo 1;
        }
    }
}
