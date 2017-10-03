<?php 

/**
* 
*/
class user extends Controllers
{
	
	function __construct()
	{
		parent::__construct();	
	}

	function userLogin(){
		if (isset($_POST["email"]) && isset($_POST["password"])) {
			if (trim($_POST["email"]) != "" && trim($_POST["password"]) != "") {
				$response = $this->model->userLogin('*', "persona", "email_persona = '" .$_POST["email"]. "'");
				$response = $response[0];

				if ($response["pass_persona"] == $_POST["password"]) {
					$this->createSession($response);
					echo 1;
				}
			}else{
				echo 0;
			}
		}
	}

	function createSession($user){
		Session::setSession('Usuario',$user);
	}

	function destroySession(){
		Session::destroy();
		header("Location:".URL);
	}
}

?>