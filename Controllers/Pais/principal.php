<?php 

/**
* 
*/
class Principal extends Controllers
{
	
	function __construct()
	{
		parent::__construct();
	}

	function Principal(){
		$userName =  Session::getSession("Usuario");
		if ($userName != "" && $userName["id_rol"] == 1){
			$response = $this->model->getDataModel("*","pais");
			$this->view->render('Pais', $this, 'principal', $response);
		}else{
			header("Location:".URL);
		}
	}
}

?>