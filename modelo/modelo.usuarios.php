<?php
require_once "conexion.php";

class ModeloUsuarios{

	static public function ConsultaUsuarios()
	
		{
			$consulta = Conexion::conectar()->prepare("SELECT * FROM usuarios");

			$consulta -> execute();

			return $consulta -> fetchAll();

			
		}
		static public function ConsultaUsuario($datos)
		{
			$consulta = Conexion::conectar()->prepare("SELECT * FROM usuarios where idusuarios = :id");
			$consulta->bindParam(":id", $datos, PDO::PARAM_INT);

			$consulta -> execute();

			return $consulta -> fetch();

			
		}

	static public function InsertarUsuarios($datos)
		{
			//Se debe omitir el id porque la version de mysql 5.7.31 no recomose el null y se nombran todos los campos tal cual esta en la base de datos a excepción de id....
			$consulta = Conexion::conectar()->prepare("INSERT INTO usuarios (nombre, apellido, email, pass) VALUES (
													'$datos[0]',
													'$datos[1]',
													'$datos[2]',
													'$datos[3]'
	
												   )");

			if($consulta -> execute())
				return "ok";
			else
				return "error";
		}

			//Login Usuario
	static public function loginUsuarios($datos)
	{
		$consulta = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE email = '$datos[0]' AND pass ='$datos[1]' ");

		$consulta -> execute();

		return $consulta -> fetch();

	}
	static public function EliminarUsuarios($datos)
	{
		$consulta = Conexion::conectar()->prepare("DELETE FROM usuarios WHERE idusuarios = :id");
		$consulta->bindParam(":id", $datos, PDO::PARAM_INT);
		if($consulta -> execute())
			return "ok";
		else
			return "error";

		
	}

    
	static public function ActualizarUsuario($datos){
	
		$consulta = Conexion::conectar()->prepare("UPDATE usuarios SET  nombre=:nombre, apellido=:apellido, email=:email, pass=:pass WHERE idusuarios = :id");

		$consulta->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$consulta->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$consulta->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$consulta->bindParam(":pass", $datos["pass"], PDO::PARAM_STR);
		$consulta->bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if($consulta->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

			

	}
    
}


?>