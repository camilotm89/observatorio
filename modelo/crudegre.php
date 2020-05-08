<?php 

require_once "conexion.php";
/**
 * 
 */
class egresado extends conexion{
	public function login_egresado_modelo($dato, $tabla){
	$consulta=conexion::conectar()->prepare("SELECT cedu, correo FROM $tabla WHERE correo=:correo and estado='activo' ");

     $consulta->bindParam(":correo",$dato["correo"],PDO::PARAM_STR);
     $consulta->execute();
     return $consulta->fetch();//devuelve los datos
      $consulta->close();
	}//fin de la funcion login_super_egresasdo_modelo()
	

	

	


#actualizar 
	public function  actualizar_egresado($dato,$tabla){
$consulta=conexion::conectar()->prepare("UPDATE $tabla SET correo=:correo, estado=:estado WHERE cedu=:cedu");
$consulta->bindParam(":cedu",$dato["cedu"], PDO::PARAM_INT);
	$consulta->bindParam(":correo",$dato["correo"],PDO::PARAM_STR);
$consulta->bindParam(":estado",$dato["estado"],PDO::PARAM_STR);

if (	$consulta->execute()) {
			return "correcto";
		}else{
           return "ERROR";

		}
       $consulta->close();

	}//fin de la fumcion actualizar


	#interesses
	public	function intereses($dato, $tabla){
	$consulta=conexion::conectar()->prepare("INSERT $tabla( cedu,interes) VALUES ( :cedu,:interes)");

		
		$consulta->bindParam(":cedu",$dato["cedu"], PDO::PARAM_INT);
		$consulta->bindParam(":interes",$dato["interes"],PDO::PARAM_STR);


        if (	$consulta->execute()) {
			return "correcto";
		}else{
           return "ERROR";

		}
       $consulta->close();
       

}//fin de la funcion


#ver intrese
public function  mostrar_tabla_intesres_mpdelo($tabla){
    $consulta=conexion::conectar()->prepare("SELECT cedu, interes FROM $tabla");
    $consulta->execute();
    return $consulta->fetchAll();
     $consulta->close();
	}//fin de la funcion mostrar_tabla_usuarios_administradores_modelo($tabla)

}//fin de la funcion

 ?>