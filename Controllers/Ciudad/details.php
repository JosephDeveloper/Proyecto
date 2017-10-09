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

    public function details($idCiudad)
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "") {
            $response = $this->model->getDataCiudad_Pais_1("*", "ciudad", "pais", "id_ciudad = '" . $idCiudad . "'");
            $this->view->render('Ciudad', $this, "details", $response);
        } else {
            header("Location: " . URL);
        }
    }

}