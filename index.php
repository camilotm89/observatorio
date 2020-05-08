<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="vista/css/login.css">

<script type="text/javascript" src="vista/js/jquery-3.5.0.min.js"></script>
	<title>
	Inicio sesiòn	
	</title>
</head>
<body>
	<header> <center> <img src="vista/imagen/logo.png" title="" width="2px" height=""></center>  </header>
	
<div class="container">
	<div class="row justify-content-center pt:5 mt-5 mr-1">
		<div class="col-md-4 formulario">
			<form method="post" >
			<div class="form-group text-center">
				
				<h3>OBSERVARORIO EGRESADO UTP</h3>
			</div>
			<div class="form-group mx-sm-4">
				<h6>Usuario</h6>
				<input type="text" class="form-control" name="user" id="" placeholder="Obligatorio" required="">
			</div>
			<div class="form-group mx-sm-4">
				<h6>Clave</h6>
				<input type="password" class="form-control" name="clave" id="" placeholder="Obligatorio" required="">
			</div>
			<div class="form-group mx-sm-4">
			 <input type="checkbox" name="checkbox" id="checkbox1">
			 <label for="checkbox1">Mostrar clave</label>
			</div>
			<div class="form-group mx-sm-4">
			 <input type="submit" value="Iniciar sesiòn" name="enviar" class="btn btn-block ingresar" style="color: #FFF;">
			</div>
			<div class="form-group mx-sm-4 text-center">
			 <a href="#" style="color:#0000FF; "><i class="zmdi zmdi-account zmdi-hc-fw"></i> Registrarse</a>
			</div>
                    <div class="form-group mx-sm-4 text-center">
			 <a href="#" style="color:#0000FF;"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Recuperar contraseña</a>
			</div>
			</form>
		</div>
	</div>

</div>

<?php 



require_once "controlador/controlador.php";
require_once "modelo/modelosu.php";
require_once "modelo/crudsu.php";
require_once "modelo/crudadmin.php";
require_once "modelo/crudegre.php";
$ingreso=new controlador_super_usuario();
$ingreso->login_super_usuario_controlador();
if (isset($_POST["enviar"])) {
	setcookie("prueba",$_POST["user"], time()+84600);
}





if (isset($_GET["action"])) {
	if ($_GET["action"]=="fallo") {
	echo '<script> alert("EEROR, INGRESE CORRECTAMENTE SU USUARIO Y CLAVE") </script>' ;
	}else{
		


	}
}

 ?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>






