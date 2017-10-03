<?php
require 'config.php';
$url = isset($_GET["url"]) ? $_GET["url"] : "Home/Index/index";
$url = explode("/", $url);

$site = "";
$controller = "";
$method     = "";

if (isset($url[0])) {
    $site = $url[0];
}

if (isset($url[1])) {
    $controller = $url[1];
}

if (isset($url[2])) {
    if ($url[2] != '') {
        $method = $url[2];
    }
}

if (isset($url[3])) {
    if ($url[2] != '') {
        $params = $url[3];
    }
}

//Evalua si tenemos una clase cargada
spl_autoload_register(function ($class) {
    if (file_exists(LBS . $class . ".php")) {
        require LBS . $class . ".php";
    }
});

//new Controllers();

//Llamamos a los controladores
$controllersPath = './Controllers/' . $site ."/" . $controller . '.php';
//printf($controllersPath);

//Si el archivo existe
if (file_exists($controllersPath)) {
    require $controllersPath;
    //Instranciamos la clase
    $controller = new $controller();
    //Evaluamos la variable $method
    if (isset($method)) {
        //Si el metodo existe
        if (method_exists($controller, $method)) {
            if (isset($params)) {
                //Ejecutamos el metodo que resiva el parametro
                $controller->{$method}($params);
            } else {
                $controller->{$method}();
            }
        } else {
            echo "Error no existe el metodo";
        }
    }
} else {
    echo "Error en la direccion no existe controlador";
}
