
<?php 
ob_start();

 ?>

<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="vista/css/intereses1.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<aside>
	
	<form class="formulario1" method="POST">
		<fieldset>
			<center>
			<H3 >TEMAS DE INTERESES</H3></center>

			<div class="form">
			
		<div class="inputGroup">
<input type="radio" id="option1" value="Tecnologia" name="radio">
<label for="option1">	Tecnologia</label>
</div>
		<div class="inputGroup">
<input type="radio" id="option2" value="Salud" name="radio">
<label for="option2">	    Salud</label>
</div>
		<div class="inputGroup">
<input type="radio" id="option3" value="Musica" name="radio">
<label for="option3">	Musica</label>
</div>
</div>
	
		<center>
		
	
<div class="botones">
	<input type="submit" value="Enviar" name="enviar" class="btn btn-block ingresar" style="color: #FFF;">
		
	</div>
	         <div class="form-group mx-sm-4 text-center">
			 <a href="egresado_central.php?action=verinteres" style="color:#0000FF;"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Ver mis interes</a>
			</div>
	<br>

	
</center>


		</fieldset>
<?php 
$inter= new control_egresado;
$inter->inteses_control();
 ?>
	
		
	</form>

	</aside>
