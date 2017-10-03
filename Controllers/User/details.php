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

    public function details($idUser)
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "") {
            $response = $this->model->getDataModel("*", "id_persona = '" . $idUser . "'");
            $this->view->render('Usuario', $this, "details", $response);
        } else {
            header("Location: " . URL);
        }
    }

}