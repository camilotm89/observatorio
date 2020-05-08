<aside>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="vista/css/solicitud.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>


	<form class="formulario1" method="post"><fieldset>
			<center>
			<H3  >Solicitud Para Desactivar</H3></center>
		
		<div class="form-group ">

				<label style="color: white">Cedula</label>
				<input class="n" type="text" class="form-control" name="cedula" id="" placeholder="Obligatorio" required="">
				<label style="color: white">Justifiacion</label>
				<input class="n" type="text" class="form-control" name="justifica" id="" placeholder="Obligatorio" required="">
				
			</div>
	


			

		<center>
			<div class="botone2">
		<input  type="submit" class="btn btn-block ingresar" name="desa"  style="color: #FFF;"></a>
				<?php 
	
$desa= new controlador_admi;
$desa-> desactivar_admi_control();
 ?>
	</div>
	<br>


	
</center>


		</fieldset>
		</aside>



	</form>
