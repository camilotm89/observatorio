<?php 

class controlador_super_usuario 
{
	
	public function pantilla_super_usuario  ()
	{
		# code...
		include "vista/surplantilla.php";
	}//fin de la funcion
 
 public function pantillaok  ()
	{
		# code...
		include "vista/egresado_plantilla.php";
	}//fin de la funcion

	public function controlador_de_pagina_super_usuario  ()
	{
		if(isset($_GET["action"])){
			$enlacecontrolador=$_GET["action"];

		}//fin if
		else{
$enlacecontrolador="central_super_usuario";//de momento index colo des pues debo cambiarla por login

		}//fin else
		$respuesta= paginas_super_usuario::controlador_de_pagina_super_usuario_modelo($enlacecontrolador);
include $respuesta;
	}//fin de la funcion


//REGISTRO DE ADMINISTRADORES

public function registro_administrador_controlador(){
	setcookie("estado","activo");
if (isset($_POST["day"])) {
			$fecha_nacimiento = new DateTime($_POST["day"]);
$hoy = new DateTime();
$edad = $hoy->diff($fecha_nacimiento);
$an=$edad->y;

echo $an;
	
	
if ($an>=18) {


	if (isset($_POST["cedula"]))//se pregunta si vienen llenos los campos
	 {
		$datos_admi_controlador = array("cedula" =>$_POST["cedula"],"identidad" =>$_POST["tipodo"],"nombre" =>$_POST["nombre"],"apellido" =>$_POST["apellido"],"direccion" =>$_POST["direccion"]
			,"fecha" =>$_POST["day"],"sexo" =>$_POST["sexo"],"departamento" =>$_POST["depar"]
			,"ciudad" =>$_POST["ciudad"],"correo" =>$_POST["correo"], "fora_clave" =>$_COOKIE["prueba"]
		 );//tomo los datos que se estan pasando
		
		$respuesta=datos_admi::registro_admi_modelo($datos_admi_controlador,"administrador");
		
if ($respuesta=="correcto") {
	//envio correo
	$destino=$_POST["correo"];
	$cedula=$_POST["cedula"];
	$contenido="usuario:".$cedula."Clave:".$destino;
	$header="From:noreply@example.com"."\r\n".
	$header="Reply-To:noreply@example.com"."\r\n".
	$header="X-Mailer:PHP/".phpversion();

	mail($destino, "CLAVE  Y USUARIO PARA INGRESAR", $contenido,$header);
	
echo '<script> alert("DATOS GUARDADOS CON EXITO") </script>' ;

}else{
echo '<script> alert("LOS DATOS NO SE GUARDARON") </script>' ;
}


	}
}else{ 
	
	echo '<script> alert("NO ES MAYOR DE EDAD") </script>' ;
}
}
	
}//fin de la funcion registro_administrador_controlador()





//LOGIN
public function login_super_usuario_controlador(){
	if (isset($_POST["user"])) {
		$datos_login_controlador = array("correo" =>$_POST["user"],"fora_clave" =>$_POST["clave"] );
		$respuesta=datos_admi::login_super_usuario_modelo($datos_login_controlador,"super_usuario");

		if($respuesta["correo"]==$_POST["user"] && $respuesta["fora_clave"]==$_POST["clave"]){// esta condicion 

header("location:central_super_usuario.php");

		}//fin if ($respuesta["correo"]==$_POST["user"])
else{

	

                $datos_login_controlador = array("cedula" =>$_POST["user"],"correo" =>$_POST["clave"] );
		$respuesta=administrador::login_administrador_modelo($datos_login_controlador,"cuestas_administrador");
           if($respuesta["cedula"]==$_POST["user"] && $respuesta["correo"]==$_POST["clave"]){
           	header("location:central_administrador.php");
           }
          

     else{



        $datos_login_controlador = array("cedu" =>$_POST["user"],"correo" =>$_POST["clave"] );
		$respuesta=egresado::login_egresado_modelo($datos_login_controlador,"cuestas_egresado");
			if($respuesta["cedu"]==$_POST["user"] && $respuesta["correo"]==$_POST["clave"]){// esta condicion 
     	header("location:egresado_central.php");
		}else  { 
header("location:index.php?action=fallo");
		 }
			
		}


           	
           

			
		

	}
}//fin primlseer if (isset($_POST["user"])) 

}//fin de la funcion public function login_super_usuario_controlador()




#tabla con los datos de los administradores registrados en la BD

public function mostrar_tabla_usuarios_administradores_controlador(){
	$respuesta=datos_admi::mostrar_tabla_usuarios_administradores_modelo("desactivar_admi");
foreach ($respuesta as $fila => $item) {
echo '<tr>
              <td>'.$item["cedula"].'</td>
			<td>'.$item["estado"].'</td>
	

					<th>
			      	<div class="botones">
		<i class="fa fa-power-off" ></i><a href="central_super_usuario.php?action=desactiva&decedula='.$item["cedula"].'" style="color: green"> <button class="e">Desactivar</button> </a>
	</div>
      
			</th>
			
		</tr>

';
}
}//fin de la funcion tabla_usuarios_administradores()

public function mostrar_sele(){
	$respuesta=datos_admi::mostrar_ciudades("ciudades");
	foreach ($respuesta as  $ciud) {

		echo ''.$ciud["ciudad"].'';
		
	}
}//fin de la funcion mostrar_sele



#desactivar
public function desactivar_administrador_su_controlador(){

	if (isset($_GET["decedula"])) {
		
	
	$datos=$_GET["decedula"];
	 //  $datos = array("cedula" =>$_GET["decedula"],"estado" =>$_COOKIE["de"]);
	$respuesta=datos_admi::desactivar_administrador_su_modelo( $datos ,"desactivar_admi");

	if ($respuesta=="correcto") {
echo '<script> alert("USARIO DESACTIVADO ") </script>' ;
	}else{
		echo '<script> alert("NO PUDO SER DESACTIVADO") </script>' ;
	}
	
	}
}//fin de la funcion

}//fin clase
?>