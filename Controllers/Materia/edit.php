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

    public function edit($idPais)
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "") {
            $response = $this->model->getDataModel("*", "pais", "id_pais = '" . $idPais . "'");
            $this->view->render('Pais', $this, "edit", $response);
        } else {
            header("Location: " . URL);
        }
    }

    public function editDatos()
    {
        if (isset($_POST["iso"]) && isset($_POST["descripcion"])) {
            $pais = ucwords($_POST["descripcion"]);
            $response = $this->model->getDataModel('*', "pais", "des_pais = '" .$pais. "'");
            $response = $response[0];
            if ($response == NULL){
                $id_pais = $_POST["id_pais"];
                $array["des_pais"]   = $_POST["descripcion"];
                $this->model->editModel("pais", $array, "id_pais = '" .$id_pais. "'");
                echo 1;
            }
        }
    }
}
