<?php 
require_once "conexion.php";
/**
 * 
 */
class datos_admi extends conexion{

	
public	function registro_admi_modelo($dato, $tabla)
	{
		
		$consulta=conexion::conectar()->prepare("INSERT $tabla( cedula, identidad, nombre,  apellido, direccion, fecha, sexo, departamento, ciudad, correo, fora_clave) VALUES ( :cedula,:identidad, :nombre, :apellido, :direccion, :fecha, :sexo, :departamento, :ciudad, :correo, :fora_clave)");

		
		$consulta->bindParam(":cedula",$dato["cedula"], PDO::PARAM_INT);
		$consulta->bindParam(":identidad",$dato["identidad"],PDO::PARAM_STR);
        $consulta->bindParam(":nombre",$dato["nombre"],PDO::PARAM_STR);
        $consulta->bindParam(":apellido",$dato["apellido"],PDO::PARAM_STR);
        $consulta->bindParam(":direccion",$dato["direccion"],PDO::PARAM_STR);
		$consulta->bindParam(":fecha",$dato["fecha"],PDO::PARAM_STR);
		$consulta->bindParam(":sexo",$dato["sexo"],PDO::PARAM_STR);
		$consulta->bindParam(":departamento",$dato["departamento"],PDO::PARAM_STR);
		$consulta->bindParam(":ciudad",$dato["ciudad"],PDO::PARAM_STR);
		$consulta->bindParam(":correo",$dato["correo"],PDO::PARAM_STR);
		$consulta->bindParam(":fora_clave",$dato["fora_clave"]);

	
		if (	$consulta->execute()) {
			return "correcto";
		}else{
           return "ERROR";

		}
       $consulta->close();
		
	}//fin funcion registro_admi_modelo($datos_admi_controlador)
	public	function cuentas_administrador_dolelo($dato, $tabla)
	{
		
		$consulta=conexion::conectar()->prepare("INSERT $tabla( cedula, corro, estado) VALUES ( :cedula, :correo, :estado)");
         $consulta->bindParam(":cedula",$dato["cedula"], PDO::PARAM_INT);
		$consulta->bindParam(":correo",$dato["correo"],PDO::PARAM_STR);
		$consulta->bindParam(":estado",$dato["estado"]);

	
		if (	$consulta->execute()) {
			return "correcto";
		}else{
           return "ERROR";

		}
       $consulta->close();
		
	}//fin funcion registro_admi_modelo($datos_admi_controlador)



///////////7
	public function login_super_usuario_modelo($dato, $tabla){
	$consulta=conexion::conectar()->prepare("SELECT fora_clave, correo FROM $tabla WHERE correo=:correo ");

     $consulta->bindParam(":correo",$dato["correo"],PDO::PARAM_STR);
     $consulta->execute();
     return $consulta->fetch();//devuelve los datos
      $consulta->close();
	}//fin de la funcion login_super_usuario_modelo()


	public function  mostrar_tabla_usuarios_administradores_modelo($tabla){
    $consulta=conexion::conectar()->prepare("SELECT cedula, estado FROM $tabla");
    $consulta->execute();
    return $consulta->fetchAll();
     $consulta->close();
	}//fin de la funcion mostrar_tabla_usuarios_administradores_modelo($tabla)

	#ciudades
	public function  mostrar_ciudades($tabla){
    $consulta=conexion::conectar()->prepare("SELECT  ciudad FROM $tabla");
    $consulta->execute();
    return $consulta->fetchAll();
     $consulta->close();
	}//fin de la funcion mostrar_tabla_usuarios_administradores_modelo($tabla)


		public function desactivar_administrador_su_modelo($datos, $tabla){
//UPDATE $tabla SET estado=:estado WHERE cedula=:cedula
$consulta=conexion::conectar()->prepare("DELETE FROM $tabla  WHERE cedula=:cedula");
$consulta->bindParam(":cedula",$datos);



if (	$consulta->execute()) {
			return "correcto";
		}else{
           return "ERROR";

		}
       $consulta->close();

	}//fin de la fumcion actualizarla
}//fin clase datos_admi