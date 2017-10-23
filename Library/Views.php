<?php
	/**
	* 
	*/
	class Views
	{
		
		function __construct()
		{
			
		}

		//Metodo que ejecutara las vistas
		function render($site, $controller, $view, $array)
		{
			//get_class devuelve el nombre de la clase de un objeto
			$controllers = get_class($controller);
			require VIEWS.DFT."head.php";
			require VIEWS. $site . '/' . $controllers.'/'.$view.'.php';
			require VIEWS.DFT."footer.php";
		}

		function render2($site, $controller, $view, $array, $array1)
		{
			//get_class devuelve el nombre de la clase de un objeto
			$controllers = get_class($controller);
			require VIEWS.DFT."head.php";
			require VIEWS. $site . '/' . $controllers.'/'.$view.'.php';
			require VIEWS.DFT."footer.php";
		}

		function render3($site, $controller, $view, $array, $array1, $array2)
		{
			//get_class devuelve el nombre de la clase de un objeto
			$controllers = get_class($controller);
			require VIEWS.DFT."head.php";
			require VIEWS. $site . '/' . $controllers.'/'.$view.'.php';
			require VIEWS.DFT."footer.php";
		}

		function contenido($site, $controller, $view, $array, $array1)
		{
			//get_class devuelve el nombre de la clase de un objeto
			$controllers = get_class($controller);
			require VIEWS. $site . '/' . $controllers.'/'.$view.'.php';
		}
	}
?>