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
/*        if (isset($_GET['materia'])) {
            $params_1 = "materia=".$_GET['materia'];
        }
*/    }
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
            /*if (isset($params) && isset($params_1)) {
                //Ejecutamos el metodo que resiva el parametro
                $controller->{$method}($params, $params_1);
            } else*/ if (isset($params)){
                $controller->{$method}($params);
            } else {
                $controller->{$method}();
            }
        } else {
            echo "" ?>
                <!DOCTYPE html>
                <html>
                <head>
                    <style type="text/css">
                        img {
                            width: 100%;
                            height: auto;
                        }

                        .fondo{
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            z-index: -1
                        }
                    </style>
                </head>
                <body>

                <img class="img-responsive" id="fondo" src="<?php echo URL.VIEWS.DFT; ?>Images/404.jpg">

                </body>
                </html>
            <?php
        }
    }
} else {
    echo "" ?>
        <!DOCTYPE html>
        <html>
        <head>
            <style type="text/css">
                img {
                    width: 100%;
                    height: auto;
                }

                .fondo{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    z-index: -1
                }
            </style>
        </head>
        <body>

        <img class="img-responsive" id="fondo" src="<?php echo URL.VIEWS.DFT; ?>Images/404.jpg">

        </body>
        </html>
    <?php
}

?>