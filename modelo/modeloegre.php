
<?php 


class  paginas_egre
{
	
public	function controlador_de_pagina_egresado ($enlace)
	{
	
	if($enlace=="salir"||$enlace=="inicioe"||$enlace=="clave2"||$enlace=="intereses"||$enlace=="verinteres"){

$modulo="vista/modulo/" .$enlace. ".php";
	}//fin if
elseif ($enlace=="egresado_central") {
	$modulo="vista/modulo/inicioe.php" ;
	
	}//fin elseif

return $modulo; 
	}//fin de funcion

}//fin clase
