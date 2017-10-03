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
			$response = $this->model->getDataModel("*","persona");
			$this->view->render('', $this, 'principal', $response);
		}else{
			header("Location:".URL);
		}
	}
}

?>