<?php 


/**
 * 
 */
class conexion 
{
	
 public	function conectar()
	{
//$link= new PDO("mysql:host=sql209.byethost.com;dbname=b12_25705149_egre","b12_25705149","20yuver");
	

	$link= new PDO("mysql:host=localhost;dbname=prub","root","");
	return $link;	
	}//fin funcion
}//fin clase