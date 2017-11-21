<?php

/**
 *
 */
class Delete extends Controllers
{

    function __construct()
    {
        parent::__construct();
    }

    public function delete($idInstituto = 0)
    {
        if (trim($idInstituto) != 0):
            $userName = Session::getSession("Usuario");
            if ($userName != "" && $userName["id_rol"] == 1) {
                $response = $this->model->getDataIns_Ciu_1("*", "instituto", "ciudad", "id_instituto = '" . $idInstituto . "'");
                if ($response != null) {
                    $response = $this->model->getDataIns_Ciu_1("*", "instituto", "ciudad", "id_instituto = '" . $idInstituto . "'");
                    $this->view->render('Institucion', $this, "delete", $response);
                } else {
                    header("Location: " . URL);    
                }
            } else {
                header("Location: " . URL);
            }
        else:
            header("Location: " . URL);
        endif;
    }

    public function deleteDatos()
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "" && $userName["id_rol"] == 1){
            if (isset($_POST["id_instituto"])){
                $where = "id_instituto = " . $_POST["id_instituto"];
                $this->model->deleteModel("instituto", $where);
                echo 1;
            }
        }else{
            header("Location: " . URL);
        }        
    }
}
