<?php 
ob_start();

 ?>

<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="vista/css/resgistrosegre.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>




<aside>
	
	<form method="post" name="formulario1"  class="formulario1">
		<fieldset>
			<center>
			<H3 >Solicitud de Registro</H3></center>
				<div class="col-xs-12 col-sm-6">
				<input class="se"  class="form-control" type="text" name="cedula" required="" maxlength="30">
				</div>
			<div >
				<select name="tipodo" class="select">
			
										<option value="cedula">Cedula</option>
					<option value="tarjeta de identidad">Pasaporte</option>
				</select>
				
			</div>
		<div class="form-group ">

				<label style="color: white">Nombre</label>
				<input class="n" type="text" class="form-control" name="nombre" id="" placeholder="Obligatorio" required="">
				<label style="color: white">Apellidos</label>
				<input class="n" type="text" class="form-control" name="apellido" id="" placeholder="Obligatorio" required="">
				<label style="color: white">Direcciòn</label>
				<input class="n" type="text" class="form-control" name="direccion" id="" placeholder="Obligatorio" required="">






				
<label class="n" style="color: white">Fecha de nacimiento</label>
<input class="sel" type="date" name="day" required="">
			</div>
	<div >
				<select name="sexo" class="ju" >
				
					<option value="Hombre">Hombre</option>
					<option value="Mujer">Mujer</option>
				</select>
				
			</div>

				<select name="depar" class="yul" onchange="cambia()">
				<option value="0">Departamento
				<option value="1">1.  Amazonas
				<option value="2">2.  Antioquia
				<option value="3">3.  Arauca
				<option value="4">4.  Atlàntico
				<option value="5">5.  Bolìvar
				<option value="6">6.  Boyacà
		
			    <option value="7">8.  Caldas
			    <option value="8">9.  Caquetà
			    <option value="9">10. Casanares 
			    <option value="10">11. Cauca

			</select>
			
			<select name="ciudad" class="ciudad">
				<option value="-">Ciudad
			</select>
			
		</form>
		
		<script type="text/javascript">
			//1) Definir Las Variables Correspondintes
			var opt_1 = new Array ( "Leticia", "El Encanto", "Puerto Nariño", "Puerto Arica", "Miriti Paranà","Puerto Santander","La Pedrera","Puerto Alegria","La Victoria","Tarapaca","La Chorrera","Pacoa");
			var opt_2 = new Array ( "Medellin", "Santa Fè de Antioquia", "Rionegro", "Bello","Itagui","Envigado","Jericò","Yarumal","Apartadò","Marinilla");
			var opt_3 = new Array ("Arauca", "Saravena", "Puerdo Rendòn", "Tame", "Fortul","Arauquita","Cravo Norte");
			var opt_4 = new Array ("Barranquilla", "Baranoa", "Malambo", "Puerto Colombia", "Galapa", "Luruaco","Tubara","Juan de Acosta", "Palmar de Varela");
			var opt_5 = new Array ("Cartagena", "Maganguè", "Turbaco", "San Jacinto", "Mompòs","Simitì");
			var opt_6 = new Array ("Tunja", "Paipa", "Combita", "Aquitania", "Duitama","Nobsa");
			var opt_7 = new Array ("Manizales", "Neira", "Aguadas", "Villamarìa", "Chinchinà","Riosucio");
			var opt_8 = new Array ("Florencia", "Solano", "Morelia", "Milan", "Albania","Curillo");
			var opt_9 = new Array ("Yopal", "Trinidad", "Aguazul", "Tauramena", "Tamara","Monterrey");
			var opt_10 = new Array ("Popayàn", "Guapi", "Patìa", "Coconuco", "Inza","Padilla");
			// 2) crear una funcion que permita ejecutar el cambio dinamico
			
			function cambia(){
				var depar;
				//Se toma el vamor de la "cosa seleccionada"
				depar= document.formulario1.depar[document.formulario1.depar.selectedIndex].value;
				//se chequea si la "cosa" esta definida
				if(depar!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("opt_" + depar);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.formulario1.ciudad.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.formulario1.ciudad.options[i].value=mis_opts[i];
						document.formulario1.ciudad.options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.formulario1.ciudad.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.formulario1.ciudad.options[0].value="-";
						document.formulario1.ciudad.options[0].text="-";
					}
					//hacer un reset de las opts
					document.formulario1.ciudad.options[0].selected = true;
					
				}
			
			
		
		</script>
			
<div>
	<label style="color: white">Correo</label>
				<input class="n" type="email" class="form-control" name="correo" id="" placeholder="Obligatorio" required="">
</div>

			<div class="form-group mx-sm-4">
			 <input type="checkbox" name="checkbox" id="checkbox1">
			 <label for="checkbox1" style="color: white">Confirmacion de manejo de datos sensibles</label>
			</div>
		<center>
			<?php
			if (isset($_COOKIE["prueba"])) {
			
			 } 

			 ?>
<?php 
	
$registro= new controlador_super_usuario;
$registro->registro_administrador_controlador();
if (isset($_GET["action"])) {
 	if ($_GET["action"]=="ok") {
 		echo "DATOS GUARDADO CON EXITO";
 		 }//fin segundo if
 }//fin primer if 


 ?>

			<div class="botone2">
		<input type="submit" class="btn btn-block ingresar" style="color: white" name="ENVIAR">
	</div>
	
<div class="botones">
		<i class="fa fa-times" ></i><a href="#" style="color: white"> Cancelar</a>
	</div>
	<br>

	
</center>

<?php 
if (isset($_POST["ENVIAR"])) {
	setcookie("fecha",$_POST["day"]);
}

 ?>
		</fieldset>
		
	</form>

	</aside>