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
		if ($userName != ""){
			$response = $this->model->getDataIns_Ciu("*", "instituto", "ciudad");
			//$response = $this->model->getDataModel("*","ciudad");
			$this->view->render('Institucion', $this, 'principal', $response);
		}else{
			header("Location:".URL);
		}
	}
}

?>