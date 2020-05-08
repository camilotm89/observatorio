<?php 

require_once "conexion.php";
/**
 * 
 */
class administrador extends conexion{
public	function desactivar_administrador_modelo($dato, $tabla){
	$consulta=conexion::conectar()->prepare("INSERT $tabla( cedula,justifica, estado) VALUES ( :cedula,:justifica,:estado)");

		
		$consulta->bindParam(":cedula",$dato["cedula"], PDO::PARAM_INT);
		$consulta->bindParam(":justifica",$dato["justifica"],PDO::PARAM_STR);
        $consulta->bindParam(":estado",$dato["estado"],PDO::PARAM_STR);

        if (	$consulta->execute()) {
			return "correcto";
		}else{
           return "ERROR";

		}
       $consulta->close();
       

}//fin de la funcion

	public function login_administrador_modelo($dato, $tabla){
	$consulta=conexion::conectar()->prepare("SELECT cedula, correo FROM $tabla WHERE correo=:correo and estado='activo' ");

     $consulta->bindParam(":correo",$dato["correo"],PDO::PARAM_STR);
     $consulta->execute();
     return $consulta->fetch();//devuelve los datos
      $consulta->close();
	}//fin de la funcion login_super_usuario_modelo()





	
public function  actualizar_admi($dato,$tabla){
$consulta=conexion::conectar()->prepare("UPDATE $tabla SET correo=:correo, estado=:estado WHERE cedula=:cedula");
$consulta->bindParam(":cedula",$dato["cedula"], PDO::PARAM_INT);
	$consulta->bindParam(":correo",$dato["correo"],PDO::PARAM_STR);
$consulta->bindParam(":estado",$dato["estado"],PDO::PARAM_STR);

if (	$consulta->execute()) {
			return "correcto";
		}else{
           return "ERROR";

		}
       $consulta->close();

	}//fin de la fumcion actualizar



public	function registro_egresado_modelo($dato, $tabla)
	{
		
		$consulta=conexion::conectar()->prepare("INSERT $tabla( cedu, identidad, nombre,  apellido, direccion, fecha, sexo, departamento, ciudad, correo, cedula) VALUES ( :cedu,:identidad, :nombre, :apellido, :direccion, :fecha, :sexo, :departamento, :ciudad, :correo, :cedula)");

		
		$consulta->bindParam(":cedu",$dato["cedu"], PDO::PARAM_INT);
		$consulta->bindParam(":identidad",$dato["identidad"],PDO::PARAM_STR);
        $consulta->bindParam(":nombre",$dato["nombre"],PDO::PARAM_STR);
        $consulta->bindParam(":apellido",$dato["apellido"],PDO::PARAM_STR);
        $consulta->bindParam(":direccion",$dato["direccion"],PDO::PARAM_STR);
		$consulta->bindParam(":fecha",$dato["fecha"],PDO::PARAM_STR);
		$consulta->bindParam(":sexo",$dato["sexo"],PDO::PARAM_STR);
		$consulta->bindParam(":departamento",$dato["departamento"],PDO::PARAM_STR);
		$consulta->bindParam(":ciudad",$dato["ciudad"],PDO::PARAM_STR);
		$consulta->bindParam(":correo",$dato["correo"],PDO::PARAM_STR);
		$consulta->bindParam(":cedula",$dato["cedula"]);

	
		if (	$consulta->execute()) {
			return "correcto";
		}else{
           return "ERROR";

		}
       $consulta->close();
		
	}//fin funcion registro_egresado_modelo($dato, $tabla)



}//fin clase


 ?>