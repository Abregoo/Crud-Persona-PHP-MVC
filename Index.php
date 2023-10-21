<?php
include("Controller/Imports/ImportsController.php");

$indexController = new IndexController(); //Inicializamos el constructor del controller
$indexController->cargarTemplate(); // Invocamos al metodo cargarTemplate() que contiene la indexacion del proyecto