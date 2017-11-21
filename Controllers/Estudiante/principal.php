<?php 

/**
* 
*/
class principal extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
	}

	function principal(){
		$userName =  Session::getSession("Usuario");
		if ($userName != "" && $userName["id_rol"] == 2){
			$response = $this->model->getDataEst_Mat("A.id_estudi, A.nom_estudi, A.ape_estudi, B.id_eva_act, B.id_estudi, B.id_perso_mate, C.id_perso_mate, C.id_materia, C.id_persona, D.id_materia, D.des_materia, E.id_persona, E.nom_persona, E.ape_persona", "estudiante", "eva_x_act", "perso_x_materia", "materia", "persona");
			$this->view->render('Estudiante', $this, 'principal', $response);
		}else{
			header("Location:".URL);
		}
	}
}

?>