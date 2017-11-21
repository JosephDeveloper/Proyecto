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
		if ($userName != "" && $userName["id_rol"] == 1){
			$response = $this->model->getDataCiudad_Pais("*", "ciudad", "pais");
			//$response = $this->model->getDataModel("*","ciudad");
			$this->view->render('Ciudad', $this, 'principal', $response);
		}else{
			header("Location:".URL);
		}
	}
}

?>