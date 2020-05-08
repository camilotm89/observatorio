<?php 


class  paginas_super_usuario
{
	
public	function controlador_de_pagina_super_usuario_modelo ($enlace)
	{
	
	if($enlace=="registrarad"||$enlace=="iniciosu"||$enlace=="desactiva"||$enlace=="salir"){

$modulo="vista/modulo/" .$enlace. ".php";
	}//fin if
elseif ($enlace=="central_super_usuario") {
	$modulo="vista/modulo/iniciosu.php" ;
	}//fin elseif

return $modulo; 
	}//fin de funcion

}//fin clase
