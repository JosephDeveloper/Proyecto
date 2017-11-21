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
        if ($userName != "" && $userName["id_rol"] == 1) {
            $response = $this->model->getDataUser_Rol("*", "persona", "rol", "id_persona = '" . $idUser . "'");
            $this->view->render('Usuario', $this, "details", $response);
        } else {
            header("Location: " . URL);
        }
    }

}