<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>-->

    <link rel="stylesheet" type="text/css" href="<?php echo URL . VIEWS . DFT; ?>Css/Style.css">
    <!--<script type="text/javascript" src="<?php echo URL . VIEWS . DFT; ?>Js/jquery-3.2.1.js"></script>-->
    <script type="text/javascript" src="<?php echo URL . VIEWS . DFT; ?>Js/jquery.validate.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo URL . VIEWS . DFT; ?>DataTables/datatables.min.css"/>
    <script type="text/javascript" src="<?php echo URL . VIEWS . DFT; ?>DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo URL . VIEWS . DFT; ?>Js/funcionesJQuery.js"></script>
    <script src="https://use.fontawesome.com/fc7bdff372.js"></script>
</head>

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
                            <!--<a class="navbar-logo" href="?c=index">
                                <img src="images/groceries.png"/>
                            </a>-->
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse" id="nav-collapse">
                            <div class="head">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown"><a href="<?php echo URL; ?>Home/Principal/principal">Inicio</a></li>
                                </ul>
                                <?php if($userName["id_rol"] == 1) { ?>
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-list" ></span> Gestionar<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a href="<?php echo URL; ?>Pais/Principal/principal" class="dropdown-toggle"><span class="glyphicon glyphicon-globe" ></span> País</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="<?php echo URL; ?>Ciudad/Principal/principal" class="dropdown-toggle"><span class="glyphicon glyphicon-map-marker" ></span> Ciudad</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="<?php echo URL; ?>User/Principal/principal" class="dropdown-toggle"><span class="glyphicon glyphicon-user" ></span> Persona</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo URL; ?>Rol/Principal/principal" class="dropdown-toggle"><span class="glyphicon glyphicon-tasks" ></span> Rol</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo URL; ?>Institucion/Principal/principal" class="dropdown-toggle"><span class="fa fa-university" ></span> Institución</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <?php } ?>
                                <?php if($userName["id_rol"] == 2) { ?>
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog fa-lg" ></span> Configurar<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a href="<?php echo URL; ?>Materia/Principal/principal" class="dropdown-toggle"><span class="fa fa-book" ></span> Materia</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="<?php echo URL; ?>Estudiante/Principal/principal" class="dropdown-toggle"><span class="glyphicon glyphicon-book" ></span> Estudiante</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <?php 
                                    } 
                                ?>
                                <!--<ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tasks" ></span> Roles<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                          <li><a href="<?php echo URL; ?>Rol/Principal/principal">Consultar</a></li>
                                        </ul>
                                    </li>
                                </ul>-->
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

<div class="container">