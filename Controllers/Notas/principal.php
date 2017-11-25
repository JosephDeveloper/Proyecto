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

	function evaluacion(){
		$userName =  Session::getSession("Usuario");
		if ($userName != "" && $userName["id_rol"] == 3){
			$response = $this->model->getDataModel("*", "evaluacion");
			$this->view->render('Notas', $this, 'evaluacion', $response);
		}else{
			header("Location:".URL);
		}
	}

	function materia($id_evaluacion){
		$userName =  Session::getSession("Usuario");		
		if ($userName != "" && $userName["id_rol"] == 3){
			$response = $this->model->getDataPer_Mat_1("A.id_persona, B.id_perso_mate, C.id_materia, C.des_materia", "persona", "perso_x_materia", "materia",  "A.id_persona = " . $userName["id_persona"]);
			$this->view->render2('Notas', $this, 'materia', $response, $id_evaluacion);
		}else{
			header("Location:".URL);
		}
	}

	function estudiantes($id_materia){
		$userName =  Session::getSession("Usuario");		
		if ($userName != "" && $userName["id_rol"] == 3){
			$evaluacion = $_GET["evaluacion"];
			//echo $id_materia;
			$response = $this->model->getDataEst_Mat_1("*", "eva_x_act", "estudiante", "perso_x_materia", "subactividad", "actividad", "evaluacion", "A.id_perso_mate = " . $id_materia, "F.id_evaluacion = " . $evaluacion);
			$response_1 = $this->model->getDataModelWhere("*", "actividad", "id_evaluacion = " .$evaluacion);
			$response_2 = $this->model->getDataModelWhere_4("*", "subactividad", "actividad", "evaluacion", "perso_x_materia", "A.id_perso_mate = " .$id_materia);
			$this->view->render3('Notas', $this, 'estudiantes', $response, $response_1, $response_2);
		}else{
			header("Location:".URL);
		}
	}	

	function actividad($id_evaluacion){
		$userName =  Session::getSession("Usuario");
		if ($userName != "" && $userName["id_rol"] == 3){
			$response = $this->model->getDataEva_Act("*", "actividad", "evaluacion", "B.id_evaluacion = " . $id_evaluacion);
			$this->view->render2('Evaluacion', $this, 'actividad', $response, $id_evaluacion);
		}else{
			header("Location:".URL);
		}
	}


	function subactividad($id_actividad){
		$userName =  Session::getSession("Usuario");
		if ($userName != "" && $userName["id_rol"] == 3){
			$materia = $_GET["materia"];
			$response = $this->model->getDataSub_Mat("*", "subactividad", "actividad", "perso_x_materia",  "A.id_actividad = " . $id_actividad, "A.id_perso_mate = " . $materia);
			$this->view->render3('Evaluacion', $this, 'subactividad', $response, $id_actividad, $materia);
		}else{
			header("Location:".URL);
		}
	}

	function principal($id_actividad){
		$userName =  Session::getSession("Usuario");
		if ($userName != "" && $userName["id_rol"] == 3){
			$response = $this->model->getDataPer_Mat_1("A.id_persona, B.id_perso_mate, C.id_materia, C.des_materia", "persona", "perso_x_materia", "materia",  "A.id_persona = " . $userName["id_persona"]);
			$this->view->render('Evaluacion', $this, 'principal', $response);
		}else{
			header("Location:".URL);
		}
	}
}

?>