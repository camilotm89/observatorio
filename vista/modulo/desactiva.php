
<?php 
ob_start();

 ?>


<?php 
	

if (isset($_COOKIE["prueba"])) {
	
}else{
	header("location:index.php");
	$_COOKIE["prueba"]="";
	exit();
	}
 ?>



<!DOCTYPE html>
<html lang="es">
<head>
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="vista/css/desa.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<title>Desactivar o/y Activar</title>
</head>
<body>


	

	
<aside>
	
	<form class="formulario1" method="POST">
		<fieldset>
			<center>
			<H3 >Desactivar y/o Activar</H3></center>
			<center>	
			<i class="fab fa-expeditedssl"></i>
				<table id="main-container">

	<thead>
		<tr>
			<td>Cedula</td>
			<td>Estado</td>
			<td>Accion</td>
			

		</tr>
	</thead>
		
			
	

<tbody>
	
	<?php 
$vistatabla=new controlador_super_usuario();
$vistatabla->mostrar_tabla_usuarios_administradores_controlador();
$vistatabla->desactivar_administrador_su_controlador();
	 ?>
</tbody>
</table>

</center>




		</fieldset>
		
	</form>

	</aside>


	
	<footer></footer>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>