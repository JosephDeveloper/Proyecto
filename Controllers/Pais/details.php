<?php

/**
 *
 */
class Details extends Controllers
{

    function __construct()
    {
        parent::__construct();
    }

    public function details($idPais)
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "" && $userName["id_rol"] == 1) {
            $response = $this->model->getDataModel("*", "pais", "id_pais = '" . $idPais . "'");
            $this->view->render('Pais', $this, "details", $response);
        } else {
            header("Location: " . URL);
        }
    }

}