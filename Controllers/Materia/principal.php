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
			$response = $this->model->getDataModel("*","materia");
			$response_1 = $this->model->getDataPer_Mat("A.nom_persona, A.nom1_persona, A.ape_persona, A.ape1_persona, B.id_perso_mate, C.des_materia", "persona", "perso_x_materia", "materia");
			$this->view->render2('Materia', $this, 'principal', $response, $response_1);
		}else{
			header("Location:".URL);
		}
	}
}

?>