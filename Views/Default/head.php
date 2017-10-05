<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo URL . VIEWS . DFT; ?>Css/Style.css">
    <script type="text/javascript" src="<?php echo URL . VIEWS . DFT; ?>Js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="<?php echo URL . VIEWS . DFT; ?>Js/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo URL . VIEWS . DFT; ?>Js/funcionesJQuery.js"></script>

    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
</head>


<style>
    body{
        background: #F391A0;
    }

    #particles-js {
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: -1;
    }
</style>


<body>
<div id="particles-js"></div>
        <?php 
            error_reporting(E_ALL ^ E_NOTICE);
            Session::start();
            $userName = Session::getSession("Usuario");

            if ($userName != "") {    
        ?>
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                                <span class="sr-only">
                                    Toggle navigation
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                            </button>
                            <a class="navbar-logo" href="?c=index">
                                <img src="images/groceries.png"/>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse" id="nav-collapse">
                            <div class="head">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown"><a href="<?php echo URL; ?>Home/Principal/principal">Inicio</a></li>
                                </ul>
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tasks" ></span> Roles<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                          <li><a href="<?php echo URL; ?>Rol/Principal/principal">Consultar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" ></span> Personas<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                          <li><a href="<?php echo URL; ?>User/Principal/principal">Consultar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown"><p class="navbar-text" style="margin-left: 15px;"><?php echo "Bienvenido " .$userName["nom_persona"]; ?></p></li>
                                    <li class="dropdown"><a href="<?php echo URL; ?>User/User/destroySession"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container -->
                </nav>
        <?php 
            }
        ?>