<?php 
/**
 * 
 */
class controlador_admi
{
	
	public function plantilla()
	{
		include "vista/admin_plantilla.php";
	}



	public function controlador_paginas_admi ()
	{
		if(isset($_GET["action"])){
			$enlacecontrolador=$_GET["action"];

		}//fin if
		else{
$enlacecontrolador="central_administrador";//de momento index colo des pues debo cambiarla por login

		}//fin else
		$respuesta= paginas_admi::controlador_de_pagina_administrador($enlacecontrolador);
include $respuesta;
	}//fin de la funcion


	//cambio de claves para los administradores
	


public function  actualizar_admi_control(){
	setcookie("pru","activo");

if (isset($_POST["confirmar"])) {
	if (isset($_COOKIE["pru"])) {
	if ($_POST["confirmar"]==$_POST["neuva"]) {
	
$dato = array("cedula" =>$_COOKIE["prueba"],"correo" =>$_POST["confirmar"],"estado" =>$_COOKIE["pru"] );
	$respuesta=administrador::actualizar_admi($dato,"cuestas_administrador");
	if ($respuesta=="correcto") {
	echo '<script> alert("LA CLAVE, HA SIDO CAMBIADA ") </script>' ;
	}else{
		echo '<script> alert("LA CLAVE, NO HA SIDO CAMBIADA ") </script>' ;
}
}
 else
 {
	echo '<script> alert("EEROR, NO COINCIDEN") </script>' ;
}
}
 else{
	echo '<script> alert("VACIA") </script>' ;
}

}}


//REGISTRO DE Egresado

public function registro_egresado_controlador(){
if (isset($_POST["day"])) {
			$fecha_nacimiento = new DateTime($_POST["day"]);
$hoy = new DateTime();
$edad = $hoy->diff($fecha_nacimiento);
$an=$edad->y;

echo $an;
	
	
if ($an>=18) {


	if (isset($_POST["cedula"]))//se pregunta si vienen llenos los campos
	 {
		$datos_admi_controlador = array("cedu" =>$_POST["cedula"],"identidad" =>$_POST["tipodo"],"nombre" =>$_POST["nombre"],"apellido" =>$_POST["apellido"],"direccion" =>$_POST["direccion"]
			,"fecha" =>$_POST["day"],"sexo" =>$_POST["sexo"],"departamento" =>$_POST["depar"]
			,"ciudad" =>$_POST["ciudad"],"correo" =>$_POST["correo"], "cedula" =>$_COOKIE["prueba"]
		 );//tomo los datos que se estan pasando
		$respuesta=administrador::registro_egresado_modelo($datos_admi_controlador,"egresado");
if ($respuesta=="correcto") {
	
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




#desactivar 



public function  desactivar_admi_control(){
	setcookie("prul","en tramite");
if (isset($_POST["desa"])) {
	# code...

if (isset($_POST["cedula"])) {
	if (isset($_COOKIE["prul"])) {
	if ($_POST["cedula"]==$_COOKIE["prueba"]) {
	
$dato = array("cedula" =>$_COOKIE["prueba"],"justifica" =>$_POST["justifica"],"estado" =>$_COOKIE["prul"] );
	$respuesta=administrador::desactivar_administrador_modelo($dato,"desactivar_admi");
	if ($respuesta=="correcto") {
	echo '<script> alert("LA SOLICITUD HA SIDO ENVIADA") </script>' ;
	}else{
		echo '<script> alert("LA SOLICITUD NO HA SIDO ENVIADA ") </script>' ;
}
}
 else
 {
	echo '<script> alert("EEROR, NO ES SU CEDULA") </script>' ;
}
}
 else{
	echo '<script> alert("VACIA") </script>' ;
}

}
}
}


}//fin de la clase

 ?>