
<?php 


class  paginas_admi
{
	
public	function controlador_de_pagina_administrador ($enlace)
	{
	
	if($enlace=="salir"||$enlace=="registraregresado"||$enlace=="solicitud" ||$enlace=="inicio"||$enlace=="clave"    ){

$modulo="vista/modulo/" .$enlace. ".php";
	}//fin if
elseif ($enlace=="central_administrador") {
	$modulo="vista/modulo/inicio.php" ;
	}//fin elseif

return $modulo; 
	}//fin de funcion

}//fin clase
