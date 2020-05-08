<link rel="stylesheet" type="text/css" href="vista/css/clave.css">
<aside>
	 
	<form class="formulario1" method="post">
		<fieldset>
			<center>
			<H3 >CAMBIAR CONTRASEÑA</H3></center>
			
<center><img src="vista/imagen/usuario1.png" width="70px" height="60px" style="border-radius: 20px"></center>
<div class="form-group ">
	
	<label style="color: white">Clave nueva</label>
	<input class="n" type="password" class="form-control" name="neuva" id="" placeholder="Obligatorio" required="">
	<label style="color: white">Confirmar clave</label>

	<input class="n" type="password" class="form-control" name="confirmar" id="" placeholder="Obligatorio" required="">
	<div >
		<br>

			 <input type="submit" name="CAMBIAR"  class="btn btn-block ingresar"  style="color: #FFF;">
			 	<?php 
	
$re= new controlador_admi;
$re-> actualizar_admi_control();




 ?>
			</div>
</div>
	
</center>


		</fieldset>
	

</form>
	</aside>
