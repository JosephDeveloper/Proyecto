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
			$response = $this->model->getDataModel("*","rol");
			$this->view->render('Rol', $this, 'principal', $response);
		}else{
			header("Location:".URL);
		}
	}
}

?>