<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="vista/css/copia.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<title>PAGINA PRINCIPAL</title>
</head>
<body>

<div id="contenedor">
	<header> <center> <img src="vista/imagen/logo.png" width="80px"> </center></header>


	<nav class="ok">
		<section id="menu">
	 <section id="menu">
	 <ul> 
	<li></li><a  href="central_administrador.php?action=inicio"> <i class="fa fa-home"></i>INICIO</a></li>
	<li><a href="#">  <i class="fa fa-user"></i> GESTION DE EGRESADO</a>
  <div class="dentro">
  	<ul>
  		
  		<li>
  			<a href="central_administrador.php?action=registraregresado"><i class="fa fa-address-card"></i>  REGISTRAR EGRESADO</a>
  			<br>
  			<a href="#"><i class="fas fa-pause-circle"></i>  DESACTIVAR EGRESADO</a> 
  			<br>
  			<a href="#"><i class="fas fa-pause-circle"></i>  ACTIVAR EGRESADO</a>
  			<br>
  			<a href="#"><i class="fa fa-address-card"></i>  EDITAR EGRESADO</a>
  		</li>
  	</ul>

  </div>
	</li>
	<li>	<a href="#"><i class="fa fa-address-book"></i> CONTACTO</a></li>
	<li><a href="#"> <i class="far fa-question-circle"></i> AYUDA</a></li>
	
	</ul>
	
</section>

</nav>

<aside>

	</aside>


	<section id="contenido">
		<article>
			<div id="lateral">
 <ul>
		<li>
			<a href=""><i class="fas fa-sliders-h"></i>  MULTIMEDIA</a>
		</li>
		<li>
			<a href=""><i class="fas fa-link"></i>  NOTICIAS</a>
		</li>
		<li>
			<a href=""><i class="far fa-envelope"></i>  NOTIFICACIONES</a>
		</li>
		<li>
			<a href=""><i class="fa fa-address-card"></i>  MIS DATOS</a>
		</li>
		<li>
			<a href=""><i class="fa fa-address-card"></i>  EDITAR MI PERFIL</a>
		</li>
		<li>
			<a href="central_administrador.php?action=clave"><i class="fa fa-key"></i>  CAMBIAR DE CLAVE</a>
		</li>
		    <li> 
			<a href="central_administrador.php?action=solicitud"><i class="fa fa-times" ></i></i> SOLICITAR DESACTIVAR CUENTA</a>
		
		</li>
            <li> 
			<a href="central_administrador.php?action=salir"><i class="fa fa-power-off"></i>  SALIR</a>
		
		</li>

	</ul>
</div>
		</article>
		<?php 

$a=new controlador_admi();
$a->controlador_paginas_admi ();
		 ?>
	</section>


	
	<footer></footer>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>