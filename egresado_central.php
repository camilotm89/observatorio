<?php 

require_once "controlador/control_egresado.php";
require_once "modelo/modeloegre.php";
require_once "modelo/crudegre.php";

$utp = new control_egresado();
$utp->plantilla();

 ?>