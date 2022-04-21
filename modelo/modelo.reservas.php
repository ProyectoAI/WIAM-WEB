<?php
require_once "conexion.php";

class ModeloReservas{

	static public function ConsultaReservas()
		{
			$consulta = Conexion::conectar()->prepare("SELECT * FROM reservas");

			$consulta -> execute();

			return $consulta -> fetchAll();

			
		}

		// INGRESAR RESERVAS A LA DB
	static public function InsertarReservas($datos)
		{
			//Se debe omitir el id porque la version de mysql 5.7.31 no recomose el null y se nombran todos los campos tal cual esta en la base de datos a excepción de id....
			$consulta = Conexion::conectar()->prepare("INSERT INTO reservas (nombre_reservante, fecha_reserva, hora_reserva, N°_mesa_reserva, N°_ninos, N°_adultos, telefono) VALUES (
													'$datos[0]',
													'$datos[1]',
													'$datos[2]',
													'$datos[3]',
                                                    '$datos[4]',
													'$datos[5]',
													'$datos[6]'
	
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

    
}


?>