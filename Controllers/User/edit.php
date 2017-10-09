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

    public function edit($idUser)
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "") {
            $response = $this->model->getDataUser_Rol("*", "persona", "rol", "id_persona = '" . $idUser . "'");
            $response1 = $this->model->getDataRol("*", "rol");
            $this->view->render_Persona('Usuario', $this, "edit", $response, $response1);
        } else {
            header("Location: " . URL);
        }
    }

    public function editDatos()
    {
        if (isset($_POST["name"]) && isset($_POST["name_2"]) && isset($_POST["lastName"]) && isset($_POST["lastName_2"]) && isset($_POST["documento"]) && isset($_POST["genero"]) && isset($_POST["estado"]) && isset($_POST["direccion"]) && isset($_POST["telefono"]) && isset($_POST["celular"]) && isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["instituto"]) && isset($_POST["rol"])) {
            $id_persona = $_POST["id_persona"];
            $array["nom_persona"]   = $_POST["name"];
            $array["nom1_persona"]  = $_POST["name_2"];
            $array["ape_persona"]   = $_POST["lastName"];
            $array["ape1_persona"]  = $_POST["lastName_2"];
            $array["doc_persona"]   = $_POST["documento"];
            $array["gen_persona"]   = $_POST["genero"];
            $array["est_persona"]   = $_POST["estado"];
            $array["dir_persona"]   = $_POST["direccion"];
            $array["tel_persona"]   = $_POST["telefono"];
            $array["cel_persona"]   = $_POST["celular"];
            $array["email_persona"] = $_POST["email"];
            $array["pass_persona"]  = $_POST["pass"];
            $array["id_instituto"]  = $_POST["instituto"];
            $array["id_rol"]        = $_POST["rol"];
            $this->model->editModel("persona", $array, "id_persona = '" .$id_persona. "'");
            echo 1;
        }
    }
}
