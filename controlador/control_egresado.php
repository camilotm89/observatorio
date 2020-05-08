<?php 
/**
 * 
 */
class control_egresado
{
	
		public function plantilla()
	{
		include "vista/egresado_plantilla.php";
	}

	public function controlador_paginas_egresado ()
	{
		if(isset($_GET["action"])){
			$enlacecontrolador=$_GET["action"];

		}//fin if
		else{
$enlacecontrolador="egresado_central";//de momento index colo des pues debo cambiarla por login

		}//fin else
		$respuesta= paginas_egre::controlador_de_pagina_egresado ($enlacecontrolador);
include $respuesta;
	}//fin de la funcion


	

public function  actualizar_egresado_control(){
	

if (isset($_POST["confirmar"])) {
	if (isset($_COOKIE["pru"])) {
	if ($_POST["confirmar"]==$_POST["neuva"]) {
		# code...
	
	
$dato = array("cedu" =>$_COOKIE["prueba"],"correo" =>$_POST["confirmar"],"estado" =>$_COOKIE["pru"] );
	$respuesta=egresado::actualizar_egresado($dato,"cuestas_egresado");
	if ($respuesta=="correcto") {
	echo '<script> alert("LA CLAVE, HA SIDO CAMBIADA ") </script>' ;
	}else{
		echo '<script> alert("LA CLAVE, NO HA SIDO CAMBIADA ") </script>' ;
}
}else{ 
echo '<script> alert("ERROR, NO COINCIDEN") </script>' ;
}
}else{
	echo '<script> alert("VACIA") </script>' ;
}

}

	}//fin funcion




	public function inteses_control(){



	if (isset($_POST["radio"]))//se pregunta si vienen llenos los campos
	 {
		$datos_admi_controlador = array("cedu" =>$_COOKIE["prueba"],"interes" =>$_POST["radio"],
		 );//tomo los datos que se estan pasando
		$respuesta=egresado::intereses($datos_admi_controlador,"intereses");
if ($respuesta=="correcto") {
	
	echo '<script> alert("INFORMACION GUARDADA") </script>' ;

}else{
	echo '<script> alert("INFORMACION NO GUARDADA") </script>' ;

}


	}

	
}//fin de la funcion registro_administrador_controlador()

#ver interes

public function mostrar_tabla_interes(){
	$respuesta=egresado::mostrar_tabla_intesres_mpdelo("intereses");
foreach ($respuesta as $fila => $item) {
echo '<tr>
              <td>'.$item["cedu"].'</td>
			<td>'.$item["interes"].'</td>
	

					<th>
	
      
			</th>
			
		</tr>

';
}
}//fin de la funcion tabla_usuarios_administradores()

}//fin clase


 ?>