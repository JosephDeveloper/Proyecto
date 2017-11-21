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

    public function details($idInstituto)
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "" && $userName["id_rol"] == 1) {
            $response = $this->model->getDataIns_Ciu_1("*", "instituto", "ciudad", "id_instituto = '" . $idInstituto . "'");
            $this->view->render('Institucion', $this, "details", $response);
        } else {
            header("Location: " . URL);
        }
    }

}