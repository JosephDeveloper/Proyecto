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
				$response = $this->model->userLogin('*', "email_persona = '" .$_POST["email"]. "'");
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

	function sigIn(){
		if (isset($_POST["name"]) && isset($_POST["name_2"]) && isset($_POST["lastName"]) && isset($_POST["lastName_2"]) && isset($_POST["documento"]) && isset($_POST["genero"]) && isset($_POST["estado"]) && isset($_POST["direccion"]) && isset($_POST["telefono"]) && isset($_POST["celular"]) && isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["instituto"]) && isset($_POST["rol"])){
			$response = $this->model->userLogin('*', "email_persona = '" .$_POST["email"]. "'");
			$response = $response[0];
			if ($response == NULL){
				$array["nom_persona"] = $_POST["name"];
				$array["nom1_persona"] = $_POST["name_2"];
				$array["ape_persona"] = $_POST["lastName"];
				$array["ape1_persona"] = $_POST["lastName_2"];
				$array["doc_persona"] = $_POST["documento"];
				$array["gen_persona"] = $_POST["genero"];
				$array["est_persona"] = $_POST["estado"];
				$array["dir_persona"] = $_POST["direccion"];
				$array["tel_persona"] = $_POST["telefono"];
				$array["cel_persona"] = $_POST["celular"];
				$array["email_persona"] = $_POST["email"];
				$array["pass_persona"] = $_POST["pass"];
				$array["id_instituto"] = $_POST["instituto"];
				$array["id_rol"] = $_POST["rol"];
				$this->model->sigInModel($array);
				echo 1;
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